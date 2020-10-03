<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>gosehat.org</title>

    <!-- Fontfaces CSS-->
    <link href="{{url('frontend/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{url('frontend/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{url('frontend/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{url('frontend/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{url('frontend/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{url('frontend/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{url('frontend/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{url('frontend/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{url('frontend/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{url('frontend/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{url('frontend/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{url('frontend/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{url('frontend/css/theme.css') }}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="{{url('frontend/images/icon/logo.png') }}" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                       <li class="has-sub">
                            <a class="js-arrow" href="#" ><a class="nav-link" href="{{('layouts') }}/home.php">
                                <i class="fas fa-home"></i>Home</a>
                        </li> 
                        <li>
                            <a href="download.html">
                                <i class="fas fa-download"></i>Input Data</a>
                        </li>
                       <li>
                            <a href="edit.html">
                                <i class="fas fa-edit"></i>Edit</a>
                        </li>
                        
                        
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{url('frontend/images/icon/logo_Gosehat_.png') }}" alt="Go Sehat" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                    <li class="has-sub">
                            <a class="js-arrow" href="#" ><a class="nav-link" href="{{('health') }}/index.html">
                                <i class="fas fa-home"></i>Home</a>
                        </li>
                        </li>
                        <li>
                            <a href="download.html">
                                <i class="fas fa-download"></i>Input Data</a>
                        </li>
                        <li>
                            <a href="edit.html">
                                <i class="fas fa-edit"></i>Edit</a>
                        </li>
                        
                        
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                           
                            <div class="header-button">
                               
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="{{url('frontend/images/icon/divv.jpg') }}" alt="Diva Yulliana" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Diva Yulliana</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="{{url('frontend/images/icon/divv.jpg') }}" alt="Diva Yulliana" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Diva Yulliana</a>
                                                    </h5>
                                                    <span class="email">diva.yuu@gmail.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#"><a href="/login">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="editdata-wrap">
                                    <h2 class="title-1">Input Data</h2>
                                </div>
                            </div>
                        </div>
                        <div class="content">
<section class="header5 cid-r7o72Bhmed mbr-fullscreen" id="header5-3">
    <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(130, 130, 130);">
    </div>
    <div class="form-row">
             <div class="col-md-6 form-group">
              <div class="heading">
                Nama Fasilitas Kesehatan*
              </div>
              <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
             </div>
             <div class="col-md-6 form-group">
              <div class="heading">
               Harga
              </div>
              <input type="tel" class="form-control" name="phone" id="phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
             </div>
             <div class="col-md-6 form-group">
              <div class="heading">
                Jenis Fasilitas Kesehatan*
              </div>
              <select name="department" id="department" class="form-control">
                <option value="Rumah Sakit">Rumah Sakit</option>
                <option value="Klinik">Klinik</option>
                <option value="Puskesmas">Puskesmas</option>
                <option value="Lab">Lab</option>
              </select>
              <div class="validate"></div>
             </div>
             <div class="col-md-6 form-group">
              <div class="heading">
               Nomor Telepon
              </div>
              <input type="tel" class="form-control" name="phone" id="phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
             </div>
             <div class="col-md-6 form-group">
              <div class="heading">
                Jenis Tes Yang Tersedia*
              </div>
              <select name="doctor" id="doctor" class="form-control">
                <option value="Rapid">Rapid</option>
                <option value="PCR/Swab">PCR/Swab</option>
              </select>
              <div class="validate"></div>
             </div>
             <div class="col-md-6 form-group">
              <div class="heading">
                Alamat
              </div>
              <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
             </div>
            </div>
            <br>
            <div class="container-contact100-form-btn">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8165665.119412988!2d98.44432135440151!3d-2.0990443217572796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031c4d88400e5ef%3A0x4835e4a73fb028d0!2sJl.%20Dr.%20Hadrianus%20Sinaga%2C%2022392!5e0!3m2!1sid!2sid!4v1601184681144!5m2!1sid!2sid" width="1000" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <span>
            <br>
            <button class="au-btn au-btn-icon au-btn--blue">
              <i class="zmdi zmdi"></i>Submit</button>
            <i class="fa fa-long-arrow-right m-1-7" aria-hidden="true"></i>
            </span>
            <br>
            </button>
</section>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2020 . Template by <a href="https://gosehat.com">Gosehat</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{url('frontend/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{url('frontend/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{url('frontend/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{url('frontend/vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{url('frontend/vendor/wow/wow.min.js') }}"></script>
    <script src="{{url('frontend/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{url('frontend/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{url('frontend/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{url('frontend/vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{url('frontend/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{url('frontend/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{url('frontend/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{url('frontend/vendor/select2/select2.min.js') }}">
    </script>

    <!-- Main JS-->
    <script src="{{url('frontend/js/main.js') }}"></script>

</body>

</html>
<!-- end document-->
