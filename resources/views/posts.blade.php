<!doctype html>
<html class="no-js " lang="en">
<!-- Mirrored from alui.thememakker.com/html/main/dist/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Sep 2023 09:30:30 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 5 admin template and web Application ui kit.">
    <meta name="keyword"
        content="ALUI, Bootstrap 5, ReactJs, Angular, Laravel, VueJs, ASP .Net, Admin Dashboard, Admin Theme">
    <title>ZHYY</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->

    <!-- project css file  -->
    <link rel="stylesheet" href="../../assets/css/al.style.min.css">

    <!-- plugin css file  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.12/css/weather-icons.min.css"
        integrity="sha512-r/Gan7PMSRovDus++vDS2Ayutc/cSdl268u047n4z+k7GYuR7Hiw71FsT3QQxdKJBVHYttOJ6IGLnlM9IoMToQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- project layout css file -->
    <link rel="stylesheet" href="../../assets/css/layout.a.min.css">


    <style>
        body {
            background-color: lightgray !important;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>


{{--  --}}

<body>
    <div id="layout-a" class="theme-blue">

        <!-- Navigation -->
        <div class="navigation navbar navbar-light justify-content-center px-3 px-lg-2 py-2 py-md-3 border-end">

            <!-- Brand -->
            <a href="#" class="mb-0 mb-lg-3 brand-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" viewBox="0 0 64 80" fill="none">
                    <path
                        d="M58.8996 22.7L26.9996 2.2C23.4996 -0.0999999 18.9996 0 15.5996 2.5C12.1996 5 10.6996 9.2 11.7996 13.3L15.7996 26.8L3.49962 39.9C-3.30038 47.7 3.79962 54.5 3.89962 54.6L3.99962 54.7L36.3996 78.5C36.4996 78.6 36.5996 78.6 36.6996 78.7C37.8996 79.2 39.1996 79.4 40.3996 79.4C42.9996 79.4 45.4996 78.4 47.4996 76.4C50.2996 73.5 51.1996 69.4 49.6996 65.6L45.1996 51.8L58.9996 39.4C61.7996 37.5 63.3996 34.4 63.3996 31.1C63.4996 27.7 61.7996 24.5 58.8996 22.7ZM46.7996 66.7V66.8C48.0996 69.9 46.8996 72.7 45.2996 74.3C43.7996 75.9 41.0996 77.1 37.9996 76L5.89961 52.3C5.29961 51.7 1.09962 47.3 5.79962 42L16.8996 30.1L23.4996 52.1C24.3996 55.2 26.5996 57.7 29.5996 58.8C30.7996 59.2 31.9996 59.5 33.1996 59.5C35.0996 59.5 36.9996 58.9 38.6996 57.8C38.7996 57.8 38.7996 57.7 38.8996 57.7L42.7996 54.2L46.7996 66.7ZM57.2996 36.9C57.1996 36.9 57.1996 37 57.0996 37L44.0996 48.7L36.4996 25.5V25.4C35.1996 22.2 32.3996 20 28.9996 19.3C25.5996 18.7 22.1996 19.8 19.8996 22.3L18.2996 24L14.7996 12.3C13.8996 8.9 15.4996 6.2 17.3996 4.8C18.4996 4 19.8996 3.4 21.4996 3.4C22.6996 3.4 23.9996 3.7 25.2996 4.6L57.1996 25.1C59.1996 26.4 60.2996 28.6 60.2996 30.9C60.3996 33.4 59.2996 35.6 57.2996 36.9Z"
                        fill="black" />
                </svg>
            </a>

            <!-- Menu: icon -->
            <ul class="nav navbar-nav flex-row flex-sm-column flex-grow-1 justify-content-start py-2 py-lg-0">

                <!-- Create group -->
                <li class="nav-item"><a class="nav-link p-2 p-lg-3 d-block d-xl-none menu-toggle me-2 me-lg-0"
                        href="#"><i class="fa fa-bars"></i></a></li>
                <li class="nav-item"><a class="nav-link p-2 p-lg-3" href="#" title="Search" data-bs-toggle="modal"
                        data-bs-target="#SearchModal"><i class="fa fa-search"></i></a></li>
                <li class="nav-item"><a class="nav-link p-2 p-lg-3" href="#" title="notifications"
                        data-bs-toggle="modal" data-bs-target="#notificationsModal"><i class="fa fa-bell-o"></i></a>
                </li>
                <li class="nav-item"><a class="nav-link p-2 p-lg-3" href="#" data-bs-toggle="modal"
                        data-bs-target="#LayoutModal"><i class="fa fa-sliders"></i></a></li>
                <li class="nav-item d-none d-sm-block"><a class="nav-link p-2 p-lg-3" href="chat.html"><i
                            class="fa fa-comments-o"></i></a></li>
                <li class="nav-item d-none d-sm-block flex-grow-1"><a class="nav-link p-2 p-lg-3"
                        href="calendar.html"><i class="fa fa-calendar"></i></a></li>

                <!-- Menu collapse -->
                <li class="nav-item"><a class="nav-link p-2 p-lg-3" href="#" title="Settings" data-bs-toggle="modal"
                        data-bs-target="#SettingsModal"><i class="fa fa-gear"></i></a></li>
                <li class="nav-item d-none d-sm-block"><a class="nav-link p-2 p-lg-3" href="profile.html"
                        title="Menu collapse"><i class="fa fa-user"></i></a></li>

            </ul>

        </div>

        <!-- sidebar -->
        <div class="sidebar px-3 py-2 py-md-3" style="text-decoration: none;">
            <div class="d-flex flex-column h-100">
                <div class="d-flex align-items-center mb-4 mt-2">
                    <h4 class="sidebar-title mb-0 flex-grow-1">ZHYY<span>-ADMIN</span></h4>
                        <style>
                    body {
                        background-color: lightgray !important;
                    }

                </style>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                </div>
                <form class="mb-2 mt-1">
                    <div class="input-group">
                        <input type="text" class="form-control border-0" placeholder="Search...">
                    </div>
                </form>

                <!-- Menu: main ul -->
                <ul class="menu-list flex-grow-1">
                    <li><a class="m-link active" href="#"><i
                                class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Pages" href="#"><i
                                class="fa fa-home"></i> <span>Pages</span> <span
                                class="arrow fa fa-dot-circle-o ms-auto text-end"></span></a>

                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="menu-Pages">
                            <li><a class="ms-link" href="/posts">Post</a></li>
                            <li><a class="ms-link" href="/bagian">Bagian</a></li>
                        </ul>
                    </li>
                </ul>

                <!-- Menu: menu collepce btn -->
                <button type="button" class="btn btn-link sidebar-mini-btn text-light">
                    <span><i class="fa fa-arrow-left"></i></span>
                </button>
            </div>
        </div>

        <!-- main body area -->
        <div class="main px-xl-5 px-lg-4 px-md-3">

            <!-- Body: Header -->
            <div class="body-header border-bottom d-flex py-3">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- Pretitle -->
                            <small class="text-muted">Welcome to Analytics Dashboard.</small>
                            <h1 class="h4 mt-1">Dashboard</h1>
                        </div>
                        <div class="col-auto">
                            <a href="https://themeforest.net/user/wrraptheme" title="Download" target="_blank"
                                class="btn btn-white border lift">Download</a>
                            <button type="button" class="btn btn-dark lift">Generate Report</button>
                        </div>
                    </div> <!-- Row end  -->
                </div>
            </div>

            <!-- Body: Body -->
            <div class="body d-flex py-lg-4 py-3">
                <div class="container-fluid">

                    {{-- zaini --}}
                    <!doctype html>
                    <html lang="en">
                    <head>
                        <meta charset="utf-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
                        <meta name="csrf-token" content="{{ csrf_token() }}">
                        <title>Laravel Ajax </title>

                    </head>
                    <body>

                        <div class="container" style="margin-top: 50px">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="text-center"></h4>
                                    <div class="card border-0 shadow-sm rounded-md mt-4">
                                        <div class="card-body">

                                            <a href="javascript:void(0)" class="btn btn-success mb-2" id="btn-create-post"><i class="fa fa-plus"> </i> TAMBAH</a>

                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr style="text-align: center; background-color:rgb(192, 1, 255);border-radius: 13px; font-witdh:900;">
                                                        <th>Title</th>
                                                        <th>Content</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="table-posts">
                                                    @foreach($posts as $post)
                                                    <tr id="index_{{ $post->id }}">
                                                        <td>{{ $post->title }}</td>
                                                        <td>{{ $post->content }}</td>
                                                        <td class="text-center ">
                                                            <a href="javascript:void(0)" id="btn-edit-post" data-id="{{ $post->id }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"></i></a>
                                                            <a href="javascript:void(0)" id="btn-delete-post" data-id="{{ $post->id }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @include('components.modal-create')
                        @include('components.modal-edit')
                        @include('components.delete-post')
                </div>
            </div>

            <!-- Body: Footer -->
            <div class="body-footer d-flex">

            </div>

        </div>


    </div>

    <!-- Jquery Core Js -->
    <script src="../../assets/bundles/libscripts.bundle.js"></script>

    <!-- Plugin Js -->
    <script src="../../assets/bundles/apexcharts.bundle.js"></script>

    <!-- Jquery Page Js -->
    <script src="../../assets/js/template.js"></script>
    <script src="../js/page/index.js"></script>
</body>


<!-- Mirrored from alui.thememakker.com/html/main/dist/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Sep 2023 09:32:05 GMT -->

</html>
