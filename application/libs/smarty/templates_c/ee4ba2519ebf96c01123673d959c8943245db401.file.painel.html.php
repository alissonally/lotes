<?php /* Smarty version Smarty-3.1.13, created on 2016-11-18 20:36:16
         compiled from "D:\ServerMobi\mobi\lotes\application\views\painel\painel.html" */ ?>
<?php /*%%SmartyHeaderCode:31094582f6640694e11-06878787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee4ba2519ebf96c01123673d959c8943245db401' => 
    array (
      0 => 'D:\\ServerMobi\\mobi\\lotes\\application\\views\\painel\\painel.html',
      1 => 1479498150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31094582f6640694e11-06878787',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aplication' => 0,
    'controller' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_582f664074aa78_57226006',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f664074aa78_57226006')) {function content_582f664074aa78_57226006($_smarty_tpl) {?><!doctype html>
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
              
          </div>
      </div>
    </header>
    <div class="container-fluid" id="app">
      <!-- <script type="text/javascript" src="http://twitcasting.tv/f:891635474215839/embed/live-640-0"></script> -->
      <main class="tabs-conselhos-v1">
    
        <div id="painelapp">
            <router-view></router-view>
        </div>


        <template id="painel">
            <div class="col-md-9 chamada-cliente">
                <div v-for="chamada in cliente">
                    <span class="cliente">
                        <h5>Corretor:</h5>
                        {{chamada.cliente.corretor.nome}} - 
                        <small>CRECI: {{chamada.cliente.corretor.creci}}</small>
                    </span>

                    <span class="corretor">
                        <h5>Cliente:</h5>
                        {{chamada.cliente.nome}}
                    </span>

                </div>
            </div>
            <div class="col-md-3 ultimos-chamados">
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
libs/jquery.mask.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['js'];?>
main.js?v=1.1"></script>
    
  </body>
</html>


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
<?php }} ?>