@extends('layout')    
@section('content')

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="{{('public/frontend/css/login.css')}}" />
    <title>Đăng ký và đăng nhập</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="{{URL::to('/dangbai')}}" class="sign-in-form" >
            {{ csrf_field() }}
            <h2 class="title">ĐĂNG NHẬP KHÁCH HÀNG</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="khachhang_email" placeholder="Tên tài khoản" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="khachhang_password" placeholder="Mật khẩu" />
            </div>
            <input type="submit" value="ĐĂNG NHẬP" class="btn solid" />
            <p class="social-text">Đăng nhập bằng phương thức khác</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>

          <!-- -------------------- -->

          <form action="{{URL::to('/dangkykhachhang')}}" class="sign-up-form" >
            {{ csrf_field() }}
            <h2 class="title">Đăng ký</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="Ten_KH" placeholder="Tên Khách Hàng" />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="CMND" placeholder="CMND" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="Email"  placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="text" name="SDT" placeholder="Số điện thoại" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="text" name="Dia_Chi" placeholder="Địa chỉ" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password"  name="Mat_Khau" placeholder="Mật Khẩu" />
            </div> 
            
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password"  name="Mat_Khau_repeat" placeholder="Nhập Lại Mật khẩu" />
            </div>
            <input type="submit" class="btn" value="Đăng ký" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>TẠO TÀI KHOẢN KHÁCH HÀNG</h3>
            <p>
              Nếu bạn chưa có tài khoản hay đăng ký tại đây
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Đăng ký
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Liên hệ với chúng tôi</h3>
            <p>
              Hãy nhớ tới chúng tôi khi bạn gặp phải sự cố khi lưu thông.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Đăng nhập
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <!-- <script src="login.js"></script> -->
    <script src="{{('public/frontend/js/login.js')}}"></script>
  </body>
</html>
@endsection
