<?php /* Smarty version Smarty-3.1.13, created on 2016-11-14 15:21:06
         compiled from "D:\ServerMobi\loteamento\application\views\login\login.html" */ ?>
<?php /*%%SmartyHeaderCode:40335829c947b1bf64-78011266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36a1fe05839fa53d0d0027e9f3aab51e1a2fe482' => 
    array (
      0 => 'D:\\ServerMobi\\loteamento\\application\\views\\login\\login.html',
      1 => 1479147665,
      2 => 'file',
    ),
    'e7e2140b499266875d932826ecbb76b03b8d7e99' => 
    array (
      0 => 'D:\\ServerMobi\\loteamento\\application\\views\\layout\\login.html',
      1 => 1479133676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40335829c947b1bf64-78011266',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5829c947b8a9b0_35493904',
  'variables' => 
  array (
    'aplication' => 0,
    'controller' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5829c947b8a9b0_35493904')) {function content_5829c947b8a9b0_35493904($_smarty_tpl) {?><!doctype html>
<html lang="pt-br">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title><?php echo $_smarty_tpl->tpl_vars['aplication']->value['sitename'];?>
</title>
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['css'];?>
bootstrap.min.css?v=1">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['css'];?>
css.css?v=1">

  </head>
  <body>
    <div class="container-fluid">
      <div class="bar-top row">
        <div class="container">
          <div class="col-md-12 col-xs-12 text-center">
            <img src="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['img'];?>
logo.png" alt="">
          </div>
        </div>
      </div>
      <!-- <script type="text/javascript" src="http://twitcasting.tv/f:891635474215839/embed/live-640-0"></script> -->
      <main class="tabs-conselhos-v1 container">
        
<div class="loginmodal-container">
	<?php if ($_smarty_tpl->tpl_vars['erro']->value){?>
	<div class="row">
		<div class="col-md-12 col-xs-12">
			<div class="alert alert-danger">
				<?php echo $_smarty_tpl->tpl_vars['erro']->value;?>

			</div>
		</div>
	</div>
	<?php }?>
	<h1>Faça login</h1><br>
	<form action="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
login/exec" method="POST">
		<input type="text" name="login" placeholder="Usuário">
		<input type="password" name="senha" placeholder="Senha">
		<div class="form-group">
			<select name="acesso" id="" class="form-control">
				<option value="">Selecione o acesso</option>
				<option value="1">Gerencia</option>
				<option value="2">Secretaria</option>
			</select>
		</div>
		<input type="submit" class="login loginmodal-submit" value="Logar">
	</form>
</div>

        <div class="clearfix"></div>
      </main><!-- Fim tabs -->
    </div>
    <div class="clearfix"></div>
    <footer id="footer">
      <div class="container">
        &copy; <?php echo $_smarty_tpl->tpl_vars['aplication']->value['sitename'];?>
 <?php echo date('Y');?>

      </div>
    </footer>
    <script type="text/javascript">
       var Const ={
           home_url : '<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
',
           controller: '<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
'
       }
    </script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['js'];?>
libs/jquery-1.11.0.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['js'];?>
bootstrap.min.js"></script>
  </body>
</html><?php }} ?>