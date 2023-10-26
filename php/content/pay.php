<link rel="stylesheet" href="./css/pttt.css">

<style>
.body {
    display: block;
    width: 70rem;
}

#header {
    z-index: 4;
}
</style>
<!-- start banner Area -->
<section class="banner-area relative">
    <div class="banner__area-header">
        MUA VÉ
    </div>
</section>
<!-- end banner Area -->

<form class="v1">
    <div class="v380_386">
        <h1>THÔNG TIN MUA VÉ</h1>
    </div>
    <span class="v380_388" style="padding: 10px !important;">THÔNG TIN HÀNH KHÁCH</span><br>
    <span class="v380_390">Họ tên:<div data-v-05016c4a="" class="col-xs-8"><span data-v-05016c4a=""
                class="orange-value green">10:15 13/12/2022
            </span></div></span><br>
    <span class="v380_382">Email:<div data-v-05016c4a="" class="col-xs-8"><span data-v-05016c4a=""
                class="orange-value green">10:15 13/12/2022
            </span></div></span><br>
    <span class="v380_383">Số điện thoại:<div data-v-05016c4a="" class="col-xs-8"><span data-v-05016c4a=""
                class="orange-value green">10:15 13/12/2022
            </span></div></span><br><br>
    <span class="v380_389">THÔNG TIN CHUYẾN XE</span><br>
    <span class="v380_391">Mã chuyến:<div data-v-05016c4a="" class="col-xs-8"><span data-v-05016c4a=""
                class="orange-value green">10:15 13/12/2022
            </span></div></span><br>
    <span class="v380_381">Tuyến xe:<div data-v-05016c4a="" class="col-xs-8"><span data-v-05016c4a=""
                class="orange-value green">10:15 13/12/2022
            </span></div></span><br>
    <span class="v380_376">Thời gian: <div data-v-05016c4a="" class="col-xs-8"><span data-v-05016c4a=""
                class="orange-value green">10:15 13/12/2022
            </span></div></span><br>
    <span class="v380_377">Điểm lên xe:<div data-v-05016c4a="" class="col-xs-8"><span data-v-05016c4a=""
                class="orange-value green">A35
            </span></div></span><br>

    <span class="v380_379">Số ghế: <div data-v-05016c4a="" class="col-xs-8"><span data-v-05016c4a=""
                class="orange-value green">A35
            </span></div></span><br>
    <div data-v-60883350="" class="footer-bar">
        <div data-v-60883350="" class="total-info">
            <p data-v-60883350="" class="footer-title">TỔNG TIỀN</p>
            <p data-v-60883350="" class="footer-price total"
                style="    color: #f8b600; font-size: 2.5rem; font-weight: 600;">
                400.000 <span data-v-60883350="">Đ</span></p>
        </div>
    </div>

</form>


<form class="pttt js-modal-pttt">
    <h1 class="v2">PHƯƠNG THỨC THANH TOÁN</h1>
    <div class="f-grid">
        <div class="f-grid-col ">
            <!-- js-visa -->
            <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/Visa_Inc._logo.svg" />
            <p>Thẻ quốc tế VISA</p>
            <input id="pt1" type="radio" name="pt[]" value="VISA" onclick=" showVisa()" class="pay_check">
        </div>

        <div class="f-grid-col">
            <img
                src="https://d1hbpr09pwz0sk.cloudfront.net/logo_url/national-payment-corporation-of-vietnam-napas-9ef60ece" />
            <p>Thẻ ATM nội địa </p>
            <input id="pt2" type="radio" name="pt[]" value="ATM" onclick="showATM()" class="pay_check">
        </div>

        <div class="f-grid-col ">
            <img
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAkFBMVEWtAGz///+rAGepAGOoAGHGap2rAGjTjrPeqsbfrsju2OKnAF7AU5CoAGKnAF2tAGr79Pj57/X++v3WlrjaocDits326PDz3+rKdqOzInfFZJnCXJTIbp/04uy6QYXNgKnoxtjszt63NX/r0t61KHrmv9TRh66+TYzbpMG5OoLWmbjBWJKxFHPQha3Vk7i9R4noJkqkAAAJOUlEQVR4nO2da3eqOhCGIYloGzFeKt6qeMFaW3f9///uQNUWzQQBM2zdZ54vXasBzEvuyczgOARBEARBEARBEARBEARBEARBEARBEARBEARBEMT/BsUY94XwOfP0NI/xODFOY6rwc73Dc5MHF77ZHh4XUe3jab5azRu9yUjyVF4Ul6NJr5GkPX3UIsH1N2CECb4cfzTWq9Vq3eiNI99n9jOfJx9+86njpggaM8FOeZy9B+m0Tr+ZM5ue2IXzdvpet70eOqLAG7IDE/UzCQcGQxnrYHI40NOCeg6NrDVe6LfGzCetSgtSybALZsQNxlKOO3BaNxTZbYqJ0HBr8uShrK4cWQSU0Yn12pw2iLIKQkyAapFi2hQVCRSvmRnJpGbMJFMZr+ZIH+iyEZC98gJdtyfhp/obQ70/oz3j+ALFyy0CXfcFlCjfct4+RK+p/M9tAl33DSgG+Z77dlMlsAVr3irQdZtad9N6KnA7skTVvp6Fa7QvH1qw4n9hVlTRv11g3CWeZ5GHBe9/xRv81dKGQNddpkd+b1/4/ghtNi7mdhTO04XIi1f8AGvMUCM7Al1391sIpSr+u4+jkN001qfp/bQkVbyOJixx6qnMmI4WY/BTTUW5Zy5whowd/GuBeUHgdgyT6d3xkV7NeGs7GATmJtrEmKF64Gjfc6TcNeBsPO2kdMCqfcqgqVqswohJIdnyzzN8wQJjUGR14JcmyS+pFjitfGslrUVMgKT6oSGqGaxvJo97O4rJDfwSMEYMBkw95sf20AKyMWgd0iSwLHo5KPTBjjRsnY2XLejNuu8IIwYH6uLwtDPzAag45oEN9bSnQxqHlkzNy6FAjIGrOhUprB3bEwfec/2kHuhNDgrVJ5D1Tz3rPtQfzexXU1DhSUUphdAT61AXAs3Ne/Znp/YVAoPhFB7ohD4iIfSmWQrL1VJHb4YTuGSAttx9AIXAUqXTMv24PviPrDdE67XU0/tI4xjA9XGlef8KgZsmpskYUE3tL4TtK9QndMaZClCj3+5fIdfGgK751/W16Uc1Cj27Cs1NS1/YVKTwplqqT/V2ph8H9hfsD/n2FX5p/zdOxdRGuzZ8AIX6NqIx18DbMPa796PQ08tlbpqoyJV2rf2pt/15KbB3Z/htaJvPtj4Mhb4+n36B9wmBPcfA/mYUgkJghxmcbXrAZnvf/hLYvkLorgFUND6wZTe03pUiKAQ30de6RLEArjMOnfekEN4Pnl+YFzEGCcTYTkRQCG5QusEsZVii5AbccUaopBgKHQVlPq6pM8mZ53mMyyZ83tXFOH7CUMhN59tB/23cHNf7phODj0dRaDoLuQqCPiSFfn4rjDRfKGekKAodVsb2AekQGEkhdHBzjQ2O9RfCfmmCLH7M/Y5kb4Kk0BHTggKfTZuqmArL19J4TNwVa4odNFsTrDIEVw5muiM0E0ysMoyv2OYxvTwKjPBsTPEUOmyZt6IGO0QjWuv7pSk8x2CRcMFCYbpfoLXDBCXzGCh+4VpeItbSBH92bdR4XiIZe1Wk0PFEmNUaO8Mrzgz3rzBZzf8xrZaCkOO7lOArTJxmmn29IDv9TSUuM9Bq9fXUl+qb7u7XSSHgn2HeCvR8tu/NO6cBshvM6zPOq3FgU8vmJZ+jU2KkpTWjU9pIT9tmZVkxXzrRbNPczCIl/eLOfaVRyvvm+CfhN1FLSjkOakk5nArVAQwdBEEQROVkdepxgle6w7+HwUIxLpxou99vR0pcThsZl2qUpEWOKOhuHo/4Qo2Ws/1sGT+4yhH/HCZ24To4zq660/7QET9CPOEM+9P2aeK1Dncir0iP+9v6+scPIb75bSkqmrWdwXiorcoXtYMOJmuLy7TnfGsDJjdPwMz7aVats3qyzPkC946SNZwSQ3AJ1P1i13IZvzaTO/d0WMHq6RdhcrmPc7LdGv18OuPMvWrTqzkSvKKvgH9zUtrPsi/NmfTNr+bIKqrAkzvG22UHBsjEuBmoJOCxoVFHdnM+CBzd5Archjd0laNbdUHM8YO5KOdGX+e2A+SRRVktMA3qjvA3/IYqesyj3ieyZf5d/TbescU3Npy5+5c9qhcVub29w6yoDPKxKsz4vBSLVvwAU6GwEHAgLoXzQizsKLvCOiE1mTAVp54uRFkkZMSBF7SoCjxvj3eFTiqHpSwV9ki9DeDFU5Lxbw5ZmbcWIBWifz0KUE7WP4dIfrlwN3Ukgxor/UxC+6chlrT6ynA9uQG1BTP7Xns19hWN19o7OJifYiJApz3fdPr12qRmttxD8CCNmyEUAWvBOWO+Ax5uTh2fMc4XQNKPhzSc//m+FT/W85jf+oRuR/GvhP2124c1m3KgXBwmHwqwyD8VAQP9+IN9aiXoyU+wcaBY0AJmhL1ji4dmc6fZGQeiKrxnWEEvLq2gPWjd8RhW0KAl+1xbAyq5AK6zLxDDGwGopAOobKAVzUN4I0AeJaAXqQd04w/hUQL0QYboQUA7N3ju35XCAu5aClhCWheIoPCf984r5GGpDzkP4GEJ5NpYLkCAo0fwkv3nPZ0fylu9lPWlHpYpI+LAYyr856NGADd93m3kj1JlWCh6i77Kth+Uzv6Ir882A9NWqP+QEXjAKEpwwQAWnFVFUbrJVh9YAIOu3PGk7UEjYYHRzKDFBRTNzP5ggVBLPWi/Ww8V7XBoK3r/CBHpHAZtNW4u+1MfehGVRRW8TSEcGXJ4ERkS3JBrPIZCQ4zdxTYV3XMP+wthRPfE8HsyRWhdDEdcCsFHocGCASVCK4a/BZR2pBM8Z0TZNU7v7k1h2ejLOJGSURQCkZTykOmvcV8Ky1l3NHBOSJH8nkqEHMCKOo+ksEQ9XSId42P5rvlFP3uCcbCGqtCRpoNgmB6erQma/2GrSG8Df4rnzhUWKcUPRBNTTB9SkdfaKsT8yAyql6zfzPVFqz2qHTSuHzBzrn/iZe3h2utjezpneAB8E0ywv9eFGlPh+0JhdFaPlxoh/tcBK/BWZ+IVXg8uxrndiv6GQsCWyuSPH2scvS3OO53uPNxV85VOVh88XzCdHFcxbDjV0k6TKzXR0gYZZ3+KCb59Tb7g+vz9mdalX533GhMaKiPtR4TKSINR3x/aFeU+tUsQBEEQBEEQBEEQBEEQBEEQBEEQBEEQBEEQBEEQBIHHf+GPpmMiew23AAAAAElFTkSuQmCC" />
            <p>Ví Momo </p>
            <input id="pt3" href="about.php" type="radio" name="pt[]" value="MOMO" onclick="showMomo()"
                class="pay_check">

        </div>
    </div>

    <div class="f-grid">
        <div class="f-grid-col">
            <img
                src="https://play-lh.googleusercontent.com/yHmIm7FYKe_dW2WHTwWizp2p_gt7_ctdpCUevX654E1dsj5c9McWO03k_S6PPLG_DNz7" />
            <p>Ví ZaloPay</p>
            <input id="pt4" type="radio" name="pt[]" value="ZaloPay" onclick="showZalo()" class="pay_check">
        </div>

        <div class="f-grid-col">
            <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfUFyPe1xextVQTOT7diADualLTLs35NhE_Yc9SClLP5AlWflRLUTbFBu3xPG_vh8_THM&usqp=CAU" />
            <p>Ví PayPal</p>
            <input id="pt5" type="radio" name="pt[]" value="PayPal" onclick="showPaypal()" class="pay_check">
        </div>

        <div class="f-grid-col">
            <img
                src="https://play-lh.googleusercontent.com/DvCn_h3AdLNNDcv3ftqTqP83gw6h65GMEPg3x6u788wB3F3ENNFcHgrHcWJNOPy4epg" />
            <p>Ví VnPay</p>
            <input id="pt6" type="radio" name="pt[]" value="VnPay" onclick="showVnpay()" class="pay_check">
        </div>
    </div>


</form>

<!-- ví momo -->
<div class="login js-modal-momo" id="momo">
    <form action="" class="momo-form js-modal-momo-form">
        <div class="head">
            Momo
        </div>
        <div class="spacer"></div>
        <img id="file-upload1" style=" align-items: center;margin: auto;margin-top: -34px;   height: 251px;"
            src="https://static.mservice.io/blogscontents/momo-upload-api-211217174745-637753600658721515.png" alt="">
        <div class="form-group1">
            <span style="font-size: 1.5rem;">
                Thanh toán với ví
                <img style="height: 15px;"
                    src="data:image/png;base64,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" />
                bằng mã QR
                <br>
            </span>
        </div>
        <div class="form-group">
            <text><b>Hướng dẫn thanh toán</b></text><br>
            <text>Bước 1: <b>Mở</b> ứng dụng Momo</text><br>
            <text>Bước 2: Chọn "<b>Thanh toán</b>" và quét mã QR</text><br>
            <text>Bước 3: <b>Xác nhận thanh toán </b>ở ứng dụng</text><br>
        </div>
        <div class="form-group1">
            <span style="color: red; font-size: 1.25rem;">Nội dung chuyển khoản: </span><br>
            Mã tuyến - Số ghế - Email - Tên <br>
            <span style="color: #f8b600; font-size: 1.25rem;"> C01 - A01 - huydan12@gmail.com - Huy </span>
        </div>
    </form>
</div>

<!-- ví ATM nội địa -->
<div class="login js-modal-atm" id="atm">
    <form class="atm-form js-modal-atm-form">
        <p style="color: orange; padding-top: 28px;margin-left: 1rem;" data-v-ff578fe4="" class="title">Danh sách ngân
            hàng liên kết:</p>
        <img style="width: 100%;display: block;  margin-left: auto;  margin-right: auto;"
            src="https://nganhangviet.org/wp-content/uploads/2021/01/danh-sach-ngan-hang-viet-nam-min.jpg" alt="">
        <p style="color: green; padding-top: 28px; margin-left: 1rem;" data-v-ff578fe4="" class="title">VietComBank:
            1045678234 - Nguyễn Quang Huy</p>

        <div class="form-group1">

            <span style="color: red; font-size: 1.25rem;">Nội dung chuyển khoản: </span><br>
            Mã chuyến - Số ghế - Email - Tên
            <br>
            <span style="color: #f8b600; font-size: 1.25rem;"> C01 - A01 - huydan12@gmail.com - Huy </span>
        </div>
    </form>
</div>

<!-- ví VISA -->
<div class="login js-modal-visa" id="visa">
    <form class="visa-form js-modal-visa-form">
        <p style="color: orange; padding-top: 28px; margin-left: 1rem;" data-v-ff578fe4="" class="title">Danh sách ngân
            hàng liên kết:</p>
        <img style="width: 100%;display: block;  margin-left: auto;  margin-right: auto;"
            src="https://i0.wp.com/mythslegendscollection.com/wp-content/uploads/2020/04/visa-mastercard-american-express-png-6.png?fit=800%2C206&ssl=1"
            alt="">
        <p style="color: green; padding-top: 28px; margin-left: 1rem;" data-v-ff578fe4="" class="title">Visa : 4000 1234
            3456 6543 - Nguyễn Quang Huy</p>

        <div class="form-group1">

            <span style="color: red; font-size: 1.25rem;">Nội dung chuyển khoản: </span><br>
            Mã chuyến - Số ghế - Email - Tên
            <br>
            <span style="color: #f8b600; font-size: 1.25rem;"> C01 - A01 - huydan12@gmail.com - Huy </span>
        </div>
    </form>
</div>

<!-- ví ZaloPay -->
<div class="login js-modal-zalo" id="zalo">
    <form class="zalo-form js-modal-zalo-form">
        <div class="head">
            Zalo Pay
        </div>
        <div class="spacer"></div>
        <img id="file-upload1" style=" align-items: center;margin: auto;margin-top: -34px;   height: 251px;"
            src="https://image.thanhnien.vn/w660/Uploaded/2022/cqjwqqjwp/2020_11_03/maqrchuongtrinhvimientrungruotthit_wrug.jpg"
            alt="">
        <div class="form-group1">
            <span style="font-size: 1.5rem;">
                Thanh toán với ví
                <img style="height: 15px;"
                    src="https://play-lh.googleusercontent.com/yHmIm7FYKe_dW2WHTwWizp2p_gt7_ctdpCUevX654E1dsj5c9McWO03k_S6PPLG_DNz7">
                bằng mã QR
                <br>
            </span>
        </div>
        <div class="form-group">
            <text><b>Hướng dẫn thanh toán</b></text><br>
            <text>Bước 1: <b>Mở</b> ứng dụng Zalo Pay</text><br>
            <text>Bước 2: Chọn "<b>Thanh toán</b>" và quét mã QR</text><br>
            <text>Bước 3: <b>Xác nhận thanh toán </b>ở ứng dụng</text><br>
        </div>
        <div class="form-group1">
            <span style="color: red; font-size: 1.25rem;">Nội dung chuyển khoản: </span><br>
            Mã tuyến - Số ghế - Email - Tên <br>
            <span style="color: #f8b600; font-size: 1.25rem;"> C01 - A01 - huydan12@gmail.com - Huy </span>
        </div>
    </form>
</div>

<!-- ví vnpay -->
<div class="login js-modal-vnpay" id="vnpay">
    <form class="vnpay-form js-modal-vnpay-form">
        <div class="head">
            VnPay
        </div>
        <div class="spacer"></div>
        <img id="file-upload1" style=" align-items: center;margin: auto;margin-top: -34px;   height: 251px;"
            src="https://kalite.vn/wp-content/uploads/2021/09/maqrkalite.jpg" alt="">
        <div class="form-group1">
            <span style="font-size: 1.5rem;">
                Thanh toán với ví
                <img style="height: 40px;"
                    src="https://itviec.com/rails/active_storage/representations/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBd2w2SHc9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--998573548f2a95e4b349ffbf42cfb623613039fd/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJY0c1bkJqb0dSVlE2RkhKbGMybDZaVjkwYjE5c2FXMXBkRnNIYVFJc0FXa0NMQUU9IiwiZXhwIjpudWxsLCJwdXIiOiJ2YXJpYXRpb24ifX0=--ee4e4854f68df0a745312d63f6c2782b5da346cd/logo%20VNPAY-02.png" />
                bằng mã QR
                <br>
            </span>
        </div>
        <div class="form-group">
            <text><b>Hướng dẫn thanh toán</b></text><br>
            <text>Bước 1: <b>Mở</b> ứng dụng Vnpay</text><br>
            <text>Bước 2: Chọn "<b>Thanh toán</b>" và quét mã QR</text><br>
            <text>Bước 3: <b>Xác nhận thanh toán </b>ở ứng dụng</text><br>
        </div>
        <div class="form-group1">
            <span style="color: red; font-size: 1.25rem;">Nội dung chuyển khoản: </span><br>
            Mã chuyến - Số ghế - Email - Tên
            <br>
            <span style="color: #f8b600; font-size: 1.25rem;"> C01 - A01 - huydan12@gmail.com - Huy </span>
        </div>
    </form>
</div>

<!-- ví PayPal -->
<div class="login js-modal-paypal" id="paypal">
    <form class="paypal-form js-modal-paypal-form">
        <div class="head">
            PayPal
        </div>
        <div class="spacer"></div>
        <img id="file-upload1" style=" align-items: center;margin: auto;margin-top: -34px;   height: 251px;"
            src="https://www.paymentscardsandmobile.com/wp-content/uploads/2020/05/PayPal-QR-code.png" alt="">
        <div class="form-group1">
            <span style="font-size: 1.5rem;">
                Thanh toán với ví
                <img style="height: 40px;"
                    src="https://play-lh.googleusercontent.com/bDCkDV64ZPT38q44KBEWgicFt2gDHdYPgCHbA3knlieeYpNqbliEqBI90Wr6Tu8YOw" />
                bằng mã QR
                <br>
            </span>
        </div>
        <div class="form-group">
            <text><b>Hướng dẫn thanh toán</b></text><br>
            <text>Bước 1: <b>Mở</b> ứng dụng PayPal</text><br>
            <text>Bước 2: Chọn "<b>Thanh toán</b>" và quét mã QR</text><br>
            <text>Bước 3: <b>Xác nhận thanh toán </b>ở ứng dụng</text><br>
        </div>
        <div class="form-group1">
            <span style="color: red; font-size: 1.25rem;">Nội dung chuyển khoản: </span><br>
            Mã chuyến - Số ghế - Email - Tên
            <br>
            <span style="color: #f8b600; font-size: 1.25rem;"> C01 - A01 - huydan12@gmail.com - Huy </span>
        </div>
    </form>
</div>
</div>

<!-- End content -->
<div class="route-option selected  booking-nav-buttons "
    style="display: flex; padding: 1rem 1rem 0 1rem;width: 70%; margin: 2rem auto; Align-items: center;"
    data-v-008a65cb>
    <div class="booking-nav-buttons" data-v-3f93c73c="" data-v-45436248="">
        <div class="left-btns" data-v-3f93c73c=""><button class="back-btn" data-v-3f93c73c=""
                style="font-size: 1.4rem; transition:all 0.5s; cursor: pointer;">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABICAYAAABV7bNHAAAAAXNSR0IArs4c6QAAAERlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAA6ABAAMAAAABAAEAAKACAAQAAAABAAAASKADAAQAAAABAAAASAAAAACQMUbvAAACSklEQVR4Ae3aT07CQBQGcKrAyh22cAiDngGix/BwHMOoW9eohygV1iRAqO/FEppaoJH58435utDpFN7M/CxD5zmtFg8KUIACFKAABShAAQpQgAIUoAAFKPCvBKKQRjMYDOLVavWofe52u5M0Tb9s9z8YoCRJbjebzVOe54miRFGUCtLQNtKl7b+AifiKs16vXyRWXIp3td1uZ8vl8q1UZ7x4YTyi4YAlnJ7h0I3CQQMdw5GPWKbzUKNRnvEiWKBjODLeebvdvrc9/6gr5CR9CqfT6YyzLHs/48Zo/FY4ICQcuDsIDQcKCBEHBggVBwIIGcc7EDqOV6AQcLwBhYKjQM4Xq3Ec38mqXBeedWurucuHQAU4dTh9UCxwnqVTQeAonjOgEHGcAYWK4wSo3+8nkib9lMbKyS5tWw+4OeenW/uf7X3RTkkygZpDrsWR+pGsyj/stGwmqot8UH6gq5F8Y7lo/0Dzzaqtd1CzfpL9m9V0p6d5Zn0mqrkGU2UdSLN+kv17kBHPa0YNj+Tsa17ulGHxn4nrGqhF8YA4rbnmtcoZkI4yRCSnQCEiOQcKDckLUEhI3oBCQfIKFAKSdyB0JAggZCQYIFQkKCBEJDggNCRIoBLSq5Tr8tfO1m6wQKeQig1UN7b3CFlPd+hA/3roHiBZ5Y/k/YtqDN3MudvxWr1m8hwaSAdaII2l+AvJJMShWPBA2nFBmmq+SD9Wu4FIWbcBT3bntn5Dz0HVQfvYSF7tA88pQAEKUIACFKAABShAAQpQgAIUoEDgAt/KjWWzclDJlgAAAABJRU5ErkJggg=="
                    alt="back" width="24" height="24" class="icon" data-v-3f93c73c="">
                <a style="color: #000; 
    font-size: 1.6rem;
" href="./index.php?page=dieukhoan">Quay lại</a>
            </button>
            <!---->
        </div>
        <div data-v-3f93c73c="" class="right-btns"><button data-v-3f93c73c="" class="next-btn next-button"
                style="font-size: 1.6rem; transition:all 0.5s; cursor: pointer; padding: 0px !important">
                <a onclick="insert()">Hoàn thành</a>
                <img data-v-5c79fc2e=""
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABICAYAAABV7bNHAAAAAXNSR0IArs4c6QAAAERlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAA6ABAAMAAAABAAEAAKACAAQAAAABAAAASKADAAQAAAABAAAASAAAAACQMUbvAAABnklEQVR4Ae3a4W3CMBCGYdIVUBkDmKGDdIkyUffoEizRUtoZ0u8QkSrrcjE0DTh+LUWQu2AnTy4/cLxY0BBAAAEEEEAAAQQQQAABBBBAAIFZCTRTXE3bto8a5/k81mvTNMcpxi1iDMPR9q6tawd92RRx8lOcpDBeOplfn1+lID1MgeSMsVTsrRQk5/zHCwnBHjF7rLxWTCWNJ+L0JJm1NsPwGkhmJhlDOnpCioEEkvNoeSEqyVNJYiAlIN4uSJ5KEgMpAfF2QfJUkhhICYi3C5KnksQykLbJT+rbBSnjnoMEUoZAxiEDlfSp/Cqjm3kfMoC0+++rv9WM4iXXZS8W+l4utJd0NLtjVT0bbX0TbR/K2duSOtsAjk28reuU0VWDE9x6cMAJBIIUlQNOIBCkqBxwAoEgReWAEwgEKSoHnEAgSFE51+PYv/Wq/3gOLaCqF8eKStXhrVFU+DTPc/c4t5pR/Jbdk5YD74Mns46UKsVbBnz3ldPdnb653i4/yqchqSMWko+iSScIIIAAAggggAACCCCAAAIIIIDAnwR+AARz1rJJfntoAAAAAElFTkSuQmCC"
                    alt="back" width="24" height="24" class="icon">

            </button>
            <!---->
            <!---->
        </div>
    </div>
</div>

<script>
$.ajax({
    url: "./php/getData.php",
    type: "post",
    dataType: "json",
    data: {
        request: "getInfoSeat_fullname",
    },
    success: function(data) {
        html = `Họ tên:<div data-v-05016c4a="" class="col-xs-8"><span data-v-05016c4a=""
                class="orange-value green">${data}
            </span></div>`
        $(".v380_390").html(html);
    },
})

$.ajax({
    url: "./php/getData.php",
    type: "post",
    dataType: "json",
    data: {
        request: "getInfoSeat_email",
    },
    success: function(data) {
        html = `Email:<div data-v-05016c4a="" class="col-xs-8"><span data-v-05016c4a=""
                class="orange-value green">${data}
            </span></div>`
        $(".v380_382").html(html);
    },
})

$.ajax({
    url: "./php/getData.php",
    type: "post",
    dataType: "json",
    data: {
        request: "getInfoSeat_phone",
    },
    success: function(data) {
        html = `Số điện thoại:<div data-v-05016c4a="" class="col-xs-8"><span data-v-05016c4a=""
                class="orange-value green">${data}
            </span></div>`
        $(".v380_383").html(html);
    },
})

$.ajax({
    url: "./php/getData.php",
    type: "post",
    dataType: "json",
    data: {
        request: "getInfoTrip",
    },
    success: function(data) {
        v380_391 = `Mã chuyến:<div data-v-05016c4a="" class="col-xs-8"><span data-v-05016c4a=""
                class="orange-value green">${data.IdChuyen}
            </span></div>`
        $(".v380_391").html(v380_391);

        v380_381 = `Tuyến xe:<div data-v-05016c4a="" class="col-xs-8"><span data-v-05016c4a=""
                class="orange-value green">${data.TenTuyen}
            </span></div>`
        $(".v380_381").html(v380_381);

        v380_376 = `Thời gian: <div data-v-05016c4a="" class="col-xs-8"><span data-v-05016c4a=""
                class="orange-value green">${data.giodi} ${data.NgayDi}
            </span></div>`
        $(".v380_376").html(v380_376);
    },
})

$.ajax({
    url: "./php/getData.php",
    type: "post",
    dataType: "json",
    data: {
        request: "getArraySeat",
    },
    success: function(data) {
        data = data.join(', ')
        html = `Số ghế: <div data-v-05016c4a="" class="col-xs-8"><span data-v-05016c4a=""
                class="orange-value green">${data}
            </span></div>`
        $(".v380_379").html(html);
    },
})

$.ajax({
    url: "./php/getData.php",
    type: "post",
    dataType: "json",
    data: {
        request: "getTotalSeat",
    },
    success: function(data) {
        total = `${data} <span data-v-60883350="">Đ</span>`
        $(".total").html(total);
    },
})

function insert() {
    var pttt = '';
    var payBtns = document.querySelectorAll('.pay_check')

    for (var payBtn of payBtns) {
        if (payBtn.checked == true) {
            pttt = payBtn.value
        }
    }

    console.log(pttt)
    $.ajax({
        url: "./php/getData.php",
        type: "post",
        dataType: "json",
        data: {
            request: "insert",
            pttt: pttt
        },
        success: function(data) {
            $("#loadingGif").hide();
            // console.log(data)
            location.assign('./index.php?page=tickets')
        },
        beforeSend: function() {
            $("#loadingGif").show();
        },
    })
    event.preventDefault()
}
</script>