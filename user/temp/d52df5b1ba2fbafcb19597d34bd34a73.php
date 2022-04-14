<?php /*a:5:{s:55:"/www/wwwroot/jifei.ymcx.shop/view/user/index/index.html";i:1603618620;s:48:"/www/wwwroot/jifei.ymcx.shop/view/user/head.html";i:1601905500;s:47:"/www/wwwroot/jifei.ymcx.shop/view/user/msg.html";i:1601710952;s:47:"/www/wwwroot/jifei.ymcx.shop/view/user/nav.html";i:1602052598;s:48:"/www/wwwroot/jifei.ymcx.shop/view/user/foot.html";i:1601657034;}*/ ?>
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
                                <h4 class="page-title">仪表盘</h4>
                            </div>
                            
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end page-title -->

                    <div class="row">

                        <div class="col-sm-6 col-xl-3">
                            <div class="card">
                                <div class="card-heading p-4">
                                    <div class="mini-stat-icon float-right">
                                        <i class="mdi mdi-cube-outline bg-primary  text-white"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-16">今日调用</h5>
                                    </div>
                                    <h3 class="mt-4"><?php echo htmlentities($daydy); ?></h3>
                                    <div class="progress mt-4" style="height: 4px;">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">75%</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="card">
                                <div class="card-heading p-4">
                                    <div class="mini-stat-icon float-right">
                                        <i class="mdi mdi-tag-text-outline bg-warning text-white"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-16">账户余额</h5>
                                    </div>
                                    <h3 class="mt-4"><?php echo htmlentities($money); ?> 元</h3>
                                    <div class="progress mt-4" style="height: 4px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">68%</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="card">
                                <div class="card-heading p-4">
                                    <div class="mini-stat-icon float-right">
                                        <i class="mdi mdi-briefcase-check bg-success text-white"></i>
                                    </div>
                                    <div>
                                    <?php if($fstype == '1'): ?>
                                    <h5 class="font-16">剩余点数</h5>
                                    </div>
                                    <h3 class="mt-4"><?php echo $surplus; ?></h3>
                                    <?php endif; if($fstype == '2'): ?>
                                    <h5 class="font-16">剩余天数</h5>
                                    </div>
                                    <h3 class="mt-4"><?php echo $surplus; ?></h3>
                                    <?php endif; ?>
                                    <div class="progress mt-4" style="height: 4px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">88%</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="card">
                                <div class="card-heading p-4">
                                    <div class="mini-stat-icon float-right">
                                        <i class="mdi mdi-buffer bg-danger text-white"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-16">账号状态</h5>
                                    </div>
                                    <h3 class="mt-4"><?php if($status == '1'): ?>正常<?php endif; if($status == '0'): ?>禁用<?php endif; ?></h3>
                                    <div class="progress mt-4" style="height: 4px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">82%</span></p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-xl-6">
                                <div class="card m-b-20">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">赞助广告</h4>
                                        <p class="sub-title">如需投放广告请联系QQ1178350505 <code>上架</code> .</p>
        
                                        <div id="carouselExampleCaption" class="carousel slide" data-ride="carousel">
                                            <?php echo $guanggao; ?>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleCaption" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleCaption" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                        </div>
                        <!-- end col -->

                        <div class="col-xl-4">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title mb-4">用户公告</h4>
                                    
                                    <?php echo $notice; ?>

                                    <div id="morris-donut-example" class="morris-charts morris-chart-height"></div>

                                </div>
                            </div>
                        </div>
                        <!-- end col -->
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