<?php /* Smarty version Smarty-3.1.13, created on 2016-11-07 16:24:19
         compiled from "/home/mobieducame/apps/conselhos/api/application/views/edicao/form.html" */ ?>
<?php /*%%SmartyHeaderCode:809728850580787240b7a91-47094957%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bb7b1f64105ac838c3cd86431df6dbfec3b2725' => 
    array (
      0 => '/home/mobieducame/apps/conselhos/api/application/views/edicao/form.html',
      1 => 1478545976,
      2 => 'file',
    ),
    'ac387516b4c74f4633fe3852b69ea9be794083ae' => 
    array (
      0 => '/home/mobieducame/apps/conselhos/api/application/views/edicao/edicao.html',
      1 => 1477075507,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '809728850580787240b7a91-47094957',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5807872421b838_76768725',
  'variables' => 
  array (
    'aplication' => 0,
    'controller' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5807872421b838_76768725')) {function content_5807872421b838_76768725($_smarty_tpl) {?><!doctype html>
<html lang="pt-br">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Conselhos Escolares</title>
  <script src="/conselhos/assets/js/modernizr.min.js"></script>
    <script src="/conselhos/assets/js/css3-mediaqueries.js"></script>
  <link rel="stylesheet" href="/conselhos/assets/css/style.css?v=2">
  <link rel="stylesheet" href="/conselhos/assets/css/css.css?v=2">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['css'];?>
css.css?v=1">
  <!--[if lt IE 9]>
    <script src="/conselhos/assets/js/html5.js"></script>
    <script src="/conselhos/assets/js/respond.js"></script>
  <![endif]-->
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="/conselhos/assets/js/libs/jquery.mask.min.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- your app's js -->
  </head>
  <body>

    <div class="container-fluid" id="app">
      <header class="header" role="navigation">
        <div class="v1-conselhos-bar">
          <div class="navbar-header">
            <div class="title-conselhos-m">  Conselhos Escolares</div>
          </div>
          <div class="title-conselhos hidden-xs">  Conselhos Escolares </div>
        </div>
        <div class="conselhos-top-v1">
          <ul class="list-unstyled select-cargo">
            <li><a href="/conselhos/#/form">Formulário</a></li>
            <li><a href="/conselhos/#/list">Listagem</a></li>
            <li><a href="/conselhos/#/acompanhamento">Acompanhamento</a></li>
          </ul>
          <div class="nav-online" id="nv-online">
            
          </div>
          <div class="clearfix"></div>
        </div>
      </header>
      <!-- <script type="text/javascript" src="http://twitcasting.tv/f:891635474215839/embed/live-640-0"></script> -->
      <main class="tabs-conselhos-v1">
        <div class="col-xs-12">
            <a href="#/form" class="logo-gov">
              <img src="http://apps.mobieduca.me/mm/img/seduc.jpg" alt="brasao" class="pull-left marca-left">
            </a>
            <a href="http://www.mobimark.com.br/" target="_blank" class="logo-mobi">          
              <img src="http://apps.mobieduca.me/mm/img/mobi.jpg" alt="logo" class="pull-right">
            </a>
            <div class="text-top">
              <h3 style="margin-top: 0">Governo do Estado do Piauí</h3>
              <h4>Secretaria Estadual de Educação - SEDUC</h4>
              <h5>Unidade de Gestão e Inspeção Escolar - UGIE</h5>
              <h5>Gerência de Inspeção Escolar - GIE</h5>
              <h6>MobiEduca.Me - Conselhos escolares</h6>
              <div class="clearfix"></div>
            </div>
        </div>
        


<!-- Row start -->
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		
		<?php if (isset($_smarty_tpl->tpl_vars['logou']->value)&&$_smarty_tpl->tpl_vars['logou']->value){?>
          
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              Você está logado.
            </div>
          
          <div class="clearfix"></div>
        <?php }?>
		<div class="panel panel-default">
			<div class="panel-heading clearfix">
				<i class="icon-calendar"></i>
				<h3 class="panel-title">Passo 1: Selecione a Escola</h3>
			</div>

			<div class="panel-body">

				<div class="row">
					<div class="col-sm-8">
						<div class="form-group">
							<input class="form-control" id="buscarescola" name="buscarescola" placeholder="Entre com o INEP ou NOME da escola" type="text">
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['resposta']->value=='buscar'){?> <p>Nenhuma escola escontrada.</p> <?php }?>
	</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['resposta']->value&&is_array($_smarty_tpl->tpl_vars['resposta']->value)){?>
<form role="form" action="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
edicao/update" method="POST">
	<div class="row" ng-show="escola_selecionada != null">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading clearfix">
					<i class="icon-calendar"></i>
					<h3 class="panel-title">Escola Selecionada</h3>
				</div>

				<div class="panel-body">

					<div class="row">
						<div class="col-xs-12">
							<p><strong>Nome: </strong><?php echo $_smarty_tpl->tpl_vars['resposta']->value['escola']['nome'];?>
 <strong>INEP: </strong><?php echo $_smarty_tpl->tpl_vars['resposta']->value['escola']['inep'];?>
</p>
							<p><strong>GRE: </strong><?php echo $_smarty_tpl->tpl_vars['resposta']->value['escola']['gre'];?>
ª <strong>Município: </strong><?php echo $_smarty_tpl->tpl_vars['resposta']->value['escola']['cidade'];?>
</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row" ng-if="mostrarUsuario">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading clearfix">
					<i class="icon-calendar"></i>
					<h3 class="panel-title">Passo 2: Identifique-se</h3>
				</div>

				<div class="panel-body">


					<div class="row">

						<div class="col-sm-4 col-xs-12">
							<div class="form-group">
								<label for="usuario_nome">Seu nome<sup>*</sup></label>
								<input type="text" class="form-control" id="usuario_nome" value="<?php echo $_smarty_tpl->tpl_vars['resposta']->value['usuario']['nome'];?>
" placeholder="Digite seu nome" ng-disabled="!pode_salvar" disabled>
							</div>
						</div>
						<div class="col-sm-4 col-xs-12">
							<div class="form-group">
								<label for="usuario_telefone">Telefone da escola<sup>*</sup></label>
								<input type="text" class="form-control" id="usuario_telefone" value="<?php echo $_smarty_tpl->tpl_vars['resposta']->value['usuario']['fone'];?>
" placeholder="(00)0000-0000" ng-disabled="!pode_salvar" disabled>
							</div>
						</div>
						<div class="col-sm-4 col-xs-12">
							<div class="form-group">
								<label for="usuario_email">Email da escola<sup>*</sup></label>
								<input type="email" class="form-control" id="usuario_email" value="<?php echo $_smarty_tpl->tpl_vars['resposta']->value['usuario']['email'];?>
" placeholder="Digite o email da escola" ng-disabled="!pode_salvar" disabled>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row" ng-if="mostrarUsuario">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading clearfix">
					<i class="icon-calendar"></i>
					<h3 class="panel-title">Passo 3: Vigência do conselho</h3>
				</div>

				<div class="panel-body">


					<div class="row">

						<div class="col-sm-4 col-xs-12">
							<div class="form-group">
								<label class="sr-only" for="nome">Início</label>
								<input class="form-control date" id="data_ini" placeholder="Inicio 00/00/0000" type="text" name="vigencia[data_ini]" value="<?php echo $_smarty_tpl->tpl_vars['resposta']->value['vigencia']['inicio'];?>
">
							</div>

						</div>
						<div class="col-sm-4 col-xs-12">
							<div class="form-group">
								<div class="form-group">
									<label class="sr-only" for="nome">Fim</label>
									<input class="form-control date" id="data_ini" placeholder="Fim 00/00/0000" type="text" name="vigencia[data_fim]" value="<?php echo $_smarty_tpl->tpl_vars['resposta']->value['vigencia']['fim'];?>
">
								</div>
							</div>
						</div>
						<input class="form-control" type="hidden" name="vigencia[id]" value="<?php echo $_smarty_tpl->tpl_vars['resposta']->value['vigencia']['id'];?>
">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading clearfix">
					<i class="icon-calendar"></i>
					<h3 class="panel-title">Passo 3: Inclua os conselheiros</h3>
				</div>

				<div class="panel-body">
					<table class="table table-responsive table-hover" id="table-conselheiros">
						<thead>
							<tr>
								<th>Nome do conselheiro<sup>*</sup></th>
								<th>Email</th>
								<th>Fone</th>
								<th>Função<sup>*</sup></th>
								<th>Seguimento<sup>*</sup></th>
								<th>Condição</th>
								<th>Ação</th>
							</tr>
						</thead>
						<tbody id="line_add">
							<tr class="info">
								<td>
									<div class="form-group">
										<label class="sr-only" for="nome">Nome do Conselheiro Escolares</label>
										<input ng-model="formItem.nome" class="form-control" id="nome" placeholder="Nome do Conselheiro" type="text">
									</div>
								</td>
								<td>
									<div class="form-group">
										<label class="sr-only" for="email">Email</label>
										<input ng-model="formItem.email" class="form-control" id="email" placeholder="Email" type="text">
									</div>
								</td>
								<td>
									<div class="form-group">
										<label class="sr-only" for="fone">Fone</label>
										<input ng-model="formItem.fone" class="form-control fone" id="fone" placeholder="Fone" type="text">
									</div>
								</td>
								<td>
									<div class="form-group">
										<label class="sr-only" for="funcao">Função</label>
										<select id="funcao" class="form-control">
											<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dados']->value->funcao; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value->nome;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value->nome;?>
</option>
											<?php } ?>
										</select>
									</div>
								</td>
								<td>
									<div class="form-group">
										<label class="sr-only" for="seguimento">Seguimento</label>
										<select id="seguimento" class="form-control">
											<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dados']->value->seguimento; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value->nome;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value->nome;?>
</option>
											<?php } ?>
										</select>
									</div>
								</td>
								<td>
									<div class="form-group">
										<label class="sr-only" for="condicao">Condição</label>
										<select id="condicao" class="form-control">
											<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dados']->value->condicao; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value->nome;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value->nome;?>
</option>
											<?php } ?>
										</select>
									</div>
								</td>
								<td>
									<button onclick="addAlunoAprovado()" type="button" class="btn btn-info btn-block" title="Adicionar">Adicionar</button>
								</td>
							</tr>

							<?php  $_smarty_tpl->tpl_vars['conselheiro'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['conselheiro']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resposta']->value['conselheiros']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['conselheiro']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['conselheiro']->key => $_smarty_tpl->tpl_vars['conselheiro']->value){
$_smarty_tpl->tpl_vars['conselheiro']->_loop = true;
 $_smarty_tpl->tpl_vars['conselheiro']->index++;
?>
							<tr id="linha_<?php echo $_smarty_tpl->tpl_vars['conselheiro']->index;?>
" class="linhas" rel="<?php echo $_smarty_tpl->tpl_vars['conselheiro']->index;?>
">
								<input class="form-control" name="conselheiros[<?php echo $_smarty_tpl->tpl_vars['conselheiro']->index;?>
][cc_id]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['conselheiro']->value['id'];?>
">
								<td>
									<input class="form-control" id="<?php echo $_smarty_tpl->tpl_vars['conselheiro']->index;?>
_nome" name="conselheiros[<?php echo $_smarty_tpl->tpl_vars['conselheiro']->index;?>
][nome]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['conselheiro']->value['nome'];?>
">
								</td>
								<td><input class="form-control" id="<?php echo $_smarty_tpl->tpl_vars['conselheiro']->index;?>
_email" name="conselheiros[<?php echo $_smarty_tpl->tpl_vars['conselheiro']->index;?>
][email]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['conselheiro']->value['email'];?>
"></td>
								<td><input class="form-control" id="<?php echo $_smarty_tpl->tpl_vars['conselheiro']->index;?>
_fone" name="conselheiros[<?php echo $_smarty_tpl->tpl_vars['conselheiro']->index;?>
][fone]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['conselheiro']->value['fone'];?>
"></td>
								<td><input class="form-control" id="<?php echo $_smarty_tpl->tpl_vars['conselheiro']->index;?>
_funcao" name="conselheiros[<?php echo $_smarty_tpl->tpl_vars['conselheiro']->index;?>
][funcao]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['conselheiro']->value['funcao'];?>
"></td>
								<td><input class="form-control" id="<?php echo $_smarty_tpl->tpl_vars['conselheiro']->index;?>
_seguimento" name="conselheiros[<?php echo $_smarty_tpl->tpl_vars['conselheiro']->index;?>
][seguimento]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['conselheiro']->value['seguimento'];?>
"></td>
								<td><input class="form-control" id="<?php echo $_smarty_tpl->tpl_vars['conselheiro']->index;?>
_condicao" name="conselheiros[<?php echo $_smarty_tpl->tpl_vars['conselheiro']->index;?>
][condicao]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['conselheiro']->value['condicao'];?>
"></td>
								<td class="form-action" id="col-add">
									<a title="Excluir" id="<?php echo $_smarty_tpl->tpl_vars['conselheiro']->value['id'];?>
" onclick="excluirConselheiro('linha_<?php echo $_smarty_tpl->tpl_vars['conselheiro']->index;?>
', '<?php echo $_smarty_tpl->tpl_vars['conselheiro']->value['id'];?>
', '<?php echo $_smarty_tpl->tpl_vars['conselheiro']->value['nome'];?>
')"><i class="glyphicon glyphicon-remove"></i></a>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>

				</div>
			</div>
		</div>
	</div>
	<hr>
	<p class="muted pull-right"><small><sup>*</sup>Campos são obrigatórios</small></p>
	<div class="form-group">
		<div class="col-sm-12">
			<button ng-disabled="!pode_salvar" type="submit" id="" class="btn btn-primary btn-lg" title=" Salvar">Salvar Todos os Conselheiros</button>
			<button type="reset" id="" class="btn btn-default btn-lg" title=" Limpar">Limpar</button>
		</div>
	</div>
	<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['resposta']->value['escola']['id'];?>
" name="conselho_id">
	<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['resposta']->value['escola']['inep'];?>
" name="inep">
</form>
<?php }?>

        <div class="clearfix"></div>
      </main><!-- Fim tabs -->
    </div>
    <div class="clearfix"></div>
    <footer id="footer">
      © MobiMark 2016
    </footer>
    <script type="text/javascript">
       var Const ={
           home_url : '<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
',
           controller: '<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
'
       }
    </script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['js'];?>
libs/handlebars-v4.0.2.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['js'];?>
main.js"></script>
  </body>
</html><?php }} ?>