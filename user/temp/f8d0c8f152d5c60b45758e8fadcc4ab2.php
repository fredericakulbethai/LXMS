<?php /*a:5:{s:52:"D:\phpstudy_pro\WWW\tp6\view\user\problem\index.html";i:1601960397;s:43:"D:\phpstudy_pro\WWW\tp6\view\user\head.html";i:1601905498;s:42:"D:\phpstudy_pro\WWW\tp6\view\user\msg.html";i:1601710950;s:42:"D:\phpstudy_pro\WWW\tp6\view\user\nav.html";i:1602052597;s:43:"D:\phpstudy_pro\WWW\tp6\view\user\foot.html";i:1601657032;}*/ ?>
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
    <div id="wrapper">
        
        <!-- ========== 导航 ========== -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="/user" class="logo">
                    <span class="logo-light">
                            <i class="mdi mdi-camera-control"></i> Yunhai
                        </span>
                    <span class="logo-sm">
                            <i class="mdi mdi-camera-control"></i>
                        </span>
                </a>
            </div>

            <nav class="navbar-custom">
                <ul class="navbar-right list-inline float-right mb-0">

                    <!-- full screen -->
                    <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                        <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                            <i class="mdi mdi-arrow-expand-all noti-icon"></i>
                        </a>
                    </li>

                    <!-- notification -->
                    <li class="dropdown notification-list list-inline-item">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-bell-outline noti-icon"></i>
                            <span class="badge badge-pill badge-danger noti-icon-badge">1</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg px-1">
                            <!-- item-->
                            <h6 class="dropdown-item-text">
                                    通知
                                </h6>
                            <div class="slimscroll notification-item-list">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                </a>

                                <!-- 遍历公告 -->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="mdi mdi-message-text-outline"></i></div>
                                    <p class="notify-details"><b>New Message received</b><span class="text-muted">You have 87 unread messages</span></p>
                                </a>


                            </div>
                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center notify-all text-primary">
                                    关闭 <i class="fi-arrow-right"></i>
                                </a>
                        </div>
                    </li>

                    <li class="dropdown notification-list list-inline-item">
                        <div class="dropdown notification-list nav-pro-img">
                            <a class="dropdown-toggle nav-link arrow-none nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="http://q1.qlogo.cn/g?b=qq&nk=1178350505&s=100&t=" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <a class="dropdown-item" href="/user/information"><i class="mdi mdi-account-circle"></i> 个人中心</a>
                                <a class="dropdown-item" href="/user/pay"><i class="mdi mdi-wallet"></i> 账户充值</a>
                                <a class="dropdown-item" href="/user/information"><i class="mdi mdi-lock-open-outline"></i> 修改密码</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="/user/login/out"><i class="mdi mdi-power text-danger"></i> 退出登录</a>
                            </div>
                        </div>
                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-effect">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
                    <li class="d-none d-md-inline-block">
                        <form role="search" class="app-search">
                            <div class="form-group mb-0">
                                <input type="text" class="form-control" placeholder="Search..">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </li>
                </ul>

            </nav>

</div>



<div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu" id="side-menu">
                        <li class="menu-title">菜单</li>
                        <li>
                            <a href="/user" class="waves-effect">
                                <i class="icon-accelerator"></i><span class="badge badge-success badge-pill float-right">9+</span> <span> 仪表盘 </span>
                            </a>
                        </li>

                        <li>
                            <a href="/user/information" class="waves-effect"><i class="icon-profile"></i><span> 个人信息 <span class="float-right menu-arrow"></a>
                            
                        </li>

                        <li>
                            <a href="/user/pay" class="waves-effect"><i class="ti-credit-card"></i><span> 账户充值 <span class="float-right menu-arrow"></a>
                            
                        </li>

                        <li>
                            <a href="/user/price" class="waves-effect"><i class="ti-shopping-cart"></i><span> 购买套餐 <span class="float-right menu-arrow"></a>
                            
                        </li>
        
                        <li class="menu-title">other</li>

                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="icon-setting-2"></i> <span> 解析设置 <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
                            <ul class="submenu">
                                <li><a href="/user/api/dsp">短视频</a></li>
                                <li><a href="/user/api/ys">影视</a></li>
                                <li><a href="/user/api/submit">资源提交</a></li>
                                <li><a href="/user/api/record">解析记录</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="/user/video/" class="waves-effect"><i class="icon-video-cam"></i><span> 视频测试 <span class="float-right menu-arrow"></a>
                            
                        </li>

                        <li>
                            <a href="/user/problem/" class="waves-effect"><i class="icon-paper-sheet"></i><span> 常见问题 <span class="float-right menu-arrow"></a>
                            
                        </li>

                        <li>
                            <a href="<?php echo htmlentities($qq); ?>" class="waves-effect"><i class="icon-dialogue-happy"></i><span> 联系客服 <span class="float-right menu-arrow"></a>
                            
                        </li>

                        <li>
                            <a href="<?php echo htmlentities($qun); ?>" class="waves-effect"><i class="icon-plus"></i><span> 交流群 <span class="float-right menu-arrow"></a>
                            
                        </li>

                        <li>
                            <a href="<?php echo htmlentities($khd); ?>" class="waves-effect"><i class="ti-zip"></i><span> 客户端下载 <span class="float-right menu-arrow"></a>
                            
                        </li>

                        <li>
                            <a href="/user/login/out" class="waves-effect"><i class="ti-power-off"></i><span> 退出登录 <span class="float-right menu-arrow"></a>
                            
                        </li>
                       

                    </ul>

                </div>
 
                <!-- Sidebar -->
                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <h4 class="page-title">常见问题</h4>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end page-title -->

                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="text-center">
                                <h5>请仔细查看</h5>
                                <p class="text-muted">如遇到的问题不在此列表中,请<a href="<?php echo htmlentities($qq); ?>">联系客服</a>,将您的问题详细发出来,并且发送截图！不在问在不在,直接发问题节约你我的时间,看到会解答</p>
                            </div>
                        </div>
                    </div>

                    <div class="row m-t-30">
                        <div class="col-lg-4">
                            <div class="card faq-box border-success">
                                <div class="card-body">
                                    <div class="faq-icon float-right">
                                        <i class="fas fa-question-circle font-24 mt-2 text-success"></i>
                                    </div>
                                    <h5 class="text-success">01.</h5>
                                    <h5 class="font-16 mb-3 mt-4">搭建流程</h5>
                                    <p class="text-muted mb-0">①在左侧下载解析客户端 - ②上传至你的服务器 - ③修改user.php的uid和秘钥 信息在左侧的个人信息一栏！</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card faq-box border-primary">
                                <div class="card-body">
                                    <div class="faq-icon float-right">
                                        <i class="fas fa-question-circle font-24 mt-2 text-primary"></i>
                                    </div>
                                    <h5 class="text-primary">02.</h5>
                                    <h5 class="font-16 mb-3 mt-4">怎样使用？</h5>
                                    <p class="text-muted mb-0">调用方法 http://你的域名/?url=链接 播放成功后在你的网站后台修改解析信息为此链接！即可。</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card faq-box border-warning">
                                <div class="card-body">
                                    <div class="faq-icon float-right">
                                        <i class="fas fa-question-circle font-24 mt-2 text-warning"></i>
                                    </div>
                                    <h5 class="text-warning">03.</h5>
                                    <h5 class="font-16 mb-3 mt-4">资源提交</h5>
                                    <p class="text-muted mb-0">遇到解析失败的可以将链接提交至后台,有替换的链接可以写上没有就留空，等待处理即可！</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                            <div class="col-lg-4">
                                <div class="card faq-box border-danger">
                                    <div class="card-body">
                                        <div class="faq-icon float-right">
                                            <i class="fas fa-question-circle font-24 mt-2 text-danger"></i>
                                        </div>
                                        <h5 class="text-danger">04.</h5>
                                        <h5 class="font-16 mb-3 mt-4">防盗链</h5>
                                        <p class="text-muted mb-0">授权域名是给你的使用站点的域名授权,并不是解析的域名！不要混淆，当开启防盗时解析不能直接通过url调用,只能在你授权的站点使用！</p>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-lg-4">
                                <div class="card faq-box border-info">
                                    <div class="card-body">
                                        <div class="faq-icon float-right">
                                            <i class="fas fa-question-circle font-24 mt-2 text-info"></i>
                                        </div>
                                        <h5 class="text-info">05.</h5>
                                        <h5 class="font-16 mb-3 mt-4">短视频为什么不能播放</h5>
                                        <p class="text-muted mb-0">注意短视频只有json形式的格式,由于是json的格式url不能直接复制播放,需要先将json解析 如php的json_decode() 或者将链接中的"\"删除,就能直接播放无水印的视频了</p>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-lg-4">
                                <div class="card faq-box border-dark">
                                    <div class="card-body">
                                        <div class="faq-icon float-right">
                                            <i class="fas fa-question-circle font-24 mt-2 text-dark"></i>
                                        </div>
                                        <h5 class="text-dark">06.</h5>
                                        <h5 class="font-16 mb-3 mt-4">弹幕怎么弄</h5>
                                        <p class="text-muted mb-0">客户端内置有客户端播放器,在user.php中将开关开开后即可！注意不能乱改动客户端,以免造成解析失效失败的问题！需要对接自己弹幕库的联系客服获取帮助！</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
                <!-- container-fluid -->

            </div>
            <!-- content -->

             <footer class="footer">
                © 2020 云海计费系统<i class="mdi mdi-heart text-danger"></i>
</footer> 

        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- jQuery  -->
    <script src="/static/assets/js/jquery.min.js"></script>
    <script src="/static/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/static/assets/js/metismenu.min.js"></script>
    <script src="/static/assets/js/jquery.slimscroll.js"></script>
    <script src="/static/assets/js/waves.min.js"></script>


    <script src="/static/assets/pages/dashboard.init.js"></script>

    <!-- App js -->
    <script src="/static/assets/js/app.js"></script>

</body>

</html>