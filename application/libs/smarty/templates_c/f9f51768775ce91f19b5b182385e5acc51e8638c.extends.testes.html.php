<?php /* Smarty version Smarty-3.1.13, created on 2016-11-16 23:20:11
         compiled from "/var/www/dev/loteamento/application/views/testes.html" */ ?>
<?php /*%%SmartyHeaderCode:1955272475582cfcd838c407-36584517%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9f51768775ce91f19b5b182385e5acc51e8638c' => 
    array (
      0 => '/var/www/dev/loteamento/application/views/testes.html',
      1 => 1479349207,
      2 => 'file',
    ),
    '8838a11cb85b2ffd387430b6c6b68b568cefd8ac' => 
    array (
      0 => '/var/www/dev/loteamento/application/views/layout/app.html',
      1 => 1479186570,
      2 => 'file',
    ),
    'f944fb0b675a9d0d326b95622c30728afbcc625b' => 
    array (
      0 => '/var/www/dev/loteamento/application/views/includes/busca-cliente.html',
      1 => 1479344306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1955272475582cfcd838c407-36584517',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_582cfcd8483a70_69185943',
  'variables' => 
  array (
    'aplication' => 0,
    'controller' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582cfcd8483a70_69185943')) {function content_582cfcd8483a70_69185943($_smarty_tpl) {?><!doctype html>
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
        
    <div class="col-md-12 col-xs-12">
        <h3>Buscar clientes</h3>
        <div class="row">
            <?php /*  Call merged included template "includes/busca-cliente.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("includes/busca-cliente.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('placeholder'=>'Buscar cliente','el_id'=>'buscar_cli','title'=>'data-typehead={"url":"secretaria/cliente/"}'), 0, '1955272475582cfcd838c407-36584517');
content_582d13dbd87c59_59068438($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "includes/busca-cliente.html" */?>
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
    
    
    <script>
        (function( $ ){
            $.fn.BuscaAjax = function(options){


                var defaults = {
                    on_select:function(){},
                    template: function(data, i){
                        return Object.values(data[i])[1];
                    },
                    source:{
                        url:'',
                        type:'GET'
                    }
                },

                settings = $.extend({}, defaults,  options),

                selector = this.selector
                ele_instance = selector.replace('#', '');

                var buscardor =  {

                    data_res: new Array(),//
                    config: new Array(),//

                    data_select:function(){
                        self = this;
                        $('body').on('click', '#id-'+ele_instance+'>li>a', function(){
                            var key = $(this).data('res');
                            $(selector).val('');
                            $('#id-'+ele_instance).remove();
                            self.on_select(self.data_res[key]);
                        });
                    },

                    init: function (){
                        self = this;
                        $(selector).keyup(function(){
                            var ele = $(this);
                            $('#id-'+ele_instance).remove();
                            if($(this).val().length >= 3){
                                ele.after('<ul id="id-'+ele_instance+'" class="busca-ajax"></ul>');
                                $('#id-'+ele_instance).css({'display':'block',left:ele.position().left,  width:ele.outerWidth()});
                                var query = $(this).val();
                                $(this).addClass('loading-circle');
                                $.ajax({
                                    url: settings.source.url,
                                    type: settings.source.type,
                                    data:{termo: $(this).val()}
                                })
                                .done(function(data) {
                                    var list = '';
                                    if(typeof data[0] !='undefined'){
                                        for(var i in data){
                                            self.data_res[i] = data[i];
                                            list +='<li><a href="javascript:;" data-res="'+i+'">'+self.highlighter(query, settings.template(data, i) )+'</a></li>';
                                        }
                                    } else {
                                        list +='<li><a href="#">Nenhum resultado encontrado</a></li>';
                                    }
                                    $('#id-'+ele_instance).html(list);
                                    ele.removeClass('loading-circle');
                                })
                            }
                        });
                        self.data_select();
                    },
                    highlighter: function(query, titulo) {
                        var term_strong = query.replace(/[\-\[\]{}()*+?.,\\\^$|#\s]/g, "\\$&");
                        return titulo.replace(new RegExp("(" + term_strong + ")", "ig"), function(titulo, term_strong) {
                            return "<strong>" + term_strong + "</strong>"
                        })
                    },
                    on_select:settings.on_select
                }//end typeahead
                buscardor.init();
            }
        })(jQuery)


        $('#buscar_cli').BuscaAjax({
            source:{
                url:Const.home_url + 'cliente/search',
            },
            on_select: function (data){
                console.log(data);
            }
        });
    </script>
    

  </body>
</html><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2016-11-16 23:20:11
         compiled from "/var/www/dev/loteamento/application/views/includes/busca-cliente.html" */ ?>
<?php if ($_valid && !is_callable('content_582d13dbd87c59_59068438')) {function content_582d13dbd87c59_59068438($_smarty_tpl) {?><div class="col-sm-12">
	<div class="form-group" >
		<input class="form-control" id="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['el_id']->value)===null||$tmp==='' ? 'busca_cliente' : $tmp);?>
" <?php if (isset($_smarty_tpl->tpl_vars['title']->value)){?> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <?php }?> name="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['el_id']->value)===null||$tmp==='' ? 'busca_cliente' : $tmp);?>
" placeholder="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['placeholder']->value)===null||$tmp==='' ? '' : $tmp);?>
" type="text">
	</div>
</div>
<?php }} ?>