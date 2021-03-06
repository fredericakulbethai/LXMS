<?php /*a:1:{s:56:"/www/wwwroot/zc.appearoo.top/view/admin/login/index.html";i:1615046581;}*/ ?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title><?php echo htmlentities($webtitle); ?> - <?php echo htmlentities($name); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="/static/adassets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="/static/adassets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="/static/adassets/css/app.min.css" rel="stylesheet" type="text/css" />
        
        <link href="/static/assets/css/message.css" rel="stylesheet" type="text/css">
    </head>
   
    <body class="bg-primary bg-pattern">
        <div class="home-btn d-none d-sm-block">
            <a href="index.html"><i class="mdi mdi-home-variant h2 text-white"></i></a>
        </div>

        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mb-5">
                            <a href="index.html" class="logo"><img src="/static/adassets/images/logo-light.png" height="24" alt="logo"></a>
                            <h5 class="font-size-16 text-white-50 mb-4">欢迎使用云海计费系统4.0全新版本!</h5>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-xl-5 col-sm-8">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="p-2">
                                    <h5 class="mb-5 text-center">后台登陆</h5>
                                    

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group form-group-custom mb-4">
                                                    <input name="username" type="username" class="form-control" id="username" required>
                                                    <label for="username">用户名</label>
                                                </div>

                                                <div class="form-group form-group-custom mb-4">
                                                    <input name="password" type="password" class="form-control" id="userpassword" required>
                                                    <label for="userpassword">密码</label>
                                                </div>

                                                <div class="mt-4">
                                                    <button class="btn btn-success btn-block waves-effect waves-light" id="button">登入</button>
                                                </div>
                                                <div class="mt-4 text-center">
                                                    <a href="http://cloudhai.cn" class="text-muted"><i class="mdi mdi-account-circle mr-1"></i>云海计费系统
                                                     4.0 </a>
                                                </div>
                                            </div>
                                        </div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end Account pages -->

        <!-- JAVASCRIPT -->
        <script src="/static/adassets/libs/jquery/jquery.min.js"></script>
        <script src="/static/adassets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/static/adassets/libs/metismenu/metisMenu.min.js"></script>
        <script src="/static/adassets/libs/simplebar/simplebar.min.js"></script>
        <script src="/static/adassets/libs/node-waves/waves.min.js"></script>

        <script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>
        <script type="text/javascript" src="/static/assets/js/message.js"></script>
        <script src="/static/adassets/js/app.js"></script>
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
                                $.message({
                                    message:''+data.msg+'',
                                    type:'error',
                                });
                                $("button").html('<i class="fa fa-fw fa-sign-in-alt mr-1"></i> 登入');
                            }else{
                                //登录成功
                                 $.message({
                                    message:''+data.msg+'',
                                    type:'success',
                                });
                                window.location.href = "/admin";
                            }
                            
                        }
                    });
                });
            });
        </script>

    </body>
</html>