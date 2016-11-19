var typeahead = {

    data_res: new Array(),//
    config: new Array(),//

    init: function (){
        $('#busca_cliente').keyup(function(){
            var ele = $(this);
            typeahead.config = $(this).data('typehead');
            $('.search-manual-results').remove();
            if($(this).val().length >= 3){
                ele.after('<ul class="search-manual-results"></ul>');
                $('.search-manual-results').css({'display':'block',left:ele.position().left,  width:ele.outerWidth()});
                var query = $(this).val();
                $(this).addClass('loading-circle');
                $.ajax({
                    url: Const.home_url + 'cliente/search',
                    type: 'GET',
                    data:{termo: $(this).val()}
                })
                .done(function(data) {
                    var list = '';
                    if(typeof data[0] !='undefined'){
                        for(var i in data){
                            typeahead.data_res[data[i].id] = data[i];
                            list +='<li><a href="javascript:;" data-res="'+data[i].id+'">'+typeahead.highlighter(query, data[i].nome + ' - CPF/CNPJ - ' +data[i].cpf_cnpj )+'</a></li>';
                        }
                    } else {
                        list +='<li><a href="#">Nenhum resultado encontrado</a></li>';
                    }
                    $('.search-manual-results').html(list);
                    ele.removeClass('loading-circle');
                })
            }
        });
        typeahead.on_Select();
    },
    highlighter: function(query, titulo) {
        var term_strong = query.replace(/[\-\[\]{}()*+?.,\\\^$|#\s]/g, "\\$&");
        return titulo.replace(new RegExp("(" + term_strong + ")", "ig"), function(titulo, term_strong) {
            return "<strong>" + term_strong + "</strong>"
        })
    },
    on_Select:function(){
        $('body').on('click', '.search-manual-results>li>a', function(){
            var obj = typeahead.data_res[$(this).data('res')];
            var id = obj.id;
            var loc = window.location;

            if(typeof id !='undefined' ){
                if(typeof typeahead.config !='undefined' && typeahead.config.url !='undefined')
                    window.location = Const.home_url  +typeahead.config.url+id;
                else
                    window.location = Const.home_url  +'cliente/id/'+id;
            }
        });
    }
}//end typeahead
typeahead.init();

function buscarEscola(){
		var inep = $('#buscarescola').val();
		var loc = window.location;
		if(inep.length > 0 )
			window.location = Const.home_url + Const.controller +'?inep='+inep;
	}

function addAlunoAprovado(){
	var count_line = $('.linhas').each(function(index, el) {

	});
	var linha_form = count_line.length+1;
	var dados_line = {}, count;
	dados_line.nome = $('#nome').val();
	dados_line.email = $('#email').val();
	dados_line.fone = $('#fone').val();
	dados_line.funcao = $('#funcao').val();
	dados_line.seguimento = $('#seguimento').val();
	dados_line.condicao = $('#condicao').val();
	if(dados_line.nome.length <=0 || dados_line.funcao.length <=0 || dados_line.seguimento.length <=0 ||
		dados_line.condicao.length <=0 ){
		alert('Preencha os campos corretamento');
		return false
	}
	var linha = $("#table-conselheiros tr:last").attr('rel');
	if(linha)
	   linha++;
	else
	   linha = 0;

	var tr= '<tr id="linha_'+linha+'" rel="'+linha+'">\
		<td>\
			<input class="form-control" id="'+linha+'_nome" name="conselheiros['+linha+'][nome]" type="text" value="'+dados_line.nome+'">\
		</td>\
		<td><input class="form-control" id="'+linha+'_email" name="conselheiros['+linha+'][email]" type="text" value="'+dados_line.email+'"></td>\
		<td><input class="form-control" id="'+linha+'_fone" name="conselheiros['+linha+'][fone]" type="text" value="'+dados_line.fone+'"></td>\
		<td><input class="form-control" id="'+linha+'_funcao" name="conselheiros['+linha+'][funcao]" type="text" value="'+dados_line.funcao+'"></td>\
		<td><input class="form-control" id="'+linha+'_seguimento" name="conselheiros['+linha+'][seguimento]" type="text" value="'+dados_line.seguimento+'"></td>\
		<td><input class="form-control" id="'+linha+'_condicao" name="conselheiros['+linha+'][condicao]" type="text" value="'+dados_line.condicao+'"></td>\
		<td class="form-action" id="col-add">\
			<a title="Excluir" onclick="excluirItem(linha_'+linha+');"><i class="glyphicon glyphicon-remove"></i></a>\
		</td>\
	</tr>';
	$('#line_add').append(tr);
	$('#nome').val('');
	$('#email').val('');
	$('#fone').val('');
	//$('#funcao').val('');
	//$('#seguimento').val('');
	//$('#condicao').val('');
}

function excluirItem(el){
	$(el).remove()
}

jQuery(document).ready(function($) {

    $(window).load(function() {
        $('.chamada-cliente, .ultimos-chamados, .gerencia').css({
            'min-height': $(this).height() - 160
        });
    });
    $('.date').mask('00/00/0000');
 	$('.fone').mask('(00)0000-0000');
 	$('.cep').mask('00000-000');
    $('.cpf_cnpj_c').mask('000.000.000-00');
    $('[name^=tipo_cliente]').change(function(event) {
        $('.cpf_cnpj').removeAttr('disabled');
        if($(this).val() ==='f' )
    		$('.cpf_cnpj').mask('000.000.000-00');
    	else if($(this).val() ==='j' )
    		$('.cpf_cnpj').mask('00.000.000/0000-00');
    });

 	var nav_online ='<div class="sem-net"><span class="glyphicon glyphicon-exclamation-sign"></span>Sem conexão com a internet </div>';
 	setInterval(function(){
	  if(!navigator.onLine){
	    $('#nv-online').html(nav_online);
	  } else {
	    $('#nv-online').html('');
	  }
	}, 10000);


 	var config = {
      '.cidade'           : {},
      '#corretor'           : {},
      '#corretor_filter'    : {},
      '#sec_filter'    : {no_results_text: 'Corretor não encontrado:'},
      '#lote'    : {multiple:true, no_results_text: 'Lote não encontrado:'},
      '.estado'  : {allow_single_deselect:true},
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
    // $('#cpf_cnpj, #cpf_conjuge').on('focus', function(event) {
    //     $("label#erro").html('');
    // });

    // $('#cpf_conjuge').bind('change input', function() {
    //     cpf_conjuge = $(this).val().replace('.', '').replace('.', '').replace('.', '').replace('-', '');
    //     var valid_conjuge = VerificaCPF(cpf_conjuge);
    //     if(!valid_conjuge){
    //         $('#salvar').attr('disabled', 'disabled');
    //         $('label#erro').remove();
    //         $(this).after('<label class="alert-danger" id="erro">CPF inválido</label>');
    //     } else {
    //         $('label#erro').remove();
    //         $('#salvar').removeAttr('disabled');
    //     }
    // });
    $('#cpf_cnpj').bind('change input', function() {
        var cpf_cnpj_bd = $(this).val();
        //console.log($(this))
    	var self = this,
    	 	cpf_cnpj = cpf_cnpj_bd,
    	 	check = $('[name^=tipo_cliente]:checked').val(),
    	 	valid='',msg='';

        if(check ==='f'){
    		cpf_cnpj = cpf_cnpj.replace('.', '').replace('.', '').replace('.', '').replace('-', '');
    		msg = 'CPF Inválido';
    	 	valid = VerificaCPF(cpf_cnpj);
    	} else if(check ==='j'){
    		cpf_cnpj = cpf_cnpj.replace('.', '').replace('.', '').replace('/', '').replace('-', '');
    		msg = 'CNPJ Inválido';
    		valid = validarCNPJ(cpf_cnpj);
    	}
    	if(valid){
            $('#erro_1').remove();
	    	$.ajax({
	    		url: Const.home_url + 'cliente/valide_cpf/'+cpf_cnpj_bd,
	    		type: 'GET',
	    		dataType:'json'
	    	})
	    	.done(function(data) {
	    		if(data.cliente){
                    $('#salvar').attr('disabled', 'disabled');
                    $('#erro_1').remove();
	    			$('#cpf_cnpj').after('<label class="alert-danger" id="erro_1">Cliente já cadastrado</label>');
	    		} else{
                    $('#salvar').removeAttr('disabled');
	    			$("label#erro").html('');
	    		}
	    	});
    	} else {
            $('#salvar').attr('disabled', 'disabled');
            $('#erro_1').remove();
    		$('#cpf_cnpj').after('<label class="alert-danger" id="erro_1">'+msg+'</label>');
    	}
    });

    $("#uf").change(function() {
	    var el = $('#cidade');
	    var uf_id =  $(this).val()
	    el.html('<option value="">Carregando...</option>').trigger("chosen:updated");
	    $.ajax({
	        url: Const.home_url + 'cidade/cidades/'+uf_id,
	        type: 'GET',
	        dataType: 'json',
	        success: function(data) {
	            var html = '';
	            var len = data.length;
	            html += '<option value="">Cidades</option>';
	            for (var i = 0; i < len; i++) {
	                html += '<option value="' + data[i].id + '">' + data[i].nome + '</option>';
	            }
	            el.html(html).trigger("chosen:updated");
	        },
	        error: function(data) {
	            var response = JSON.parse(data.responseText);
	            alert('Erro Ao Carregar Dados: ' + response.message);
	            el.html('').trigger("chosen:updated");
	        }
   	 	});
	});

    $('#aplicar-filter').click(function(event) {
        event.preventDefault();
        var param_filter = {}, check_filter = false, params_get='';
        if($('#corretor_filter').val() != ''){
            check_filter = true;
            param_filter.corretor = $('#corretor_filter').val();
        }
        if($('#comparecimento_filter').val() !=''){
            check_filter = true;
            param_filter.comparecimento = $('#comparecimento_filter').val();
        }
        if(check_filter){
            for (var key in param_filter) {
                if (params_get != "") {
                    params_get += "&";
                }
                params_get += key + "=" + param_filter[key];
            }
            window.location = Const.home_url +'cliente?'+params_get;
        }
    });

});

function VerificaCPF(cpf) {

	cpf = cpf.replace(/[^\d]+/g,'');

    if(cpf == '') return false;

    // Elimina CPFs invalidos conhecidos
    if (cpf.length != 11 || cpf == "00000000000" || cpf == "11111111111" || cpf == "22222222222" || cpf == "33333333333" || cpf == "44444444444" || cpf == "55555555555" || cpf == "66666666666" || cpf == "77777777777" || cpf == "88888888888" || cpf == "99999999999")
        return false;

    // Valida 1o digito
    add = 0;
    for (i=0; i < 9; i ++)
        add += parseInt(cpf.charAt(i)) * (10 - i);
    rev = 11 - (add % 11);
    if (rev == 10 || rev == 11)
        rev = 0;
    if (rev != parseInt(cpf.charAt(9)))
        return false;

    // Valida 2o digito
    add = 0;
    for (i = 0; i < 10; i ++)
        add += parseInt(cpf.charAt(i)) * (11 - i);
    rev = 11 - (add % 11);
    if (rev == 10 || rev == 11)
        rev = 0;
    if (rev != parseInt(cpf.charAt(10)))
        return false;

    return true;

}

function validarCNPJ(cnpj) {

    cnpj = cnpj.replace(/[^\d]+/g,'');

    if(cnpj == '') return false;

    if (cnpj.length != 14)
        return false;

    // Elimina CNPJs invalidos conhecidos
    if (cnpj == "00000000000000" ||
        cnpj == "11111111111111" ||
        cnpj == "22222222222222" ||
        cnpj == "33333333333333" ||
        cnpj == "44444444444444" ||
        cnpj == "55555555555555" ||
        cnpj == "66666666666666" ||
        cnpj == "77777777777777" ||
        cnpj == "88888888888888" ||
        cnpj == "99999999999999")
        return false;

    // Valida DVs
    tamanho = cnpj.length - 2
    numeros = cnpj.substring(0,tamanho);
    digitos = cnpj.substring(tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
      soma += numeros.charAt(tamanho - i) * pos--;
      if (pos < 2)
            pos = 9;
    }
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(0))
        return false;

    tamanho = tamanho + 1;
    numeros = cnpj.substring(0,tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
      soma += numeros.charAt(tamanho - i) * pos--;
      if (pos < 2)
            pos = 9;
    }
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(1))
          return false;

    return true;
}


function excluirItem(el){
	$(el).remove()
}

jQuery(document).ready(function($) {
 	$('.date').mask('00/00/0000');
 	$('.fone').mask('(00)0000-0000');
});

function excluirConselheiro(linha, id, name){

	var line = '#'+linha;
	var r = confirm("Tem certreza que deseja excluir \n "+name+ " ?\n Clique em ok para confirmar.");
	if (r == true) {
        window.location = Const.home_url  +'cliente/delete/'+id;
	}
}

function removeLote(lote_id, corretor_id, lote, quadra, corretor, cliente_id){
    var qnt = $('#lotes_qnt').text();
        qnt = parseInt(--qnt);
    var line = '#'+lote_id;
    var r = confirm("Tem certreza que deseja excluir \n O LOTE "+lote+ " QUADRA "+quadra+" de "+corretor+" ?\n Clique em ok para confirmar.");
    if (r == true) {
        //window.location = Const.home_url  +'cliente/delete/'+id;
        $.ajax({
         url: Const.home_url + 'secretaria/remove_lote/',
         type: 'POST', 
         data: {
            id:lote_id, 
            corretor_id:corretor_id, 
            cliente_id: cliente_id
        },
         dataType:'json'
        })
        .done(function(data) {
            if(data.del==true){
                //$('#lotes_qnt').text(qnt);
                $(line).css({
                    background:'#daa7a7',
                })
                .fadeOut(900, function() {
                    $(line).remove();
                });

                $('#msg').html('<div class="alert alert-danger">Lote removido.</div>').show();
                setTimeout(function(){
                     $('#msg').fadeOut(300, function(){
                        if(qnt > 0){
                            $('#lotes_qnt').text(qnt);
                        }
                        if(parseInt(qnt) == 0 ){
                           $('#table-lotes').remove(); 
                        }
                     });   
                }, 2000);
               
            } else {
                $('#msg').html('<div class="alert alert-danger">Ocorreu um erro ao tentar remover o lote.</div>');
            }
        })
    }
}
setTimeout(function(){
    $('#addlote-fadeout').fadeOut(300);
}, 2000)


function addClienteLote(lote_id, corretor_id){
    $('#id_lote').val('');
    $('#id_corretor').val('');
    $('#id_cliente').val('');
    $('#nome_cliente').val('');

    //$('#modal-lotes').click();
    $('#id_lote').val(lote_id);
    $('#id_corretor').val(corretor_id);
    $('#modal-lotes').modal({
        show:true
    })


    // $.ajax({
    //     url: Const.home_url + 'secretaria/venda',
    //     type: 'POST',
    //     dataType: 'json',
    //     data: {cliente_to_corretor: '1'}
    // })
    // .done(function() {
    //     console.log("success");
    // })    
}
$('#add_cliente_lote').BuscaAjax({
        source:{
            url:Const.home_url + 'cliente/search',
        },
        on_select: function(data){
            $('#nome_cliente').val(data.nome);
            $('#id_cliente').val(data.id);
        }
})

// $('#lote-to-cliente').submit(function(event) {
    
//     var that = this;
//     var data = $(this).serializeArray(),
//         vazio = false;

//     for(var i in data){
//         if(data[i].value ==''){
//             vazio = true;
//         }
//     }
//     console.log($(this).attr('method'), Const.home_url+ 'secretaria/venda')
//     if(vazio == false){
//         $.ajax({
//             url: $(that).attr('action'),
//             type: 'POST',
//             data: {param1: 'value1'},
//         })
//         .done(function() {
//             console.log("success");
//         })
        
//     }
//     //console.log(data);
// });


function setComparecimento(id, status){
    var status_set='';
    if(status == 0){
        status_set = 1;
    } else if(status == 0){
        status_set = 0;
    }
    $.ajax({
        url: Const.home_url + 'cliente/compareceu/',
        //url: 'http://localhost:9090/news',
        type: 'POST',
        data: {id: id, status:status_set},
    })
    .done(function() {
        location.reload();
    })
}

function excluirUser(linha, id, name){

    var line = '#'+linha;
    var r = confirm("Tem certreza que deseja excluir \n "+name+ " ?\n Clique em ok para confirmar.");
    if (r == true) {
        //window.location = Const.home_url  +'cliente/delete/'+id;
    }
}