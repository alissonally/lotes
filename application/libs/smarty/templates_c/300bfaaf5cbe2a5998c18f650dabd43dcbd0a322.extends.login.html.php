<?php /* Smarty version Smarty-3.1.13, created on 2016-10-21 16:28:57
         compiled from "/home/mobieducame/apps/conselhos/api/application/views/edicao/login.html" */ ?>
<?php /*%%SmartyHeaderCode:15295490225807ab2ae53af3-71027500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '300bfaaf5cbe2a5998c18f650dabd43dcbd0a322' => 
    array (
      0 => '/home/mobieducame/apps/conselhos/api/application/views/edicao/login.html',
      1 => 1476991542,
      2 => 'file',
    ),
    'ac387516b4c74f4633fe3852b69ea9be794083ae' => 
    array (
      0 => '/home/mobieducame/apps/conselhos/api/application/views/edicao/edicao.html',
      1 => 1477075507,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15295490225807ab2ae53af3-71027500',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5807ab2ae7d364_21835659',
  'variables' => 
  array (
    'aplication' => 0,
    'controller' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5807ab2ae7d364_21835659')) {function content_5807ab2ae7d364_21835659($_smarty_tpl) {?><!doctype html>
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
        
    <form action="/conselhos/api/login/exec" method="POST">
        <div class="modal-body">
          <p>Essa escola já preencheu as informações. Se você pretende alterar uma informação favor solicitar senha de acesso no email <a href="mailto:projeto.mobieducame@gmail.com">projeto.mobieducame@gmail.com</a> ou ligue para <a href="tel:08632214600">086 3221-4600</a></p>
          <p>Caso já possua a senha de acesso informe abaixo para desbloquear o formulário.</p>

          <div class="row">
            <?php if (isset($_smarty_tpl->tpl_vars['erro']->value)&&$_smarty_tpl->tpl_vars['erro']->value){?>
              <div class="col-md-12">
                <div class="alert alert-danger alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong>Erro: </strong><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
.
                </div>
              </div>
            <?php }?>
            <div class="col-sm-6 col-xs-12">
              <div class="form-group">
                <label for="email">Usuario</label>
                <input type="text" class="form-control" id="email"  name="login" placeholder="Nome" required>
              </div>
            </div>
            <div class="col-sm-6 col-xs-12">
              <div class="form-group">
                <label for="senha">Senha de acesso</label>
                <input type="password" class="form-control" id="senha" name="senha" required>
              </div>
            </div>

          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>

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