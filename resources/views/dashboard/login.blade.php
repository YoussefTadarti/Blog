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

<body class="">
    <div class="container">
        <div class="row">
            <div class="col-md-8 m-x-auto pull-xs-none vamiddle">
                <div class="card-group ">
                    <div class="card p-a-2">
                        <form method="POST" action="{{ route('admin.login') }}" class="card-block">
                            @csrf
                            <h1>ss</h1>
                            <p class="text-muted"> hh </p>
                            <div class="input-group m-b-1">
                                <span class="input-group-addon"><i class="icon-user"></i>
                                </span>
                                <input id="email" name="email" type="email" class="form-control en"
                                    placeholder="" :value="old('email')" required>
                            </div>
                            <div class="input-group m-b-2">
                                <span class="input-group-addon"><i class="icon-lock"></i>
                                </span>
                                <input id="password" name="password" type="password" class="form-control en"
                                    placeholder="" :value="old('password')" required>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <button type="submit" class="btn btn-primary p-x-2">
                                        <i class="icon-login"></i>
                                        login</button>
                                </div>
                                <div class="col-xs-6 text-xs-right">
                                    <button type="button" class="btn btn-link p-x-0">فراموشی رمز ورود</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card card-inverse card-primary p-y-3" style="width:44%">
                        <div class="card-block text-xs-center">
                            <div>
                                <h2>ثبت نام</h2>
                                <p>اگر در سامانه عضو نیستید به راحتی می توانید همین الان نام نویسی کنید.</p>
                                <button type="button" class="btn btn-primary active m-t-1">عضویت رایگان</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap and necessary plugins -->
    <script src="{{ asset('assets/js/libs/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/tether.min.js') }}"></script>
    <script src="{{ asset('assets/js/libs/bootstrap.min.js') }}"></script>
    <script>
        function verticalAlignMiddle() {
            var bodyHeight = $(window).height();
            var formHeight = $('.vamiddle').height();
            var marginTop = (bodyHeight / 2) - (formHeight / 2);
            if (marginTop > 0) {
                $('.vamiddle').css('margin-top', marginTop);
            }
        }
        $(document).ready(function() {
            verticalAlignMiddle();
        });
        $(window).bind('resize', verticalAlignMiddle);
    </script>

</body>

</html>
