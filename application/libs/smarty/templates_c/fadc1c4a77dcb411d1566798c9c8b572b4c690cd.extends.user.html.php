<?php /* Smarty version Smarty-3.1.13, created on 2016-11-19 18:25:36
         compiled from "/var/www/dev/loteamento/application/views/user/user.html" */ ?>
<?php /*%%SmartyHeaderCode:7107687405830b19d4a34c2-57452334%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fadc1c4a77dcb411d1566798c9c8b572b4c690cd' => 
    array (
      0 => '/var/www/dev/loteamento/application/views/user/user.html',
      1 => 1479567076,
      2 => 'file',
    ),
    '8838a11cb85b2ffd387430b6c6b68b568cefd8ac' => 
    array (
      0 => '/var/www/dev/loteamento/application/views/layout/app.html',
      1 => 1479587126,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7107687405830b19d4a34c2-57452334',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5830b19d4f0a58_65203075',
  'variables' => 
  array (
    'aplication' => 0,
    'is_logged' => 0,
    'usuario' => 0,
    'controller' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5830b19d4f0a58_65203075')) {function content_5830b19d4f0a58_65203075($_smarty_tpl) {?><!doctype html>
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
              <div class="navbar-header"><a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
">Gestão de Propostas</a>
              <?php if (isset($_smarty_tpl->tpl_vars['is_logged']->value)&&$_smarty_tpl->tpl_vars['is_logged']->value&&isset($_smarty_tpl->tpl_vars['usuario']->value)){?>
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                  </button>
              </div>
              <div class="collapse navbar-collapse navbar-menubuilder">
                  <ul class="nav navbar-nav navbar-right">
                      <li><a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
">Início</a></li>
                      <?php if ($_smarty_tpl->tpl_vars['usuario']->value->nivel!=Estatico::CORRETOR){?>

                      <li class="dropdown" class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Clientes <b class="caret"></b></a>
                          <ul class="dropdown-menu" role="menu">
                              <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
cliente/">Todos</a>
                              </li>
                              <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
cliente/novo">Cadatsrar</a>
                              </li>
                          </ul>
                      </li>
                      <li class="dropdown" class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Corretores <b class="caret"></b></a>
                          <ul class="dropdown-menu" role="menu">
                              <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
corretor/">Todos</a>
                              </li>
                              <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
corretor/lista">Editar</a>
                              </li>
                              <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
corretor/novo">Cadastrar</a>
                              </li>
                          </ul>
                      </li>
                      <?php if ($_smarty_tpl->tpl_vars['usuario']->value->nivel==Estatico::GERENCIA||$_smarty_tpl->tpl_vars['usuario']->value->nivel==Estatico::ADMIN){?>
                        <li class="dropdown" class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuário <b class="caret"></b></a>
                          <ul class="dropdown-menu" role="menu">
                              <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
usuarios/">Todos</a>
                              </li>
                              <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
usuario/novo">Novo</a>
                              </li>
                          </ul>
                        </li>
                      <?php }?>
                      <li class="dropdown" class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Secretaria <b class="caret"></b></a>
                          <ul class="dropdown-menu" role="menu">
                              <li><a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
secretaria/">Confirmar Vendas</a>
                              </li>
                              <li><a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
secretaria/corretor">Corretor</a>
                              </li>
                          </ul>
                      </li>
                      <li class="dropdown" class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Cadastro <b class="caret"></b></a>
                          <ul class="dropdown-menu" role="menu">
                              <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
cliente/novo">Cliente</a>
                              </li>
                              <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
corretor/novo">Corretor</a>
                              </li>
                          </ul>
                      </li>
                      <?php }?>
                      <li class="dropdown" class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Olá <?php echo $_smarty_tpl->tpl_vars['usuario']->value->nome;?>
 <b class="caret"></b></a>
                          <ul class="dropdown-menu" role="menu">
                              <li><a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
usuario/perfil">Editar</a>
                              </li>
                              <li><a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
login/logout">Sair</a>
                              </li>
                          </ul>
                      </li>
                  </ul>
              </div>
              <?php }?>
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
        
	<form class="form-horizontal" role="form" action="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
usuario/create" method="POST">
	    <p>
        	<a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
usuario/" class="btn btn-primary">Todos os usuários</a>
        </p>
	    <h2><?php echo (($tmp = @$_smarty_tpl->tpl_vars['label']->value)===null||$tmp==='' ? 'Registro de usuário' : $tmp);?>
</h2>
	    <div class="col-md-12">
	        <?php if ($_smarty_tpl->tpl_vars['erros']->value){?>
	        <div class="alert alert-danger">
	            <?php  $_smarty_tpl->tpl_vars['erro'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['erro']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['erros']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['erro']->key => $_smarty_tpl->tpl_vars['erro']->value){
$_smarty_tpl->tpl_vars['erro']->_loop = true;
?>
	                <?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
 <br>
	            <?php } ?>
	        </div>
	        <?php }?>
	        <?php if ($_smarty_tpl->tpl_vars['update']->value){?>
	        <div class="alert alert-success">
	            <?php echo $_smarty_tpl->tpl_vars['update']->value;?>
 
	        </div>
	        <?php }?>
	    </div>

	    <div class="form-group">
	        <label for="nome" class="col-sm-3 control-label">Nome</label>
	        <div class="col-sm-9">
	            <input type="text" id="nome" name="nome" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user']->value->nome)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Nome" class="form-control" autofocus>
	        </div>
	    </div>
	    <div class="form-group">
	        <label for="email" class="col-sm-3 control-label">Email</label>
	        <div class="col-sm-9">
	            <input type="email" id="email" name="email" <?php if (isset($_smarty_tpl->tpl_vars['user']->value->id)){?> disabled <?php }?> value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user']->value->email)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Email" class="form-control">
	        </div>
	    </div>
	    <div class="form-group">
	        <label for="senha" class="col-sm-3 control-label">Senha</label>
	        <div class="col-sm-9">
	            <input type="password" id="senha" name="senha" placeholder="Senha" class="form-control">
	        </div>
	    </div>
	    <div class="form-group">
            <label for="nivel" class="col-sm-3 control-label">Nível</label>
            <div class="col-sm-9">
                <select id="nivel" name="nivel" class="form-control">
                    <option>Nível de Acesso</option>
                   	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = Estatico::$nivel; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    	
                    	<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['user']->value)&&$_smarty_tpl->tpl_vars['user']->value->nivel==$_smarty_tpl->tpl_vars['k']->value){?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>

                    <?php } ?>
                </select>
            </div>
        </div> <!-- /.form-group -->
	    <div class="form-group">
	        <div class="col-sm-9 col-sm-offset-3">
	            <button type="submit" class="btn btn-primary ">Salvar</button>
	        </div>
	    </div>
	    <input type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user']->value->id)===null||$tmp==='' ? '' : $tmp);?>
" name="id" id="id">
	</form>

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
           <?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)){?>
           ,user: {
                id:'<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id;?>
',
                nome:'<?php echo $_smarty_tpl->tpl_vars['usuario']->value->nome;?>
',
                nivel:'<?php echo $_smarty_tpl->tpl_vars['usuario']->value->nivel;?>
',
                corretor_id:'<?php echo (($tmp = @$_smarty_tpl->tpl_vars['usuario']->value->corretor->id)===null||$tmp==='' ? '' : $tmp);?>
'
            }
          <?php }?>
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
busca-ajax.js?v=1.1"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['js'];?>
main.js?v=1.1"></script>
    
  </body>
</html><?php }} ?>