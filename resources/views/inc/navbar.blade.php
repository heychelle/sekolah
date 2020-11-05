<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: rgb(251,199,193);">
    <div class="container-fluid d-flex flex-column p-0">
        <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="/list">
            <div class="sidebar-brand-icon rotate-n-15"><img src="{{ asset('/assets/image/logo_new.png') }}" style="width: 50px"></div>
            <div class="sidebar-brand-text mx-3"><span style="font-size: 18px;color: rgb(85,86,88);">Ametrine</span></div>
        </a>
        <hr class="sidebar-divider my-0">
        <ul class="nav navbar-nav text-light" id="accordionSidebar">
        <li class="nav-item "><a class="nav-link" href="/"><i class="fas fa-tachometer-alt" style="color: rgb(85,86,88);font-size: 17px;"></i><span style="font-size: 17px;color: rgb(85,86,88);padding-left: 0px;">Kelas</span></a></li>
            <li class="nav-item" class="{{'murid' == request()->path() ? 'active' : ''}}" style="font-size: 17px;"><a class="nav-link" href="/murid" style="font-size: 17px;color: #555658;"><i class="fas fa-user" style="font-size: 17px;color: #555658;"></i><span style="font-size: 17px;color: #555658;padding-left: 0px;">Murid</span></a></li>
            <li class="nav-item" class="{{'list' == request()->path() ? 'active' : ''}}" style="font-size: 17px;"><a class="nav-link" href="/list" style="font-size: 17px;"><i class="fas fa-table" style="font-size: 17px;color: #555658;"></i><span style="font-size: 17px;color: #555658;padding-left: 0px;">List</span></a></li>
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

                </ul>
            </div>
        </nav>