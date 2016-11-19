<?php /* Smarty version Smarty-3.1.13, created on 2016-11-19 18:22:46
         compiled from "/var/www/dev/loteamento/application/views/cliente/novo.html" */ ?>
<?php /*%%SmartyHeaderCode:16456806315827c75cd160a0-07972287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e28718c4ac2d7a7db7a7b6feadede72364b35690' => 
    array (
      0 => '/var/www/dev/loteamento/application/views/cliente/novo.html',
      1 => 1479002397,
      2 => 'file',
    ),
    '8838a11cb85b2ffd387430b6c6b68b568cefd8ac' => 
    array (
      0 => '/var/www/dev/loteamento/application/views/layout/app.html',
      1 => 1479586950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16456806315827c75cd160a0-07972287',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5827c75cd49de8_23547011',
  'variables' => 
  array (
    'aplication' => 0,
    'is_logged' => 0,
    'usuario' => 0,
    'controller' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5827c75cd49de8_23547011')) {function content_5827c75cd49de8_23547011($_smarty_tpl) {?><!doctype html>
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
              <?php if (isset($_smarty_tpl->tpl_vars['is_logged']->value)&&$_smarty_tpl->tpl_vars['is_logged']->value&&isset($_smarty_tpl->tpl_vars['usuario']->value)){?>
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                  </button>
              </div>
              <div class="collapse navbar-collapse navbar-menubuilder">
                  <ul class="nav navbar-nav navbar-right">
                      <li><a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
">Início</a></li>
                      <?php if ($_smarty_tpl->tpl_vars['usuario']->value->nivel!=Estatico::CORRETOR){?>

                      <li class="dropdown" class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Clientes <b class="caret"></b></a>
                          <ul class="dropdown-menu" role="menu">
                              <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
cliente/">Listar</a>
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
corretor/">Listar</a>
                              </li>
                              <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
corretor/">Editar</a>
                              </li>
                              <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
corretor/novo">Cadatsrar</a>
                              </li>
                          </ul>
                      </li>
                      <?php if ($_smarty_tpl->tpl_vars['usuario']->value->nivel==Estatico::GERENCIA||$_smarty_tpl->tpl_vars['usuario']->value->nivel==Estatico::ADMIN){?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
usuarios">Usuários</a></li>
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
 <br>
            <?php } ?>
        </div>
        <?php }?>
    </div>
    <form action="<?php echo $_smarty_tpl->tpl_vars['aplication']->value['app'];?>
cliente/create" method="POST">
        <!-- <div class="row">
            <div class="form-group col-md-2">
                <label for="quadra" class="control-label">Quadra<sup>*</sup>:</label>
                <input type="text" id="quadra" name="terreno[quadra]" value=""  class="required form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="lote" class="control-label">Lote<sup>*</sup>:</label>
                <input type="text" id="lote" name="terreno[lote]" value="" class="required form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="area" class="control-label">Área:<sup>*</sup>:</label>
                <input type="text" id="area" name="terreno[area]" value="" class="required form-control">
            </div>
            <div class="form-group col-md-4">
                <div class="clearfix">
                    <label class="control-label">Tipo<sup>*</sup>:</label>
                </div>
                <label class="checkbox-inline">
                  <input type="radio" name="terreno[tipo]" id="tipo" value="TT"> TT
                </label>
                <label class="checkbox-inline">
                  <input type="radio" name="terreno[tipo]" id="tipo" value="DT"> DT
                </label>
                <label class="checkbox-inline">
                  <input type="radio" name="terreno[tipo]" id="tipo" value="PJ"> PJ
                </label>
                <label class="checkbox-inline">
                  <input type="radio" name="terreno[tipo]" id="tipo" value="MR"> MR
                </label>
            </div>
        </div> -->
        <h3>DADOS PESSOAIS DO PROPONENTE</h3>
        <div class="row">
            <div class="form-group col-md-12">
                <div class="clearfix">
                    <label class="control-label">Tipo Cliente<sup>*</sup>:</label>
                </div>
                <label class="checkbox-inline">
                  <input type="radio" id="tipo_f" name="tipo_cliente" value="f"> Pessoa Física
                </label>
                <label class="checkbox-inline">
                  <input type="radio" id="tipo_j" name="tipo_cliente" value="j"> Pessoa Jurídica
                </label>
            </div>
            <div class="form-group col-md-7">
                <label for="nome" class="control-label">Nome/Razão Social<sup>*</sup>:</label>
                <input type="text" id="nome" name="cliente[nome]" value="" placeholder="Nome/Razão Social" class="required form-control">
            </div>
            <div class="form-group col-md-5">
                <div class="clearfix">
                    <label class="control-label">Sexo<sup>*</sup>:</label>
                </div>
                <label class="checkbox-inline">
                  <input type="radio" id="sexo" name="cliente[sexo]" value="m"> M
                </label>
                <label class="checkbox-inline">
                  <input type="radio" id="sexo" name="cliente[sexo]" value="f"> F
                </label>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-3">
                <label for="rg" class="control-label">RG<sup>*</sup>:</label>
                <input type="text" id="rg" name="cliente[rg]" value="" placeholder="RG" class="required form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="orgao_exp" class="control-label"><sup>Exp*</sup>:</label>
                <input type="text" id="orgao_exp" name="cliente[orgao_exp]" value="" placeholder="Exp" class="required form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="nascimento" class="control-label">Nascimento<sup>*</sup>:</label>
                <input type="text" id="nascimento" name="cliente[nascimento]" value="" placeholder="Nascimento" class="required date form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="cpf_cnpj" class="control-label">CPF/CNPJ<sup>*</sup>:</label>
                <input type="text" id="cpf_cnpj" disabled="disabled" name="cliente[cpf_cnpj]" placeholder="CPF/CNPJ" class="required form-control cpf_cnpj" required >
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-3">
                <label for="profissao" class="control-label">Profissão<sup>*</sup>:</label>
                <input type="text" id="profissao" name="cliente[profissao]" value="" placeholder="Profissão" class="required form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="nacionalidade" class="control-label">Nacionalidade<sup>*</sup>:</label>
                <input type="text" id="nacionalidade" name="cliente[nacionalidade]" value="" placeholder="Nacionalidade" class="required form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="estado_civil" class="control-label">Estado Civil<sup>*</sup>:</label>
                <select name="cliente[estado_civil]" class="form-control" id="">
                    <option value="Solteiro">Solteiro</option>
                    <option value="Casado">Casado</option>
                    <option value="Separado">Separado</option>
                    <option value="Divorciado">Divorciado</option>
                    <option value="Viúvo">Viúvo</option>
                    <option value="Amasiado">Amasiado</option>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="regime_casamento" class="control-label">Regime de Casamento<sup>*</sup>:</label>
                <input type="text" id="regime_casamento" name="cliente[regime_casamento]" value="" placeholder="Regime de Casamento" class="required form-control">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-4">
                <label for="conjuge" class="control-label">Nome Conjuge/Representante legal<sup>*</sup>:</label>
                <input type="text" id="conjuge" name="cliente[conjuge]" value="" placeholder="Nome Conjuge/Representante legal" class="required form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="rg_conjuge" class="control-label">RG:<sup>*</sup>:</label>
                <input type="text" id="rg_conjuge" name="cliente[rg_conjuge]" value="" placeholder="RG" class="required form-control">
            </div>
            <div class="form-group col-md-2">
                <label for="orgao_exp_conjuge" class="control-label">Exp:<sup>*</sup>:</label>
                <input type="text" id="orgao_exp_conjuge" name="cliente[orgao_exp_conjuge]" value="" placeholder="Exp" class="required form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="cpf_conjuge" class="control-label">CPF:<sup>*</sup>:</label>
                <input type="text" id="cpf_conjuge" name="cliente[cpf_conjuge]" value="" placeholder="CPF" class="cpf_cnpj_c required form-control">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="profissao_conjuge" class="control-label">Profissão<sup>*</sup>:</label>
                <input type="text" id="profissao_conjuge" name="cliente[profissao_conjuge]" value="" placeholder="Profissão" class="required form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="conjuge_telefone" class="control-label">Fone:</label>
                <input type="text" id="conjuge_telefone" name="cliente[conjuge_telefone]" value="" placeholder="Fone" class="fone required form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="conjuge_telefone_2" class="control-label">Fone:</label>
                <input type="text" id="conjuge_telefone_2" name="cliente[conjuge_telefone_2]" value="" placeholder="Fone" class="fone required form-control">
            </div>
        </div>

        <h3>Endereço</h3>

        <div class="row">
            <div class="form-group col-md-3">
                <label for="cep" class="control-label">CEP:<sup>*</sup>:</label>
                <input type="text" id="cep" name="endereco[cep]" value="" placeholder="CEP" class="required form-control cep">
            </div>
            <div class="form-group col-md-3">
                <label for="uf" class="control-label">Estado:<sup>*</sup>:</label>
                <select name="endereco[uf]" class="form-control estado" id="uf">
                    <?php  $_smarty_tpl->tpl_vars['estado'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['estado']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['estados']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['estado']->key => $_smarty_tpl->tpl_vars['estado']->value){
$_smarty_tpl->tpl_vars['estado']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['estado']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['estado']->value->nome;?>
</option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="cidade" class="control-label">Cidade:<sup>*</sup></label>
                <select name="endereco[cidade]" class="form-control cidade" id="cidade">
                    <option value="">Selecione a Cidade</option>
                </select>
            </div>

            <div class="form-group col-md-3">
                <label for="bairro" class="control-label">Bairro<sup>*</sup>:</label>
                <input type="text" id="bairro" name="endereco[bairro]" value="" placeholder="Bairro" class="required form-control">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="logradouro" class="control-label">Rua/Av.<sup>*</sup>:</label>
                <input type="text" id="logradouro" name="endereco[logradouro]" value="" placeholder="Rua/Av." class="required form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="numero" class="control-label">Numero<sup>*</sup></label>
                <input type="text" id="numero" name="endereco[numero]" value="" placeholder="Numero" class="required form-control">
            </div>
            <div class="form-group col-md-5">
                <label for="complemento" class="control-label">Complemento</label>
                <input type="text" id="complemento" name="endereco[complemento]" value="" placeholder="Complemento" class="required form-control">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-3">
                <label for="telefone" class="control-label">Fone:</label>
                <input type="text" id="telefone" name="endereco[telefone]" value="" placeholder="Fone" class="fone required form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="telefone_2" class="control-label">Fone:</label>
                <input type="text" id="telefone_2" name="endereco[telefone_2]" value="" placeholder="Fone" class="fone required form-control">
            </div>
            <div class="form-group col-md-6">
                <label for="email" class="control-label">E-mail:<sup>*</sup>:</label>
                <input type="email" id="email" name="endereco[email]" value="" placeholder="E-mail" class="required form-control">
            </div>
        </div>
        <!-- <h3>Condições de Pagamento</h3>

        <div class="row">
            <div class="col-md-12">
                <h4>Sinal de Entrada:</h4>
            </div>
            <div class="form-group col-md-2">
                <label for="tipo" class="control-label">Tipo<sup>*</sup>:</label>
                <input type="text" id="tipo" name="pagamento[tipo]" value="" class="required form-control">
            </div>

            <div class="form-group col-md-2">
                <label for="vencimento_1" class="control-label">Vencimento<sup>*</sup>:</label>
                <input type="text" id="vencimento_1" name="pagamento[vencimento_1]" value="" class="required form-control date">
            </div>
            <div class="form-group col-md-2">
                <label for="parcela" class="control-label">1ª Parcela<sup>*</sup>:</label>
                <input type="text" id="parcela" name="pagamento[parcela]" value="" class="required form-control">
            </div>
            <div class="form-group col-md-2">
                <label for="tipo_2" class="control-label">Tipo<sup>*</sup>:</label>
                <input type="text" id="tipo_2" name="pagamento[tipo_2]" value="" class="required form-control">
            </div>
            <div class="form-group col-md-2">
                <label for="vencimento_2" class="control-label">Vencimento<sup>*</sup>:</label>
                <input type="text" id="vencimento_2" name="pagamento[vencimento_2]" value="" class="required form-control date">
            </div>
            <div class="form-group col-md-2">
                <label for="total" class="control-label">Total do Sinal(R$)<sup>*</sup>:</label>
                <input type="text" id="total" name="pagamento[total]" value="" class="required form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h4>Financiamento:</h4>
            </div>
            <div class="form-group col-md-2">
                <label for="fin_parcela" class="control-label">Qtd de Parcelas<sup>*</sup>:</label>
                <input type="text" id="fin_parcela" name="pagamento[fin_parcela]" value="" class="required form-control date">
            </div>

            <div class="form-group col-md-2">
                <label for="fin_parcela_mensal" class="control-label">Parcela Mensal(R$)<sup>*</sup>:</label>
                <input type="text" id="fin_parcela_mensal" name="pagamento[fin_parcela_mensal]" value="" class="required form-control">
            </div>

            <div class="form-group col-md-2">
                <label for="fin_vencimento" class="control-label">Vencimento<sup>*</sup>:</label>
                <input type="text" id="fin_vencimento" name="pagamento[fin_vencimento]" value="" class="required form-control date">
            </div>
            <div class="form-group col-md-2">
                <label for="fin_total" class="control-label">Total<sup>*</sup>:</label>
                <input type="text" id="fin_total" name="pagamento[fin_total]" value="" class="required form-control">
            </div>
        </div> -->
        <div class="row">
            <div class="form-group col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <label for="corretor" class="control-label">Corretor<sup>*</sup>:</label>
                        <select name="corretor" class="form-control" id="corretor">
                            <option value="">Selecione um corretor</option>
                            <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['corretores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value->nome;?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
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