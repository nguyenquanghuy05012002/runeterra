<?php
if (!function_exists('currency_format')) {
    function currency_format($number, $suffix = 'đ')
    {
        if (!empty($number)) {
            return number_format($number, 0, ',', '.') . "{$suffix}";
        }
    }
}

function SentMail($email, $fullname, $matkhau)
{
    require "PHPMailer-master/src/PHPMailer.php";
    require "PHPMailer-master/src/SMTP.php";
    require 'PHPMailer-master/src/Exception.php';
    $mail = new PHPMailer\PHPMailer\PHPMailer(true); //true:enables exceptions
    try {
        $mail->SMTPDebug = 0; //0,1,2: chế độ debug
        $mail->isSMTP();
        $mail->CharSet  = "utf-8";
        $mail->Host = 'smtp.gmail.com';  //SMTP servers
        $mail->SMTPAuth = true; // Enable authentication
        $mail->Username = '20521403@gm.uit.edu.vn'; // SMTP username
        $mail->Password = '1148941679';   // SMTP password
        $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
        $mail->Port = 465;  // port to connect to
        $mail->setFrom('20521403@gm.uit.edu.vn', 'Runeterra');
        $mail->addAddress($email);
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = 'Thư cấp lại mật khẩu';
        $noidungthu = "<form style='text-align:justify; padding: 0.5rem;'>
        <h1 style='color: Red; font-size: 1.5rem; font-family: Poppins;'>Runeterra</h1>
        <div class='tb' style='border: 1px solid pink; border-top: 10px solid pink;  border-radius: 5px; align-items: center; padding: 1rem; font-size: 0.8rem; color: darkmagenta; margin: 0.5rem;'>
            Xin chào <b><u>$fullname</u></b>.
            <br>
            <div style='text-align:justify;'>Vì bạn vừa xác nhận quên mật khẩu để đăng nhập vào trang web chúng tôi. Vì thế chúng tôi xin gửi lại mã mật khẩu mới cho bạn.</div>
            <br>
            <b style='color:red; font-size: 1rem;'>Mật khẩu mới của bạn là: </b>
            <div style='background-color: lightgray; width: auto; margin: 1rem; text-align: center;'>
            <strong style='color: black; font-size: 2rem; text-align: center;'>$matkhau</strong>
            </div>
        </div>
        <text style='font-size: 1rem; margin: 0.5rem;'>Cảm ơn và hẹn gặp lại!</text>
        <br>
        </form>";
        $mail->Body = $noidungthu;
        $mail->smtpConnect(array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        ));
        $mail->send();
    } catch (Exception $e) {
        echo 'Error: ', $mail->ErrorInfo;
    }
}

function sendMailGetBill($email, $fullname, $idTicKet, $TenTuyen, $GioDi, $NgayDi, $listSeat)
{
    require "PHPMailer-master/src/PHPMailer.php";
    require "PHPMailer-master/src/SMTP.php";
    require 'PHPMailer-master/src/Exception.php';
    $mail = new PHPMailer\PHPMailer\PHPMailer(true); //true:enables exceptions
    try {
        $mail->SMTPDebug = 0; //0,1,2: chế độ debug
        $mail->isSMTP();
        $mail->CharSet  = "utf-8";
        $mail->Host = 'smtp.gmail.com';  //SMTP servers
        $mail->SMTPAuth = true; // Enable authentication
        $mail->Username = '20521403@gm.uit.edu.vn'; // SMTP username
        $mail->Password = '1148941679';   // SMTP password
        $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
        $mail->Port = 465;  // port to connect to
        $mail->setFrom('20521403@gm.uit.edu.vn', 'Runeterra');
        $mail->addAddress($email);
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = 'Thư xác nhận mua vé';
        $noidungthu = "<form style='text-align:justify; padding: 0.5rem;'>
        <h1 style='color: Red; font-size: 1.5rem; font-family: Poppins;'>Runeterra</h1>
        <div class='tb'
            style='border: 1px solid pink; border-top: 10px solid pink;  border-radius: 5px; align-items: center; padding: 1rem; font-size: 0.8rem; color: darkmagenta; margin: 0.5rem;'>
            Xin chào <b><u>$fullname</u></b>.
            <br>
            <div style='text-align:justify;'>Cảm ơn bạn rất nhiều vì đã đặt vé xe ở trang web với chúng tôi!
                <br>Chúng tôi gửi email này để thông báo rằng vé xe của bạn đã được thiết lập và <b style='color: red;'>đang chờ xác nhận</b>.<br>
                <br>Mong bạn xác nhận lại những thông tin sau đây:
                <div style='padding-left: 1rem;'>
                <br>Mã số vé: <b style='color:red; font-size: 1rem;'>$idTicKet </b>
                <br>Tuyến xe: <b style='color:red; font-size: 1rem;'>$TenTuyen </b>  
                <br>Thời gian: <b style='color:red; font-size: 1rem;'>$GioDi $NgayDi </b>
                <br>Số ghế: <b style='color:red; font-size: 1rem;'>$listSeat </b>
                </div>
            </div>
            <br>
            Nếu bạn có bất kỳ câu hỏi nào, vui lòng phản hồi lại email này.
            <br>Trân trọng.
        </div>
        <text style='font-size: 1rem; margin: 0.5rem;'>Cảm ơn và hẹn gặp lại!</text>
        <br>
    </form>";

        $mail->Body = $noidungthu;
        $mail->smtpConnect(array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        ));
        $mail->send();
    } catch (Exception $e) {
        echo 'Error: ', $mail->ErrorInfo;
    }
}