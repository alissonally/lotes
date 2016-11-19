<?php /* Smarty version Smarty-3.1.13, created on 2016-11-18 20:12:19
         compiled from "D:\dev\loteamento\application\views\cliente\lista.html" */ ?>
<?php /*%%SmartyHeaderCode:22023582a47eb4fc710-08313845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42d4df09cdd0136a6629c25c34182be0524479b6' => 
    array (
      0 => 'D:\\dev\\loteamento\\application\\views\\cliente\\lista.html',
      1 => 1479384580,
      2 => 'file',
    ),
    '945d8a8d815effcf7e5422bcf5b858cadb50f983' => 
    array (
      0 => 'D:\\dev\\loteamento\\application\\views\\layout\\app.html',
      1 => 1479499430,
      2 => 'file',
    ),
    '85b1513a5aca573dec6f99247f3f8bd9e01ee6eb' => 
    array (
      0 => 'D:\\dev\\loteamento\\application\\views\\includes\\busca-cliente.html',
      1 => 1479384226,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22023582a47eb4fc710-08313845',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_582a47eb6ec226_89133962',
  'variables' => 
  array (
    'aplication' => 0,
    'is_logged' => 0,
    'usuario' => 0,
    'controller' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582a47eb6ec226_89133962')) {function content_582a47eb6ec226_89133962($_smarty_tpl) {?><!doctype html>
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
			<?php /*  Call merged included template "includes/busca-cliente.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("includes/busca-cliente.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('el_id'=>'busca_cliente','placeholder'=>'Buscar cliente'), 0, '22023582a47eb4fc710-08313845');
content_582f60a3487435_89675693($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "includes/busca-cliente.html" */?>
		<div class="col-md-12 col-xs-12">
			<p>
	        	<a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
cliente/novo" class="btn btn-primary">Cadastrar novo cliente</a>
	        </p>
			<?php if ($_smarty_tpl->tpl_vars['success_exclude']->value){?>
	        <div class="alert alert-success">
	        	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
	            <?php echo $_smarty_tpl->tpl_vars['success_exclude']->value;?>

	        </div>
	        <?php }?>
	        <div class="row">
		        <div class="col-md-12 col-xs-12">
		        	<div class="row">
						<div class="form-group col-md-4 col-xs-12">
			                <select name="corretor" class="form-control" id="corretor_filter">
			                    <option value="">Filtrar por corretor</option>
		                    	<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['corretores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
		                            <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->nome;?>
</option>
		                        <?php } ?>
			                </select>
		            	</div>
		            	<div class="form-group col-md-4 col-xs-12">
			                <select name="comparecimento" class="form-control" id="comparecimento_filter">
			                    <option value="">Filtrar por status</option>
		                    	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
 $_from = Estatico::$compa; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['c']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
		                            <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
		                        <?php } ?>
			                </select>
		            	</div>
		            	<div class="form-group col-md-4 col-xs-12">
			                <button class="btn btn-default" id="aplicar-filter">Aplicar</button>
			                <?php if ($_smarty_tpl->tpl_vars['filtros']->value){?>
			                	<a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
cliente" class="btn btn-default" id="limpar-filter">Limpar Filtros <span class="glyphicon glyphicon-remove"> </a>
			                <?php }?>
		            	</div>
	            	</div>
		        </div>
	        </div>
	        <div class="table-responsive">
				<table class="table table-hover">
				<thead>
					<tr>
						<td colspan="4">
							<?php if (isset($_smarty_tpl->tpl_vars['corretor']->value)){?>
								<h4>Corretor: <?php echo $_smarty_tpl->tpl_vars['corretor']->value->nome;?>
</h4>
							<?php }?>
							Total: <?php echo $_smarty_tpl->tpl_vars['count']->value;?>


						</td>
					</tr>
					<tr>
						<td>Nome</td>
						<td>Dados</td>
						<td>Comparecimento</td>
						<td>Ações</td>
					</tr>
				</thead>
				<?php  $_smarty_tpl->tpl_vars['cliente'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cliente']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clientes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cliente']->key => $_smarty_tpl->tpl_vars['cliente']->value){
$_smarty_tpl->tpl_vars['cliente']->_loop = true;
?>
				<tr class="<?php echo Estatico::classe($_smarty_tpl->tpl_vars['cliente']->value->comparecimento);?>
">
					<td>
						<a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
cliente/id/<?php echo $_smarty_tpl->tpl_vars['cliente']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['cliente']->value->nome;?>
</a><br>
						<strong>Corretor:</strong>	<a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
corretor/id/<?php echo $_smarty_tpl->tpl_vars['cliente']->value->corretor->id;?>
"><?php echo $_smarty_tpl->tpl_vars['cliente']->value->corretor->nome;?>
</a>
					</td>

					<td>
						<strong>CPF/CNPJ: </strong> <?php echo $_smarty_tpl->tpl_vars['cliente']->value->cpf_cnpj;?>
 <br>
						<strong>E-mail:</strong> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['cliente']->value->endereco[0]->email)===null||$tmp==='' ? ' ' : $tmp);?>
 <br>
					</td>

					<td><?php echo Estatico::comparecimento($_smarty_tpl->tpl_vars['cliente']->value->comparecimento);?>
</td>
					<td>
						<a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
cliente/edit/<?php echo $_smarty_tpl->tpl_vars['cliente']->value->id;?>
" class="btn btn-edit"><span class="glyphicon glyphicon-pencil"></span>Editar </a>
						<!-- <a onclick="excluirConselheiro('undefined', <?php echo $_smarty_tpl->tpl_vars['cliente']->value->id;?>
, '<?php echo $_smarty_tpl->tpl_vars['cliente']->value->nome;?>
')" class="btn btn-edit"><span class="glyphicon glyphicon-remove"></span>Excluir </a> -->
					</td>
				</tr>
				<?php } ?>
				</table>
			</div>
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
</html><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2016-11-18 20:12:19
         compiled from "D:\dev\loteamento\application\views\includes\busca-cliente.html" */ ?>
<?php if ($_valid && !is_callable('content_582f60a3487435_89675693')) {function content_582f60a3487435_89675693($_smarty_tpl) {?><div class="col-sm-12">
	<div class="form-group" >
		<input class="form-control" id="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['el_id']->value)===null||$tmp==='' ? 'busca_cliente' : $tmp);?>
" <?php if (isset($_smarty_tpl->tpl_vars['title']->value)){?> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <?php }?> name="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['el_id']->value)===null||$tmp==='' ? 'busca_cliente' : $tmp);?>
" placeholder="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['placeholder']->value)===null||$tmp==='' ? '' : $tmp);?>
" type="text">
	</div>
</div>
<?php }} ?>