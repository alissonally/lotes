<?php /* Smarty version Smarty-3.1.13, created on 2016-11-18 20:25:13
         compiled from "D:\ServerMobi\mobi\lotes\application\views\404\404.html" */ ?>
<?php /*%%SmartyHeaderCode:14474582f63a9747049-19566391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d7447516c4ba105a8632099b619b92eacfe9ad7' => 
    array (
      0 => 'D:\\ServerMobi\\mobi\\lotes\\application\\views\\404\\404.html',
      1 => 1479012542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14474582f63a9747049-19566391',
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
  'unifunc' => 'content_582f63a9786bc1_77354873',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f63a9786bc1_77354873')) {function content_582f63a9786bc1_77354873($_smarty_tpl) {?>	

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