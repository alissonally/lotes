<?php /* Smarty version Smarty-3.1.13, created on 2016-11-18 20:30:48
         compiled from "D:\ServerMobi\mobi\lotes\application\views\user\lista.html" */ ?>
<?php /*%%SmartyHeaderCode:4630582f63e00b8809-80202967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbf3442032bd000274827f98433b8201bae0f7bf' => 
    array (
      0 => 'D:\\ServerMobi\\mobi\\lotes\\application\\views\\user\\lista.html',
      1 => 1479479267,
      2 => 'file',
    ),
    '9d3ed2474963f0f764e11e5e9582c5370213b554' => 
    array (
      0 => 'D:\\ServerMobi\\mobi\\lotes\\application\\views\\layout\\app.html',
      1 => 1479500929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4630582f63e00b8809-80202967',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_582f63e0271a01_02006091',
  'variables' => 
  array (
    'aplication' => 0,
    'is_logged' => 0,
    'usuario' => 0,
    'controller' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f63e0271a01_02006091')) {function content_582f63e0271a01_02006091($_smarty_tpl) {?><!doctype html>
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
              <?php if (isset($_smarty_tpl->tpl_vars['is_logged']->value)&&$_smarty_tpl->tpl_vars['is_logged']->value&&isset($_smarty_tpl->tpl_vars['usuario']->value)){?>
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                  </button>
              </div>
              <div class="collapse navbar-collapse navbar-menubuilder">
                  <ul class="nav navbar-nav navbar-right">
                      <?php if ($_smarty_tpl->tpl_vars['usuario']->value->nivel!=3){?>
                      <li><a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
cliente">Clientes</a></li>
                      <li><a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
corretor">Corretores</a></li>
                      <li><a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
usuarios">Usuários</a></li>
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
                              <li><a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
cliente/novo">Cliente</a>
                              </li>
                              <li><a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
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
        
	<div class="row">
			
		<div class="col-md-12 col-xs-12">
			<?php if ($_smarty_tpl->tpl_vars['success']->value){?>
				<div class="alert alert-success">
					<?php echo $_smarty_tpl->tpl_vars['success']->value;?>

				</div>	
			<?php }?>	
			<?php if ($_smarty_tpl->tpl_vars['erro']->value){?>
				<div class="alert alert-danger">
					<?php echo $_smarty_tpl->tpl_vars['erro']->value;?>

				</div>	
			<?php }?>	
			<p>
	        	<a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
usuario/novo" class="btn btn-primary">Novo usuario</a>
	        	<a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
usuario/corretor" class="btn btn-primary">Criar acesso para corretor</a>
	        </p>
			<h2>Usuários (<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
)</h2>
			<?php if (isset($_smarty_tpl->tpl_vars['usuarios']->value)){?>
	        <div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Nome</th>
							<th>Email</th>
							<th>Nivel de acesso</th>
							<th>Ações</th>
						</tr>
					</thead>
					<?php  $_smarty_tpl->tpl_vars['usuario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usuario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->key => $_smarty_tpl->tpl_vars['usuario']->value){
$_smarty_tpl->tpl_vars['usuario']->_loop = true;
?>
					<tr class="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id;?>
">
						<td>
							<?php echo $_smarty_tpl->tpl_vars['usuario']->value->nome;?>

						</td>
							
						<td>
							<?php echo $_smarty_tpl->tpl_vars['usuario']->value->email;?>

						</td>
						<td>
							<?php echo Estatico::nivel($_smarty_tpl->tpl_vars['usuario']->value->nivel);?>

						</td>
						<td>
							<a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
usuario/edit/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id;?>
" class="btn btn-primary btn-xs">Editar</a>
							<a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
usuario/excluir/<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id;?>
" onclick="return  confirm('Tem certreza que deseja excluir \n <?php echo $_smarty_tpl->tpl_vars['usuario']->value->nome;?>
 ?\n Clique em ok para confirmar.')" class="btn btn-danger btn-xs">Exluir</a>
						</td>
					</tr>
					<?php } ?>
				</table>
			</div>
			<?php }else{ ?>
			<p>Nenhum usuário encontrado</p>
			<?php }?>
			<div class="col-md-12">
				<?php echo $_smarty_tpl->tpl_vars['paginacao']->value;?>

			</div>
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