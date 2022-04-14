<?php /*a:1:{s:55:"/www/wwwroot/zc.appearoo.top/view/user/login/index.html";i:1615049899;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
       <title><?php echo htmlentities($webtitle.' - '.$title); ?></title>
    <link rel="stylesheet" href="/static/assets/css/tailwind.min.css">
    <script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <link href="/static/assets/css/msg.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/static/assets/js/msg.js"></script>

    <style>
        .dlbox .weixin, .dlbox .weibo, .dlbox .user {
            display: inline-block;
            width: 30px;
            height: 30px;
            background-size: cover;
        }

        .dlbox .weixin {
            background-image: url(/static/assets/images/QQ.png);
        }
        .dlbox .user {
            background-image: url(/static/assets/images/user.png);
        }
        .qqlogin p{
            font-weight: 600;
        }
    </style>
</head>

<body class="min-h-screen bg-gray-100 text-gray-900 flex justify-center dlbox">
    <div class="max-w-screen-xl m-0 sm:m-20 bg-white shadow sm:rounded-lg flex justify-center flex-1">
        <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12">
            <div class="mt-12 flex flex-col items-center">
                <h1 class="text-2xl xl:text-3xl font-extrabold">账户登录</h1>
                <div class="w-full flex-1 mt-8">

                    <div class="flex flex-col items-center">
                        <button id="qqbut"  onclick="qqlogin('login')" class="w-full max-w-xs font-bold shadow-sm rounded-lg py-3 bg-indigo-100 text-gray-800 flex items-center justify-center ease-in-out focus:outline-none hover:shadow focus:shadow-sm focus:shadow-outline">
                            <div class="weixin"></div>
                            <span class="ml-4">使用QQ登录</span>
                        </button>
                        
                        <button id="userbut" style="display:none" onclick="userbut()" class="w-full max-w-xs font-bold shadow-sm rounded-lg py-3 bg-indigo-100 text-gray-800 flex items-center justify-center ease-in-out focus:outline-none hover:shadow focus:shadow-sm focus:shadow-outline">
                            <div class="user"></div>
                            <span class="ml-4">使用账户登录</span>
                        </button>
                        
                    </div>

                    <div class="my-12 border-b text-center">
                        <div class="leading-none px-2 inline-block text-sm text-gray-600 tracking-wide font-medium bg-white transform translate-y-1/2">或者使用电子邮箱登陆</div>
                    </div>
                    <div class="flex flex-col items-center qqlogin" style="display:none" onclick="qqlogin('login')">
                        <div class="qqcode">
                        <img src="/static/assets/images/ycode.png">
                        </div>
                        <p>请使用手机QQ扫码登录</p>
                    </div>
                    <form id="login" onsubmit="return false" action="##" method="post">
                    <div class="mx-auto max-w-xs">
                        <input name="username" class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white" type="text" placeholder="用户名或电子邮箱" />
                        <input name="password" class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5" type="password" placeholder="密码" />
                        <button id="go" class="mt-5 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-full py-4 rounded-lg hover:bg-indigo-700 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                            <span class="ml-3">登 陆</span>
                        </button>
                        <p class="mt-6 text-xs text-gray-600 text-center">我同意并遵守服务协议</p>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="flex-1 bg-indigo-100 text-center hidden lg:flex">
            <div class="m-12 xl:m-16 w-full bg-contain bg-center bg-no-repeat" style="background-image: url('/static/assets/images/dlbox.svg');"></div>
        </div>
    </div>
    <script>
        $(function(){
            $("#go").click(function(){
                $.ajax({
                url:'/user/login/checkUser',
                type:'post',
                data: $('#login').serialize(),
                success(data){
                    if(data.status == 200){
                        tmsg(data.msg)
                        setTimeout(window.location ='/user/index',1400);
                    }else{
                        tmsg(data.msg)
                    }
                }
                })
            });
        })
        
        function qqlogin(type,qrsig=''){
            if(type == 'login'){
                $("#qqbut").hide()
                $("#userbut").show()
                $("form").hide()
                $(".qqlogin").show()
            }
            $.ajax({
                    url:'/user/login/qqlogin',
                    type:'post',
                    data:{
                        type,
                        qrsig,
                    },
                    success(data){
                        json = JSON.parse(data)
                        if(qrsig=='' && type == 'login' && json.data!='' && json.qrsig !=''){
                            $("#qqlogin").hide()
                            $(".qqcode").html('<img src="'+json.data+'">')
                            qrsig = json.qrsig
                            res(qrsig)
                        }else{
                            $(".qqlogin p").html(json.msg)
                            if(json.code == 1){
                                window.location ='/user/index';
                            }else if(json.code == -6){
                                tmsg(json.msg)
                                window.location ='/user/index';
                            }
                        }
                        
                    }
                })
        }
        
        function userbut()
        {
            $("#qqbut").show()
            $("#userbut").hide()
            $(".qqlogin").hide()
            $("form").show()
        }
        
        function res(data)
        {
            var qrsig = data
            sid = setInterval(function(){
                qqlogin('res',qrsig);
                $(".qqlogin p").append('.');
            },2000)
            
        }
    </script>
</body>
</html>