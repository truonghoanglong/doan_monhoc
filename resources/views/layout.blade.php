<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="{{asset('public/frontend/css/styles.css')}}">
        
        <!-- font awesome -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <script src="https://kit.fontawesome.com/yourcode.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

        <title>LTH cứu hộ</title>
    </head>
    <body>

        <!--========== SCROLL TOP ==========-->
        <a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-chevron-up scrolltop__icon'></i>
        </a>

        <!--========== HEADER ==========-->
        <header class="l-header" id="header">
            <nav class="nav bd-container">
                <img  class="logo" src="{{('public/frontend/images/logo.png')}}" alt="">
                

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="{{URL::to('/trang-chu    ')}}" class="nav__link active-link">Trang chủ</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">Đối tác</a></li>
                        <li class="nav__item"><a href="#services" class="nav__link">Phục vụ</a></li>
                        <li class="nav__item"><a href="#menu" class="nav__link">Dịch vụ</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Liên hệ</a></li>

                        <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                        <li><i class='bx bx-list-ol'id="setting"></i></li>
                        <a href="#"><li><i class='bx bx-log-out' id="logout"></i></li></a>
                        
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

         
        @yield('content')

         
        <!--========== FOOTER ==========-->
        <footer class="footer section bd-container">
            <div class="footer__container bd-grid">
                <div class="footer__content">
                    <a href="#" class="footer__logo">LTH cứu hộ</a>
                    <span class="footer__description">Mạng xã hội</span>
                    <div>
                        <a href="#" class="footer__social"><i class='bx bxl-facebook'></i></a>
                        <a href="#" class="footer__social"><i class='bx bxl-instagram'></i></a>
                        <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
                    </div>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Nguyễn Tấn Thắng</h3>
                    <ul>
                        <li><a href="#" class="footer__link"><b>Chức vụ:</b></a></li>
                        <li><a href="#" class="footer__link">ADMIN</a></li>
                        <li><a href="#" class="footer__link"><b>Số điện thoại:</b></a></li>
                        <li><a href="#" class="footer__link">0845401110</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Trương Hoàng Long</h3>
                    <ul>
                        <li><a href="#" class="footer__link"><b>Chức vụ:</b></a></li>
                        <li><a href="#" class="footer__link">Khách hàng</a></li>
                        <li><a href="#" class="footer__link"><b>Số điện thoại:</b></a></li>
                        <li><a href="#" class="footer__link">0961613630</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Phạm Văn Hiếu</h3>
                    <ul>
                        <li><a href="#" class="footer__link"><b>Chức vụ:</b></a></li>
                        <li><a href="#" class="footer__link">Đơn vị cứu hộ</a></li>
                        <li><a href="#" class="footer__link"><b>Số điện thoại:</b></a></li>
                        <li><a href="#" class="footer__link">0912345678</a></li>
                    </ul>
                </div>
            </div>

            <p class="footer__copy">&#169; 2021 Bản quyền thuộc Team LTH. No copy</p>
        </footer>

        <!--========== SCROLL REVEAL ==========-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--========== MAIN JS ==========-->
        <script src="{{asset('public/frontend/js/main.js')}}"></script>
        <script src="{{asset('public/frontend/js/login.js')}}"></script>
    </body>
</html>