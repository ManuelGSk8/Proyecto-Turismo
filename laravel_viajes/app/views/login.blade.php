<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <link href="{{ URL::asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/bootstrap/css/bootstrap-responsive.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/style.css" rel="stylesheet') }}" />
    <link href="{{ URL::asset('assets/css/style-responsive.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/style-default.css') }}" rel="stylesheet" id="style_color" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="lock">
<div class="lock-header">
    <!-- BEGIN LOGO -->
    <a class="center" id="logo" href="#">
        <img class="center" alt="logo" src="{{ URL::asset('assets/img/logo.png')}}">
    </a>
    <!-- END LOGO -->
</div>
<div class="login-wrap">
    <div class="metro single-size red">
        <div class="locked">
            <i class="icon-lock"></i>
            <span>Login</span>
        </div>
    </div>
    {{ Form::open(['route' => 'login-agencia', 'method' => 'POST', 'class'=>'form-horizontal']) }}
    <div class="metro double-size green">
            <div class="input-append lock-input">
                {{ Form::email('email','',['class'=>'', 'placeholder'=>'Username']) }}
            </div>
    </div>
    <div class="metro double-size yellow">
            <div class="input-append lock-input">
                {{ Form::password('clave','',['class'=>'', 'placeholder'=>'Password']) }}
            </div>
    </div>
    <div class="metro single-size terques login">
            <button type="submit" class="btn login-btn">
                Login
                <i class=" icon-long-arrow-right"></i>
            </button>
    </div>
    {{ Form::close() }}

    <div class="login-footer">
        <div class="remember-hint pull-left">
            <input type="checkbox" id=""> Remember Me
        </div>
        <div class="forgot-hint pull-right">
            <a id="new-agency" class="" href="javascript:;">Registrarme</a>
        </div>
        <div class="forgot-hint pull-right">
            <a id="forget-password" class="" href="javascript:;">Forgot Password?</a>
        </div>
    </div>
</div>
</body>
<!-- END BODY -->
</html>