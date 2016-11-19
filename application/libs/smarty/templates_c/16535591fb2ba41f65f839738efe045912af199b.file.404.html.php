<?php /* Smarty version Smarty-3.1.13, created on 2016-11-15 01:12:18
         compiled from "/var/www/dev/loteamento/application/views/404/404.html" */ ?>
<?php /*%%SmartyHeaderCode:2082846376582a8b2205d211-65575955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16535591fb2ba41f65f839738efe045912af199b' => 
    array (
      0 => '/var/www/dev/loteamento/application/views/404/404.html',
      1 => 1479001742,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2082846376582a8b2205d211-65575955',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msgnofound' => 0,
    'aplication' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_582a8b220c9545_74594967',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582a8b220c9545_74594967')) {function content_582a8b220c9545_74594967($_smarty_tpl) {?>	

<div class="row">
	<div class="col-md-12 page-404">
		<div class="number">
			 404
		</div>
		<div class="details">
			<h3>Ops! <br><strong><?php echo $_smarty_tpl->tpl_vars['msgnofound']->value;?>
</strong></h3>
			<p>
				 Desculpe o transtorno, estamos trabalhando nisso.<br/>
				<a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
">
				Retornar à página inicial </a>
			</p>
		</div>
	</div>
</div>

<?php }} ?>