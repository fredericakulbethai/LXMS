<?php /*a:1:{s:51:"D:\phpstudy_pro\WWW\tp6\view\admin\login\index.html";i:1602901626;}*/ ?>
<!doctype html>
<html lang="en">
   <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title><?php echo htmlentities($webtitle); ?> - <?php echo htmlentities($name); ?></title>
        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="/static/adassets/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="/static/adassets/media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/static/adassets/media/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Fonts and OneUI framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
        <link rel="stylesheet" id="css-main" href="/static/adassets/css/oneui.min.css">
        <script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js">
        </script>
        <script type="text/javascript">
             $(document).ready(function(){
                $("button").click(function(){
                    $("button").html('登录中 <div id="load" class="spinner-border spinner-border-sm text-success" role="status"><span class="sr-only">Loading...</span></div>');
                    var username = $("input[name='username']").val();
                    var password = $("input[name='password']").val();
                    $.ajax({
                        url:'/admin/login/login',
                        type:'post',
                        data:{
                            username:username,
                            password:password,
                        },
                        success:function(data){
                            $("#load").hide();
                            var data = JSON.parse(data);
                            if(data.code!=200){
                                //账号或密码错误
                                alert(data.msg);
                                $("button").html('<i class="fa fa-fw fa-sign-in-alt mr-1"></i> 登入');
                            }else{
                                //登录成功
                                window.location.href = "/admin";
                                alert(data.msg);
                            }
                            
                        }
                    });
                });
            });
        </script>
    </head>
    <body>
        
        <div id="page-container">

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="bg-image" style="background-image: url('/static/adassets/media/photos/photo6@2x.jpg');">
                    <div class="hero-static bg-white-95">
                        <div class="content">
                            <div class="row justify-content-center">
                                <div class="col-md-8 col-lg-6 col-xl-4">
                                    <!-- Sign In Block -->
                                    <div class="block block-themed block-fx-shadow mb-0">
                                        <div class="block-header">
                                            <h3 class="block-title">登入</h3>
                                            
                                        </div>
                                        <div class="block-content">
                                            <div class="p-sm-3 px-lg-4 py-lg-5">
                                                <h1 class="mb-2">计费系统后台</h1>
                                                <p>Welcome, please login！</p>
                                                       
                                                <!-- <form class="js-validation-signin" action="/admin/Login/login" method="POST"> -->
                                                    <div class="py-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control form-control-alt form-control-lg" id="login-username" name="username" placeholder="Username">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" class="form-control form-control-alt form-control-lg" id="login-password" name="password" placeholder="Password">
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="login-remember" name="login-remember">
                                                                <label class="custom-control-label font-w400" for="login-remember">Remember Me</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-md-6 col-xl-5">
                                                            <button id="login" class="btn btn-block btn-primary">
                                                                <i class="fa fa-fw fa-sign-in-alt mr-1"></i> 登入
                                                            </button>
                                                        </div>
                                                    </div>
                                               
                                                <!-- END Sign In Form -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Sign In Block -->
                                </div>
                            </div>
                        </div>
                        <div class="content content-full font-size-sm text-muted text-center">
                            <strong>云海计费系统 4.0</strong> &copy; <span data-toggle="year-copy"></span>
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->
        </div>
        
        <script src="/static/adassets/js/oneui.core.min.js">
        </script>

        <script src="/static/adassets/js/oneui.app.min.js"></script>

        <script src="/static/adassets/js/plugins/chart.js/Chart.bundle.min.js"></script>

        <script src="/static/adassets/js/pages/be_pages_dashboard.min.js"></script>
    </body>
</html>
