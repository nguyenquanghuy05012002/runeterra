    <!-- start LOGIN -->
    <div class="login js-modal-login">
        <form action="" method="POST" class="login-form js-modal-login-form" id="formLogin"
            onsubmit="return checkLogin()">
            <h3 class="heading">Đăng nhập</h3>

            <div class="spacer"></div>

            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input id="login_email" name="email" type="text" placeholder="VD: runeterra@gmail.com"
                    class="form-control">
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Mật khẩu</label>
                <input id="login_password" name="password" type="password" placeholder="Nhập mật khẩu"
                    class="form-control">
                <span class="form-message"></span>
            </div>

            <input type="submit" name="submit" class="form-submit" value="Đăng nhập">
            <p style="color: #777777; margin-bottom: 0px">Bạn chưa có <a onclick="showRegister()"
                    style="color: #007bff; cursor: pointer;">tài khoản</a> ?</p>
            <p style="cursor:pointer; margin-top: 0px">
                <a onclick="showForgot()">Quên mật khẩu</a>
            </p>
        </form>
    </div>
    <!-- end LOGIN -->

    <!-- start REGISTER -->
    <div class="login js-modal-register">
        <form action="" method="POST" class="login-form js-modal-register-form" id="formRegister"
            onsubmit="return checkRegister()">
            <h3 class="heading">Đăng ký</h3>

            <div class="spacer"></div>

            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input id="register_email" name="email" type="text" placeholder="VD: email@domain.com"
                    class="form-control">
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Mật khẩu</label>
                <input id="register_password" name="password" type="password" placeholder="Nhập mật khẩu"
                    class="form-control">
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <label for="password_confirmation" class="form-label">Nhập lại mật khẩu</label>
                <input id="register_password_confirmation" name="password_confirmation" placeholder="Nhập lại mật khẩu"
                    type="password" class="form-control">
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <label for="fullname" class="form-label">Tên đầy đủ</label>
                <input id="register_fullname" name="fullname" type="text" placeholder="VD: Nguyễn Quang Huy"
                    class="form-control">
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <label for="phone" class="form-label">Số điện thoại</label>
                <input id="register_phone" name="phone" type="text" placeholder="VD: 0987654321" class="form-control">
                <span class="form-message"></span>
            </div>

            <input type="submit" name="submit" class="form-submit" value="Đăng ký">
            <p style="color: #777777;">Bạn muốn <a onclick="showLogin()" style="color: #007bff; cursor: pointer;">đăng
                    nhập</a> ?</p>
        </form>
    </div>
    <!-- end REGISTER -->

    <!-- start FORGOT -->
    <div class="login js-modal-forgot">
        <form action="" method="POST" class="login-form js-modal-forgot-form" id="formForgot"
            onsubmit="return checkForgot()">
            <h3 class="heading">Quên mật khẩu</h3>

            <div class="spacer"></div>

            <div>
                <p>Nhập email bạn đã dùng để đăng ký tài khoản</p>
            </div>

            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input id="forgot_email" name="email" type="text" placeholder="VD: email@domain.com"
                    class="form-control">
                <span class="form-message"></span>
            </div>

            <input type="submit" name="submit" class="form-submit" value="Gửi yêu cầu">

            <p style="color: #777777;">Bạn muốn <a onclick="showLogin()" style="color: #007bff; cursor: pointer;">đăng
                    nhập</a> ?</p>
        </form>
    </div>
    <!-- end FORGOT -->

    <!-- start INFO -->
    <div class="login js-modal-info">
        <form action="" method="POST" class="login-form js-modal-info-form" id="formInfo" onclick="return checkInfo()">
            <h3 class="heading">Thông tin cá nhân</h3>

            <div class="spacer"></div>

            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input id="info_email" name="email" type="text" class="form-control" value="admin@gmail.com" disabled>
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <label for="fullname" class="form-label">Tên đầy đủ</label>
                <input id="info_fullname" name="fullname" type="text" value="Nguyễn Quang Huy" disabled
                    class="form-control">
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <label for="phone" class="form-label">Số điện thoại</label>
                <input id="info_phone" name="phone" type="text" value="0987654321" class="form-control" disabled>
                <span class="form-message"></span>
            </div>

            <p style="cursor:pointer">
                <a onclick="showChangepass()">Đổi mật khẩu</a>
            </p>
        </form>
    </div>
    <!-- end INFO -->

    <!-- start CHANGEPASS -->
    <div class="login js-modal-changepass">
        <form action="" method="POST" class="login-form js-modal-changepass-form" id="formChangepass"
            onsubmit="return checkChangepass()">
            <h3 class="heading">Đổi mật khẩu</h3>

            <div class="spacer"></div>

            <div class="form-group">
                <label for="password" class="form-label">Mật khẩu hiện tại</label>
                <input id="changepass_password" name="password" type="password" placeholder="Nhập mật khẩu"
                    class="form-control">
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Mật khẩu mới</label>
                <input id="changepass_new_password" name="new_password" type="password" placeholder="Nhập mật khẩu"
                    class="form-control">
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <label for="password_confirmation" class="form-label">Nhập lại mật khẩu</label>
                <input id="changepass_new_password_confirmation" name="new_password_confirmation"
                    placeholder="Nhập lại mật khẩu" type="password" class="form-control">
                <span class="form-message"></span>
            </div>

            <input type="submit" name="submit" class="form-submit" value="Đổi mật khẩu">

            <p><a onclick="showInfo()" style="cursor: pointer;">Quay lại</a></p>
        </form>
    </div>
    <!-- end CHANGEPASS -->

    <div id="toast"></div>
    <div style="display: none;">
        <div onclick="showSuccessToast('4672537');" class="btn btn--success">Show success toast</div>
        <div onclick="showErrorToast('ffusyad');" class="btn btn--danger">Show error toast</div>
    </div>

    <!-- start TICKET -->
    <div class="bill js-modal-bill">
        <form action="" method="POST" class="bill-form js-modal-bill-form" id="form-1">

        </form>

    </div>
    <!-- end TICKET -->

    <script>
$.ajax({
    url: "./php/getData.php",
    type: "post",
    dataType: "json",
    data: {
        request: "info",
    },
    success: function(data) {
        html = `    
          <h3 class="heading">Thông tin cá nhân</h3>

          <div class="spacer"></div>

          <div class="form-group">
              <label for="email" class="form-label">Email</label>
              <input id="info_email" name="email" type="text" class="form-control" value="${data.email}" disabled>
              <span class="form-message"></span>
          </div>

          <div class="form-group">
              <label for="fullname" class="form-label">Tên đầy đủ</label>
              <input id="info_fullname" name="fullname" type="text" value="${data.HoTen}" disabled
                  class="form-control">
              <span class="form-message"></span>
          </div>

          <div class="form-group">
              <label for="phone" class="form-label">Số điện thoại</label>
              <input id="info_phone" name="phone" type="text" value="${data.sdt}" class="form-control" disabled>
              <span class="form-message"></span>
          </div>

          <p style="cursor:pointer">
              <a onclick="showChangepass()">Đổi mật khẩu</a>
          </p>`;
        $("#formInfo").html(html);
    },
});
    </script>