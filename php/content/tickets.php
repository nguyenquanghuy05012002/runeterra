<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Runeterra</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
    <script src="./js/getData.js"></script>

    <link rel="stylesheet" href="css/valiator.css">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/buy-tickets.css">

</head>

<body>
    <!-- start banner Area -->
    <section class="banner-area relative">
        <div class="banner__area-header">
            MUA VÉ
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start content -->
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 sidebar">
                    <div class="sidebar-box ftco-animate">
                        <div class="search-tours p-4">
                            <form action="" method="post">
                                <div class="fields">
                                    <div class="row flex-column">
                                        <select id="diaDiemDi" onchange="getTicket()" class="form-control"
                                            style="padding: 0.675rem 0.75rem; font-size: 13px; font-weight: 300; border-radius: 5px !important; margin-bottom: 10px; border-color: #eee;">
                                            <option value=""> Địa điểm đi </option>
                                            <option value="An Giang">An Giang</option>
                                            <option value="Bắc Giang">Bắc Giang</option>
                                            <option value="Bắc Kạn">Bắc Kạn</option>
                                            <option value="Bạc Liêu">Bạc Liêu</option>
                                            <option value="Bắc Ninh">Bắc Ninh</option>
                                            <option value="Bến Tre">Bến Tre</option>
                                            <option value="Bình Dương">Bình Dương</option>
                                            <option value="Bình Định">Bình Định</option>
                                            <option value="Bình Phước">Bình Phước</option>
                                            <option value="Bình Thuận">Bình Thuận</option>
                                            <option value="Cà Mau">Cà Mau</option>
                                            <option value="Cần Thơ">Cần Thơ</option>
                                            <option value="Cao Bằng">Cao Bằng</option>
                                            <option value="Đà Nẵng">Đà Nẵng</option>
                                            <option value="Đắk Lắk">Đắk Lắk</option>
                                            <option value="Đắk Nông">Đắk Nông</option>
                                            <option value="Điện Biên">Điện Biên</option>
                                            <option value="Đồng Nai">Đồng Nai</option>
                                            <option value="Đồng Tháp">Đồng Tháp</option>
                                            <option value="Gia Lai">Gia Lai</option>
                                            <option value="Hà Giang">Hà Giang</option>
                                            <option value="Hà Nam">Hà Nam</option>
                                            <option value="Hà Nội">Hà Nội</option>
                                            <option value="Hà Tĩnh">Hà Tĩnh</option>
                                            <option value="Hải Dương">Hải Dương</option>
                                            <option value="Hải Phòng">Hải Phòng</option>
                                            <option value="Hậu Giang">Hậu Giang</option>
                                            <option value="Hòa Bình">Hòa Bình</option>
                                            <option value="Huế">Huế</option>
                                            <option value="Hưng Yên">Hưng Yên</option>
                                            <option value="Khánh Hòa">Khánh Hòa</option>
                                            <option value="Kiên Giang">Kiên Giang</option>
                                            <option value="Kon Tum">Kon Tum</option>
                                            <option value="Lai Châu">Lai Châu</option>
                                            <option value="Lâm Đồng">Lâm Đồng</option>
                                            <option value="Lạng Sơn">Lạng Sơn</option>
                                            <option value="Lào Cai">Lào Cai</option>
                                            <option value="Long An">Long An</option>
                                            <option value="Nam Định">Nam Định</option>
                                            <option value="Nghệ An">Nghệ An</option>
                                            <option value="Ninh Bình">Ninh Bình</option>
                                            <option value="Ninh Thuận">Ninh Thuận</option>
                                            <option value="Phú Thọ">Phú Thọ</option>
                                            <option value="Phú Yên">Phú Yên</option>
                                            <option value="Quảng Bình">Quảng Bình</option>
                                            <option value="Quảng Nam">Quảng Nam</option>
                                            <option value="Quảng Ngãi">Quảng Ngãi</option>
                                            <option value="Quảng Ninh">Quảng Ninh</option>
                                            <option value="Quảng Trị">Quảng Trị</option>
                                            <option value="Sóc Trăng">Sóc Trăng</option>
                                            <option value="Sơn La">Sơn La</option>
                                            <option value="Tây Ninh">Tây Ninh</option>
                                            <option value="Thái Bình">Thái Bình</option>
                                            <option value="Thái Nguyên">Thái Nguyên</option>
                                            <option value="Thanh Hóa">Thanh Hóa</option>
                                            <option value="Tiền Giang">Tiền Giang</option>
                                            <option value="TP. Hồ Chí Minh">TP. Hồ Chí Minh</option>
                                            <option value="Trà Vinh">Trà Vinh</option>
                                            <option value="Tuyên Quang">Tuyên Quang</option>
                                            <option value="Vĩnh Long">Vĩnh Long</option>
                                            <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                                            <option value="Vũng Tàu">Vũng Tàu</option>
                                            <option value="Yên Bái">Yên Bái</option>
                                        </select>
                                        <select id="diaDiemDen" onchange="getTicket()" class="form-control"
                                            style="padding: 0.675rem 0.75rem; font-size: 13px; font-weight: 300; border-radius: 5px !important; margin-bottom: 10px; border-color: #eee;;">
                                            <option value=""> Địa điểm đến </option>
                                            <option value="An Giang">An Giang</option>
                                            <option value="Bắc Giang">Bắc Giang</option>
                                            <option value="Bắc Kạn">Bắc Kạn</option>
                                            <option value="Bạc Liêu">Bạc Liêu</option>
                                            <option value="Bắc Ninh">Bắc Ninh</option>
                                            <option value="Bến Tre">Bến Tre</option>
                                            <option value="Bình Dương">Bình Dương</option>
                                            <option value="Bình Định">Bình Định</option>
                                            <option value="Bình Phước">Bình Phước</option>
                                            <option value="Bình Thuận">Bình Thuận</option>
                                            <option value="Cà Mau">Cà Mau</option>
                                            <option value="Cần Thơ">Cần Thơ</option>
                                            <option value="Cao Bằng">Cao Bằng</option>
                                            <option value="Đà Nẵng">Đà Nẵng</option>
                                            <option value="Đắk Lắk">Đắk Lắk</option>
                                            <option value="Đắk Nông">Đắk Nông</option>
                                            <option value="Điện Biên">Điện Biên</option>
                                            <option value="Đồng Nai">Đồng Nai</option>
                                            <option value="Đồng Tháp">Đồng Tháp</option>
                                            <option value="Gia Lai">Gia Lai</option>
                                            <option value="Hà Giang">Hà Giang</option>
                                            <option value="Hà Nam">Hà Nam</option>
                                            <option value="Hà Nội">Hà Nội</option>
                                            <option value="Hà Tĩnh">Hà Tĩnh</option>
                                            <option value="Hải Dương">Hải Dương</option>
                                            <option value="Hải Phòng">Hải Phòng</option>
                                            <option value="Hậu Giang">Hậu Giang</option>
                                            <option value="Hòa Bình">Hòa Bình</option>
                                            <option value="Huế">Huế</option>
                                            <option value="Hưng Yên">Hưng Yên</option>
                                            <option value="Khánh Hòa">Khánh Hòa</option>
                                            <option value="Kiên Giang">Kiên Giang</option>
                                            <option value="Kon Tum">Kon Tum</option>
                                            <option value="Lai Châu">Lai Châu</option>
                                            <option value="Lâm Đồng">Lâm Đồng</option>
                                            <option value="Lạng Sơn">Lạng Sơn</option>
                                            <option value="Lào Cai">Lào Cai</option>
                                            <option value="Long An">Long An</option>
                                            <option value="Nam Định">Nam Định</option>
                                            <option value="Nghệ An">Nghệ An</option>
                                            <option value="Ninh Bình">Ninh Bình</option>
                                            <option value="Ninh Thuận">Ninh Thuận</option>
                                            <option value="Phú Thọ">Phú Thọ</option>
                                            <option value="Phú Yên">Phú Yên</option>
                                            <option value="Quảng Bình">Quảng Bình</option>
                                            <option value="Quảng Nam">Quảng Nam</option>
                                            <option value="Quảng Ngãi">Quảng Ngãi</option>
                                            <option value="Quảng Ninh">Quảng Ninh</option>
                                            <option value="Quảng Trị">Quảng Trị</option>
                                            <option value="Sóc Trăng">Sóc Trăng</option>
                                            <option value="Sơn La">Sơn La</option>
                                            <option value="Tây Ninh">Tây Ninh</option>
                                            <option value="Thái Bình">Thái Bình</option>
                                            <option value="Thái Nguyên">Thái Nguyên</option>
                                            <option value="Thanh Hóa">Thanh Hóa</option>
                                            <option value="Tiền Giang">Tiền Giang</option>
                                            <option value="TP. Hồ Chí Minh">TP. Hồ Chí Minh</option>
                                            <option value="Trà Vinh">Trà Vinh</option>
                                            <option value="Tuyên Quang">Tuyên Quang</option>
                                            <option value="Vĩnh Long">Vĩnh Long</option>
                                            <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                                            <option value="Vũng Tàu">Vũng Tàu</option>
                                            <option value="Yên Bái">Yên Bái</option>
                                        </select>
                                        <input type="date" class="form-control" name="start" id="d"
                                            onchange="getTicket()"
                                            style="padding: 0.675rem 0.75rem; font-size: 13px; font-weight: 300; border-radius: 5px !important; margin-bottom: 10px; border-color: #eee;">
                                        <select id="nhaXe" onchange="getTicket()" class="form-control"
                                            style="padding: 0.675rem 0.75rem; font-size: 13px; font-weight: 300; border-radius: 5px !important; margin-bottom: 10px; border-color: #eee;">
                                        </select>
                                        <div>
                                            <input onchange="getTicket()" id="doAnNgon" type="checkbox" class="dichVu"
                                                name="start" value="Đồ
                                            ăn ngon"
                                                style="padding: 0.675rem 0.75rem; font-size: 13px; font-weight: 300; border-radius: 5px !important; margin-bottom: 10px; border-color: #eee;">&emsp;Đồ
                                            ăn ngon
                                        </div>
                                        <div>
                                            <input onchange="getTicket()" id="wifi" type="checkbox" class="dichVu"
                                                name="start" value="Wifi"
                                                style="padding: 0.675rem 0.75rem; font-size: 13px; font-weight: 300; border-radius: 5px !important; margin-bottom: 10px; border-color: #eee;">&emsp;Wifi
                                        </div>
                                        <div>
                                            <input onchange="getTicket()" id="xeTrungChuyen" type="checkbox"
                                                class="dichVu" name="start" value="Xe
                                            trung chuyển"
                                                style="padding: 0.675rem 0.75rem; font-size: 13px; font-weight: 300; border-radius: 5px !important; margin-bottom: 10px; border-color: #eee;">&emsp;Xe
                                            trung chuyển
                                        </div>
                                        <div>
                                            <input onchange="getTicket()" id="phongRieng" type="checkbox" class="dichVu"
                                                name="start" value="Phòng riêng"
                                                style="padding: 0.675rem 0.75rem; font-size: 13px; font-weight: 300; border-radius: 5px !important; margin-bottom: 10px; border-color: #eee;">&emsp;Phòng
                                            riêng
                                        </div>
                                        <div>
                                            <input onchange="getTicket()" id="coNhaVeSinh" type="checkbox"
                                                class="dichVu" name="start" value="Có nhà vệ sinh"
                                                style="padding: 0.675rem 0.75rem; font-size: 13px; font-weight: 300; border-radius: 5px !important; margin-bottom: 10px; border-color: #eee;">&emsp;Có
                                            nhà vệ sinh
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="row ticketList">
                        <!-- ajax chèn vé -->
                    </div>
                    <div class="row mt-5">
                        <div class="col text-center">
                            <div class="block-2">
                                <ul>
                                    <li><a href="#">&lt;</a></li>
                                    <li class="active"><span>1</span></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">&gt;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END -->

            </div>
        </div>
    </section>
    <!-- End content -->
</body>

<script>
$.ajax({
    url: "./php/getData.php",
    type: "post",
    dataType: "json",
    data: {
        request: "ticket",
    },
    success: function(listdata) {
        html = ``;
        for (var data of listdata) {
            html += `<div class="col-md-6 col-lg-6 mb-4" onclick="postIdchuyen('${data.IdChuyen}')" >
                        <a class="block-1" style="background-image: url('img/chua-thien-mu_Hue.webp');">
                            <div class="text">
                                <span class="price">${data.GiaVe}đ</span>
                                <h3 class="heading">${data.Ten_NX}</h3>
                                <div class="post-meta">
                                    <span>
                                        ${data.GIODI} - ${data.GIODEN} <br>
                                        ${data.TenTuyen}
                                    </span>
                                </div>
                                <p class="star-rate">
                                <span>${data.TONGSORATES} reviews</span>
                                </p>
                            </div>
                        </a>
                    </div>`;
        }
        $(".row.ticketList").html(html);
    },
});

$.ajax({
    url: "./php/getData.php",
    type: "post",
    dataType: "json",
    data: {
        request: "bus",
    },
    success: function(listdata) {
        html = `<option value=""> Nhà xe </option>`;
        for (var data of listdata) {
            html += `<option value="${data.Ten_NX}">${data.Ten_NX}</option>`;
        }
        $("#nhaXe").html(html);
    },
});

function postIdchuyen(idChuyen) {
    $.ajax({
        url: "./php/getData.php",
        type: "post",
        dataType: "json",
        data: {
            request: "postIdChuyen",
            idChuyen: idChuyen,
        },
        success: function(data) {
            // console.log(data)
            window.location = './index.php?page=seat'
        }
    })
    event.preventDefault();
}

const d = document.querySelector("#d")
var today = new Date().toISOString().slice(0, 10)
d.setAttribute('min', today)


function getTicket() {

    var diemDi = document.querySelector("#diaDiemDi").value;
    var diemDen = document.querySelector("#diaDiemDen").value;
    var nhaXe = document.querySelector("#nhaXe").value;
    var ngayDi = d.value;
    var doAnNgon = document.querySelector("#doAnNgon");
    var wifi = document.querySelector("#wifi");
    var xeTrungChuyen = document.querySelector("#xeTrungChuyen");
    var phongRieng = document.querySelector("#phongRieng");
    var coNhaVeSinh = document.querySelector("#coNhaVeSinh");

    if (doAnNgon.checked === true) {
        doAnNgonValue = doAnNgon.value
    } else {
        doAnNgonValue = ''
    }
    if (wifi.checked === true) {
        wifiValue = wifi.value
    } else {
        wifiValue = ''
    }
    if (xeTrungChuyen.checked === true) {
        xeTrungChuyenValue = xeTrungChuyen.value
    } else {
        xeTrungChuyenValue = ''
    }
    if (phongRieng.checked === true) {
        phongRiengValue = phongRieng.value
    } else {
        phongRiengValue = ''
    }
    if (coNhaVeSinh.checked === true) {
        coNhaVeSinhValue = coNhaVeSinh.value
    } else {
        coNhaVeSinhValue = ''
    }

    console.log(doAnNgonValue)
    console.log(wifiValue)
    console.log(xeTrungChuyenValue)
    console.log(phongRiengValue)
    console.log(coNhaVeSinhValue)


    $.ajax({
        url: "./php/getData.php",
        type: "post",
        dataType: "json",
        data: {
            request: "ticket",
            diemDi: diemDi,
            diemDen: diemDen,
            nhaXe: nhaXe,
            ngayDi: ngayDi,
            doAnNgonValue: doAnNgonValue,
            wifiValue: wifiValue,
            xeTrungChuyenValue: xeTrungChuyenValue,
            phongRiengValue: phongRiengValue,
            coNhaVeSinhValue: coNhaVeSinhValue
        },
        success: function(listdata) {
            html = ``;
            for (var data of listdata) {
                html += `<div class="col-md-6 col-lg-6 mb-4">
                        <a href="./index.php?page=seat" class="block-1" style="background-image: url('img/chua-thien-mu_Hue.webp');">
                            <div class="text">
                                <span class="price">${data.GiaVe}đ</span>
                                <h3 class="heading">${data.Ten_NX}</h3>
                                <div class="post-meta">
                                    <span>
                                        ${data.GIODI} - ${data.GIODEN} <br>
                                        ${data.TenTuyen}
                                    </span>
                                </div>
                                <p class="star-rate">
                                <span>${data.TONGSORATES} reviews</span>
                                </p>
                            </div>
                        </a>
                    </div>`;
            }
            $("#loadingGif").hide();
            $(".row.ticketList").html(html);
        },
        beforeSend: function() {
            $("#loadingGif").show();
        },
    });
    event.preventDefault();
}
</script>

<script src="./js/getData.js"></script>

<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="js/tickets/jquery.min.js"></script>
<script src="js/tickets/jquery-migrate-3.0.1.min.js"></script>
<script src="js/tickets/jquery.waypoints.min.js"></script>
<script src="js/tickets/jquery.stellar.min.js"></script>
<script src="js/tickets/owl.carousel.min.js"></script>
<script src="js/tickets/jquery.magnific-popup.min.js"></script>
<script src="js/tickets/aos.js"></script>
<script src="js/tickets/jquery.timepicker.min.js"></script>
<script src="js/tickets/main.js"></script>
<script src="js/mail-script.js"></script>

</html>