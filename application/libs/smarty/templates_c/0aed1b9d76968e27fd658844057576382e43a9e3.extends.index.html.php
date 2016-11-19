<?php /* Smarty version Smarty-3.1.13, created on 2016-11-14 12:42:13
         compiled from "D:\ServerMobi\loteamento\application\views\index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1589358271fcb316ba8-96957380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0aed1b9d76968e27fd658844057576382e43a9e3' => 
    array (
      0 => 'D:\\ServerMobi\\loteamento\\application\\views\\index\\index.html',
      1 => 1479123054,
      2 => 'file',
    ),
    '4db9c00e8c1b2c279d881a72055e338d72146271' => 
    array (
      0 => 'D:\\ServerMobi\\loteamento\\application\\views\\layout\\app.html',
      1 => 1479130326,
      2 => 'file',
    ),
    '981c716bf692ef75f5b838540f8f9fd84151f050' => 
    array (
      0 => 'D:\\ServerMobi\\loteamento\\application\\views\\includes\\busca-cliente.html',
      1 => 1479135972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1589358271fcb316ba8-96957380',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_58271fcb3d8ce6_52176018',
  'variables' => 
  array (
    'aplication' => 0,
    'controller' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58271fcb3d8ce6_52176018')) {function content_58271fcb3d8ce6_52176018($_smarty_tpl) {?><!doctype html>
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
chosen.min.css?v=1">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['css'];?>
css.css?v=1">

  </head>
  <body>
    <header class="header" role="navigation">
      <div id="menu-top" class="navbar navbar-default navbar-fixed-top" role="navigation">
          <div class="container-fluid">
              <div class="navbar-header"><a class="navbar-brand" href="#">Gestão de Propostas</a>
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                  </button>
              </div>
              <div class="collapse navbar-collapse navbar-menubuilder">
                  <ul class="nav navbar-nav navbar-right">
                      <li><a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
cliente">Clientes</a></li>
                      <li><a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
corretor">Corretores</a></li>
                      <li class="dropdown" class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Cadastro <b class="caret"></b></a>
                          <ul class="dropdown-menu" role="menu">
                              <li><a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
cliente/novo">Cliente</a>
                              </li>
                              <li><a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
corretor/novo">Corretor</a>
                              </li>
                          </ul>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
    </header>
    <div class="container-fluid" id="app">
      <div class="bar-top row">
        <div class="container">
          <div class="col-md-12 col-xs 12">
            <img src="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['img'];?>
logo.png" alt="">
          </div>
        </div>
      </div>
      <!-- <script type="text/javascript" src="http://twitcasting.tv/f:891635474215839/embed/live-640-0"></script> -->
      <main class="tabs-conselhos-v1 container">
        
   	<div class="col-md-12 col-xs-12">
   		<h3>Buscar clientes</h3>
   		<div class="row">
   			<?php /*  Call merged included template "includes/busca-cliente.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("includes/busca-cliente.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1589358271fcb316ba8-96957380');
content_5829db558eee72_11439813($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "includes/busca-cliente.html" */?>
   		</div>
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
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['js'];?>
libs/handlebars-v4.0.2.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['js'];?>
libs/chosen.jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['js'];?>
libs/jquery.mask.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['js'];?>
main.js?v=<?php echo rand(0,10);?>
"></script>
    
  </body>
</html><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2016-11-14 12:42:13
         compiled from "D:\ServerMobi\loteamento\application\views\includes\busca-cliente.html" */ ?>
<?php if ($_valid && !is_callable('content_5829db558eee72_11439813')) {function content_5829db558eee72_11439813($_smarty_tpl) {?><div class="col-sm-12">
	<div class="form-group" >
		<input class="form-control" id="busca_cliente" <?php if (isset($_smarty_tpl->tpl_vars['title']->value)){?> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <?php }?> name="busca_cliente" placeholder="Entre com o nome ou CPF/CNPJ do cliente" type="text">
	</div>
</div>
<?php }} ?>