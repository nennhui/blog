<?php /* Smarty version Smarty-3.1.6, created on 2017-04-12 15:07:43
         compiled from "D:\php_program\superlife-master\res\html\menu.html" */ ?>
<?php /*%%SmartyHeaderCode:72365182858edd23f8d1674-10357779%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f350a39a9490895d0bb98ec3b96ced25bfd47bba' => 
    array (
      0 => 'D:\\php_program\\superlife-master\\res\\html\\menu.html',
      1 => 1489342306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72365182858edd23f8d1674-10357779',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58edd23f9cf53',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58edd23f9cf53')) {function content_58edd23f9cf53($_smarty_tpl) {?>        <script src="/res/js/jquery.js"></script> 
  <div class="top_all">
      <div class="top">
        <div class="top_menu">
        <label>无奇不有</label>
          <a href="/index/index/index">首页</a>
          <a href="/index/index/index/type/0">奇闻</a>
          <a href='/index/index/index/type/1'>异事</a>
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
<div class="fade" style="display:none"></div>

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
        

        </script><?php }} ?>