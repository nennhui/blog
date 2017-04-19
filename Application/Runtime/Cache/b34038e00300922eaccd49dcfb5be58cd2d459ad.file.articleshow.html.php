<?php /* Smarty version Smarty-3.1.6, created on 2017-04-19 16:02:56
         compiled from "./Application/Index/View\Index\articleshow.html" */ ?>
<?php /*%%SmartyHeaderCode:2497258c653f5289e71-60989611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b34038e00300922eaccd49dcfb5be58cd2d459ad' => 
    array (
      0 => './Application/Index/View\\Index\\articleshow.html',
      1 => 1492588974,
      2 => 'file',
    ),
    '2e28d72255208dcfaf109ea6db50f963c85422a3' => 
    array (
      0 => 'D:\\php_program\\menu.html',
      1 => 1492568465,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2497258c653f5289e71-60989611',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58c653f5489a6',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c653f5489a6')) {function content_58c653f5489a6($_smarty_tpl) {?><html>
  <head>
    <link rel="stylesheet" type="text/css" href="/res/css/common.css">
    <link rel="stylesheet" type="text/css" href="/res/css/init.css">
    <title>上传文件</title>
    
    <style type="text/css">
 
        .content_text{font-size:1.2rem;padding-top:2rem }
        .content_user{ margin:0 auto;padding: 2rem}
        .content_user img {width :3rem;height: 3rem;border-radius: 3rem;}
        .main_content,.article_answer,.my_answer {overflow:auto;height:auto;margin: 1rem;background: white;padding:1rem;text-align: left}
        .main_content .title{text-align: center;}
        .my_answer textarea{ height:6rem;width: 100% }
        .my_answer button{height: 2rem ;background: #4eaa4c;color: white;}
        .text_content{margin-bottom: 1rem;overflow: hidden;}
        
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
    
        <div class="main_content">
          <div class="title" >
          <h2><?php echo $_smarty_tpl->tpl_vars['data']->value['article_title'];?>
</h2>
          </div>
          <div class="content_user">
        
            <a>
            <img  src="/res/img/example.jpg"> 
            </a>
            <label>发布于<?php echo date('Y-m-d',time($_smarty_tpl->tpl_vars['data']->value['create_time']));?>
</label>
            <a href=""><?php echo $_smarty_tpl->tpl_vars['data']->value['user_name'];?>
</a>
          </div>
          <hr>
          <div class="content_text">
          <div class="text_content">
          <span><?php echo $_smarty_tpl->tpl_vars['data']->value['article_content'];?>
</span>
          </div>
          <div class="text_reply">
          </div>
          </div>
        </div>
       <?php if (isset($_SESSION['name'])){?>
        <div class="my_answer">
        <p>发表评论</p>
        <textarea class="my_answer_content"></textarea>
        <button onclick="my_ti()">发表评论</button>
        </div>

        <?php }?>

        <div class="article_answer">
           <div class="answer_title">评论<label></label></div>
           <hr>
           <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['answerlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value){
$_smarty_tpl->tpl_vars['foo']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['foo']->key;
?>
           <div>
           <img src="/res/img/example.jpg" style="width:2rem;height:2rem">
           <a ><?php echo $_smarty_tpl->tpl_vars['foo']->value['user_name'];?>
</a>
           </div>
           <div class="answer_content"><?php echo $_smarty_tpl->tpl_vars['foo']->value['answer_content'];?>
</div> 
           <hr >
           <?php } ?>
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

    
     <script src="http://code.jquery.com/jquery.js"></script>

      <script type="text/javascript">
      $('.answer_title label').text('(<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
条)')
      function my_ti(){
        var content=$(".my_answer_content").val()
        var articleid=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>

        var data={}
        data['content']=content
        data['articleid']=articleid
        $.ajax({
          type:'post',
          url:'/index/answer/answer',
          data:data,
          dataType:'json',
          success:function(data){
            alert(data.message)
            $(".my_answer_content").val('')
            location.reload();


          },
        })
      }
      $("#upfile").change(function(){
        var formData = new FormData($("#dd")[0]);
        $.ajax({
          type:"post",
          url:"/index.php/index/index/updata",
          data:formData,
          processData: false,
          contentType: false,
          async: false,
           cache: false,
          success:function(data){
            alert(data)
          },

        })
      })
      </script>



</body>

</html><?php }} ?>