<?php /* Smarty version Smarty-3.1.13, created on 2016-11-18 20:31:00
         compiled from "D:\ServerMobi\mobi\lotes\application\views\secretaria\cliente.html" */ ?>
<?php /*%%SmartyHeaderCode:46582f65044e00c2-89757064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59317006f58d58e3ed1b0354d1816f78bf8f03b7' => 
    array (
      0 => 'D:\\ServerMobi\\mobi\\lotes\\application\\views\\secretaria\\cliente.html',
      1 => 1479383482,
      2 => 'file',
    ),
    '9d3ed2474963f0f764e11e5e9582c5370213b554' => 
    array (
      0 => 'D:\\ServerMobi\\mobi\\lotes\\application\\views\\layout\\app.html',
      1 => 1479500929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46582f65044e00c2-89757064',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aplication' => 0,
    'is_logged' => 0,
    'usuario' => 0,
    'controller' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_582f6504739136_15516838',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f6504739136_15516838')) {function content_582f6504739136_15516838($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'D:\\ServerMobi\\mobi\\lotes\\application\\libs\\smarty\\plugins\\modifier.replace.php';
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
        
   	<div class="col-md-12 col-xs-12">
		<span class="pull-right">
   			<a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
secretaria" class="btn btn-primary">Buscar novo cliente</a>
   		</span>
   		<h3>Confirmar Venda</h3>
   		<hr>
   		<?php if ($_smarty_tpl->tpl_vars['cliente']->value){?>
   		<div class="row">
   			<div class="col-md-6 col-xs-12">
   				<ul class="list-unstyled">
   					<li>
   						<strong>Nome:</strong>
   						<h4><?php echo $_smarty_tpl->tpl_vars['cliente']->value->nome;?>
</h4>
   						<h5>CPF: <?php echo $_smarty_tpl->tpl_vars['cliente']->value->cpf_cnpj;?>
 </h5>
   						<h6>Corretor: <?php echo $_smarty_tpl->tpl_vars['cliente']->value->corretor->nome;?>
</h6>
   						<address>
                            <?php if (isset($_smarty_tpl->tpl_vars['cliente']->value->endereco[0])){?>
	   						<strong>Endreco:</strong> <br> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['cliente']->value->endereco[0]->logradouro)===null||$tmp==='' ? '' : $tmp);?>
, <?php echo (($tmp = @$_smarty_tpl->tpl_vars['cliente']->value->endereco[0]->numero)===null||$tmp==='' ? '' : $tmp);?>
 - <?php echo (($tmp = @$_smarty_tpl->tpl_vars['cliente']->value->endereco[0]->bairro)===null||$tmp==='' ? '' : $tmp);?>
 <br>
	   						<?php echo (($tmp = @$_smarty_tpl->tpl_vars['cliente']->value->endereco[0]->city->nome)===null||$tmp==='' ? '' : $tmp);?>
 - <?php echo (($tmp = @$_smarty_tpl->tpl_vars['cliente']->value->endereco[0]->city->uf->nome)===null||$tmp==='' ? '' : $tmp);?>

   							<br>
	   						<strong>Fone:</strong> <br> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['cliente']->value->endereco[0]->telefone)===null||$tmp==='' ? '' : $tmp);?>
 - <?php echo (($tmp = @$_smarty_tpl->tpl_vars['cliente']->value->endereco[0]->telefone_2)===null||$tmp==='' ? '' : $tmp);?>

	   						<br>
	   						<strong>E-mail:</strong> <br> <?php echo $_smarty_tpl->tpl_vars['cliente']->value->endereco[0]->email;?>

                            <?php }?>
   						</address>
   					</li>
   				</ul>

   			</div>
   			<div class="col-md-6 col-xs-12 terrenos-cliente">
				<form action="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
secretaria/venda" method="POST">
					<input type="hidden" name="cliente_id" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->id;?>
">
					<input type="hidden" name="corretor_id" value="<?php echo $_smarty_tpl->tpl_vars['cliente']->value->corretor->id;?>
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
   			<?php if (count($_smarty_tpl->tpl_vars['cliente']->value->lote)>0){?>
   			<div class="col-md-12 col-xs-12" id="table-lotes">
   				<hr>		
				<h4> Lotes do cliente: <span id="lotes_qnt"><?php echo count($_smarty_tpl->tpl_vars['cliente']->value->lote);?>
</span> </h4>
				<div id="msg"></div>
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Lote</th>
								<th>Quadra</th>
								<th>Tamanho</th>
								<th>Ações</th>
							</tr>
						</thead>
						<tbody>
							<?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cliente']->value->lote; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
									<a href="javascript:;" title="Remover Lote" onclick="removeLote(<?php echo $_smarty_tpl->tpl_vars['l']->value->id;?>
, <?php echo $_smarty_tpl->tpl_vars['cliente']->value->corretor->id;?>
, <?php echo $_smarty_tpl->tpl_vars['l']->value->lote;?>
, <?php echo $_smarty_tpl->tpl_vars['l']->value->quadra;?>
, '<?php echo $_smarty_tpl->tpl_vars['cliente']->value->nome;?>
',<?php echo $_smarty_tpl->tpl_vars['cliente']->value->id;?>
 )" class="glyphicon glyphicon-remove"></a>
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
   			<p>Cliente não encontrado</p>
   		<?php }?>
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