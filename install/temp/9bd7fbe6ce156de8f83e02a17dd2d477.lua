<?php /*a:1:{s:53:"D:\phpstudy_pro\WWW\tp6\view\install\index\index.html";i:1601654091;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible"content="IE=edge">
<meta name="viewport"content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<title>云海计费系统 - 安装</title>
<meta content="Responsive admin theme build on top of Bootstrap 4"name="description"/>
<meta content="Themesdesign"name="author"/>

<link href="/static/yun/css/bootstrap.min.css"rel="stylesheet"type="text/css">
<link href="/static/yun/css/metismenu.min.css"rel="stylesheet"type="text/css">
<link href="/static/yun/css/icons.css"rel="stylesheet"type="text/css">
<link href="/static/yun/css/style.css"rel="stylesheet"type="text/css">

</head>

<body>


<div class="accountbg"></div>
<div class="home-btn d-none d-sm-block">

</div>
<div class="wrapper-page">
<div class="card card-pages shadow-none">
    
                    <div class="card-body">
<div class="text-center m-t-0 m-b-15">
       
       
       
   </div>
<h5 class="font-18 text-center">系统安装</h5>
<form id="install">
    
                            <div class="form-group">
<div class="col-12">
<label>数据库地址：</label>
<input class="form-control" name="hostname" type="text" value="127.0.0.1">
</div>
</div>
    
<div class="form-group">
<div class="col-12">
<label>数据库名：</label>
<input class="form-control"name="database"type="text" placeholder="database">
</div>
</div>

<div class="form-group">
<div class="col-12">
<label>数据库用户名：</label>
<input class="form-control"name="username"type="text" placeholder="username">
</div>
</div>

<div class="form-group">
<div class="col-12">
<label>数据库密码：</label>
<input class="form-control"name="password"type="text" placeholder="password">
</div>
</div>
    
<div class="form-group">
<div class="col-12">
<label>端口：</label>
<input class="form-control"name="hostport"type="number" value="3306">
</div>
</div>

<div class="form-group">
<div class="col-12">
<label>表前缀：</label>
<input class="form-control"name="prefix"type="text" readonly="readonly" value="yh_">
</div>
</div>

<div class="form-group">
<div class="col-12">
<label>编码：</label>
<input class="form-control"name="charset"type="text" readonly="readonly" value="utf8">
</div>
</div>  

<div class="form-group">
<div class="col-12">
<div id="vaptchaContainer">
<a href="/"target="_blank">
</a>
<label>其他：</label>
<span class="vaptcha-text"><a href="http://sq.ymcx.shop">授权查询</a>- <a href="http://cloudhai.cn">系统文档</a> - <a href="http://cloudhai.cn">使用协议</a></span>
</div>
</div>
</div>
    
                            <div class="form-group text-center m-t-20">
<div class="col-12">
	</form>
</div>
</div>
<button class="btn btn-primary btn-block btn-lg waves-effect waves-light" id="button">下一步</button>
</div>
    
                </div>
</div>


<script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.js"></script>
<script type="text/javascript">
$('#button').click(function() {
  $.ajax({
		url:"/install/index/configureConn",
		type:'post',
		data:$('form').serialize(),
		success:function(){
			document.location = "/install/index/insert";
		},
		error:function(){
			alert('检查数据库信息');
		}
	})
});
</script>

<script src="/static/yun/js/jquery.min.js"></script>
<script src="/static/yun/js/bootstrap.bundle.min.js"></script>
<script src="/static/yun/js/metismenu.min.js"></script>
<script src="/static/yun/js/jquery.slimscroll.js"></script>
<script src="/static/yun/js/waves.min.js"></script>
        
        
<script src="/static/yun/js/app.js"></script>
        
    </body>

</html>