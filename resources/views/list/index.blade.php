<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>List - Index</title>
    {{-- <link rel="stylesheet" href="public/assets/bootstrap/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="{{ asset('/assets/bootstrap/css/bootstrap.min.css') }}">

</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: rgb(251,199,193);">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="/list">
                    <div class="sidebar-brand-icon rotate-n-15"><img src="{{ asset('/assets/image/logo_new.png') }}" style="width: 50px"></div>
                    <div class="sidebar-brand-text mx-3"><span style="font-size: 18px;color: rgb(85,86,88);">Ametrine</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="/"><i class="fas fa-tachometer-alt" style="color: rgb(85,86,88);font-size: 17px;"></i><span style="font-size: 17px;color: rgb(85,86,88);padding-left: 0px;">Kelas</span></a></li>
                    <li class="nav-item" style="font-size: 17px;"><a class="nav-link" href="/murid" style="font-size: 17px;color: #555658;"><i class="fas fa-user" style="font-size: 17px;color: #555658;"></i><span style="font-size: 17px;color: #555658;padding-left: 0px;">Murid</span></a></li>
                    <li class="nav-item" style="font-size: 17px;"><a class="nav-link" href="/list" style="font-size: 17px;"><i class="fas fa-table" style="font-size: 17px;color: #555658;"></i><span style="font-size: 17px;color: #555658;padding-left: 0px;">List</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button" style="filter: saturate(101%);"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid">
                        @auth<h4  style="font-size: 25px;color: rgb(85,86,88); ">Welcome Admin</h4>@endauth
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->
                                @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">
                                            <button class="btn btn-primary" type="button"
                                                style="background: rgb(251,199,193);color: rgb(85,86,88); ">Log
                                                In</button></a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ route('register') }}">
                                                <button class="btn btn-primary" type="button"
                                                    style="background: rgb(251,199,193);color: rgb(85,86,88);">Register</button></a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                         document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>

                        </ul>
                    </div>
                </nav>
                <p @auth style="padding: 4px;margin: 20px;">In this page you can see Murid and Kelas List :)</p> @endauth <span style="font-size: 28px;margin: 24px;">List Kelas dan Murid</span>
                <div class="btn-group" role="group"></div>
                <div class="container-fluid" style="margin-top: 25px;">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="color: rgb(85,86,88);width: 120px;text-align: center;">Kelas</th>
                                    <th style="color: rgb(85,86,88);width: 120px;text-align: center;">Wali Kelas</th>
                                    <th style="color: rgb(85,86,88);width: 120px;text-align: center;">Murid</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mkelas as $kelas)
                                    <tr>
                                        <td style="text-align: center;">{{ $kelas->kelas . ' (' . $kelas->jurusan_kelas . ')'}}</td>
                                        <td style="text-align: center;">{{ $kelas->wali_kelas }}</td>
                                        <td>
                                            @foreach ($kelas->murids as $murid)
                                                <li>{{ $murid->nama_murid }}</li>
                                            @endforeach
                                        </td>
                                        
                                    </tr>
                                @endforeach
        
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Ametrine High 2020</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top" style="background: rgba(223,143,152,0.5);color: rgb(85,86,88);"><i class="fas fa-angle-up"></i></a></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="public/assets/js/script.min.js"></script>
    <script src="{{ asset('/assets/js/script.min.js') }}"></script>
</body>

</html>