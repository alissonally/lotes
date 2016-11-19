<?php /* Smarty version Smarty-3.1.13, created on 2016-11-14 11:16:20
         compiled from "D:\ServerMobi\loteamento\application\views\cliente\single.html" */ ?>
<?php /*%%SmartyHeaderCode:31658582744c9264cb5-44535357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbf154081d724b15214798ee7501b3f4b4943b89' => 
    array (
      0 => 'D:\\ServerMobi\\loteamento\\application\\views\\cliente\\single.html',
      1 => 1479123054,
      2 => 'file',
    ),
    '4db9c00e8c1b2c279d881a72055e338d72146271' => 
    array (
      0 => 'D:\\ServerMobi\\loteamento\\application\\views\\layout\\app.html',
      1 => 1479130326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31658582744c9264cb5-44535357',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_582744c9330c87_39153233',
  'variables' => 
  array (
    'aplication' => 0,
    'controller' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582744c9330c87_39153233')) {function content_582744c9330c87_39153233($_smarty_tpl) {?><!doctype html>
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
        
	<div class="col-md-12">
        <?php if ($_smarty_tpl->tpl_vars['success']->value){?>
        <div class="alert alert-success">
            <?php echo $_smarty_tpl->tpl_vars['success']->value;?>

        </div>
        <?php }?>
        <p>
        	<a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
cliente/novo" class="btn btn-primary">Cadastrar novo cliente</a>
        </p>
    </div>
	<div class="row">
		<div class="col-md-12">
			<div class="table-responsive">
				<table class="table table-hover single-client">
					<tr>
						<th>Nome</th>
						<th>Dados</th>
						<th>Coparecimento</th>
						<th>Ações</th>
					</tr>
                    <?php if ($_smarty_tpl->tpl_vars['cliente']->value){?>
					<tr class="<?php echo Estatico::classe($_smarty_tpl->tpl_vars['cliente']->value->comparecimento);?>
">
						<td class="nome"><?php echo $_smarty_tpl->tpl_vars['cliente']->value->nome;?>
</td>
						<td class="email">
                            <strong>CPF/CNPJ: </strong> <?php echo $_smarty_tpl->tpl_vars['cliente']->value->cpf_cnpj;?>
 <br>
                            <strong>E-mail:</strong> <?php echo (($tmp = @$_smarty_tpl->tpl_vars['cliente']->value->endereco[0]->email)===null||$tmp==='' ? ' ' : $tmp);?>
 <br>
                        </td>
						<td>
                            <?php echo Estatico::comparecimento($_smarty_tpl->tpl_vars['cliente']->value->comparecimento);?>

                        </td>
						<td>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
cliente/edit/<?php echo $_smarty_tpl->tpl_vars['cliente']->value->id;?>
" class="btn btn-edit btn-xs"><span class="glyphicon glyphicon-pencil"></span>Editar </a>
                            <a onclick="excluirConselheiro('undefined', <?php echo $_smarty_tpl->tpl_vars['cliente']->value->id;?>
, '<?php echo $_smarty_tpl->tpl_vars['cliente']->value->nome;?>
')" class="btn btn-edit btn-xs"><span class="glyphicon glyphicon-remove"></span>Excluir </a>
                            <?php if ($_smarty_tpl->tpl_vars['cliente']->value->comparecimento==0){?>
                             <a href="javascript:;" class="btn btn-confirm btn-xs" onclick="setComparecimento(<?php echo $_smarty_tpl->tpl_vars['cliente']->value->id;?>
)" role="button"><span class="glyphicon glyphicon-ok "></span> Confirmar presença</a>
                            <?php }?>
                        </td>
					</tr>
                    <?php }else{ ?>
                        <tr>
                            <td colspan="4"><p>Cliente não encontrado</p></td>
                        </tr>
                    <?php }?>
				</table>
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