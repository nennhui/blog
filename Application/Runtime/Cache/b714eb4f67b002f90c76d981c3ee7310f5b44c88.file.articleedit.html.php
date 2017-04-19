<?php /* Smarty version Smarty-3.1.6, created on 2017-04-19 11:03:48
         compiled from "./Application/Index/View\Index\articleedit.html" */ ?>
<?php /*%%SmartyHeaderCode:679158be644dd02630-97926922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b714eb4f67b002f90c76d981c3ee7310f5b44c88' => 
    array (
      0 => './Application/Index/View\\Index\\articleedit.html',
      1 => 1492571023,
      2 => 'file',
    ),
    '2e28d72255208dcfaf109ea6db50f963c85422a3' => 
    array (
      0 => 'D:\\php_program\\menu.html',
      1 => 1492568465,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '679158be644dd02630-97926922',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58be644ddf0af',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58be644ddf0af')) {function content_58be644ddf0af($_smarty_tpl) {?><html>
  <head>
    <link rel="stylesheet" type="text/css" href="/res/css/common.css">
    <link rel="stylesheet" type="text/css" href="/res/css/init.css">
    <title>上传文件</title>
    
    <style type="text/css">
    
        .main{ width: 90%;margin: 0 auto;margin-top: 1rem;text-align: left; }
        .up{text-align: center;}
        
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
    
<br>
<div class="main">
    <div>
        <label>标题</label>
        <input type="text" class="title">
    </div>
    <br>
    <textarea id="container" >输入内容</textarea>
    <!-- 加载编辑器的容器 -->
    <br>
    <div>
        <label>分类</label>
        <select class="type">
        <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['typelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value){
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value['type_name'];?>
</option>
        <?php } ?>
        </select>
    </div>
    <div class="up">
        <button class="tj">提交</button>
    </div>
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

    
    <!-- 配置文件 -->
    <script type="text/javascript" src="/res/Ueditor/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/res/Ueditor/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
 <script type="text/javascript">
    $().ready(function(){
    var article={}
    article.init = function(){

        article.main_editor = UE.getEditor('container',{ 
        toolbars:[['undo','redo','simpleupload']],
        imageUrl: '/index/index/id',
        zIndex: 1}
        );
        $(".tj").click(function(){
            article.save();
                })
        }
    article.params=function(){
        params={}
        params["content"]=article.main_editor.getContent()   
        params['title']   =$('.title').val()
        params['type']   =$('.type').val()
        return params
    }
    article.save= function(){
        
        var params = article.params();
                $.ajax({
                    type:'post',
                    url: '/index/index/save',
                    data:params,
                    dataType:'json',
                    success:function(data){
                        if (data.code==1){
                        alert(data.message)
                        window.location.href="/index/index/index"
                        }
                    },
                })
        }
    
    article.init();
      })
    </script>
  
</body>

</html><?php }} ?>