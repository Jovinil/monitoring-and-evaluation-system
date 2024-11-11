<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css')}}"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('custom-styles/login.css') }}">
    {{-- <title>{{ $pageTitle}}</title> --}}
</head>

<body class="bg-light pb-5"
    style="
    background-image: url('{{ asset('images/bg.jpg') }}');
    background-size: cover;
    background-position: center;
    overflow: hidden;
    ">

        <div class="content container d-flex flex-column justify-content-center align-items-center gap-4 p-1">
            @yield('content')
        </div>

</body>
    {{-- <script src="{{ asset('jquery/jquery-3.7.1.js')}}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script> --}}
    {{-- <script src="{{ asset('data-table/js/dataTables.js')}}"></script> --}}
</html>
