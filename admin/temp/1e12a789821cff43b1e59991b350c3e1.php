<?php /*a:4:{s:71:"/www/wwwroot/zc.appearoo.top/view/admin/resour_manage/replacetlist.html";i:1606715491;s:49:"/www/wwwroot/zc.appearoo.top/view/admin/head.html";i:1604892943;s:48:"/www/wwwroot/zc.appearoo.top/view/admin/nav.html";i:1615047338;s:51:"/www/wwwroot/zc.appearoo.top/view/admin/footer.html";i:1604233180;}*/ ?>
<!doctype html>
<html lang="en">
       <head>
        <meta charset="utf-8" />
        <title><?php echo htmlentities($webtitle.' - '.$name); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
   
        <link rel="shortcut icon" href="/static/adassets/images/favicon.ico">

        <!-- datepicker -->
        <link href="/static/adassets/libs/air-datepicker/css/datepicker.min.css" rel="stylesheet" type="text/css" />

        <!-- jvectormap -->
        <link href="/static/adassets/libs/jqvmap/jqvmap.min.css" rel="stylesheet" />

        <!-- Bootstrap Css -->
        <link href="/static/adassets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="/static/adassets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="/static/adassets/css/app.min.css" rel="stylesheet" type="text/css" />
        
        <link href="/static/assets/css/message.css" rel="stylesheet" type="text/css">
    
    </head>

    <body data-topbar="colored">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="/static/adassets/images/logo-sm-dark.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="/static/adassets/images/logo-dark.png" alt="" height="20">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="/static/adassets/images/logo-sm-light.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="/static/adassets/images/logo-light.png" alt="" height="20">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="mdi mdi-backburger"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="mdi mdi-magnify"></span>
                            </div>
                        </form>
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ml-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                aria-labelledby="page-header-search-dropdown">
                    
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
            
                      
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <i class="mdi mdi-tune"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="/static/adassets/images/users/avatar-1.jpg" alt="Header Avatar">
                                <span class="d-none d-sm-inline-block ml-1"><?php echo htmlentities($admin['name']); ?></span>
                                <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a class="dropdown-item" href="<?php echo url('/admin/Globalsite/updateAdmin'); ?>"><i class="mdi mdi-face-profile font-size-16 align-middle mr-1"></i> 账号设置</a>
                                <a class="dropdown-item" href="<?php echo url('/admin/Order/index'); ?>"><i class="mdi mdi-credit-card-outline font-size-16 align-middle mr-1"></i> 系统订单</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo url('/admin/login/out'); ?>"><i class="mdi mdi-logout font-size-16 align-middle mr-1"></i> 退出登陆</a>
                            </div>
                        </div>
            
                    </div>
                </div>

            </header>
    <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">导航</li>

                            <li>
                                <a href="<?php echo url('/admin/'); ?>" class="waves-effect">
                                    <div class="d-inline-block icons-sm mr-1"><i class="uim uim-airplay"></i></div><span class="badge badge-pill badge-success float-right">★</span>
                                    <span>仪表盘</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <div class="d-inline-block icons-sm mr-1"><i class="uim uim-layer-group"></i></div>
                                    <span>全局设置</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="<?php echo url('/admin/Globalsite/website'); ?>"> 网站设置</a></li>
                                    <li><a href="<?php echo url('/admin/Globalsite/registerSite'); ?>">注册设置</a></li>
                                    <li><a href="<?php echo url('/admin/Globalsite/paySite'); ?>">支付设置</a></li>
                                    <li><a href="<?php echo url('/admin/Globalsite/apisite'); ?>"> API设置</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <div class="d-inline-block icons-sm mr-1"><i class="uim uim-apps"></i></div>
                                    <span>资源管理</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="<?php echo url('/admin/ResourManage/newReplace'); ?>">新增替换</a></li>
                                    <li><a href="<?php echo url('/admin/ResourManage/batchImport'); ?>">批量导入</a></li>
                                    <li><a href="<?php echo url('/admin/ResourManage/replacetlist'); ?>">替换列表</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">其他管理</li>
                            
                            <li>
                                <a href="<?php echo url('/admin/Order/index'); ?>" class=" waves-effect">
                                    <div class="d-inline-block icons-sm mr-1"><i class=" uim uim-record-audio"></i></div>
                                    <span>订单列表</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="<?php echo url('/admin/Order/call'); ?>" class=" waves-effect">
                                    <div class="d-inline-block icons-sm mr-1"><i class=" uim uim-chart"></i></div>
                                    <span>调用记录</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <div class="d-inline-block icons-sm mr-1"><i class="uim uim-toggle-on"></i></div>
                                    <span>套餐管理</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="<?php echo url('/admin/SetMeal/add'); ?>">添加套餐</a></li>
                                    <li><a href="<?php echo url('/admin/SetMeal/index'); ?>">套餐列表</a></li>
                                </ul>
                            </li>
                            
                             <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <div class="d-inline-block icons-sm mr-1"><i class="uim uim-cube"></i></div>
                                    <span>用户管理</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="<?php echo url('/admin/UserManage/increase'); ?>">账户加款</a></li>
                                    <li><a href="<?php echo url('/admin/UserManage/index'); ?>">用户列表</a></li>
                                </ul>
                            </li>
                            
                            <!--<li>-->
                            <!--    <a href="javascript: void(0);" class="has-arrow waves-effect">-->
                            <!--        <div class="d-inline-block icons-sm mr-1"><i class="uim uim-box"></i></div>-->
                            <!--        <span>站点管理</span>-->
                            <!--    </a>-->
                            <!--    <ul class="sub-menu" aria-expanded="false">-->
                                    <!--<li><a href="<?php echo url('/admin/SiteManage/addadmin'); ?>">添加站点</a></li>-->
                                    <!--<li><a href="<?php echo url('/admin/SiteManage/index'); ?>">站点管理</a></li>-->
                            <!--        <li><a href="#">添加站点</a></li>-->
                            <!--        <li><a href="#">站点管理</a></li>-->
                            <!--    </ul>-->
                            <!--</li>-->
                            
                            <li>
                                <a href="<?php echo url('/admin/SiteManage/examine'); ?>" class=" waves-effect">
                                    <div class="d-inline-block icons-sm mr-1"><i class=" uim uim-comment-plus"></i></div>
                                    <span>资源审核</span><span class="badge badge-pill badge-danger float-right">1</span>
                                </a>
                            </li>
                            
                          
                            
                            <li>
                                <a href="<?php echo url('/admin/Update/upgrade'); ?>" class=" waves-effect">
                                    <div class="d-inline-block icons-sm mr-1"><i class=" uim uim-repeat"></i></div>
                                    <span>系统更新</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="<?php echo url('/admin/login/out'); ?>" class=" waves-effect">
                                    <div class="d-inline-block icons-sm mr-1"><i class=" uim uim-exit"></i></div>
                                    <span>退出登录</span>
                                </a>
                            </li>

                        </ul>

                    </div>
                    <!-- Sidebar  yunhai 2020.10.15 20:32:10 -->
                </div>
            </div>
    <!-- END Sidebar -->
        <style>
        .a{
            margin-top: 20px;
        }
        .search{
            display: flex;
            height: 50px;
            width: 200px;
            /*float: right;*/
            justify-content: space-between;
        }
        .search input{
            height: 60%;
        }
        </style>
            <div class="main-content">

                <div class="page-content">

                    <!-- Page-Title -->
                    <div class="page-title-box">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h4 class="page-title mb-1">替换列表</h4>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">资源管理</a></li>
                                    <li class="breadcrumb-item active">替换列表</li>
                                    </ol>
                                </div>
                                
                            </div>

                        </div>
                    </div>
                    <!-- end page title end breadcrumb -->
    
                    <div class="page-content-wrapper">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <h4 class="header-title">替换列表</h4>
                                            <p class="card-title-desc">如有重复资源在库内,替换会使用最后一次提交的数据<code>请详知</code>.
                                           
                                            </p>
                                            <form action="" method="post">
                                            <div class="search">
                                    
                                                <input name="keyw" placeholder="名称">
                                                <input type="submit" class="btn btn-primary btn-sm" style="width:25%" value="搜索" id="search">
                                                
                                            </div>
                                            </form>
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>资源id</th>
                                                    <th>提交id/名称</th>
                                                    <th>名称</th>
                                                    <th>原url</th>
                                                    <th>添加时间</th>
                                                    <th>状态</th>
                                                    <th>操作</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>
                                                <tr>
                                                    <td><span class="badge badge-primary"><?php echo htmlentities($data['id']); ?></span></td>
                                                    <td><?php echo htmlentities($data['uid']); ?></td>
                                                    <td><?php echo htmlentities($data['name']); ?></td>
                                                    <td><?php echo htmlentities($data['url']); ?></td>
                                                    <td><span class="badge badge-soft-primary"><?php echo htmlentities(date("Y-m-d H:i:s",!is_numeric($data['intime'])? strtotime($data['intime']) : $data['intime'])); ?></span></td>
                                                    <td><?php if($data['status'] == '1'): ?><span class="badge badge-success">开启</span><?php endif; if($data['status'] == '2'): ?><span class="badge badge-danger">停用</span><?php endif; ?></td>
                                                    <td><a href="<?php echo url('edit'); ?>?id=<?php echo htmlentities($data['id']); ?>">编辑</a>  <a href="<?php echo url('/admin/ResourManage/deletejk'); ?>?id=<?php echo htmlentities($data['id']); ?>">删除</a></td>
                                                </tr>
                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                                </tbody>
                                                
                                            </table>
                                            <?php echo $list; ?>
                                        </div>
                                        
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
            
                         

                        </div>
                        <!-- end container-fluid -->
                    </div> 
                    <!-- end page-content-wrapper -->
                </div>
                <!-- End Page-content -->

                
        <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                2020 © 云海blog <a href="http://cloudhai.cn">cloudhai.cn</a>
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by YunhaiWeb
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
    
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-tabs-custom rightbar-nav-tab nav-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link py-3 active" data-toggle="tab" href="#chat-tab" role="tab">
                            <i class="mdi mdi-message-text font-size-22"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-3" data-toggle="tab" href="#tasks-tab" role="tab">
                            <i class="mdi mdi-format-list-checkbox font-size-22"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-3" data-toggle="tab" href="#settings-tab" role="tab">
                            <i class="mdi mdi-settings font-size-22"></i>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content text-muted">
                    <div class="tab-pane active" id="chat-tab" role="tabpanel">
                
                        <form class="search-bar py-4 px-3">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="mdi mdi-magnify"></span>
                            </div>
                        </form>

                        <h6 class="px-4 py-3 mt-2 bg-light">Group Chats</h6>

                        <div class="p-2">
                            <a href="javascript: void(0);" class="text-reset notification-item pl-3 mb-2 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline mr-1 text-success"></i>
                                <span class="mb-0 mt-1">App Development</span>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item pl-3 mb-2 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline mr-1 text-warning"></i>
                                <span class="mb-0 mt-1">Office Work</span>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item pl-3 mb-2 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline mr-1 text-danger"></i>
                                <span class="mb-0 mt-1">Personal Group</span>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item pl-3 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>
                                <span class="mb-0 mt-1">Freelance</span>
                            </a>
                        </div>

                        <h6 class="px-4 py-3 mt-4 bg-light">Favourites</h6>

                        <div class="p-2">
                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative align-self-center mr-3">
                                        <img src="/static/adassets/images/users/avatar-10.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status online"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Andrew Mackie</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative align-self-center mr-3">
                                        <img src="/static/adassets/images/users/avatar-1.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status away"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Rory Dalyell</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">To an English person, it will seem like simplified</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative align-self-center mr-3">
                                        <img src="/static/adassets/images/users/avatar-9.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status busy"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Jaxon Dunhill</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">To achieve this, it would be necessary.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <h6 class="px-4 py-3 mt-4 bg-light">Other Chats</h6>

                        <div class="p-2 pb-4">
                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative align-self-center mr-3">
                                        <img src="/static/adassets/images/users/avatar-2.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status online"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Jackson Therry</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">Everyone realizes why a new common language.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative align-self-center mr-3">
                                        <img src="/static/adassets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status away"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Charles Deakin</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">The languages only differ in their grammar.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative align-self-center mr-3">
                                        <img src="/static/adassets/images/users/avatar-5.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status online"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Ryan Salting</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">If several languages coalesce the grammar of the resulting.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative align-self-center mr-3">
                                        <img src="/static/adassets/images/users/avatar-6.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status online"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Sean Howse</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative align-self-center mr-3">
                                        <img src="/static/adassets/images/users/avatar-7.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status busy"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Dean Coward</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">The new common language will be more simple.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative align-self-center mr-3">
                                        <img src="/static/adassets/images/users/avatar-8.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status away"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Hayley East</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">One could refuse to pay expensive translators.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>

                    <div class="tab-pane" id="tasks-tab" role="tabpanel">
                        <h6 class="p-3 mb-0 mt-4 bg-light">Working Tasks</h6>

                        <div class="p-2">
                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                                <p class="text-muted mb-0">App Development<span class="float-right">75%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                                <p class="text-muted mb-0">Database Repair<span class="float-right">37%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                                <p class="text-muted mb-0">Backup Create<span class="float-right">52%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 52%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>
                        </div>

                        <h6 class="p-3 mb-0 mt-4 bg-light">Upcoming Tasks</h6>

                        <div class="p-2">
                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                                <p class="text-muted mb-0">Sales Reporting<span class="float-right">12%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                                <p class="text-muted mb-0">Redesign Website<span class="float-right">67%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                                <p class="text-muted mb-0">New Admin Design<span class="float-right">84%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 84%" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>
                        </div>

                        <div class="p-3 mt-2">
                            <a href="javascript: void(0);" class="btn btn-success btn-block waves-effect waves-light">Create Task</a>
                        </div>

                    </div>
                    <div class="tab-pane" id="settings-tab" role="tabpanel">
                            <h6 class="px-4 py-3 bg-light">General Settings</h6>

                        <div class="p-4">
                            <h6 class="font-weight-medium">Online Status</h6>
                            <div class="custom-control custom-switch mb-1">
                                <input type="checkbox" class="custom-control-input" id="settings-check1" name="settings-check1" checked="">
                                <label class="custom-control-label font-weight-normal" for="settings-check1">Show your status to all</label>
                            </div>

                            <h6 class="mt-4">Auto Updates</h6>
                            <div class="custom-control custom-switch mb-1">
                                <input type="checkbox" class="custom-control-input" id="settings-check2" name="settings-check2" checked="">
                                <label class="custom-control-label font-weight-normal" for="settings-check2">Keep up to date</label>
                            </div>

                            <h6 class="mt-4">Backup Setup</h6>
                            <div class="custom-control custom-switch mb-1">
                                <input type="checkbox" class="custom-control-input" id="settings-check3" name="settings-check3">
                                <label class="custom-control-label font-weight-normal" for="settings-check3">Auto backup</label>
                            </div>

                        </div>

                        <h6 class="px-4 py-3 mt-2 bg-light">Advanced Settings</h6>

                        <div class="p-4">
                            <h6 class="font-weight-medium">Application Alerts</h6>
                            <div class="custom-control custom-switch mb-1">
                                <input type="checkbox" class="custom-control-input" id="settings-check4" name="settings-check4" checked="">
                                <label class="custom-control-label font-weight-normal" for="settings-check4">Email Notifications</label>
                            </div>

                            <div class="custom-control custom-switch mb-1">
                                <input type="checkbox" class="custom-control-input" id="settings-check5" name="settings-check5">
                                <label class="custom-control-label font-weight-normal" for="settings-check5">SMS Notifications</label>
                            </div>

                            <h6 class="mt-4">API</h6>
                            <div class="custom-control custom-switch mb-1">
                                <input type="checkbox" class="custom-control-input" id="settings-check6" name="settings-check6">
                                <label class="custom-control-label font-weight-normal" for="settings-check6">Enable access</label>
                            </div>

                        </div>
                    </div>
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="/static/adassets/libs/jquery/jquery.min.js"></script>
        <script src="/static/adassets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/static/adassets/libs/metismenu/metisMenu.min.js"></script>
        <script src="/static/adassets/libs/simplebar/simplebar.min.js"></script>
        <script src="/static/adassets/libs/node-waves/waves.min.js"></script>

        <script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>

        <!-- datepicker -->
        <script src="/static/adassets/libs/air-datepicker/js/datepicker.min.js"></script>
        <script src="/static/adassets/libs/air-datepicker/js/i18n/datepicker.en.js"></script>

        <!-- apexcharts -->
        <script src="/static/adassets/libs/apexcharts/apexcharts.min.js"></script>

        <script src="/static/adassets/libs/jquery-knob/jquery.knob.min.js"></script> 

        <!-- Jq vector map -->
        <script src="/static/adassets/libs/jqvmap/jquery.vmap.min.js"></script>
        <script src="/static/adassets/libs/jqvmap/maps/jquery.vmap.usa.js"></script>

        <script src="/static/adassets/js/pages/dashboard.init.js"></script>

        <script src="/static/adassets/js/app.js"></script>
        <script>
            $(document).ready(function(){
                $('input[name="search"]').bind("input propertychange",function(event){
                var txt = $('input[name="search"]').val();
                $("table tbody tr").hide().filter(":contains('" + txt + "')").show();
                })
                $("ul.pagination li").addClass("page-item");
                $("ul.pagination li a").addClass("page-link");
                var page = $("ul.pagination li.active span").text();
                $("ul.pagination li.active").html('<a class="page-link" href="#">'+page+'<span class="sr-only">(current)</span></a>');
                $("ul.pagination li span").addClass("page-link");
            });
        </script>

    </body>
</html>