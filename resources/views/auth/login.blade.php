<!DOCTYPE html>
<html lang="en">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>Admin Login</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #4 for " name="description" />
        <meta content="" name="author" />
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/admin_ui/favicon/apple-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('/admin_ui/favicon/apple-icon-60x60.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/admin_ui/favicon/apple-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/admin_ui/favicon/apple-icon-76x76.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/admin_ui/favicon/apple-icon-114x114.png')}}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/admin_ui/favicon/apple-icon-120x120.png')}}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('/admin_ui/favicon/apple-icon-144x144.png')}}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/admin_ui/favicon/apple-icon-152x152.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/admin_ui/favicon/apple-icon-180x180.png')}}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('/admin_ui/favicon/android-icon-192x192.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/admin_ui/favicon/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('/admin_ui/favicon/favicon-96x96.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/admin_ui/favicon/favicon-16x16.png')}}">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/admin_ui/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/admin_ui/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/admin_ui/assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/admin_ui/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{ asset('/admin_ui/assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/admin_ui/assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{ asset('/admin_ui/assets/global/css/components.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{ asset('/admin_ui/assets/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="{{ asset('/admin_ui/assets/pages/css/login.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class=" login">
        <!-- BEGIN LOGO -->
        <div class="logo">
                <img src="{{ asset('/admin_ui/logo1.png')}}" alt="" />
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form" action="{{ route('login') }}" method="post">
                <h3 class="form-title font-green">Sign In</h3>
                {{ csrf_field() }}
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                @if (count($errors) > 0)
                <ul>
                  @foreach ($errors->all() as $error)
                     <span> {{ $error }}. </span>
                  @endforeach
                </ul>
                @endif
                   
                </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Email</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" value="{{ old('email') }}" name="email" /> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" value="{{ old('password') }}" /> </div>
                <div class="form-actions">
                    <button type="submit" class="btn green uppercase">Login</button>
                    <label class="rememberme check mt-checkbox mt-checkbox-outline">
                        <input type="checkbox" name="remember" value="1" />Remember
                        <span></span>
                    </label>
                </div>
            </form>
            <!-- END LOGIN FORM -->
        </div>
        <div class="copyright"> 2019 © EAP. </div>
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<script src="../assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="{{ asset('/admin_ui/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('/admin_ui/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('/admin_ui/assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('/admin_ui/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('/admin_ui/assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('/admin_ui/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{ asset('/admin_ui/assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('/admin_ui/assets/global/plugins/jquery-validation/js/additional-methods.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('/admin_ui/assets/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{ asset('/admin_ui/assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{ asset('/admin_ui/assets/pages/scripts/login.min.js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
        <script>
            $(document).ready(function()
            {
                $('#clickmewow').click(function()
                {
                    $('#radio1003').attr('checked', 'checked');
                });
            })
        </script>
    </body>

</html>