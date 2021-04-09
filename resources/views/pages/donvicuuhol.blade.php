{{-- @extends('layout')    
@section('content') --}}

<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Login & Signup Form | CodingNepal</title> -->
    <!-- <link rel="stylesheet" href="hieulogin.css"> -->
    <link rel="stylesheet" href="{{('public/frontend/css/hieulogin.css')}}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="wrapper">
      <div class="title-text">
        <div class="title login">Đăng Nhập Đơn Vị Cứu Hộ</div>
        <div class="title signup">Đăng ký <br>tại đây</div>
      </div>
<div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Đăng nhập</label>
          <label for="signup" class="slide signup">Đăng ký</label>
          <div class="slider-tab">
</div>
</div>
<div class="form-inner">
          <form action="{{URL::to('/dsbaidang')}}" class="login" method="get">
            {{csrf_field()}}
            <div class="field">
              <input type="text" placeholder="Tên tài khoản" name="donvi_email" required>
            </div>
            <div class="field">
              <input type="password" placeholder="Mật khẩu" name="donvi_matkhau" required>
            </div>
<div class="pass-link">
<a href="#">Quên mật khẩu</a></div>
<div class="field btn">
              <div class="btn-layer">
</div>
    <input type="submit" value="Đăng nhập">
</div>
<div class="signup-link">
Chưa có tài khoản <a href="">Hãy đăng ký</a></div>
</form>
<form action="#" class="signup">
            <div class="field">
              <input type="text" placeholder="Tên tài khoản or Email" required>
            </div>

            <div class="field">
              <input type="text" placeholder="Số điện thoại" required>
            </div>

            <div class="field">
              <input type="text" placeholder="Địa chỉ " required>
            </div>

            <div class="field">
              <!-- <input type="text" placeholder="Nghiệp vụ" required> -->
              <select class="combobox"  name="cars" id="cars">
    
                <optgroup label="NGHIỆP VỤ">
                  <option value="volvo"> NGHIỆP VỤ </option>
                  <option value="volvo"> XE MÁY </option>
                  <option value="saab">Ô TÔ</option>
                </optgroup>
            
              </select>
            </div>

            <div class="field">
              <input type="password" placeholder="Mật khẩu" required>
            </div>

            <div class="field">
              <input type="password" placeholder="Nhập lại mật khẩu" required>
            </div>

            <div class="field btn">
              <div class="btn-layer">
            </div>
<input type="submit" value="Signup">
            </div>
</form>
</div>
</div>
</div>
<script>
      const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector("form.login");
      const loginBtn = document.querySelector("label.login");
      const signupBtn = document.querySelector("label.signup");
      const signupLink = document.querySelector("form .signup-link a");
      signupBtn.onclick = (()=>{
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
      });
      loginBtn.onclick = (()=>{
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
      });
      signupLink.onclick = (()=>{
        signupBtn.click();
        return false;
      });
    </script>

  </body>
</html>
{{-- @endsection --}}
