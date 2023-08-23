<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CoreUI Bootstrap 4 Admin Template">
    <meta name="author" content="Lukasz Holeczek">
    <meta name="keyword" content="CoreUI Bootstrap 4 Admin Template">
    <link rel="icon" type="image/png" sizes="152x152" href="{{ asset('images/settings/' . $setting->favicon) }}">
    <title>@yield('title')</title>
    <!-- Icons -->
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/simple-line-icons.css') }}" rel="stylesheet">
    <!-- Main styles for this application -->
    <link href="{{ asset('assets/dest/style.css') }}" rel="stylesheet">
    <!-- CSS Bootstrap -->

</head>

<body class="navbar-fixed sidebar-nav fixed-nav">
    {{-- Start Header --}}
    @include('dashboard.layouts.header')
    {{-- End Header --}}

    {{-- Start Sidebar --}}
    @include('dashboard.layouts.sidebar')
    {{-- End Sidebar --}}

    <!-- Main content -->
    @yield('content')

    {{-- Start Sidebar --}}
    @include('dashboard.layouts.sidebar')
    {{-- End Sidebar --}}


    {{-- Start aside --}}
    @include('dashboard.layouts.aside')
    {{-- End aside --}}
    <!-- Bootstrap and necessary plugins -->
    <script src="{{ asset('assets/js/libs/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/tether.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/pace.min.js') }}"></script>

    <!-- Plugins and scripts required by all views -->
    <script src="{{ asset('assets/js/libs/Chart.min.js') }}"></script>

    <!-- CoreUI main scripts -->

    <script src="{{ asset('assets/js/app.js') }}"></script>

    <!-- Plugins and scripts required by this views -->
    @yield('scripts')
    <!-- Custom scripts required by this view -->
    <script src="{{ asset('assets/js/views/main.js') }}"></script>


</body>

</html>
