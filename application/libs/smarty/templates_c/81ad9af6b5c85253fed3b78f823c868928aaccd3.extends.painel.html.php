<?php /* Smarty version Smarty-3.1.13, created on 2016-11-15 09:07:19
         compiled from "D:\ServerMobi\lotes\application\views\painel\painel.html" */ ?>
<?php /*%%SmartyHeaderCode:18345582ae1f24e0c65-32659534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81ad9af6b5c85253fed3b78f823c868928aaccd3' => 
    array (
      0 => 'D:\\ServerMobi\\lotes\\application\\views\\painel\\painel.html',
      1 => 1479211356,
      2 => 'file',
    ),
    '3e37cbe7ea2f2d8f43be04f55726ef6a569bb857' => 
    array (
      0 => 'D:\\ServerMobi\\lotes\\application\\views\\layout\\app.html',
      1 => 1479215752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18345582ae1f24e0c65-32659534',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_582ae1f25ac345_31543477',
  'variables' => 
  array (
    'aplication' => 0,
    'controller' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582ae1f25ac345_31543477')) {function content_582ae1f25ac345_31543477($_smarty_tpl) {?><!doctype html>
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
                  <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                  </button> -->
              </div>
              <!-- <div class="collapse navbar-collapse navbar-menubuilder">
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
              </div> -->
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
        
    
        <div id="painelapp">
            <router-view></router-view>
        </div>


        <template id="painel">
            <div class="col-md-8 chamada-cliente">
                <div v-for="chamada in cliente">
                    <span class="cliente">
                        <h5>Corretor:</h5>
                        {{chamada.cliente.corretor.nome}}
                        <small>CRECI: {{chamada.cliente.corretor.creci}}</small>
                    </span>

                    <span class="corretor">
                        <h5>Cliente:</h5>
                        {{chamada.cliente.nome}}
                    </span>

                </div>
            </div>
            <div class="col-md-4 ultimos-chamados">
                <h4>Últimos chamados</h4>
                <ul class="list-unstyled">
                    <li v-for="c in lista | orderBy 'data_com.date' -1">
                        <h5>Cliente: {{c.cliente.nome}} </h5>
                        <h5>Corretor: {{c.cliente.corretor.nome}} <small>CRECI:{{c.cliente.corretor.creci}}</small></h5>

                        <h5> <i class="glyphicon glyphicon-time"></i> às {{moment(c.cliente.com_data, 'HH:mm')}}</h5>
                    </li>
                </ul>
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
    
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['js'];?>
libs/moment.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['js'];?>
libs/vue.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['js'];?>
libs/vue-router.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['js'];?>
libs/vue-resource.js"></script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['js'];?>
app.js?v=<?php echo rand(0,10);?>
"></script>

  </body>
</html><?php }} ?>