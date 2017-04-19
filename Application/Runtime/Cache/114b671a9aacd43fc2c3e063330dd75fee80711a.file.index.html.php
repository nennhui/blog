<?php /* Smarty version Smarty-3.1.6, created on 2017-04-19 15:45:56
         compiled from "./Application/Index/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2639858be2eb1605591-75736804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '114b671a9aacd43fc2c3e063330dd75fee80711a' => 
    array (
      0 => './Application/Index/View\\Index\\index.html',
      1 => 1492587956,
      2 => 'file',
    ),
    '2e28d72255208dcfaf109ea6db50f963c85422a3' => 
    array (
      0 => 'D:\\php_program\\menu.html',
      1 => 1492568465,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2639858be2eb1605591-75736804',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58be2eb1739f6',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58be2eb1739f6')) {function content_58be2eb1739f6($_smarty_tpl) {?><html>
  <head>
    <link rel="stylesheet" type="text/css" href="/res/css/common.css">
    <link rel="stylesheet" type="text/css" href="/res/css/init.css">
    <title>列表</title>
    
       <style type="text/css">
       
/*        .content_text{font-size:1.2rem;}*/
        .user_name{float: right;width: 92%;text-align: left;}
        .user_img{float: left;width: 5%;text-align: right;}
        .content_user{ margin:0 auto;width: 100%}
        .content_user img {width :2rem;height: 2rem;}
        .main_content {overflow:auto;height:auto;background: white;padding:1rem;}
        .content_text{
          width: 92%;text-align: left;float: right;
          padding-top: 0.5rem;padding-bottom: 1rem; line-height:1rem;
          border-bottom: 0.1rem dotted #000;height: 2.7rem;overflow: hidden}
        .content_text a{color: #666;font-size: 0.9rem}
        .article_title{color: #2e3092;font-family: '宋体';font-weight: 700;}
        .article_name a{color: #2e3092;font-size: 0.8rem;font-weight: 300;}

        
       </style>

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
    
      <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value){
$_smarty_tpl->tpl_vars['foo']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['foo']->key;
?>
        <div class="main_content">
          <div class="content_user">
            <div class="user_img">
              <a>
              <img  src="/res/img/example.jpg"> 
              </a>
            </div>
            <div class="user_name">
              <p class="article_name"><a href=""><?php echo $_smarty_tpl->tpl_vars['foo']->value['user_name'];?>
</a></p>
              <a href="/index/index/articleshow/articleid/<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
" target="_blank"><p class="article_title"><?php echo $_smarty_tpl->tpl_vars['foo']->value['article_title'];?>
</p> </a>
            </div>
          </div>
          <div class="content_text">     
            <?php echo $_smarty_tpl->tpl_vars['foo']->value['article_content'];?>

          </div>
        </div>
      <?php } ?>

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
  $().ready(function(){


  })
  </script>
  
</body>

</html><?php }} ?>