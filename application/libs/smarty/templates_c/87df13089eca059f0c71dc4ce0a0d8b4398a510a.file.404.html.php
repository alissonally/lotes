<?php /* Smarty version Smarty-3.1.13, created on 2016-11-16 09:58:46
         compiled from "D:\dev\loteamento\application\views\404\404.html" */ ?>
<?php /*%%SmartyHeaderCode:345582c580623eed3-77388340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87df13089eca059f0c71dc4ce0a0d8b4398a510a' => 
    array (
      0 => 'D:\\dev\\loteamento\\application\\views\\404\\404.html',
      1 => 1479012542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '345582c580623eed3-77388340',
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
  'unifunc' => 'content_582c580627b5f2_42900473',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582c580627b5f2_42900473')) {function content_582c580627b5f2_42900473($_smarty_tpl) {?>	

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