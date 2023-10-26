<script>
// login
const modalLogin = document.querySelector('.js-modal-login')
const modalLoginForm = document.querySelector('.js-modal-login-form')

// register
const modalRegister = document.querySelector('.js-modal-register')
const modalRegisterForm = document.querySelector('.js-modal-register-form')

// forgot
const modalForgot = document.querySelector('.js-modal-forgot')
const modalForgotForm = document.querySelector('.js-modal-forgot-form')

// info
const modalInfo = document.querySelector('.js-modal-info')
const modalInfoForm = document.querySelector('.js-modal-info-form')

// changepass
const modalChangepass = document.querySelector('.js-modal-changepass')
const modalChangepassForm = document.querySelector('.js-modal-changepass-form')

// bill
const modalBill = document.querySelector('.js-modal-bill')
const modalBillForm = document.querySelector('.js-modal-bill-form')

//momo
const modalMomo = document.querySelector('.js-modal-momo')
const modalMomoForm = document.querySelector('.js-modal-momo-form')

//zalo
const modalZalo = document.querySelector('.js-modal-zalo')
const modalZaloForm = document.querySelector('.js-modal-zalo-form')

//vnpay
const modalVnpay = document.querySelector('.js-modal-vnpay')
const modalVnpayForm = document.querySelector('.js-modal-vnpay-form')

//paypal
const modalPaypal = document.querySelector('.js-modal-paypal')
const modalPaypalForm = document.querySelector('.js-modal-paypal-form')

//atm
const modalATM = document.querySelector('.js-modal-atm')
const modalATMForm = document.querySelector('.js-modal-atm-form')

//visa
const modalVisa = document.querySelector('.js-modal-visa')
const modalVisaForm = document.querySelector('.js-modal-visa-form')

// changeFloor
const floorA = document.querySelector('.js-floor-a')
const floorB = document.querySelector('.js-floor-b')

const seatFloorA = document.querySelector('#seat_table_a')
const seatFloorB = document.querySelector('#seat_table_b')

// function LOGIN
function showLogin() {
    modalRegister.classList.remove('open')
    modalForgot.classList.remove('open')
    modalLogin.classList.add('open')
}

function hideLogin() {
    modalLogin.classList.remove('open')
}

function showForgot() {
    modalLogin.classList.remove('open')
    modalForgot.classList.add('open')
}

modalLogin.addEventListener('click', hideLogin)

modalLoginForm.addEventListener('click', function(event) {
    event.stopPropagation()
})

// function REGISTER
function showRegister() {
    modalLogin.classList.remove('open')
    modalRegister.classList.add('open')
}

function hideRegister() {
    modalRegister.classList.remove('open')
}

modalRegister.addEventListener('click', hideRegister)

modalRegisterForm.addEventListener('click', function(event) {
    event.stopPropagation()
})

// function FORGOT
function hideForgot() {
    modalForgot.classList.remove('open')
}

modalForgot.addEventListener('click', hideForgot)

modalForgotForm.addEventListener('click', function(event) {
    event.stopPropagation()
})

// function INFO
function showInfo() {
    modalChangepass.classList.remove('open')
    modalInfo.classList.add('open')
}

function hideInfo() {
    modalInfo.classList.remove('open')
}

function showChangepass() {
    modalInfo.classList.remove('open')
    modalChangepass.classList.add('open')
}

modalInfo.addEventListener('click', hideInfo)

modalInfoForm.addEventListener('click', function(event) {
    event.stopPropagation()
})

// function CHANGEPASS
function hideChangepass() {
    modalChangepass.classList.remove('open')
}

modalChangepass.addEventListener('click', hideChangepass)

modalChangepassForm.addEventListener('click', function(event) {
    event.stopPropagation()
})

function hideBill() {
    modalBill.classList.remove('open')
}

modalBill.addEventListener('click', hideBill)

modalBillForm.addEventListener('click', function(event) {
    event.stopPropagation()
})

// function MOMO
function showMomo() {
    modalMomo.classList.add('open')
}

function hideMomo() {
    modalMomo.classList.remove('open')
}

modalMomo.addEventListener('click', hideMomo)

modalMomoForm.addEventListener('click', function(event) {
    event.stopPropagation()
})

// function ZALO
function showZalo() {
    modalZalo.classList.add('open')
}

function hideZalo() {
    modalZalo.classList.remove('open')
}

modalZalo.addEventListener('click', hideZalo)

modalZaloForm.addEventListener('click', function(event) {
    event.stopPropagation()
})

// function VNPAY
function showVnpay() {
    modalVnpay.classList.add('open')
}

function hideVnpay() {
    modalVnpay.classList.remove('open')
}

modalVnpay.addEventListener('click', hideVnpay)

modalVnpayForm.addEventListener('click', function(event) {
    event.stopPropagation()
})

// function PAYPAL
function showPaypal() {
    modalPaypal.classList.add('open')
}

function hidePaypal() {
    modalPaypal.classList.remove('open')
}

modalPaypal.addEventListener('click', hidePaypal)

modalPaypalForm.addEventListener('click', function(event) {
    event.stopPropagation()
})

// function ATM
function showATM() {
    modalATM.classList.add('open')
}

function hideATM() {
    modalATM.classList.remove('open')
}

modalATM.addEventListener('click', hideATM)

modalATMForm.addEventListener('click', function(event) {
    event.stopPropagation()
})

// function VISA
function showVisa() {
    modalVisa.classList.add('open')
}

function hideVisa() {
    modalVisa.classList.remove('open')
}

modalVisa.addEventListener('click', hideVisa)

modalVisaForm.addEventListener('click', function(event) {
    event.stopPropagation()
})

// function changeFloor

function changeFloorA() {
    floorB.classList.remove('active')
    floorA.classList.add('active')
    seatFloorA.style.display = 'flex'
    seatFloorB.style.display = 'none'

}

function changeFloorB() {
    floorA.classList.remove('active')
    floorB.classList.add('active')
    seatFloorB.style.display = 'flex'
    seatFloorA.style.display = 'none'
}

floorA.addEventListener('click', changeFloorA)
floorB.addEventListener('click', changeFloorB)

// function TOAST
function showSuccessToast(message) {
    toast({
        title: "Thành công!",
        message: message,
        type: "success",
        duration: 3000,
    });
}

function showErrorToast(message) {
    toast({
        title: "Thất bại!",
        message: message,
        type: "error",
        duration: 3000,
    });
}

// Toast function
function toast({
    title = "",
    message = "",
    type = "info",
    duration = 3000
}) {
    const main = document.getElementById("toast");
    if (main) {
        const toast = document.createElement("div");

        // Auto remove toast
        const autoRemoveId = setTimeout(function() {
            main.removeChild(toast);
        }, duration + 1000);

        // Remove toast when clicked
        toast.onclick = function(e) {
            if (e.target.closest(".toast__close")) {
                main.removeChild(toast);
                clearTimeout(autoRemoveId);
            }
        };

        const icons = {
            success: "fas fa-check-circle",
            info: "fas fa-info-circle",
            warning: "fas fa-exclamation-circle",
            error: "fas fa-exclamation-circle",
        };
        const icon = icons[type];
        const delay = (duration / 1000).toFixed(2);

        toast.classList.add("toast", `toast--${type}`);
        toast.style.animation = `slideInLeft ease .3s, fadeOut linear 1s ${delay}s forwards`;

        toast.innerHTML = `
                    <div class="toast__icon">
                        <i class="${icon}"></i>
                    </div>
                    <div class="toast__body">
                        <h3 class="toast__title">${title}</h3>
                        <p class="toast__msg">${message}</p>
                    </div>
                    <div class="toast__close">
                        <i class="fas fa-times"></i>
                    </div>
                `;
        main.appendChild(toast);
    }
}
</script>
<!-- end script login-regis-forgot -->

<script type="text/javascript" src="./js/jquery.validate.min.js"></script>
<script>
$('#formLogin').validate({
    rules: {
        email: {
            required: true,
            email: true,
        },
        password: {
            required: true,
            minlength: 6
        },
    },
    messages: {
        email: {
            required: "Bạn chưa nhập email",
            email: "Email chưa đúng định dạng",
        },
        password: {
            required: "Bạn phải nhập password",
            minlength: "Password tối thiểu là 6 ký tự"
        },
    },
});

$('#formRegister').validate({
    rules: {
        email: {
            required: true,
            email: true,
            remote: "./php/check-email.php"
        },
        password: {
            required: true,
            minlength: 6
        },
        password_confirmation: {
            required: true,
            equalTo: "#register_password"
        },
        fullname: {
            required: true,
        },
        phone: {
            required: true,
            remote: "./php/check-phone.php"
        },
    },
    messages: {
        email: {
            required: "Bạn chưa nhập email",
            email: "Email chưa đúng định dạng",
            remote: "Email đã tồn tại trong hệ thống"
        },
        password: {
            required: "Bạn phải nhập password",
            minlength: "Password tối thiểu là 6 ký tự"
        },
        password_confirmation: {
            required: "Bạn phải xác nhận password",
            equalTo: "Password nhập lại không khớp"
        },
        fullname: {
            required: "Bạn phải nhập họ tên"
        },
        phone: {
            required: "Bạn phải nhập số điện thoại",
            remote: "Số điện thoại đã tồn tại trong hệ thống"
        },
    },
});

$('#formForgot').validate({
    rules: {
        email: {
            required: true,
            email: true,
        },
    },
    messages: {
        email: {
            required: "Bạn chưa nhập email",
            email: "Email chưa đúng định dạng",
        },
    },
});

$('#formChangepass').validate({
    rules: {
        password: {
            required: true,
        },
        new_password: {
            required: true,
            minlength: 6
        },
        new_password_confirmation: {
            required: true,
            equalTo: "#changepass_new_password"
        },
    },
    messages: {
        password: {
            required: "Bạn phải nhập password",
        },
        new_password: {
            required: "Bạn phải nhập mật khẩu mới",
            minlength: "Password tối thiểu là 6 ký tự"
        },
        new_password_confirmation: {
            required: "Bạn phải xác nhận password",
            equalTo: "Password nhập lại không khớp"
        },
    },
});
</script>