<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Shop One</title>
    <link href="https://cdn.jsdelivr.net/npm/swiper@11.0.5/swiper-bundle.min.css" rel="stylesheet"></head>
    <script src="https://kit.fontawesome.com/930e3b0b55.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
       <!-- Fontfaces CSS-->
    <link href="{{ asset('css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    {{-- <link href="{{ asset('vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all"> --}}
    <link href="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">
          <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Main CSS-->
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet" media="all">
</head>
<body>

    <!-- PAGE CONTAINER-->
    <div class="page-container">
         <!-- HEADER DESKTOP-->
         <header class="header-desktop">
            <div class="section__content section__content--p30">
                <div class="container-fluid">

                    <div class="menu-btn">
                        <i class="fas fa-bars"></i>
                    </div>
                    <div class="side-bar">
                        <div class="close-btn">
                            <i class="fas fa-times"></i>
                        </div>
                        <div class="menu">
                            <div class="item"><a href="{{ route('dashboard') }}"><i class="fas fa-desktop"></i>Dashboard</a></div>
                            <div class="item"><a class="sub-btn" href="#"><i class="fas fa-table"></i>Posts
                                    <i class="fas fa-angle-right dropdown"></i></a>
                                <div class="sub-menu">
                                    <a href="{{ route('post#createPage') }}" class="sub-item">Create Post</a>
                                    <a href="#" class="sub-item">Sub Item 02</a>
                                    <a href="#" class="sub-item">Sub Item 03</a>
                                </div>

                            </div>
                            <div class="item"><a href="#"><i class="fas fa-th"></i>Forms</a></div>
                            <div class="item"><a class="sub-btn" href="#"><i class="fas fa-cogs"></i>Settings
                                    <i class="fas fa-angle-right dropdown"></i></a>
                                <div class="sub-menu">
                                    <a href="#" class="sub-item">Sub Item 01</a>
                                    <a href="#" class="sub-item">Sub Item 02</a>
                                    <a href="#" class="sub-item">Sub Item 03</a>
                                </div>
                            </div>
                            <div class="item"><a href="#"><i class="fas fa-circle"></i>About</a></div>
                        </div>
                    </div>
                    <div class="header-wrap">



                        <form class="ml-5 form-header" action="" method="POST">
                            <input class="au-input au-input--xl" type="text" name="search"
                                placeholder="Search for datas &amp; reports..." />
                            <button class="au-btn--submit" type="submit">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </form>
                        <div class="header-button">
                            <div class="noti-wrap">
                                <div class="noti__item js-item-menu">
                                    <i class="zmdi zmdi-notifications"></i>
                                    <span class="quantity">3</span>
                                    <div class="notifi-dropdown js-dropdown">
                                        <div class="notifi__title">
                                            <p>You have 3 Notifications</p>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c1 img-cir img-40">
                                                <i class="zmdi zmdi-email-open"></i>
                                            </div>
                                            <div class="content">
                                                <p>You got a email notification</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c2 img-cir img-40">
                                                <i class="zmdi zmdi-account-box"></i>
                                            </div>
                                            <div class="content">
                                                <p>Your account has been blocked</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c3 img-cir img-40">
                                                <i class="zmdi zmdi-file-text"></i>
                                            </div>
                                            <div class="content">
                                                <p>You got a new file</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__footer">
                                            <a href="#">All notifications</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="account-wrap">
                                <div class="clearfix account-item js-item-menu">
                                    <div class="image">
                                        <img src="{{ asset('storage/'.Auth::user()->image) }}" alt="{{ Auth::user()->name }}" />
                                    </div>
                                    <div class=" content" style="color: white;">
                                        <a class="js-acc-btn" href="#">{{ Auth::user()->name }}</a>
                                    </div>
                                    <div class="account-dropdown js-dropdown">
                                        <div class="clearfix info">
                                            <div class="image">
                                                <a href="#">
                                                    <img src="{{ asset('storage/'.Auth::user()->image) }}" alt="John Doe" />
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h5 class=" name">
                                                    <a href="#">{{ Auth::user()->name }}</a>
                                                </h5>
                                                <span class="email">{{  Auth::user()->email }}</span>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <button type="submit" class="col-12"><i class="fa-solid fa-key"></i>Password</button>
                                                </a>
                                            </div>
                                        </div>
                                      <form method="post" action="{{ route('logout') }}">
                                        @csrf
                                        <div class="account-dropdown__footer">
                                         <a><button type="submit" class="col-12"> <i class="zmdi zmdi-power"></i>Logout</button></a>
                                        </div>
                                    </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
            <!-- HEADER DESKTOP-->
            <!-- END PAGE CONTAINER-->


            @yield('content')
            <footer>
                <div class="row footer">
                  <div class="col-xl-7 col-lg col-md-8">
                    <p class="text-dark">Copyright ©2024 All rights reserved | This template is made <span class="icon"><i
                          class="fa-solid fa-heart"></i> </span><span class="by">by</span> <span class="name">Htay Htay
                        Thwe</span></p>
                  </div>
                  <div class="col-xl-4 col-lg col-md-8">
                    <ul class="text-dark">
                      <li>About</li>
                      <li>subscribe</li>
                      <li>Contact</li>
                      <li>Support</li>
                    </ul>
                  </div>
                </div>
            </footer>
    </div>


    <script type="text/javascript">
        $(document).ready(function(){
                $('.sub-btn').click(function(){
                    $(this).next('.sub-menu').slideToggle();
                    $(this).find('.dropdown').toggleClass('rotate');

                });
                $('.menu-btn').click(function(){
                    $('.side-bar').addClass('active');
                    $('.menu-btn').css('visibility','hidden');
                });
                $('.close-btn').click(function(){
                    $('.side-bar').removeClass('active');
                    $('.menu-btn').css('visibility','visible');
                })
            })
    </script>
</body>
{{-- swiper --}}
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- Jquery JS-->
<script src="{{ asset('vendor/jquery-3.2.1.min.js') }}"></script>
<!-- Bootstrap JS-->
<script src="{{ asset('vendor/bootstrap-4.1/popper.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
<!-- Vendor JS       -->
<script src="{{ asset('vendor/slick/slick.min.js') }}">
</script>
<script src="{{ asset('vendor/wow/wow.min.js') }}"></script>
<script src="{{ asset('vendor/animsition/animsition.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
</script>
<script src="{{ asset('vendor/counter-up/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('vendor/counter-up/jquery.counterup.min.js') }}">
</script>
<script src="{{ asset('vendor/circle-progress/circle-progress.min.js') }}"></script>
<script src="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('vendor/chartjs/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/select2/select2.min.js') }}">
</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11.0.5/swiper-bundle.min.js"></script>

<!-- Main JS-->
<script src="{{ asset('js/main.js') }}"></script>
</html>
