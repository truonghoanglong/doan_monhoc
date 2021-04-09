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
    <!-- <link rel="stylesheet" href="hieuchang.css" /> -->
    <!-- <link rel="stylesheet" href="cuuho.css"> -->
    <link rel="stylesheet" href="{{('public/frontend/css/cuuho.css')}}" />
    <title>Đăng bài cứu hộ</title>
  </head>
  <body>
    
    
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="{{URL::to('bangdangbai')}}" class="sign-in-form" method="POST">
            {{csrf_field()}}
            <h2 class="title">ĐĂNG BÀI CỨU HỘ</h2>
      
            <div class="input-field">
              <i class="fas fa-taxi"></i>
              <!-- <input type="password" placeholder="Loại dịch vụ" /> -->
              <input type="text" name="Motathongtin" placeholder="Mô tả thông tin" />

            </div>

            <div class="input-field">
              <i class="fas fa-image"></i>
              <input id="flie" name="image" type="file" class="image" id="image" placeholder="" />
            </div>

            <div class="input-field">
                <i class="fas fa-phone"></i>
                <input type="text" name="SDT" placeholder="Số điện thoại" />
            </div>
            <div class="input-field">
                <i class="fas fa-map-marker-alt"></i>
                <input type="text" name="Diadiem" placeholder="Địa điểm" />
            </div>

            <div class="input-field">
              <i class="fas fa-map-marker-alt"></i>
              <input type="date" name="Ngay_Dangbai" placeholder="Địa điểm" />
          </div>

            <input type="submit" value="SUBMIT" class="btn solid" />
            
            </div>
          </form>

          <!-- -------------------- -->

         
        </div>
      </div>

      
    </div>

    <script src="{{('public/frontend/js/chang.js')}}"></script>
    
  </body>
</html>
  @endsection