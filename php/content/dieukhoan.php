<style>
.ttlh {
    display: flex;
}

.contact__content__infos div {
    margin: 0px 23px 0px 0px;
    text-align: justify;
    font-size: 1.5rem;
}

.home-about-area .home-about-left h1 {
    max-width: none;
}

.home-about-area .home-about-left p {
    max-width: 500px;
    padding: 34px 1px 0px 0px;
}

.contact__content__infos {
    padding: 20px 30px;
    background-color: #eee;
    border-radius: 16px;

}

.next-button:hover {
    opacity: 0.7 !important;
}

@media screen and (min-width: 767px) {
    .booking-nav-buttons[data-v-3f93c73c] {
        width: 700px;
    }
}

.booking-nav-buttons[data-v-3f93c73c] {
    
    letter-spacing: normal;
    text-align: center;
    font-size: 16px;
    font-weight: 500;
    max-width: 700px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 70%;
    margin: 20px auto 40px;
    flex-wrap: wrap;
}

.left-btns[data-v-3f93c73c] {
    justify-content: flex-start;
    margin-right: 16px;
}

.left-btns[data-v-3f93c73c],
.right-btns[data-v-3f93c73c] {
    flex: 1;
    display: flex;
}

.back-btn[data-v-3f93c73c] {
    border-radius: 24px;
    border: 1px solid #c0c6cc;
    background-color: #fff;
    color: #111;
    padding-right: 36px;
}

button[data-v-3f93c73c] {
    align-items: center;
    justify-content: center;
    display: flex;
    flex: 1;
    width: 100%;
    height: 48px;
    white-space: nowrap;
}

.right-btns[data-v-3f93c73c] {
    justify-content: flex-end;
    margin-left: 16px;
}

.left-btns[data-v-3f93c73c],
.right-btns[data-v-3f93c73c] {
    flex: 1;
    display: flex;
}

.next-btn[data-v-3f93c73c] {
    border-radius: 24px;
    color: #fff;
    border: none;
    background-color: #f8b600;
}


button[data-v-3f93c73c] {
    align-items: center;
    justify-content: center;
    display: flex;
    flex: 1;
    width: 100%;
    height: 48px;
    white-space: nowrap;
}
</style>

<!-- start banner Area -->
<section class="banner-area relative">
    <div class="banner__area-header">
        MUA VÉ
    </div>
</section>

<link rel="stylesheet" href="./css/dieukhoan.css">
<!-- End banner Area -->

<!-- Start content -->
<div class="contact__content">

    <section class="home-about-area" style="background-color: white;    width: 65%;
    margin: 5rem auto;">
        <div class="container-fluid">
            <div class="row justify-content-end pt-30">
                <div class="col-lg-7 col-md-12 home-about-left contact__content__info pl-30">
                    <div class="contact__content__infos">
                        <h1 style="color: #f8b600; text-align:center;font-size: 2rem;">THÔNG TIN HÀNH KHÁCH</h1>
                        <?php
                        if (isset($_SESSION['IdUser']) && ($_SESSION['IdUser'])) {
                            if (isset($_SESSION['fullname']) && ($_SESSION['fullname'])) {
                                echo '<div>
                                        <p>Họ tên hành khách <span style="color: red;">*</span></p>
                                        <input type="text" class="form-control fullname_tam" name="name" value="' . $_SESSION["fullname"] . '" disabled>
                                    </div>
                                    <div>
                                        <p>Số điện thoại <span style="color: red;">*</span></p>
                                        <input type="phone" class="form-control phone_tam" name="phone" value="' . $_SESSION["phone"] . '" disabled>
                                    </div>
                                    <div>
                                        <p>Email <span style="color: red;">*</span></p>
                                        <input type="email" class="form-control email_tam" name="email" value="' . $_SESSION["email"] . '" disabled>
                                    </div>';
                            }
                        } else {
                        ?>
                        <div>
                            <p>Họ tên hành khách <span style="color: red;">*</span></p>
                            <input type="text" class="form-control fullname_tam" name="name" required>
                        </div>
                        <div>
                            <p>Số điện thoại <span style="color: red;">*</span></p>
                            <input type="phone" class="form-control phone_tam" name="phone" required>
                        </div>
                        <div>
                            <p>Email <span style="color: red;">*</span></p>
                            <input type="email" class="form-control email_tam" name="email" required>
                        </div>
                        <?php
                        }
                        ?>

                        <div style="padding: 20px 0px;">
                            <input style="height: 17px; width: 20px; align-items: center;" type="checkbox"
                                name="check_html" value="HTML" class="check_html">
                            <SPan style="color: #f8b600; font-size:1.5rem">Chấp nhận điều khoản đặt vé của
                                Runeterra</SPan>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 home-about-right">
                    <div class="contact__content__infos">
                        <h1 style="color: #f8b600;text-align:center;     font-size: 2rem; padding: 0px 0px 20px 0px;">
                            ĐIỀU KHOẢN VÀ LƯU Ý
                        </h1>
                        <div>
                            <p>(*) Quý khách vui lòng mang email có chứa mã vé đến văn phòng để đổi vé lên xe trước giờ
                                xuất bến ít nhất
                                <span style="color: #f8b600;"> 60 phút</span>
                                để chúng tôi trung chuyển.
                            </p>
                        </div>
                        <div>
                            <p>(*) Thông tin hành khách phải chính xác, nếu không sẽ không thể lên xe hoặc hủy/đổi vé.
                            </p>

                        </div>
                        <div>
                            <p>(*) Quý khách không được đổi/trả vé vào các ngày Lễ Tết (ngày thường quý khách được quyền
                                chuyển đổi hoặc hủy vé
                                <span style="color: #f8b600;"> một lần</span>
                                duy nhất trước giờ xe chạy 24 giờ), phí hủy vé 10%.
                            </p>

                        </div>
                        <div>
                            <p>(*) Nếu quý khách có nhu cầu trung chuyển, vui lòng liên hệ số điện thoại
                                <span style="color: #f8b600;"> 0987654321</span>
                                trước khi đặt vé. Chúng tôi không đón/trung chuyển tại những điểm xe trung chuyển không
                                thể tới được.
                            </p>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- End content -->
<div class="booking-nav-buttons" data-v-3f93c73c="" data-v-45436248="">
    <div class="left-btns" data-v-3f93c73c=""><button class="back-btn" data-v-3f93c73c=""
            style="font-size: 1.6rem; transition:all 0.5s; cursor: pointer;"><img
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABICAYAAABV7bNHAAAAAXNSR0IArs4c6QAAAERlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAA6ABAAMAAAABAAEAAKACAAQAAAABAAAASKADAAQAAAABAAAASAAAAACQMUbvAAACSklEQVR4Ae3aT07CQBQGcKrAyh22cAiDngGix/BwHMOoW9eohygV1iRAqO/FEppaoJH58435utDpFN7M/CxD5zmtFg8KUIACFKAABShAAQpQgAIUoAAFKPCvBKKQRjMYDOLVavWofe52u5M0Tb9s9z8YoCRJbjebzVOe54miRFGUCtLQNtKl7b+AifiKs16vXyRWXIp3td1uZ8vl8q1UZ7x4YTyi4YAlnJ7h0I3CQQMdw5GPWKbzUKNRnvEiWKBjODLeebvdvrc9/6gr5CR9CqfT6YyzLHs/48Zo/FY4ICQcuDsIDQcKCBEHBggVBwIIGcc7EDqOV6AQcLwBhYKjQM4Xq3Ec38mqXBeedWurucuHQAU4dTh9UCxwnqVTQeAonjOgEHGcAYWK4wSo3+8nkib9lMbKyS5tWw+4OeenW/uf7X3RTkkygZpDrsWR+pGsyj/stGwmqot8UH6gq5F8Y7lo/0Dzzaqtd1CzfpL9m9V0p6d5Zn0mqrkGU2UdSLN+kv17kBHPa0YNj+Tsa17ulGHxn4nrGqhF8YA4rbnmtcoZkI4yRCSnQCEiOQcKDckLUEhI3oBCQfIKFAKSdyB0JAggZCQYIFQkKCBEJDggNCRIoBLSq5Tr8tfO1m6wQKeQig1UN7b3CFlPd+hA/3roHiBZ5Y/k/YtqDN3MudvxWr1m8hwaSAdaII2l+AvJJMShWPBA2nFBmmq+SD9Wu4FIWbcBT3bntn5Dz0HVQfvYSF7tA88pQAEKUIACFKAABShAAQpQgAIUoEDgAt/KjWWzclDJlgAAAABJRU5ErkJggg=="
                alt="back" width="24" height="24" class="icon" data-v-3f93c73c="">
            <a style="font-size: 1.6rem; color: #000;" href="./index.php?page=seat">Quay lại</a>
        </button>
        <!---->
    </div>
    <div data-v-3f93c73c="" class="right-btns"><button data-v-3f93c73c="" class="next-btn next-button"
            style="font-size: 1.6rem; transition:all 0.5s; cursor: pointer;" onclick="checkDieuKhoan()">
            <a>Tiếp tục</a>
            <img data-v-3f93c73c=""
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAABICAYAAABV7bNHAAAAAXNSR0IArs4c6QAAAERlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAA6ABAAMAAAABAAEAAKACAAQAAAABAAAASKADAAQAAAABAAAASAAAAACQMUbvAAABnklEQVR4Ae3a4W3CMBCGYdIVUBkDmKGDdIkyUffoEizRUtoZ0u8QkSrrcjE0DTh+LUWQu2AnTy4/cLxY0BBAAAEEEEAAAQQQQAABBBBAAIFZCTRTXE3bto8a5/k81mvTNMcpxi1iDMPR9q6tawd92RRx8lOcpDBeOplfn1+lID1MgeSMsVTsrRQk5/zHCwnBHjF7rLxWTCWNJ+L0JJm1NsPwGkhmJhlDOnpCioEEkvNoeSEqyVNJYiAlIN4uSJ5KEgMpAfF2QfJUkhhICYi3C5KnksQykLbJT+rbBSnjnoMEUoZAxiEDlfSp/Cqjm3kfMoC0+++rv9WM4iXXZS8W+l4utJd0NLtjVT0bbX0TbR/K2duSOtsAjk28reuU0VWDE9x6cMAJBIIUlQNOIBCkqBxwAoEgReWAEwgEKSoHnEAgSFE51+PYv/Wq/3gOLaCqF8eKStXhrVFU+DTPc/c4t5pR/Jbdk5YD74Mns46UKsVbBnz3ldPdnb653i4/yqchqSMWko+iSScIIIAAAggggAACCCCAAAIIIIDAnwR+AARz1rJJfntoAAAAAElFTkSuQmCC"
                alt="back" width="24" height="24" class="icon"></button>
    </div>
    
</div>

<script>
function checkDieuKhoan() {
    const fullname_tam = document.querySelector('.fullname_tam').value
    const phone_tam = document.querySelector('.phone_tam').value
    const email_tam = document.querySelector('.email_tam').value

    if (fullname_tam == '' || phone_tam == '' || email_tam == '') {
        showErrorToast('Hãy điền đầy đủ thông tin')
    } else {
        $.ajax({
            url: "./php/getData.php",
            type: "post",
            dataType: "json",
            data: {
                request: "postInfoBill",
                fullname_tam: fullname_tam,
                phone_tam: phone_tam,
                email_tam: email_tam
            },
        })
        if (document.querySelector('.check_html').checked) {
            window.location = './index.php?page=pay'
        } else {
            showErrorToast('Hãy đọc và chấp nhận điều khoản')
        }
    }

}

function getInfotam() {}
</script>