<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Laravel Cms | </title>

    <!-- Bootstrap -->
    <link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('vendors/animate.css/animate.min.css')}}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{asset('build/css/custom.min.css')}}" rel="stylesheet">
</head>

<body class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                {{Form::open(array('route' => 'login'))}}
                    <h1>Giriş Yap</h1>
                    <div>
                        <input name="email" id="email" type="text" class="form-control" placeholder="E mail" required="" />
                    </div>
                    <div>
                        <input name="password" id="password" type="password" class="form-control" placeholder="Şifre" required="" />
                    </div>
                    <div>
                        {{Form::submit('Giriş' , array('class' => 'btn btn-default submit'))}}
                        <a class="reset_pass" href="#">Şifremi Unuttum</a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">
                            <a href="{{route('register')}}" class="to_register"> Hesap Oluştur </a>
                        </p>
                        <div class="clearfix"></div>
                        <br />
                    </div>
                {{Form::close()}}
            </section>
        </div>
    </div>
</div>
</body>
</html>
