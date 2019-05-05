<!doctype html>
<head>
    <title>Idiem</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/datatable/dataTables.bootstrap.css') }}">
</head>
<body>
<div id="wrapper">
    @yield('masthead')
    @yield('masthead-content')

    <div id="content">
        <div class="container-fluid">
            @yield('content')
        </div>
    </div>
</div>
<div id="footer">
    <div class="container-fluid">
    </div>
</div>
<script src="{{ asset('assets/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/datatable/dataTables.bootstrap.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
