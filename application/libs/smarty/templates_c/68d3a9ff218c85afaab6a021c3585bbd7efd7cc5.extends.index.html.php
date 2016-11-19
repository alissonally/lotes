<?php /* Smarty version Smarty-3.1.13, created on 2016-11-15 07:18:48
         compiled from "D:\ServerMobi\lotes\application\views\gerencia\index.html" */ ?>
<?php /*%%SmartyHeaderCode:23221582a39ff308af1-54609067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68d3a9ff218c85afaab6a021c3585bbd7efd7cc5' => 
    array (
      0 => 'D:\\ServerMobi\\lotes\\application\\views\\gerencia\\index.html',
      1 => 1479215752,
      2 => 'file',
    ),
    '3e37cbe7ea2f2d8f43be04f55726ef6a569bb857' => 
    array (
      0 => 'D:\\ServerMobi\\lotes\\application\\views\\layout\\app.html',
      1 => 1479215752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23221582a39ff308af1-54609067',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_582a39ff3d9b81_97261664',
  'variables' => 
  array (
    'aplication' => 0,
    'controller' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582a39ff3d9b81_97261664')) {function content_582a39ff3d9b81_97261664($_smarty_tpl) {?><!doctype html>
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
        
    
        <div id="gerenciaapp">
            <router-view></router-view>
        </div>

        <template id="painel">
			<div class="gerencia">
				<count-lotes></count-lotes>
			</div>
        </template>
        <template id="count-lotes">
 			<div class="col-md-6 col-xs-12" id="counts">
 				<div class="contente">
	 				<header>
	 					Cientes
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
 			<div class="clearfix"></div>
 			<div class="col-md-12 col-xs-12">
	 			<div class="contente">
	 				<header>
	 					Levantamento por corretor
	 				</header>
	 				<main>
		 				<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>Corretor</th>
										<th>Cadastros</th>
										<th>Vendido</th>
										<!-- th>Não Vendido</th> -->
										<th>Compareceram</th>
										<th>Não Compareceram</th>
										
									</tr>
								</thead>
								<tbody>
									<tr v-for="corretor in corretores | orderBy 'imobiliaria' ">
										<td>
											{{corretor.nome}} <br>
											<small>CRECI: {{corretor.creci}} Imobiliaria: {{corretor.imobiliaria}}</small> 
										</td>
										<td>{{soma(corretor.compareceram, corretor.noa_compareceu)}}</td>
										<td>{{corretor.vendido}}</td>
										
										<td>{{corretor.compareceram}}</td>
										<td>{{corretor.noa_compareceu}}</td>
										
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
appgerencia.js?v=<?php echo rand(0,10);?>
"></script>

  </body>
</html><?php }} ?>