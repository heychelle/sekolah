<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    {{--
    <link rel="stylesheet" href="public/assets/bootstrap/css/bootstrap.min.css"> --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="{{ asset('/assets/bootstrap/css/bootstrap.min.css') }}">

</head>

<body id="page-top">
    @include('inc.navbar')
    @yield('content')

    <footer class="bg-white sticky-footer">
        <div class="container my-auto">
            <div class="text-center my-auto copyright"><span>Copyright © Ametrine High 2020</span></div>
        </div>
    </footer>
    <a class="border rounded d-inline scroll-to-top" href="#page-top"
        style="background: rgba(223,143,152,0.5);color: rgb(85,86,88);"><i class="fas fa-angle-up"></i></a>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="public/assets/js/script.min.js"></script>
<script src="{{ asset('/assets/js/script.min.js') }}"></script>

</html>
