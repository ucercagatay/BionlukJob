<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HERMESARTSTUDIO | Panel</title>
    <link rel="stylesheet" href="{{asset('panel_assets/vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset('panel_assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('panel_assets/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('panel_assets/vendors/typicons/typicons.css')}}">
    <link rel="stylesheet" href="{{asset('panel_assets/vendors/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('panel_assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('panel_assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('panel_assets/js/select.dataTables.min.css')}}">
    <link rel="stylesheet" href="{{asset('panel_assets/css/vertical-layout-light/style.css')}}">
    <link rel="stylesheet" href="{{asset('panel_assets/css/vertical-layout-light/style2.css')}}">
    {{--    <link rel="stylesheet" href="{{asset('panel_assets/vendors/css/vendor.bundle.base.css')}}">--}}
    <link href="{{asset("assets/css/pdf.css")}}" rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
          href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="icon" href="{{asset('image/logo.ico')}}" type="image/x-icon">
    <link href="{{asset("fix.css")}}" rel="stylesheet"/>

    <style>
        .clearfix form div.cke_inner,
        .clearfix form div.cke_1{
            width: 100%;
        }
        .btn-success{
            height: max-content;
        }
        .input-group > .form-control,
        .form-control:read-only,
        .clearfix form div input{
            width: max-content;
            margin-bottom: 20px;
        }
        li{
            list-style: none !important;
        }
        .card{
            overflow: hidden ;
        }
        .dataTables_wrapper .dataTables_length select {
            color: black;
        }

        .sidebar .nav .nav-item .nav-link {
            border-radius: 0px 20px 0px 0px;
        }

        .navbar .navbar-brand-wrapper .navbar-brand img {
            height: 64px;
        }

        @media (max-width: 480px) {
            .navbar .navbar-brand-wrapper {
                width: 75px;
                height: auto !important;
            }
        }

        .navbar .navbar-brand-wrapper .navbar-brand img {
            width: 100%;
        }

        @media (max-width: 991px) {
            .navbar .navbar-menu-wrapper {
                width: calc(100% - 75px);
            }

            .brand-logo {
                display: none !important;
            }

            .brand-logo-mini {
                display: none !important;
            }
        }
        .navbar .navbar-brand-wrapper{
            padding-right: 0;
            padding-left: 0;
            display: flex !important;
            justify-content: center !important;
        }
        .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown{
            top: 40px;
        }
        .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item{
            border-bottom: none;
        }
        .sidebar .nav.sub-menu .nav-item .nav-link.active{
            color: #484848;
        }
        .sidebar .nav.sub-menu .nav-item .nav-link.active:hover{
            color: #1F3BB3;
        }
        select{
            display: block;
            border-radius: 4px;
            padding: 5px 10px;
            text-decoration: none !important;
            background-color: white;
            border-color: #dee2e6;
            width: 100%;
        }
        select option{
            text-decoration: none;
        }
        .clearfix div{
            margin-bottom: 20px;
        }
        .clearfix div input,
        .clearfix div select{
            max-width: 400px;
            height: max-content;
        }
        .clearfix button{
            width: max-content;
        }
        .btn{
            padding: 8px 20px !important;
        }
        table.dataTable thead th,
        table.dataTable thead td,
        table.dataTable tbody tr:last-child td{
            border-bottom: 1px solid #ddd;
        }
        .container{
            width: 100% !important;
            max-width: 100% !important;
            padding: 0;

        }
        .col-sm-12{
        }
        .sidebar,
        .navbar .navbar-menu-wrapper,
        .navbar .navbar-brand-wrapper,
        .navbar{
            background:#0f161e ;
        }
        .navbar .navbar-brand-wrapper .navbar-brand img{
            width: 90%;
        }
        .navbar .navbar-brand-wrapper .navbar-brand img{
            height: max-content;
        }
        .navbar .navbar-menu-wrapper .navbar-nav .nav-item .welcome-text,
        .navbar .navbar-menu-wrapper .navbar-nav .nav-item .welcome-sub-text,
        .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown i,
        .sidebar .nav .nav-item .nav-link .menu-title,
        .sidebar .nav .nav-item .nav-link i.menu-icon,
        .nav-item .btn{
            color: white;
        }
        .text-black {
            color: #c6a556;
        }
        .nav-item .btn{
            background: #c6a556;
            border: 1px solid #c6a556;
            margin-top: 15px !important;
        }
        .nav-item .btn-info:active{
            border: none;
            outline: none;
        }
        .sidebar .nav:not(.sub-menu) > .nav-item > .nav-link[aria-expanded="true"],
        .sidebar .nav:not(.sub-menu) > .nav-item > .nav-link[aria-expanded="true"]:hover,
        .sidebar .nav.sub-menu,
        .sidebar .nav.sub-menu .nav-item .nav-link,
        .sidebar .nav.sub-menu .nav-item .nav-link:hover,
        .sidebar .nav:not(.sub-menu) > .nav-item:hover > .nav-link, .sidebar .nav:not(.sub-menu) > .nav-item:hover[aria-expanded="true"],
        .sidebar .nav .nav-item.active > .nav-link,
        .sidebar .nav.sub-menu .nav-item .nav-link.active{
            background: #c6a556;
            color: white;
        }
        .sidebar .nav .nav-item:hover > .nav-link i, .sidebar .nav .nav-item:hover > .nav-link .menu-title, .sidebar .nav .nav-item:hover > .nav-link .menu-arrow,
        .sidebar .nav .nav-item.active > .nav-link i, .sidebar .nav .nav-item.active > .nav-link .menu-title, .sidebar .nav .nav-item.active > .nav-link .menu-arrow{
            color: white;
        }
        .sidebar{
            padding-right: 10px;
        }
        .clearfix form{
            display: flex;
            flex-wrap: wrap;
        }
        .clearfix form div{
            display: flex;
            flex-direction: column;
            width: 48%;
        }
        .clearfix form div:nth-child(odd){
            margin-right: 4%;
        }
        .clearfix form div input,
        .clearfix form div textarea,
        .clearfix form div select{
            width: 100%;
            border-radius: 8px;
            padding: 8px 10px;
            border: 1px solid #ced4da;
            font-size: 15px;

        }
        .clearfix form div input:focus,
        .clearfix form div textarea:focus,
        .clearfix form div select:focus{
            border: 1px solid #c6a556;
        }
        .clearfix form div.flex{
            display: flex;
            flex-direction: row;
            align-items: center;
        }
        .clearfix form div input[type="checkbox"]{
            width: 20px;
            height: 20px;
            outline: none;
            border: none;
            margin-left: 60px;
            background-color: #d2d8f0;
        }
        .clearfix form div img{
            width: 175px;
            margin-top: 10px;
        }
        .clearfix form div label{
            margin-bottom: 5px;
        }
        .page-header{
            margin-bottom: 30px;
        }
        .content-wrapper {
            background: #F4F5F7;
            padding: 2.187rem ;
        }
        .dataTable td img{
            width: 40px;
            max-width: 40px;
            object-fit: contain;
        }
        .navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link{
            color: #ffffff;
            font-size: 20px;
        }
        @media only screen and (max-width: 875px) {
            table.dataTable{
                width: 100%;
                display: block;
                overflow-x: auto;
            }
        }
    </style>
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
            <div class="me-3">

            </div>
            <div>
                <a class="navbar-brand brand-logo" href="">
                    <img src="{{asset('image/logoText.png')}}" alt="logo"/>
                </a>
                <a class="navbar-brand brand-logo-mini" href="">
                    <img src="" alt="logo"/>
                </a>
            </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-top">
            <ul class="navbar-nav">
                <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                    <h1 class="welcome-text">Hoşgeldiniz, <span
                                class="text-black fw-bold">{{\Illuminate\Support\Facades\Auth::user()->name}} {{\Illuminate\Support\Facades\Auth::user()->surname}}</span>
                    </h1>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                    <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user"></i></a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                        <div class="dropdown-header text-center">
                            <p class="mb-1 mt-3 font-weight-semibold"></p>
                            <p class="fw-light text-muted mb-0"></p>
                            <p class="fw-light text-muted mb-0"></p>
                        </div>
                        <a href="" class="dropdown-item" style="display: flex !important; justify-content: center;">
                            <i class="dropdown-item-icon mdi mdi-power text-primary me-2" ></i>Çıkış Yap</a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-bs-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item dashboard">
                    <a class="nav-link" href="{{route('admin.panel')}}">
                        <i class="mdi mdi-home-variant menu-icon"></i>
                        <span class="menu-title">Ana Sayfa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-menu-one" aria-expanded="false"
                       aria-controls="sidebar-menu-one">
                        <i class="far fa-align-right menu-icon"></i>
                        <span class="menu-title">Kategori Ayarları</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="sidebar-menu-one">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="{{route('admin.show.category')}}">Kategorileri Görüntüle</a></li>
                        </ul>
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="{{route('admin.add.category')}}">Kategori Ekle</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-menu-two" aria-expanded="false"
                       aria-controls="sidebar-menu-two">
                        <i class="far fa-project-diagram menu-icon"></i>
                        <span class="menu-title">Proje Ayarları</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="sidebar-menu-two">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="{{route('admin.show.product')}}">Proje Listesi</a></li>
                        </ul>
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="{{route('admin.add.product')}}">Proje Ekle</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-menu-three" aria-expanded="false"
                       aria-controls="sidebar-menu-three">
                        <i class="fas fa-photo-video menu-icon"></i>
                        <span class="menu-title">Galeri Ayarları</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="sidebar-menu-three">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="">Fotoğraflar</a></li>
                        </ul>
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="{{route('admin.add.images')}}">Fotoğraf ekle</a></li>
                        </ul>
                    </div>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-menu-four" aria-expanded="false"
                       aria-controls="sidebar-menu-three">
                        <i class="fas fa-cheeseburger menu-icon"></i>
                        <span class="menu-title">Gelen Kutusu</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="sidebar-menu-four">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="">Mesaj Listesi</a></li>
                        </ul>
                    </div>
                </li>-->
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-menu-five" aria-expanded="false"
                       aria-controls="sidebar-menu-three">
                        <i class="fas fa-envelope menu-icon"></i>
                        <span class="menu-title">Mesajlar</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="sidebar-menu-five">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="{{route('admin.show.messages')}}">Mesaj Listesi</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-menu-six" aria-expanded="false"
                       aria-controls="sidebar-menu-three">
                        <i class="fas fa-edit menu-icon"></i>
                        <span class="menu-title">Site Ayarları</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="sidebar-menu-six">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="{{route('admin.update.siteConfig')}}">Site Ayarları Güncelle</a></li>
                        </ul>
                    </div>
                    <div class="collapse" id="sidebar-menu-six">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="{{route('admin.update.beforeAfter')}}">Before After Görsel</a></li>
                        </ul>
                    </div>
                    <div class="collapse" id="sidebar-menu-six">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="{{route('admin.update.slider')}}">Slider Görsel</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="{{route('admin.show.pasifCategories')}}" aria-expanded="false"
                       aria-controls="sidebar-menu-three">
                        <i class="fas fa-empty-set menu-icon"></i>
                        <span class="menu-title">Pasif Kategoriler</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-sm-12">
                        @yield('content')
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Designed By <a
                                href="https://www.linkedin.com/in/yusuf-çağlar-aksoy-81b4b6207/"
                                target="_blank">Yusuf Çağlar Aksoy</a></span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021.Tüm Hakkı Saklıdır.</span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<script src="{{asset('panel_assets/vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{asset('panel_assets/vendors/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('panel_assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('panel_assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
<script src="{{asset('panel_assets/js/off-canvas.js')}}"></script>
<script src="{{asset('panel_assets/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('panel_assets/js/template.js')}}"></script>
<script src="{{asset('panel_assets/js/settings.js')}}"></script>
<script src="{{asset('panel_assets/js/todolist.js')}}"></script>
<script src="{{asset('panel_assets/js/dashboard.js')}}"></script>
<script src="{{asset('panel_assets/js/Chart.roundedBarCharts.js')}}"></script>
<script src="{{asset("assets/js/scripts.js")}}"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script>
    $(document).ready(()=>{
        $("#sidebar .nav > li").removeClass('active')
        $("#sidebar .nav > li > div").removeClass('show')
    })
</script>
@yield('hover-control')
@yield('scripts')



</body>

</html>

