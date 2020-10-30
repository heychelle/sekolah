<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Murid - Index</title>
    {{--
    <link rel="stylesheet" href="public/assets/bootstrap/css/bootstrap.min.css"> --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="{{ asset('/assets/bootstrap/css/bootstrap.min.css') }}">

</head>

<body id="page-top">
    <div id="wrapper">


        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0"
            style="background: rgb(251,199,193);">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><img src="{{ asset('/assets/image/loogo.png') }}"
                            style="width: 50px"></div>
                    <div class="sidebar-brand-text mx-3"><span
                            style="font-size: 18px;color: rgb(85,86,88);">Ametrine</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="/"><i class="fas fa-tachometer-alt"
                                style="color: rgb(85,86,88);font-size: 17px;"></i><span
                                style="font-size: 17px;color: rgb(85,86,88);padding-left: 0px;">Kelas</span></a></li>
                    <li class="nav-item" style="font-size: 17px;"><a class="nav-link active" href="/murid"
                            style="font-size: 17px;color: #555658;"><i class="fas fa-user"
                                style="font-size: 17px;color: #555658;"></i><span
                                style="font-size: 17px;color: #555658;padding-left: 0px;">Murid</span></a></li>
                    <li class="nav-item" style="font-size: 17px;"><a class="nav-link" href="/list"
                            style="font-size: 17px;"><i class="fas fa-table"
                                style="font-size: 17px;color: #555658;"></i><span
                                style="font-size: 17px;color: #555658;padding-left: 0px;">List</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0"
                        id="sidebarToggle" type="button" style="filter: saturate(101%);"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid">
                        <h4 style="font-size: 25px;color: rgb(85,86,88);">Welcome Admin</h4>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            {{-- <li class="nav-item dropdown d-sm-none no-arrow"><a
                                    class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false"
                                    href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in"
                                    aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small"
                                                type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0"
                                                    type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link"
                                        data-toggle="dropdown" aria-expanded="false" href="#">
                                        --}}

                                        <ul class="navbar-nav ml-auto">
                                            <!-- Authentication Links -->
                                            @guest
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('login') }}">
                                                        <button class="btn btn-primary" type="button"
                                                            style="background: rgb(251,199,193);color: rgb(85,86,88);">Log
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


                                        {{-- <div
                                            class="dropdown-menu shadow dropdown-menu-right animated--grow-in"><a
                                                class="dropdown-item" href="#"><i
                                                    class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a
                                                class="dropdown-item" href="#"><i
                                                    class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity
                                                log</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i
                                                    class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a>
                                        </div>
                                </div>
                            </li> --}}
                        </ul>
                    </div>
                </nav>
                <p style="padding: 4px;margin: 20px;">In this page you can do anything :)</p><span
                    style="font-size: 28px;margin: 24px;">List Murid</span>
                <div class="btn-group" role="group"></div>
                <div class="container-fluid" style="margin-top: 25px;"><a href="{{ route('murid.create') }}" <button
                        class="btn btn-primary" type="button"
                        style="margin-bottom: 15px;margin-left: 4px;background: rgb(114,203,42);">Tambah</button></a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="color: rgb(85,86,88);width: 120px;text-align: center;">NIS</th>
                                    <th style="color: rgb(85,86,88);width: 120px;text-align: center;">Nama Murid</th>
                                    <th style="color: rgb(85,86,88);width: 120px;text-align: center;">Kelas</th>
                                    <th style="color: rgb(85,86,88);width: 120px;text-align: center;">Gender</th>
                                    <th style="color: rgb(85,86,88);width: 120px;text-align: center;">Tanggal Lahir</th>
                                    <th style="color: rgb(85,86,88);width: 120px;text-align: center;">Alamat</th>
                                    <th style="color: rgb(85,86,88);width: 120px;text-align: center;">Nomor Telpon</th>
                                    <th style="color: rgb(85,86,88);width: 130px;text-align: center;">Action Delete</th>
                                    <th style="color: rgb(85,86,88);width: 130px;text-align: center;">Action Edit</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($murids as $murid)
                                    <tr>
                                        <td style="text-align: center;">{{ $murid->nis }} </a>
                                        </td>
                                        <td style="text-align: center;">{{ $murid->nama_murid }}</td>
                                        <td style="text-align: center;">
                                            {{ $murid->kelas->kelas . ' (' . $murid->kelas->jurusan_kelas . ')' }}
                                        </td>
                                        <td style="text-align: center;">{{ $murid->gender }}</td>
                                        <td style="text-align: center;">{{ $murid->tanggal_lahir }} </a>
                                        </td>
                                        <td style="text-align: center;">{{ $murid->alamat }}</td>
                                        <td style="text-align: center;">{{ $murid->nomor_telp }}</td>
                                        <td style="text-align: center;">
                                            <form action="{{ route('murid.destroy', $murid) }}" method="post">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-primary" type="submit"
                                                    style="background: rgb(234, 83, 83);">Delete</button>
                                            </form>
                                        </td>
                                        <td style="text-align: center;">
                                            <form action="{{ route('murid.edit', $murid) }}">
                                                @csrf
                                                <button class="btn btn-primary" type="submit"
                                                    style="background: rgb(234,210,83);">Edit</button>
                                            </form>
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
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"
            style="background: rgba(223,143,152,0.5);color: rgb(85,86,88);"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="public/assets/js/script.min.js"></script>
    <script src="{{ asset('/assets/js/script.min.js') }}"></script>
</body>

</html>
