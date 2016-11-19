<?php /* Smarty version Smarty-3.1.13, created on 2016-11-18 20:32:54
         compiled from "D:\ServerMobi\mobi\lotes\application\views\corretor\form.html" */ ?>
<?php /*%%SmartyHeaderCode:18051582f6576d51b17-90685732%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b1f00c7f8a098522776346fbd8657b8007a2d94' => 
    array (
      0 => 'D:\\ServerMobi\\mobi\\lotes\\application\\views\\corretor\\form.html',
      1 => 1479481214,
      2 => 'file',
    ),
    '9d3ed2474963f0f764e11e5e9582c5370213b554' => 
    array (
      0 => 'D:\\ServerMobi\\mobi\\lotes\\application\\views\\layout\\app.html',
      1 => 1479500929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18051582f6576d51b17-90685732',
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
  'unifunc' => 'content_582f6576eeb7d7_73199967',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f6576eeb7d7_73199967')) {function content_582f6576eeb7d7_73199967($_smarty_tpl) {?><!doctype html>
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
        
    <div class="col-md-12">
        <?php if ($_smarty_tpl->tpl_vars['erros']->value){?>
        <div class="alert alert-danger">
            <?php  $_smarty_tpl->tpl_vars['erro'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['erro']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['erros']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['erro']->key => $_smarty_tpl->tpl_vars['erro']->value){
$_smarty_tpl->tpl_vars['erro']->_loop = true;
?>
                <?php echo $_smarty_tpl->tpl_vars['erro']->value;?>

            <?php } ?>
        </div>
        <?php }?>

        <?php if (isset($_smarty_tpl->tpl_vars['success']->value)){?>
        <div class="alert alert-success">
            <?php echo $_smarty_tpl->tpl_vars['success']->value;?>

        </div>
        <?php }?>
        <p>
            <a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
corretor/lista" class="btn btn-primary">Todos os corretores</a>
        </p>
    </div>
    <form action="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
corretor/create" method="POST">
        <input type="hidden" id="id" name="id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['corretor']->value->id)===null||$tmp==='' ? '' : $tmp);?>
">
        <div class="form-group ">
            <label for="nome" class="control-label">Nome<sup>*</sup>:</label>
            <input type="text" id="nome" name="nome" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['corretor']->value->nome)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Nome" class="required form-control" required="required">
        </div>
        <div class="form-group">
            <label for="fone" class="control-label">Fone:</label>
            <input type="text" id="fone" name="fone" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['corretor']->value->fone)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Fone" class="required form-control">
        </div>
        <div class="form-group">
            <label for="email" class="control-label">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['corretor']->value->email)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Email" class="required form-control">
        </div>
        <div class="form-group">
            <label for="cidade" class="control-label">Cidade:</label>
            <input type="text" id="cidade" name="cidade" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['corretor']->value->cidade)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Cidade" class="required form-control">
        </div>
        <div class="form-group">
            <label for="imobiliaria" class="control-label">Imobiliária:</label>
            <input type="text" id="imobiliaria" name="imobiliaria" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['corretor']->value->imobiliaria)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Imobiliária" class="required form-control">
        </div>
        <div class="form-group">
            <label for="creci" class="control-label">Creci:</label>
            <input type="text" id="creci" name="creci" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['corretor']->value->creci)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="CRECI" class="required form-control">
        </div>
        <div class="form-group">
            <label for="coordenador" class="control-label">Coordenador:</label>
            <input type="text" id="coordenador" name="coordenador" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['corretor']->value->coordenador)===null||$tmp==='' ? '' : $tmp);?>
" placeholder="Coordenador" class="required form-control">
        </div>
        <div class="form-group col-md-12">
            <div class="row">
                <input type="submit" value="Salvar" id="salvar" class="btn btn-primary">
            </div>
        </div>
    </form>

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