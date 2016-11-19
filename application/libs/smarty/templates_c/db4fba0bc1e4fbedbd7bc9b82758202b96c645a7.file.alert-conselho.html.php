<?php /* Smarty version Smarty-3.1.13, created on 2016-10-18 14:54:57
         compiled from "/home/mobieducame/apps/conselhos/api/application/views/email/alert-conselho.html" */ ?>
<?php /*%%SmartyHeaderCode:928372639580657a8bad7b1-02929648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db4fba0bc1e4fbedbd7bc9b82758202b96c645a7' => 
    array (
      0 => '/home/mobieducame/apps/conselhos/api/application/views/email/alert-conselho.html',
      1 => 1476812980,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '928372639580657a8bad7b1-02929648',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_580657a8e40b55_20187740',
  'variables' => 
  array (
    'assunto' => 0,
    'escola' => 0,
    'conselheiros' => 0,
    'conselheiro' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580657a8e40b55_20187740')) {function content_580657a8e40b55_20187740($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
   <table class="mainTable" width="100%" cellspacing="0" cellpadding="0" bgcolor="#e1e1e1">
      <tbody>
         <tr>
            <td style="font-size: 0px; height: 20px; line-height: 0;"> </td>
         </tr>
         <tr>
            <td valign="top">
               <table style="width: 600px; margin: 0px auto;" border="0" width="600" cellspacing="0" cellpadding="0" align="center">
                  <tbody>
                     <tr>
                        <td style="background-color: #feffff; border: #dbdbdb 1px solid; padding: 0px;">
                           <table style="width: 100%;" cellspacing="0" cellpadding="0" align="left">
                              <tbody>
                                 <tr style="height: 20px;">
                                    <td style="width: 100%; vertical-align: top; text-align: left; background-color: #feffff; padding: 35px 15px 0px 15px;">
                                       <p style="font-size: 18px; margin-bottom: 1em; font-family: Arial, Helvetica, sans-serif; margin-top: 0px; color: #333333; background-color: transparent; mso-line-height-rule: exactly;" align="left"><strong> <?php echo $_smarty_tpl->tpl_vars['assunto']->value;?>
</strong> </p>
                                       <p style="font-size: 12px; margin-bottom: 1em; font-family: Arial, Helvetica, sans-serif; margin-top: 0px; color: #000000; background-color: transparent; mso-line-height-rule: exactly;" align="left"> 
                                       SEDUC - Cadastro de Conselheiros
                                       <br>   
                                        Ola, Informamos que os conselheiros escolares da escola: <b><?php echo $_smarty_tpl->tpl_vars['escola']->value;?>
</b> foram incluídos com sucesso. 
                                       <br>
                                       <br>
                                       <br>
                                       Lista dos conselheiros:
                                       <table style="width: 100%;">
                                       <tr>
                                          <th>Nome</th>
                                          <th>Fone</th>
                                          <th>Função</th>
                                          <th>Seguimento</th>
                                          <th>Condição</th>
                                       </tr>
                                       <?php  $_smarty_tpl->tpl_vars['conselheiro'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['conselheiro']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['conselheiros']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['conselheiro']->key => $_smarty_tpl->tpl_vars['conselheiro']->value){
$_smarty_tpl->tpl_vars['conselheiro']->_loop = true;
?>
                                          <tr>
                                             <td><?php echo $_smarty_tpl->tpl_vars['conselheiro']->value['nome'];?>
</td>  
                                             <td><?php if (isset($_smarty_tpl->tpl_vars['conselheiro']->value['fone'])){?> <?php echo $_smarty_tpl->tpl_vars['conselheiro']->value['fone'];?>
 <?php }?></td> 
                                             <td><?php echo $_smarty_tpl->tpl_vars['conselheiro']->value['funcao'];?>
</td> 
                                             <td><?php echo $_smarty_tpl->tpl_vars['conselheiro']->value['seguimento'];?>
</td> 
                                             <td><?php echo $_smarty_tpl->tpl_vars['conselheiro']->value['condicao'];?>
 </td>
                                          </tr>
                                       <?php } ?>
                                       </table>
                                       <br>
                                       <br>
                                       <br>
                                       Mais informações, no link abaixo:   <br> 
                                       <a href="http://apps.mobieduca.me/seduc">http://apps.mobieduca.me/seduc</a>    
                                       </p>
                                    </td>
                                 </tr>
                                 <tr style="height: 20px;">
                                    <td style="vertical-align: top; text-align: left; background-color: #feffff; padding: 35px 15px 15px 15px;">
                                       <p style="font-size: 12px; margin-bottom: 1em; font-family: Arial, Helvetica, sans-serif; margin-top: 0px; color: #a7a7a7; line-height: 155%; background-color: transparent; mso-line-height-rule: exactly;" align="left"><span style="color: #000000;"> &copy; Mobieduca.me </span>  </p>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </td>
         </tr>
         <tr>
            <td style="font-size: 0px; height: 8px; line-height: 0;"> </td>
         </tr>
      </tbody>
   </table>
</body>
</html>
<?php }} ?>