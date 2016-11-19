<?php /* Smarty version Smarty-3.1.13, created on 2016-11-19 14:11:58
         compiled from "/var/www/dev/loteamento/application/views/secretaria/reserva_corretor.html" */ ?>
<?php /*%%SmartyHeaderCode:1573726645582b0398e0e0c3-21764334%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db449f2fec7a72ab81f257e6c53d6d249707bec4' => 
    array (
      0 => '/var/www/dev/loteamento/application/views/secretaria/reserva_corretor.html',
      1 => 1479567076,
      2 => 'file',
    ),
    '8838a11cb85b2ffd387430b6c6b68b568cefd8ac' => 
    array (
      0 => '/var/www/dev/loteamento/application/views/layout/app.html',
      1 => 1479571566,
      2 => 'file',
    ),
    'f944fb0b675a9d0d326b95622c30728afbcc625b' => 
    array (
      0 => '/var/www/dev/loteamento/application/views/includes/busca-cliente.html',
      1 => 1479344306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1573726645582b0398e0e0c3-21764334',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_582b0398eca162_26175759',
  'variables' => 
  array (
    'aplication' => 0,
    'is_logged' => 0,
    'usuario' => 0,
    'controller' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582b0398eca162_26175759')) {function content_582b0398eca162_26175759($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/dev/loteamento/application/libs/smarty/plugins/modifier.replace.php';
?><!doctype html>
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
        
   	<div class="col-md-12 col-xs-12">
		<span class="pull-right">
   			<a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
secretaria/corretor" class="btn btn-primary">Buscar novo corretor</a>
   		</span>
   		<h3>Confirmar Venda</h3>
   		<hr>
   		<?php if ($_smarty_tpl->tpl_vars['corretor']->value){?>
   		<div class="row">
   			<div class="col-md-6 col-xs-12">
   				<ul class="list-unstyled">
   					<li>
   						<strong>Nome:</strong>
   						<h4><?php echo $_smarty_tpl->tpl_vars['corretor']->value->nome;?>
</h4>
   						<h5>CRECI: <?php echo $_smarty_tpl->tpl_vars['corretor']->value->creci;?>
 </h5>
   						<h6>Cordenador: <?php echo $_smarty_tpl->tpl_vars['corretor']->value->coordenador;?>
</h6>
   					</li>
   				</ul>

   			</div>
   			<div class="col-md-6 col-xs-12 terrenos-cliente">
				<form action="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
secretaria/venda_corretor" method="POST">

					<input type="hidden" name="corretor_id" value="<?php echo $_smarty_tpl->tpl_vars['corretor']->value->id;?>
">
					<div class="form-group col-md-12">
						<label for="">Selecione  Lotes</label>
						<select data-placeholder="Selecione um lotes do cliente" name="lote" id="lote" class="chosen-select form-control">
							<option value="">Selecione um lote</option>
							<?php  $_smarty_tpl->tpl_vars['lote'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lote']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lotes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lote']->key => $_smarty_tpl->tpl_vars['lote']->value){
$_smarty_tpl->tpl_vars['lote']->_loop = true;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['lote']->value->id;?>
">Lote <?php echo $_smarty_tpl->tpl_vars['lote']->value->lote;?>
 Quadra <?php echo $_smarty_tpl->tpl_vars['lote']->value->quadra;?>
</option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group col-md-4 col-xs-12">
		                <button type="submit" class="btn btn-confirm">Adicionar</button>
	            	</div>
				</form>
				<div class="clearfix"></div>
                <?php if ($_smarty_tpl->tpl_vars['success']->value){?>
                    <div class="alert alert-success" id="addlote-fadeout">
                        <?php echo $_smarty_tpl->tpl_vars['success']->value;?>

                    </div>
                <?php }?>
   			</div>
   			<?php if (count($_smarty_tpl->tpl_vars['corretor']->value->lote)>0){?>
   				<div class="clearfix"></div>
	        	<div id="table-lotes" class="col-xs-12 col-md-12">
	        		<hr>
					<h4> Lotes vendidos pelo corretor: <span id="lotes_qnt"><?php echo count($_smarty_tpl->tpl_vars['corretor']->value->lote);?>
</span></h4>
					<div id="msg"></div>
					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Lote</th>
									<th>Quadra</th>
									<th>Tamanho</th>
									<th>Cliente</th>
									<th>Ações</th>
								</tr>
							</thead>
							<tbody>
								<?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['corretor']->value->lote; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value){
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>
								<tr id="<?php echo $_smarty_tpl->tpl_vars['l']->value->id;?>
">
									<td><?php echo $_smarty_tpl->tpl_vars['l']->value->lote;?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['l']->value->quadra;?>
</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['l']->value->frente;?>
 X <?php echo $_smarty_tpl->tpl_vars['l']->value->direita;?>
	<br>
										Área total:<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['l']->value->area,'M2',"m²");?>

									</td>
									<td>
										<?php if ($_smarty_tpl->tpl_vars['l']->value->cliente){?>
											<a href="javascript:;" class="btn btn-default btn-xs" onclick="addClienteLote(<?php echo $_smarty_tpl->tpl_vars['l']->value->id;?>
, <?php echo $_smarty_tpl->tpl_vars['corretor']->value->id;?>
)">Editar </a>
											<?php echo $_smarty_tpl->tpl_vars['l']->value->cliente->nome;?>

											<?php if ($_smarty_tpl->tpl_vars['success']->value){?>
							                    <div class="alert alert-success" id="addlote-fadeout">
							                        <?php echo $_smarty_tpl->tpl_vars['success']->value;?>

							                    </div>
							                <?php }?>
										<?php }else{ ?>
										<div id="<?php echo $_smarty_tpl->tpl_vars['l']->value->id;?>
" data-corretor="<?php echo $_smarty_tpl->tpl_vars['corretor']->value->id;?>
">
											<a href="javascript:;" class="btn btn-default" onclick="addClienteLote(<?php echo $_smarty_tpl->tpl_vars['l']->value->id;?>
, <?php echo $_smarty_tpl->tpl_vars['corretor']->value->id;?>
)">Adicionar Cliente</a>
										</div>	
										<?php }?>
									</td>
									<td>
										<a href="javascript:;" title="Remover Lote" onclick="removeLote(<?php echo $_smarty_tpl->tpl_vars['l']->value->id;?>
, <?php echo $_smarty_tpl->tpl_vars['corretor']->value->id;?>
, <?php echo $_smarty_tpl->tpl_vars['l']->value->lote;?>
, <?php echo $_smarty_tpl->tpl_vars['l']->value->quadra;?>
, '<?php echo $_smarty_tpl->tpl_vars['corretor']->value->nome;?>
')" class="glyphicon glyphicon-remove"></a>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
	        <?php }?>
   		</div>
   		<?php }else{ ?>
   		<p>Corretor não encontrado</p>
   		<?php }?>
   	</div>
   	<div class="modal fade" id="modal-lotes"  tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Adicionar cliente ao lote</h4>
	      </div>
	      <div class="modal-body">
	        <div class="col-md-12 col-xs-12">
		   		<h3>Buscar clientes</h3>
		   		<div class="row">
		   			<?php /*  Call merged included template "includes/busca-cliente.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("includes/busca-cliente.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('el_id'=>'add_cliente_lote','title'=>'data-typehead={"url":"secretaria/cliente/"}','placeholder'=>'Buscar cliente'), 0, '1573726645582b0398e0e0c3-21764334');
content_583079ce7e8662_03718578($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "includes/busca-cliente.html" */?>
		   		</div>
		   	</div>
		   	<form  action="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
secretaria/venda" id="lote-to-cliente" method="POST">
		   		<div class="form-group col-md-12 col-xs-12">
		   			<input type="hidden" id="id_corretor" name="corretor_id" class="form-control">
		   			<input type="hidden" id="id_lote" name="lote" class="form-control">
		   			<input type="hidden" name="cliente_to_corretor" value="1" class="form-control">
		   			<input type="hidden" id="id_cliente" name="cliente_id" class="form-control">
	                <input type="text" id="nome_cliente" disabled="disabled" name="nome" class="form-control">
            	</div>
		   		<div class="form-group col-md-4 col-xs-12">
	                <button type="submit" class="btn btn-confirm" >Adicionar</button>
            	</div>
		   	</form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
	        <!-- <button type="button" class="btn btn-primary">Salvar</button> -->
	      </div>
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
</html><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2016-11-19 14:11:58
         compiled from "/var/www/dev/loteamento/application/views/includes/busca-cliente.html" */ ?>
<?php if ($_valid && !is_callable('content_583079ce7e8662_03718578')) {function content_583079ce7e8662_03718578($_smarty_tpl) {?><div class="col-sm-12">
	<div class="form-group" >
		<input class="form-control" id="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['el_id']->value)===null||$tmp==='' ? 'busca_cliente' : $tmp);?>
" <?php if (isset($_smarty_tpl->tpl_vars['title']->value)){?> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <?php }?> name="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['el_id']->value)===null||$tmp==='' ? 'busca_cliente' : $tmp);?>
" placeholder="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['placeholder']->value)===null||$tmp==='' ? '' : $tmp);?>
" type="text">
	</div>
</div>
<?php }} ?>