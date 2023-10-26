<?php
session_start();

require_once('../db/dbhelper.php');
require_once('../utils/utility.php');
require_once './function.php';

switch ($_POST['request']) {
    case 'login';
        checkLoginphp();
        break;
    case 'register':
        checkRegisterphp();
        break;
    case 'forgot':
        checkForgotphp();
        break;
    case 'info':
        checkInfophp();
        break;
    case 'changepass':
        checkChangepassphp();
        break;
    case 'week':
        countTicketWeekphp();
        break;
    case 'month':
        countTicketMonthphp();
        break;
    case 'year':
        countTicketYearphp();
        break;
    case 'ticket':
        buyTicketListphp();
        break;
    case 'bus':
        getBusphp();
        break;
    case 'postIdChuyen':
        postIdChuyenphp();
        break;
    case 'checkTrip':
        checkTripphp();
        break;
    case 'getInfoTrip':
        getInfoTripphp();
        break;
    case 'getComment':
        getCommentphp();
        break;
    case 'postArraySeat':
        postArraySeatphp();
        break;
    case 'postTotalSeat':
        postTotalSeatphp();
        break;
    case 'getInfoSeat_fullname':
        getInfoSeat_fullnamephp();
        break;
    case 'getInfoSeat_email':
        getInfoSeat_emailphp();
        break;
    case 'getInfoSeat_phone':
        getInfoSeat_phonephp();
        break;
    case 'getArraySeat':
        getArraySeatphp();
        break;
    case 'getTotalSeat':
        getTotalSeatphp();
        break;
    case 'postInfoBill':
        postInfoBillphp();
        break;
    case 'insert':
        insertTicket();
        break;
    case 'billList':
        billListphp();
        break;
    case 'bill':
        billphp();
        break;
    case 'location';
        getLocationphp();
        break;
}

function checkLoginphp()
{
    $email = $password = '';

    $email    = getPOST('email');
    $password = getPOST('password');
    $password = getPwdSecurity($password);

    if ($password != '' && $email != '') {
        $sql  = "select * from normal_users where email = '$email' and password = '$password'";
        $user = executeResult($sql);

        if ($user != null && count($user) > 0) {
            $_SESSION['IdUser'] = $user[0]['IdUser'];
            $_SESSION['fullname'] =  $user[0]['HoTen'];
            $_SESSION['email'] =  $user[0]['email'];
            $_SESSION['password'] =  $user[0]['password'];
            $_SESSION['phone'] =  $user[0]['sdt'];
            $_SESSION['image'] =  $user[0]['image'];

            die(json_encode('Thành công'));
        } else {
            die(json_encode('Email hoặc mật khẩu không đúng'));
        }
    } else {
        die(json_encode('Chưa nhập đủ email và mật khẩu'));
    }
}

function checkRegisterphp()
{
    $email = $password = $fullname = $phone = '';

    $fullname = getPOST('fullname');
    $email    = getPOST('email');
    $phone  = getPOST('phone');
    $password = getPOST('password');

    $sqlCheckPhone = "SELECT * FROM normal_users WHERE sdt ='$phone'";
    $checkPhone = executeResult($sqlCheckPhone);


    if ($checkPhone == true && count($checkPhone) > 0) { //Tồn tại email rồi
        die(json_encode('Số điện thoại này đã tồn tại'));
    }



    if ($email != '' && $password != '' && $fullname != '' && $phone != '') {
        $countUser = "  SELECT MAX(REPLACE(IdUser,'NU',''))
                        FROM normal_users
                        WHERE created_at = (SELECT MAX(created_at) FROM normal_users)
                    ";
        $data = executeResult($countUser);



        $num = intval($data[0]["MAX(REPLACE(IdUser,'NU',''))"]) + 1;
        $IdUser = 'NU' . $num;

        $fullname = getPOST('fullname');
        $email    = getPOST('email');
        $phone  = getPOST('phone');
        $password = getPOST('password');

        $sqlNow = "SELECT now()";
        $now = executeResult($sqlNow);
        $nowTime = $now[0]["now()"];

        $password = getPwdSecurity($password);

        $sql = "insert into normal_users values ('$IdUser', '$fullname', '$email', '$password', '$phone', 'sdf', 0 , '$nowTime', NULL)";

        execute($sql);

        die(json_encode('Chúc mừng bạn đã đăng ký thành công'));
    } else {
        die(json_encode('Bạn chưa nhập đủ các thông tin'));
    }
}

function checkForgotphp()
{
    $email = $_POST['email'];

    if ($email != '') {
        $sqlEmail = "SELECT * FROM normal_users WHERE email='" . $email . "'";
        $emailForgot = executeResult($sqlEmail);

        if ($emailForgot != null && count($emailForgot)) {
            $newpass = substr(getPwdSecurity(rand(0, 999999)), 0, 8);
            $newpassMD5 = getPwdSecurity($newpass);
            $email_update = "UPDATE normal_users SET password='$newpassMD5' WHERE email='$email'";
            execute($email_update);
            SentMail($email, $emailForgot[0]['HoTen'], $newpass);

            die(json_encode('Mật khẩu mới đã được gửi về email của bạn'));
        } else {
            die(json_encode('Email này chưa được đăng ký'));
        }
    } else {
        die(json_encode('Bạn chưa nhập email'));
    }
}

function checkInfophp()
{
    $idUser = $_SESSION['IdUser'];
    $sql = "SELECT * FROM `normal_users` WHERE IdUser = '$idUser' ";
    $infoUser = executeResult($sql);

    die(json_encode($infoUser[0]));
}

function checkChangepassphp()
{
    $email = $_SESSION['email'];
    $old_password = getPwdSecurity(getPOST('password'));
    $new_password = getPwdSecurity(getPOST('new_password'));

    if (getPOST('password') != '' && getPOST('new_password') != '') {
        $sql = "SELECT * FROM normal_users WHERE email='" . $email . "' AND password='" . $old_password . "'";
        $checkPassword = executeResult($sql);

        if ($checkPassword != null && count($checkPassword) > 0) {
            $sql_update = "UPDATE normal_users SET password='$new_password' WHERE email='$email'";
            execute($sql_update);

            die(json_encode('Bạn đã đổi mật khẩu thành công'));
        } else {
            die(json_encode('Mật khẩu cũ không đúng'));
        }
    } else {
        die(json_encode('Bạn chưa nhập đủ các thông tin'));
    }
}
function countTicketWeekphp()
{
    $sqlCountTicketWeek = " SELECT bus_routes.DiaDiemDen, COUNT(ticket_details.IdBanVe) AS TONGSOCHUYEN
                            FROM bus_routes, trips, tickets, ticket_details
                            WHERE bus_routes.IdTuyen=trips.IdTuyen
                            AND trips.IdChuyen=tickets.IdChuyen
                            AND tickets.IdBanVe=ticket_details.IdBanVe
                            AND ticket_details.created_at >= (SELECT DATE_SUB(CURDATE(), INTERVAL 67 DAY))
                            GROUP BY bus_routes.DiaDiemDen
                            ORDER BY COUNT(ticket_details.IdBanVe) DESC
                            LIMIT 6
                            ";
    $countTicketListWeek = executeResult($sqlCountTicketWeek);

    die(json_encode($countTicketListWeek));
}

function countTicketMonthphp()
{
    $sqlCountTicketMonth = "SELECT bus_routes.DiaDiemDen, COUNT(ticket_details.IdBanVe) AS TONGSOCHUYEN
                            FROM bus_routes, trips, tickets, ticket_details
                            WHERE bus_routes.IdTuyen=trips.IdTuyen
                            AND trips.IdChuyen=tickets.IdChuyen
                            AND tickets.IdBanVe=ticket_details.IdBanVe
                            AND ticket_details.created_at >= (SELECT DATE_SUB(CURDATE(), INTERVAL 90 DAY))
                            GROUP BY bus_routes.DiaDiemDen
                            ORDER BY COUNT(ticket_details.IdBanVe) DESC
                            LIMIT 6
                            ";
    $countTicketListMonth = executeResult($sqlCountTicketMonth);

    die(json_encode($countTicketListMonth));
}

function countTicketYearphp()
{
    $sqlCountTicketYear = " SELECT bus_routes.DiaDiemDen, COUNT(ticket_details.IdBanVe) AS TONGSOCHUYEN
                            FROM bus_routes, trips, tickets, ticket_details
                            WHERE bus_routes.IdTuyen=trips.IdTuyen
                            AND trips.IdChuyen=tickets.IdChuyen
                            AND tickets.IdBanVe=ticket_details.IdBanVe
                            AND ticket_details.created_at >= (SELECT DATE_SUB(CURDATE(), INTERVAL 365 DAY))
                            GROUP BY bus_routes.DiaDiemDen
                            ORDER BY COUNT(ticket_details.IdBanVe) DESC
                            LIMIT 6
                            ";
    $countTicketListYear = executeResult($sqlCountTicketYear);

    die(json_encode($countTicketListYear));
}

function buyTicketListphp()
{
    $diemDi = getPOST('diemDi');
    $diemDen = getPOST('diemDen');
    $nhaXe = getPOST('nhaXe');
    $ngayDi = getPOST('ngayDi');
    $doAnNgonValue = getPOST('doAnNgonValue');
    $wifiValue = getPOST('wifiValue');
    $xeTrungChuyenValue = getPOST('xeTrungChuyenValue');
    $phongRiengValue = getPOST('phongRiengValue');
    $coNhaVeSinhValue = getPOST('coNhaVeSinhValue');


    if ($diemDi != '') {
        $sqlDiemDi = "AND bus_routes.DiaDiemDi = '$diemDi'";
    } else {
        $sqlDiemDi = " ";
    };

    if ($diemDen != '') {
        $sqlDiemDen = "AND bus_routes.DiadiemDen = '$diemDen'";
    } else {
        $sqlDiemDen = " ";
    };

    if ($nhaXe != '') {
        $sqlNhaXe = "AND bus_companies.Ten_NX = '$nhaXe'";
    } else {
        $sqlNhaXe = " ";
    };

    if ($ngayDi != '') {
        $sqlNgayDi = "AND trips.NgayDi >= ('$ngayDi')";
    } else {
        $sqlNgayDi = "AND trips.NgayDi >= (SELECT DATE_SUB(CURDATE(), INTERVAL 0 DAY))";
    };

    if ($doAnNgonValue != '') {
        $sqlDoAnNgonValue = "AND bus_companies.DichVu LIKE '%ăn%'";
    } else {
        $sqlDoAnNgonValue = " ";
    };

    if ($wifiValue != '') {
        $sqlWifiValue = "AND bus_companies.DichVu LIKE '%Wifi%'";
    } else {
        $sqlWifiValue = " ";
    };

    if ($xeTrungChuyenValue != '') {
        $sqlXeTrungChuyenValue = "AND bus_companies.DichVu LIKE '%trung chuyển%'";
    } else {
        $sqlXeTrungChuyenValue = " ";
    };

    if ($phongRiengValue != '') {
        $sqlPhongRiengValue = "AND bus_companies.DichVu LIKE '%phòng riêng%'";
    } else {
        $sqlPhongRiengValue = " ";
    };

    if ($coNhaVeSinhValue != '') {
        $sqlCoNhaVeSinhValue = "AND bus_companies.DichVu LIKE '%vệ sinh%'";
    } else {
        $sqlCoNhaVeSinhValue = " ";
    };

    $sqlTicketList = "  SELECT trips.IdChuyen ,bus_companies.Ten_NX, TIME_FORMAT(GioDi, '%H:%i') AS GIODI, TIME_FORMAT(GioDEN, '%H:%i') AS GIODEN, bus_routes.TenTuyen, FORMAT( trips.GiaVe, 'N','vi-VN')  AS 'GiaVe', COUNT(rates.IdRate) AS TONGSORATES, bus_routes.DiaDiemDi, bus_routes.DiaDiemDen
                        FROM trips, buses, bus_companies, bus_routes, rates
                        WHERE buses.IdXe = trips.IdXe
                        AND bus_companies.IdNX = buses.IdNX
                        AND trips.IdTuyen = bus_routes.IdTuyen
                        AND bus_companies.IdNX=rates.IdNX
                        " . $sqlNgayDi . $sqlDiemDi . $sqlDiemDen . $sqlNhaXe . $sqlDoAnNgonValue . $sqlWifiValue . $sqlXeTrungChuyenValue . $sqlPhongRiengValue . $sqlCoNhaVeSinhValue . "
                        GROUP BY bus_companies.Ten_NX, trips.GioDi, trips.GioDen, bus_routes.TenTuyen
                        ORDER BY NgayDi, trips.GioDi ASC
                    ";
    $ticketList = executeResult($sqlTicketList);

    die(json_encode($ticketList));
}

function getBusphp()
{
    $sql = "SELECT Ten_NX FROM bus_companies";
    $busName = executeResult($sql);

    die(json_encode($busName));
}

function postIdChuyenphp()
{
    $_SESSION['IdChuyen'] = $_POST['idChuyen'];

    die(json_encode($_SESSION['IdChuyen']));
}

function checkTripphp()
{
    $idChuyen = $_SESSION['IdChuyen'];

    $sql = "SELECT ticket_details.TenChoNgoi
            FROM ticket_details, tickets, trips, buses
            WHERE ticket_details.IdBanVe=tickets.IdBanVe
            AND tickets.IdChuyen=trips.IdChuyen
            AND trips.IdXe=buses.IdXe
            AND trips.IdChuyen='$idChuyen' 
            ";
    $listSeat = executeResult($sql);

    die(json_encode($listSeat));
}

function getInfoTripphp()
{
    $idChuyen = $_SESSION['IdChuyen'];

    $sql = "SELECT trips.IdChuyen, bus_routes.TenTuyen, DATE_FORMAT(NgayDi, '%d-%m-%Y') as NgayDi, TIME_FORMAT(GioDi, '%H:%i') as giodi, TIME_FORMAT(GioDen, '%H:%i') as gioden, FORMAT( trips.GiaVe, 'N','vi-VN') as GiaVe, Loai_Xe, (36 - COUNT(ticket_details.TenChoNgoi)) as ChoConLai, Ten_NX, DichVu 
            FROM bus_routes, trips, tickets, ticket_details, buses, bus_companies 
            WHERE bus_routes.IdTuyen=trips.IdTuyen 
            AND trips.IdChuyen=tickets.IdChuyen 
            AND tickets.IdBanVe=ticket_details.IdBanVe 
            AND trips.IdXe=buses.IdXe 
            AND buses.IdNX=bus_companies.IdNX 
            AND ticket_details.TinhTrangVe IN  ( 'Chưa hoàn thành', 'Chờ xác nhận')
            AND trips.IdChuyen='$idChuyen';
            ";
    $infoTrip = executeResult($sql);

    die(json_encode($infoTrip[0]));
}

function getCommentphp()
{
    $idChuyen = $_SESSION['IdChuyen'];

    $sql = "SELECT normal_users.HoTen, rates.BinhLuan
    FROM rates, bus_companies, normal_users
    WHERE rates.IdUser=normal_users.IdUser
    AND rates.IdNX=bus_companies.IdNX
    AND bus_companies.Ten_NX='Hoàng Khải'
    ";

    $comment = executeResult($sql);

    die(json_encode($comment));
}

function postArraySeatphp()
{
    $_SESSION['arraySeat'] = $_POST['arrSeat'];

    die(json_encode($_SESSION['arraySeat']));
}

function postTotalSeatphp()
{
    $_SESSION['totalSeat'] = $_POST['totalSeat'];

    die(json_encode($_SESSION['totalSeat']));
}

function postInfoBillphp()
{
    $_SESSION['fullname_tam'] = getPOST('fullname_tam');
    $_SESSION['phone_tam'] = getPOST('phone_tam');
    $_SESSION['email_tam'] = getPOST('email_tam');

    die();
}

function getInfoSeat_fullnamephp()
{
    die(json_encode($_SESSION['fullname_tam']));
}

function getInfoSeat_emailphp()
{
    die(json_encode($_SESSION['email_tam']));
}

function getInfoSeat_phonephp()
{
    die(json_encode($_SESSION['phone_tam']));
}

function getArraySeatphp()
{
    die(json_encode($_SESSION['arraySeat']));
}

function getTotalSeatphp()
{
    die(json_encode($_SESSION['totalSeat']));
}

function insertTicket()
{
    $listSeat = implode(', ', $_SESSION['arraySeat']);
    // die(json_encode($listSeat));


    $sqlNow = "SELECT now()";
    $now = executeResult($sqlNow);
    $nowTime = $now[0]["now()"];

    $fullname_tam = $_SESSION['fullname_tam'];
    $email_tam = $_SESSION['email_tam'];
    $phone_tam = $_SESSION['phone_tam'];

    $idChuyen = $_SESSION['IdChuyen'];

    $sqlChuyen = "SELECT bus_routes.TenTuyen, TIME_FORMAT(GioDi, '%H:%i') as GioDi, DATE_FORMAT(NgayDi, '%d-%m-%Y') as NgayDi
    FROM trips, bus_routes 
    WHERE trips.IdTuyen = bus_routes.IdTuyen
    AND IdChuyen='$idChuyen' ";

    // die(json_encode($sqlChuyen));


    $chiTietChuyen = executeResult($sqlChuyen);

    // die(json_encode($chiTietChuyen[0]));



    if (isset($_SESSION['IdUser']) && ($_SESSION['IdUser'])) {

        $idUser = $_SESSION['IdUser'];

        $sqlCheckRole = "SELECT * FROM normal_users WHERE IdUser = '$idUser'";

        $checkRole = executeResult($sqlCheckRole);
        // die(json_encode($checkRole[0]['role']));

        if ($checkRole[0]['role'] == 0) {

            $idUser = $_SESSION['IdUser'];
            $pttt = getPOST('pttt');


            $sqlCountTicket = " SELECT MAX(REPLACE(IdBanVe,'TK',''))
                        FROM tickets
                        WHERE created_at = (SELECT MAX(created_at) FROM tickets)
                    ";


            $countTicket = executeResult($sqlCountTicket);


            $numTicket = intval($countTicket[0]["MAX(REPLACE(IdBanVe,'TK',''))"]) + 1;
            $idTicKet = 'TK' . $numTicket;

            $sqlInsertTicket = "INSERT INTO tickets VALUES ('$idTicKet', '$idChuyen', '$idUser', NULL, '$nowTime', NULL);";
            // die(json_encode($sqlInsertTicket));

            execute($sqlInsertTicket);

            $i = 0;

            foreach ($_SESSION['arraySeat'] as $idCTBV) {

                $sqlNowTD = "SELECT now()";
                $nowTD = executeResult($sqlNowTD);
                $nowTimeTD = $nowTD[0]["now()"];

                $sqlCountTicketDetails = "  SELECT MAX(REPLACE(IdCTBV,'TD',''))
                                    FROM ticket_details
                                    WHERE created_at = (SELECT MAX(created_at) FROM ticket_details)
                                ";
                $countTicketDetails = executeResult($sqlCountTicketDetails);

                $numTicketDetails = intval($countTicketDetails[0]["MAX(REPLACE(IdCTBV,'TD',''))"]) + 1;
                $idTicKetDetails = 'TD' . $numTicketDetails;

                $sqlInsertTicketDetails = "INSERT INTO ticket_details VALUES ('$idTicKetDetails', '$idTicKet', '$idCTBV', 'Chờ xác nhận', '$pttt', '$nowTimeTD', NULL);";
                // die(json_encode($sqlInsertTicket));

                // die(json_encode($sqlInsertTicketDetails));
                execute($sqlInsertTicketDetails);

                // $i++;
            };

            sendMailGetBill($email_tam, $fullname_tam, $idTicKet, $chiTietChuyen[0]['TenTuyen'], $chiTietChuyen[0]['GioDi'], $chiTietChuyen[0]['NgayDi'], $listSeat);
            die(json_encode("Bạn đã mua vé thành công"));
        } else {

            $idUser = $_SESSION['IdUser'];
            $pttt = getPOST('pttt');


            $sqlCountTicket = " SELECT MAX(REPLACE(IdBanVe,'TK',''))
                        FROM tickets
                        WHERE created_at = (SELECT MAX(created_at) FROM tickets)
                    ";


            $countTicket = executeResult($sqlCountTicket);


            $numTicket = intval($countTicket[0]["MAX(REPLACE(IdBanVe,'TK',''))"]) + 1;
            $idTicKet = 'TK' . $numTicket;

            $sqlInsertTicket = "INSERT INTO tickets VALUES ('$idTicKet', '$idChuyen', '$idUser', NULL, '$nowTime', NULL);";
            // die(json_encode($sqlInsertTicket));

            execute($sqlInsertTicket);

            $i = 0;

            foreach ($_SESSION['arraySeat'] as $idCTBV) {

                $sqlNowTD = "SELECT now()";
                $nowTD = executeResult($sqlNowTD);
                $nowTimeTD = $nowTD[0]["now()"];

                $sqlCountTicketDetails = "  SELECT MAX(REPLACE(IdCTBV,'TD',''))
                                    FROM ticket_details
                                    WHERE created_at = (SELECT MAX(created_at) FROM ticket_details)
                                ";
                $countTicketDetails = executeResult($sqlCountTicketDetails);

                $numTicketDetails = intval($countTicketDetails[0]["MAX(REPLACE(IdCTBV,'TD',''))"]) + 1;
                $idTicKetDetails = 'TD' . $numTicketDetails;

                $sqlInsertTicketDetails = "INSERT INTO ticket_details VALUES ('$idTicKetDetails', '$idTicKet', '$idCTBV', 'Chưa hoàn thành', '$pttt', '$nowTimeTD', NULL);";
                // die(json_encode($sqlInsertTicket));

                // die(json_encode($sqlInsertTicketDetails));
                execute($sqlInsertTicketDetails);

                // $i++;
            };

            sendMailGetBill($email_tam, $fullname_tam, $idTicKet, $chiTietChuyen[0]['TenTuyen'], $chiTietChuyen[0]['GioDi'], $chiTietChuyen[0]['NgayDi'], $listSeat);
            die(json_encode("Bạn đã mua vé thành công"));
        }
    } else {
        $idUser = 'NU10001';
        $pttt = getPOST('pttt');


        $note = $fullname_tam . ', ' . $email_tam . ', ' . $phone_tam;

        $sqlCountTicket = " SELECT MAX(REPLACE(IdBanVe,'TK',''))
                        FROM tickets
                        WHERE created_at = (SELECT MAX(created_at) FROM tickets)
                    ";

        $countTicket = executeResult($sqlCountTicket);


        $numTicket = intval($countTicket[0]["MAX(REPLACE(IdBanVe,'TK',''))"]) + 1;
        $idTicKet = 'TK' . $numTicket;

        $sqlInsertTicket = "INSERT INTO tickets VALUES ('$idTicKet', '$idChuyen', '$idUser', '$note', '$nowTime', NULL);";
        execute($sqlInsertTicket);

        $i = 0;

        foreach ($_SESSION['arraySeat'] as $idCTBV) {

            $sqlNowTD = "SELECT now()";
            $nowTD = executeResult($sqlNowTD);
            $nowTimeTD = $nowTD[0]["now()"];

            $sqlCountTicketDetails = "  SELECT MAX(REPLACE(IdCTBV,'TD',''))
                                        FROM ticket_details
                                        WHERE created_at = (SELECT MAX(created_at) FROM ticket_details)
                                    ";
            $countTicketDetails = executeResult($sqlCountTicketDetails);

            $numTicketDetails = intval($countTicketDetails[0]["MAX(REPLACE(IdCTBV,'TD',''))"]) + 1;
            // die(json_encode($numTicketDetails));
            $idTicKetDetails = 'TD' . $numTicketDetails;

            $sqlInsertTicketDetails = "INSERT INTO ticket_details VALUES ('$idTicKetDetails', '$idTicKet', '$idCTBV', 'Chưa hoàn thành', '$pttt', '$nowTimeTD', NULL);";
            execute($sqlInsertTicketDetails);

            $i++;
        }

        sendMailGetBill($email_tam, $fullname_tam, $idTicKet, $chiTietChuyen[0]['TenTuyen'], $chiTietChuyen[0]['GioDi'], $chiTietChuyen[0]['NgayDi'], $listSeat);
        die(json_encode("Bạn đã mua vé thành công"));
    }
}

function billListphp()
{
    if (isset($_SESSION['IdUser']) && ($_SESSION['IdUser'])) {
        $idUser = $_SESSION['IdUser'];

        $idBill = getPOST('idBill');
        if ($idBill != '') {
            $sqlIdBill = "AND ticket_details.IdCTBV = '$idBill'";
        } else {
            $sqlIdBill = "";
        };

        // die(json_encode($sqlIdBill));


        $sqlBillList = "SELECT ticket_details.IdCTBV, TenTuyen, DATE_FORMAT(trips.NgayDi, '%d-%m-%Y') AS NgayDi, TIME_FORMAT(trips.GioDi, '%H:%i') AS GioDi, TenChoNgoi, FORMAT( trips.GiaVe, 'N','vi-VN') AS GiaVe, TinhTrangVe 
                    FROM tickets, ticket_details, trips, bus_routes 
                    WHERE tickets.IdBanVe=ticket_details.IdBanVe 
                    AND tickets.IdChuyen=trips.IdChuyen 
                    AND bus_routes.IdTuyen=trips.IdTuyen 
                    AND tickets.IdUser='$idUser'
                    " . $sqlIdBill . "
                    ORDER BY `trips`.`NgayDi` DESC
                    ";
        $billList = executeResult($sqlBillList);

        die(json_encode($billList));
    } else {
        die;
    }
}

function billphp()
{
    $idTicket = getPOST('idTicket');

    $sqlTicketDetail = "SELECT ticket_details.IdCTBV, bus_routes.TenTuyen, DATE_FORMAT(trips.NgayDi, '%d-%m-%Y') AS NgayDi, TIME_FORMAT(trips.GioDi, '%H:%i') AS GioDi, ticket_details.TenChoNgoi, FORMAT( trips.GiaVe, 'N','vi-VN') AS GiaVe, ticket_details.TinhTrangVe, normal_users.HoTen, normal_users.email, normal_users.sdt, bus_companies.Ten_NX, buses.Loai_xe, bus_routes.DiaDiemDi, ticket_details.TenChoNgoi
                        FROM ticket_details, normal_users, trips, bus_routes, tickets, buses, bus_companies
                        WHERE ticket_details.IdBanVe = tickets.IdBanVe
                        AND tickets.IdUser = normal_users.IdUser
                        AND tickets.IdChuyen = trips.IdChuyen
                        AND trips.IdTuyen = bus_routes.IdTuyen
                        AND trips.IdXe = buses.IdXe
                        AND buses.IdNX = bus_companies.IdNX
                        AND ticket_details.IdCTBV='$idTicket'
                    ";
    $ticketDetail = executeResult($sqlTicketDetail);

    die(json_encode($ticketDetail));
}

function getLocationphp()
{
    $sql = "SELECT TenDiaDiem FROM locations";
    $location = executeResult($sql);

    die(json_encode($location));
}