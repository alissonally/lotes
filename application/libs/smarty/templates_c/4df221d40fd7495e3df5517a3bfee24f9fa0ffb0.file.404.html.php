<?php /* Smarty version Smarty-3.1.13, created on 2016-11-14 19:00:57
         compiled from "D:\ServerMobi\lotes\application\views\404\404.html" */ ?>
<?php /*%%SmartyHeaderCode:31640582a3419226ff3-71855386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4df221d40fd7495e3df5517a3bfee24f9fa0ffb0' => 
    array (
      0 => 'D:\\ServerMobi\\lotes\\application\\views\\404\\404.html',
      1 => 1479123054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31640582a3419226ff3-71855386',
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
  'unifunc' => 'content_582a3419260958_13629535',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582a3419260958_13629535')) {function content_582a3419260958_13629535($_smarty_tpl) {?>	

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