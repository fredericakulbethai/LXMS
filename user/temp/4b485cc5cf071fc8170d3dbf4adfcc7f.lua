<?php /*a:3:{s:58:"/www/wwwroot/zc.appearoo.top/view/user/login/register.html";i:1601718640;s:48:"/www/wwwroot/zc.appearoo.top/view/user/head.html";i:1601905500;s:47:"/www/wwwroot/zc.appearoo.top/view/user/msg.html";i:1601710952;}*/ ?>
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

                        <h5 class="font-18 text-center">账户注册</h5>
    
                        <form class="form-horizontal m-t-30" action="/user/login/reg" method="post">

                            <div class="form-group">
                                <div class="col-12">
                                        <label>用户名</label>
                                    <input class="form-control" name="username" type="username" required="" placeholder="长度为4-10个字符,不能有特殊字符">
                                </div>
                            </div>
    
                            <div class="form-group">
                                <div class="col-12">
                                        <label>密码</label>
                                    <input class="form-control" name="password" type="password" required="" placeholder="请设置你的密码">
                                </div>
                            </div>
    
                            <div class="form-group">
                                <div class="col-12">
                                        <label>联系QQ</label>
                                    <input class="form-control" name="qq" type="number" required="" placeholder="输入你常用的QQ号码">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-12">
                                        <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label font-weight-normal" for="customCheck1">I accept <a href="#" class="text-primary">Terms and Conditions</a></label>
                                            </div>
                                </div>
                            </div>
    
                            <div class="form-group text-center m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">注册</button>
                                </div>
                            </div>
    
                            <div class="form-group mb-0 row">
                                    <div class="col-12 m-t-10 text-center">
                                        <a href="index.html" class="text-muted">已经有账号了?</a>
                                    </div>
                                </div>
                        </form>
                    </div>
    
                </div>
            </div>
        <!-- END wrapper -->
        
    </body>

</html>