<?php /* Smarty version Smarty-3.1.13, created on 2016-11-19 19:24:03
         compiled from "/var/www/dev/loteamento/application/views/corretor/index.html" */ ?>
<?php /*%%SmartyHeaderCode:7551918145826a0e8829b59-71129195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adc784f53e611019adc99ecab9247ea6bd552f24' => 
    array (
      0 => '/var/www/dev/loteamento/application/views/corretor/index.html',
      1 => 1479589280,
      2 => 'file',
    ),
    '8838a11cb85b2ffd387430b6c6b68b568cefd8ac' => 
    array (
      0 => '/var/www/dev/loteamento/application/views/layout/app.html',
      1 => 1479590638,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7551918145826a0e8829b59-71129195',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5826a0e8842de6_65826958',
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
<?php if ($_valid && !is_callable('content_5826a0e8842de6_65826958')) {function content_5826a0e8842de6_65826958($_smarty_tpl) {?><!doctype html>
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
                      <?php if ($_smarty_tpl->tpl_vars['usuario']->value->nivel!=Estatico::CORRETOR){?>

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
                      <?php }?>
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
        
    
        <div id="corretorapp">
            <router-view></router-view>
        </div>

        <template id="painel">
            <div class="gerencia">
                <count-lotes></count-lotes>
            </div>
        </template>

        <template id="corretor_lista">
            <div class="col-md-12">
                <div class="col-sm-12 box-search">
                    <div class="row">
                        <input type="search" v-model="buscarCorretor" class="form-control search-cand" placeholder="Pesquisar corretor">
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="table-responsive">

                    <table class="table content-res">
                        <thead>
                            <tr>
                                <th>
                                    Nome
                                </th>
                                <th>
                                   CRECI
                                </th>
                                <th>
                                   Coordenador
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr v-for="co in lista | orderBy 'nome' | filterBy buscarCorretor ">
                                <td>  <a href="#!/id/{{co.id}}">{{co.nome }}</a> </td>
                                <td>{{co.creci }}</td>
                                <td>{{co.coordenador }}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </template>

        <template id="count-lotes">
            <div class="col-md-12 col-xs-12">
                <h3>
                <a  v-if="user.nivel !='3'" v-link="{ path:'/', activeClass: 'btn' } "><i class="glyphicon glyphicon-arrow-left"></i> Voltar</a>
                {{counts.corretor.nome}}</h3>
                <nav>
                    <a href="{{Const.home_url}}lotes" class="btn btn-info">Lotes</a>
                </nav>
                <hr>
            </div>
            <div class="col-md-6 col-xs-12" id="counts">
                <div class="contente">
                    <header>
                        Cientes
                    </header>
                    <main>
                        <div class="col-md-12 col-xs-12">
                            <div class="vendido l_box">
                                <span class="v-text"><span style=" display:inline-block; width:10px; height:10px; background: green; border-radius: 50%"></span> Clientes de {{get_two_names(counts.corretor.nome)}} </span>
                                <span class="number">{{counts.cadastro}} </span>

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
                                <span class="v-text"><span style=" display:inline-block; width:10px; height:10px; background: green; border-radius: 50%"></span> Vendidos por {{get_two_names(counts.corretor.nome)}} </span>
                                <span class="number">{{counts.vendido}}</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="n_vendido l_box">
                                <span class="v-text"><span style=" display:inline-block; width:10px; height:10px; background: red; border-radius: 50%"></span> Não vendidos  </span>
                                <span class="number">{{counts.n_vendido}}</span>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                    </main>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-12 col-xs-12">
                <div class="contente">
                    <header>
                        Clintes de {{get_two_names(counts.corretor.nome)}}
                    </header>
                    <main>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Lotes</th>
                                        <th>Presença</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="corretor in corretores | orderBy 'imobiliaria' " class="{{presenca(corretor.comparecimento).class}}">
                                        <td>
                                            {{corretor.nome}} <br>
                                        </td>
                                        <td>{{corretor.lotes}}</td>
                                        <td>{{presenca(corretor.comparecimento).label}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </main>
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
appcorretor.js?v=<?php echo rand(0,10);?>
"></script>

  </body>
</html><?php }} ?>