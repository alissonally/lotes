<?php

//require_once('maile/class.phpmailer.php');

class MaillerConfig{

	private $mail;
    private $to;
    
    public function __construct(){
       // parent::__construct();
        $this->to = 'alissonsdearaujo@gmail.com';
    }

    public function form_alisson(){
        if(isset($_POST)){    
            session_start();  
            $dados = array();
            $erro = array();
            foreach ($_POST as $name => $valor){
                    if(empty($valor)){
                        $erro[] = $name;                
                    }else{
                        $dados[$name] = strip_tags(trim($valor));
                    }
                    if(filter_var($dados[$name], FILTER_VALIDATE_EMAIL))
                            $email = $dados[$name];       
                }           
    

            if(count($erro) <= 0 ){                   
            
                $body  = '<table cellpadding="0" cellspacing="0" border="0" width="100%" style="background:#f3f3f3">';
                $body .= '<tbody>';
                $body .= '<tr>';
                $body .='<td style="padding:8px 0">';
                $body .='<table align="center" cellpadding="0" cellspacing="0" border="0" width="670" style="background:#fff;border:1px solid #ccc">';
                $body .='<tbody>';
                $body .='<tr>';
                $body .='<td colspan="2"  style="font-size: 18px; color: #666; padding: 2px 10px;height: 45px; border-bottom: 1px solid #CCC; background: #F8F8F8;">Contato</td>';
                $body .='</tr>';
                foreach($dados as $key=>$value){
                    $body .='<tr style="tr:nth-child(odd)">';
                    $body .='<td style="color:#333; padding:10px 5px; text-transform:capitalize">'.str_replace('_', ' ', $key).'</td>';
                    $body .='<td style="color:#333; padding:10px 5px">'.$value.'</td>';
                    $body .='</tr>';
                }
                $body .='</tbody>';
                $body .='</table>';
                $body .='</td>'; 
                $body .='</tr>';
                $body .='</tbody>'; 
                $body .='</table>';

                $nome = $dados['nome'] ? $dados['nome'] : $email;

                $email_remetente = "eu@alisson.portalv1.com.br";
                $headers = "MIME-Version: 1.1\n";
                $headers .= "Content-type: text/html; charset=iso-8859-1\n";
                $headers .= "From: $email_remetente\n"; // remetente
                $headers .= "Return-Path: $email_remetente\n"; // return-path
                $headers .= "Reply-To: $email\n"; // Endereço (devidamente validado) que o seu usuário informou no contato
                $envio = mail($this->to , $dados['assunto'], $body, $headers, "-f$email_remetente");
                if (!$envio) {
                    header('HTTP/1.1 500 Internal Server Error');
                    echo '<div class="alert erro" >Erro ao enviar Mensagem. Tente Novamente.<a href="javascript:void(0)" onclick="removeElemento()" class="close">x</a></div>';
                      } else {
                    echo '<div class="alert success" >Enviado com sucesso!<a href="javascript:void(0)" onclick="removeElemento()" class="close">x</a></div>';
                    }
            } else {        
                foreach ($erro as $erros){
                    header('HTTP/1.1 500 Internal Server Error');
                    echo '<script type="text/javascript">
                           jQuery( document ).ready(function() {
                            var elemento = jQuery(".span2").find("[name='.$erros.']");
                            jQuery(elemento).css({"border":"1px solid red","background":"#F2DEDE"}); 
                           });
                           </script>';       
                }
            }    
        } 
    }


}
