<?php /* Smarty version Smarty-3.1.6, created on 2017-04-19 10:55:45
         compiled from "./Application/User/View\User\register.html" */ ?>
<?php /*%%SmartyHeaderCode:105249179658f6cb6a343504-69499153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d76ea5c48efadeb678ad60045a68f957795ccbd' => 
    array (
      0 => './Application/User/View\\User\\register.html',
      1 => 1492570544,
      2 => 'file',
    ),
    '2e28d72255208dcfaf109ea6db50f963c85422a3' => 
    array (
      0 => 'D:\\php_program\\menu.html',
      1 => 1492568465,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105249179658f6cb6a343504-69499153',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58f6cb6a38d89',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f6cb6a38d89')) {function content_58f6cb6a38d89($_smarty_tpl) {?><html>
  <head>
    <link rel="stylesheet" type="text/css" href="/res/css/common.css">
    <link rel="stylesheet" type="text/css" href="/res/css/init.css">
    <title>注册</title>
    

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script src="/res/js/jquery.js"></script> 
  </head>
<body>
  <div class="top_all">
      <div class="top">
        <div class="top_menu">
        <label>frank博客</label>
          <a href="/index/index/index">首页</a>
          <a href="/index/index/index/type/1">技术干货</a>
          <a href='/index/index/index/type/2'>心得体会</a>
          <a href='/index/index/index/type/3'>吐槽</a>
        </div>
        <div class="top_user">
          <?php if (isset($_SESSION['name'])){?>
          <a href=""  class="name_show"><?php echo $_SESSION['name'];?>
</a>
          <img src="">
          <a href="/index/index/articleedit">发文章</a>
          <a href="/user/user/logout">注销</a>
          <?php }else{ ?>
          <a href="javascript:;" onclick="alert_div()">登录</a>
          <a href="/user/user/register">注册</a>
          <?php }?>
        </div>
  </div>
  <div class="alert_div " style="display:none">
      <div class="login_title">
        <label>奇闻异事账号</label>
        <img src="/res/img/login_close.jpg" class="alert_close">
      </div>
      <div class="login_div">
        <div class="input_div">
            <img src="/res/img/login_user.jpg">
            <input type="text"  id="name" placeholder="账号">
        </div>
        <div class="input_div">
            <img src="/res/img/login_pass.jpg">
            <input type="text" id="pass" placeholder="密码">
        </div>
        <div class="ti">
          <button id="login">登录</button>
        </div>
      </div>
      <hr>
      <div class="login_ti" >
        温馨提示:登录即注册
      </div>
  </div>
</div>  
<div class="fade" style="display:none"></div>
<div class="main_all">
  <div class="main_left">
    
<div>
	<div>*账号<input class="name"></div>
	<div>*密码<input  class="pass"></div>
	<div>邮箱<input  class="e-mail"></div>
	<button onclick="submit()">提交</button>
</div>

  </div>
  <div class="main_right">
  </div>  
</div>
        <script type="text/javascript">
            $().ready(function(){
    var name_show=$('.name_show').text()
    var name_l=name_show.length
    if (name_l>5){
      $('.name_show').text(name_show.substring(0,5)+'....')
    }
    })
        function alert_div(){
          $(".alert_div").css("display","block")
          $(".fade").css("display","block")
        }
        $('.alert_close').click(function(){
          $(".alert_div").css("display","none")
          $(".fade").css("display","none")

        })
        $("#login").click(function(){
          var params={}
          params['name']=$("#name").val();
          params['pass']=$("#pass").val();
          if (params['name']==''){
            alert("账号不能为空");
            return false;
          }
          if (params['pass']==''){
            alert("密码不能为空");
            return false;
          }       
          $.ajax({
            type:"post",
            url:"/user/user/login",
            data:params,
            dataType:"json",
            success:function(data){
              if (data.code==1){
                location.reload()
              }
              else {
                alert(data.message)
              }
            },

          } )  
        })  
        

        </script>

    
<script type="text/javascript">
function	submit(){
	var params={}
	params['name']=$('.name').val()
	params['pass']=$('.pass').val()	
	params['e-mail']=$('.e-mail').val()

	$.ajax({
		type:'post',
		data:params,
		url:'/user/user/register_up',
		success:function(data){
			if (data.code==1){
				alert(data.message)
				window.location.href='/index/index/index'
			}
			else{
			alert(data.message)
			 
			 }
		},
	})

}
</script>

</body>

</html><?php }} ?>