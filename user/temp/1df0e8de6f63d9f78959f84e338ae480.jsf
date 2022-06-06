<?php /*a:3:{s:55:"/www/wwwroot/jifei.ymcx.shop/view/user/login/index.html";i:1602074034;s:48:"/www/wwwroot/jifei.ymcx.shop/view/user/head.html";i:1601905500;s:47:"/www/wwwroot/jifei.ymcx.shop/view/user/msg.html";i:1601710952;}*/ ?>
<!DOCTYPE html>
<html lang="en">

   <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title><?php echo htmlentities($webtitle.' - '.$title); ?></title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="/static/assets/images/favicon.ico">

    <!--Morris Chart CSS -->

    <link href="/static/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/static/assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="/static/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="/static/assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="/static/assets/css/message.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/static/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="/static/assets/js/message.js"></script>
</head> 

    <body>
<?php if($candition="$pd"): ?>
    <script type="text/javascript">
        $.message({
            message:'<?php echo htmlentities($msg); ?>',
            type:'<?php echo htmlentities($type); ?>',
        });
    </script> 
<?php endif; ?> 
        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="home-btn d-none d-sm-block">
                
            </div>
        <div class="wrapper-page">
                <div class="card card-pages shadow-none">
    
                    <div class="card-body">
                        <h5 class="font-18 text-center">用户登录</h5>
    
                        <form class="form-horizontal m-t-30" action="/user/login/checkUser" method="post">
    
                            <div class="form-group">
                                <div class="col-12">
                                        <label>用户名</label>
                                    <input name="username" class="form-control" type="text" required="" placeholder="用户名/邮箱">
                                </div>
                            </div>
    
                            <div class="form-group">
                                <div class="col-12">
                                        <label>密码</label>
                                    <input name="password" class="form-control" type="password" required="" placeholder="请输入你的密码">
                                </div>
                            </div>
    
                            <div class="form-group">
                                <div class="col-12">
                                    <div class="checkbox checkbox-primary">
                                            <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1"> Remember me</label>
                                                  </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="form-group text-center m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">登入</button>
                                </div>
                            </div>
    
                            <div class="form-group row m-t-30 m-b-0">
                                <div class="col-sm-7">
                                    <a href="/user/login/recoverpw.html" class="text-muted"><i class="fa fa-lock m-r-5"></i> 忘记密码?</a>
                                </div>
                                <div class="col-sm-5 text-right">
                                    <a href="/user/login/register.html" class="text-muted">注册账户</a>
                                </div>
                            </div>
                        </form>
                    </div>
    
                </div>
            </div>
        <!-- END wrapper -->

        <!-- jQuery  -->


        
    </body>

</html>