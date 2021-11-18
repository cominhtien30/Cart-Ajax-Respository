<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{asset('dist/app.css')}}>
    <link href={{asset('bootstrap/css/bootstrap.min.css')}} rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src={{asset('bootstrap/js/bootstrap.bundle.min.js')}} integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href={{asset('owlcarousel2/owl.carousel.min.css')}}>
    <link rel="stylesheet" href={{asset('owlcarousel2/owl.theme.default.min.css')}}>
    <title>Tien's Cart</title>
</head>
<body>
    <div class="container-cart">
        @include('component/header')
        @yield('content')
        @include('component/footer')
    </div>
</body>
    <script src={{asset('jquery/jquery-3.6.0.min.js')}}></script>
    <script src={{asset('owlcarousel2/owl.carousel.min.js')}}></script>
    <script src={{asset('dist/app.js')}}></script>
</html>
