<?php /* Smarty version Smarty-3.1.13, created on 2016-11-19 20:07:24
         compiled from "/var/www/dev/loteamento/application/views/index/index.html" */ ?>
<?php /*%%SmartyHeaderCode:46476170958267ec32114a2-27600381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '821698909ff9281ba1a3cad226be0a6782410dc5' => 
    array (
      0 => '/var/www/dev/loteamento/application/views/index/index.html',
      1 => 1479571107,
      2 => 'file',
    ),
    '8838a11cb85b2ffd387430b6c6b68b568cefd8ac' => 
    array (
      0 => '/var/www/dev/loteamento/application/views/layout/app.html',
      1 => 1479593239,
      2 => 'file',
    ),
    'f944fb0b675a9d0d326b95622c30728afbcc625b' => 
    array (
      0 => '/var/www/dev/loteamento/application/views/includes/busca-cliente.html',
      1 => 1479344306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46476170958267ec32114a2-27600381',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_58267ec32204e1_77891562',
  'variables' => 
  array (
    'aplication' => 0,
    'is_logged' => 0,
    'usuario' => 0,
    'lotes' => 0,
    'controller' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58267ec32204e1_77891562')) {function content_58267ec32204e1_77891562($_smarty_tpl) {?><!doctype html>
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
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                  </button>
              </div>
              <div class="collapse navbar-collapse navbar-menubuilder">
                  <ul class="nav navbar-nav navbar-right">
                    <?php if (isset($_smarty_tpl->tpl_vars['is_logged']->value)&&$_smarty_tpl->tpl_vars['is_logged']->value&&isset($_smarty_tpl->tpl_vars['usuario']->value)){?>
                      <li><a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
">Início</a></li>
                      <li><a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
lotes">Lotes</a></li>
                      <li><a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
painel">Painel</a></li>
                      <?php if ($_smarty_tpl->tpl_vars['usuario']->value->nivel!=Estatico::CORRETOR){?>

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
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
gerencia">Gerência</a></li>
                      <?php }?>
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
                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['lotes']->value)){?>
                      <li><a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
">Início</a></li>
                    <?php }?>
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("includes/busca-cliente.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('el_id'=>'busca_cliente','placeholder'=>'Buscar cliente'), 0, '46476170958267ec32114a2-27600381');
content_5830cd1c6a43d5_83247014($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "includes/busca-cliente.html" */?>
   		</div>
   	</div>
    <div id="gerenciaapp">
        <router-view></router-view>
    </div>
    
    <template id="painel">
        <div class="painel">
            <count-lotes></count-lotes>
        </div>
    </template>
    <template id="count-lotes">
        <div class="col-md-6 col-xs-12" id="counts">
            <div class="contente">
                <header>
                    Clientes
                </header>
                <main>
                    <div class="col-md-12 col-xs-12">
                        <div class="vendido l_box">
                            <span class="v-text"><span style=" display:inline-block; width:10px; height:10px; background: green; border-radius: 50%"></span> Clientes Cadastrados  </span>
                            <span class="number">{{counts.cadastro}}</span>

                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xs-12">
                        <div class="vendido l_box">
                            <span class="v-text"><span style=" display:inline-block; width:10px; height:10px; background: green; border-radius: 50%"></span> Compareceram  </span>
                            <span class="number">{{counts.compareceu}}</span>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="n_vendido l_box">
                            <span class="v-text"><span style=" display:inline-block; width:10px; height:10px; background: red; border-radius: 50%"></span> Ainda não compareceu  </span>
                            <span class="number">{{counts.cadastro - counts.compareceu}}</span>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </main>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-6 col-xs-12" id="counts">
            <div class="contente">
                <header>
                    Lotes
                </header>
                <main>
                    <div class="col-md-12 col-xs-12">
                        <div class="vendido l_box">

                            <span class="v-text"><span style=" display:inline-block; width:10px; height:10px; background: green; border-radius: 50%"></span> Total de Lotes   </span>
                            <span class="number">{{counts.total_lote}}</span>


                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="vendido l_box">
                            <span class="v-text"><span style=" display:inline-block; width:10px; height:10px; background: green; border-radius: 50%"></span> Vendidos  </span>
                            <span class="number">{{counts.vendido}}</span>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="n_vendido l_box">
                            <span class="v-text"><span style=" display:inline-block; width:10px; height:10px; background: red; border-radius: 50%"></span> Não vendidos  </span>
                            <span class="number">{{counts.total_lote - counts.vendido}}</span>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </main>
                <div class="clearfix"></div>
            </div>
        </div>
    </template>
    

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
    
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['js'];?>
libs/moment.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['js'];?>
libs/vue.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['js'];?>
libs/vue-router.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['js'];?>
libs/vue-resource.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['js'];?>
appgerencia.js?v=<?php echo rand(0,10);?>
"></script>

  </body>
</html><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2016-11-19 20:07:24
         compiled from "/var/www/dev/loteamento/application/views/includes/busca-cliente.html" */ ?>
<?php if ($_valid && !is_callable('content_5830cd1c6a43d5_83247014')) {function content_5830cd1c6a43d5_83247014($_smarty_tpl) {?><div class="col-sm-12">
	<div class="form-group" >
		<input class="form-control" id="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['el_id']->value)===null||$tmp==='' ? 'busca_cliente' : $tmp);?>
" <?php if (isset($_smarty_tpl->tpl_vars['title']->value)){?> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <?php }?> name="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['el_id']->value)===null||$tmp==='' ? 'busca_cliente' : $tmp);?>
" placeholder="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['placeholder']->value)===null||$tmp==='' ? '' : $tmp);?>
" type="text">
	</div>
</div>
<?php }} ?>