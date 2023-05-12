<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">

    <title>কালের কণ্ঠ || kalerkantho</title>
    <link rel="icon" type="image/x-icon" href="{{asset('/')}}img/favicon.png">

</head>

<body>

    @include('layout.top-ads')
    @include('layout.header')
    @include('layout.navigation')
    @yield('content')
    @include('layout.footer')
    @include('layout.footer-ads')


    <a id="back-to-top"  style="display:none;" title="Back to top" href="/#" class="show"><i class="bi bi-chevron-up"></i></a>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>