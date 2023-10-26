function checkLogin() {
  var email = document.getElementById("login_email").value;
  var password = document.getElementById("login_password").value;

  $.ajax({
    url: "./php/getData.php",
    type: "post",
    dataType: "json",
    data: {
      request: "login",
      email: email,
      password: password,
    },
    success: function (data) {
      console.log(typeof data);
      if (data == "Thành công") {
        location.reload(true);
        $("#loadingGif").hide();
      } else {
        $("#loadingGif").hide();
        showErrorToast(data);
      }
    },
    beforeSend: function () {
      $("#loadingGif").show();
    },
  });
  event.preventDefault(); // <- avoid reloading
}

function checkRegister() {
  var email = document.getElementById("register_email").value;
  var password = document.getElementById("register_password").value;
  var fullname = document.getElementById("register_fullname").value;
  var phone = document.getElementById("register_phone").value;

  $.ajax({
    url: "./php/getData.php",
    type: "post",
    dataType: "json",
    data: {
      request: "register",
      email: email,
      password: password,
      fullname: fullname,
      phone: phone,
    },
    success: function (data) {
      console.log(typeof data);
      console.log(data);
      if (data == "Chúc mừng bạn đã đăng ký thành công") {
        clearInput();
        $("#loadingGif").hide();
        showSuccessToast(data);
      } else {
        $("#loadingGif").hide();
        showErrorToast(data);
      }
    },
    beforeSend: function () {
      $("#loadingGif").show();
    },
  });
  event.preventDefault();
}

function checkForgot() {
  var email = document.getElementById("forgot_email").value;

  $.ajax({
    url: "./php/getData.php",
    type: "post",
    dataType: "json",
    data: {
      request: "forgot",
      email: email,
    },
    success: function (data) {
      console.log(typeof data);
      console.log(data);
      if (data == "Mật khẩu mới đã được gửi về email của bạn") {
        clearInput();
        $("#loadingGif").hide();
        showSuccessToast(data);
      } else if (data == "Email này chưa được đăng ký") {
        $("#loadingGif").hide();
        showErrorToast(data);
      } else {
        $("#loadingGif").hide();
        showErrorToast(data);
      }
    },
    beforeSend: function () {
      $("#loadingGif").show();
    },
  });
  event.preventDefault();
}

function checkChangepass() {
  var password = document.getElementById("changepass_password").value;
  var new_password = document.getElementById("changepass_new_password").value;

  $.ajax({
    url: "./php/getData.php",
    type: "post",
    dataType: "json",
    data: {
      request: "changepass",
      password: password,
      new_password: new_password,
    },
    success: function (data) {
      console.log(typeof data);
      console.log(data);
      if (data == "Bạn đã đổi mật khẩu thành công") {
        clearInput();
        $("#loadingGif").hide();
        showSuccessToast(data);
      } else {
        $("#loadingGif").hide();
        showErrorToast(data);
      }
    },
    beforeSend: function () {
      $("#loadingGif").show();
    },
  });
  event.preventDefault();
}

function checkBill(idTicket) {
  $.ajax({
    url: "./php/getData.php",
    type: "post",
    dataType: "json",
    data: {
      request: "bill",
      idTicket: idTicket,
    },
    success: function (data) {
      console.log(typeof data);
      console.log(data[0]);
      console.log(data[0].IdCTBV);
      if (data != null) {
        $("#loadingGif").hide();
        getInfoBill(data[0]);
      } else {
        $("#loadingGif").hide();
      }
    },
    beforeSend: function () {
      $("#loadingGif").show();
    },
  });
  event.preventDefault();
}

function getInfoBill(data) {
  html = `<div class="bill__heading">
            <p>Thông tin mua vé</p>
          </div>

          <div class="spacer"></div>

          <div class="form-info">
            <h3>Thông tin khách hàng</h3>
            <p>Tên: ${data.HoTen}</p>
            <p>Email: ${data.email}</p>
            <p>Số điện thoại: ${data.sdt}</p>
          </div>

          <div class="form-info">
            <h3>Thông tin chuyến</h3>
            <p>Mã vé: ${data.IdCTBV}</p>
            <p>Tuyến đường: ${data.TenTuyen}</p>
            <p>Ngày đi: ${data.NgayDi}</p>
            <p>Giờ: ${data.GioDi}</p>
            <p>Nhà xe: ${data.Ten_NX}</p>
            <p>Loại xe: ${data.Loai_xe}</p>
            <p>Số ghế: ${data.TenChoNgoi}</p>
            <p>Điểm lên xe: ${data.DiaDiemDi}</p>
            <p>Giá: ${data.GiaVe}</p>
          </div>
  `;
  $(".bill-form").html(html);
  modalBill.classList.add("open");
}

function clearInput() {
  document.getElementById("register_email").value = "";
  document.getElementById("register_password").value = "";
  document.getElementById("register_password_confirmation").value = "";
  document.getElementById("register_fullname").value = "";
  document.getElementById("register_phone").value = "";
  document.getElementById("forgot_email").value = "";
  document.getElementById("changepass_password").value = "";
  document.getElementById("changepass_new_password").value = "";
  document.getElementById("changepass_new_password_confirmation").value = "";
}
