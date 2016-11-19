<?php /* Smarty version Smarty-3.1.13, created on 2016-11-14 14:48:49
         compiled from "D:\ServerMobi\loteamento\application\views\secretaria\cliente.html" */ ?>
<?php /*%%SmartyHeaderCode:157635829d497cfc701-64348752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46393af7bf301b8034a16e019a5806e17e8d2748' => 
    array (
      0 => 'D:\\ServerMobi\\loteamento\\application\\views\\secretaria\\cliente.html',
      1 => 1479145722,
      2 => 'file',
    ),
    '4db9c00e8c1b2c279d881a72055e338d72146271' => 
    array (
      0 => 'D:\\ServerMobi\\loteamento\\application\\views\\layout\\app.html',
      1 => 1479130326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157635829d497cfc701-64348752',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5829d497ddab82_83499477',
  'variables' => 
  array (
    'aplication' => 0,
    'controller' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5829d497ddab82_83499477')) {function content_5829d497ddab82_83499477($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'D:\\ServerMobi\\loteamento\\application\\libs\\smarty\\plugins\\modifier.replace.php';
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
		<span class="pull-right">
   			<a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
secretaria" class="btn btn-primary">Buscar novo cliente</a>
   		</span>
   		<h3>Confirmar Venda</h3>
   		<hr>
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
		                <button type="submit" class="btn btn-confirm">Salvar</button>
	            	</div>
				</form>
				<div class="clearfix"></div>	
				<?php if (isset($_smarty_tpl->tpl_vars['cliente']->value->lote[0])&&count($_smarty_tpl->tpl_vars['cliente']->value->lote[0])){?>
					<h4>Lotes do Clinte:</h4>
					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Lote</th>
									<th>Quadra</th>
									<th>Tamanho</th>
								</tr>
							</thead>
							<tbody>
								<?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cliente']->value->lote; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value){
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>
								<tr>
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
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>		
				<?php }?>
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
</html><?php }} ?>