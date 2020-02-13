<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>تسجيل الدخول - الرائد</title>
    <!-- Favicon-->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Changa" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
{!!Html::style('admin/plugins/bootstrap/css/bootstrap.css')!!}

<!-- Waves Effect Css -->
{!!Html::style('admin/plugins/node-waves/waves.css')!!}

<!-- Animation Css -->
{!!Html::style('admin/plugins/animate-css/animate.css')!!}

<!-- Custom Css -->
    {!!Html::style('admin/css/style.css')!!}

    <style>
        *
        {
            font-family: 'Changa', sans-serif;
        }
    </style>

</head>

<body class="login-page" dir="rtl">
<div class="login-box">
    <div class="logo">
        <a href="javascript:void(0);">الرائد </a>
    </div>
    <div class="card">
        @yield('content')
    </div>
</div>

@include('admin.auth.scripts')
</body>

</html>
