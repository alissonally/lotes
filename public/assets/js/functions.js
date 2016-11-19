/**
* Colecao de funcoes para uso gerais
*/
function showChartTooltip(x, y, xValue, yValue) {
    $('<div id="tooltip" class="chart-tooltip">' + yValue + '<\/div>').css({
        position: 'absolute',
        display: 'none',
        top: y - 40,
        left: x - 40,
        border: '0px solid #ccc',
        padding: '2px 6px',
        'background-color': '#fff'
    }).appendTo("body").fadeIn(200);
}

function month_names(key){
	var monthNames = ["Jan", "Fev", "Mar","Abr", "Mai", "Jun", "Jul","Ago", "Set", "Out", "Nov", "Dec"];
	return monthNames[key];
}

function get_stats_general(res){
	if( $('#stats_mobi').hasClass('reload') ){
        $('#stats_mobi_loading').show();
        //$('#stats_mobi_content').show();
        $('#stats_mobi').removeClass('reload');
        $('#stats_mobi').html('');
    }
    var data_stats = '';
    if(typeof res.aluno_status =='undefined'){
        $('#stats_mobi_loading').hide();
        $('#stats_mobi_content').show();

        $('#stats_mobi').html('<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">\
                                <div class="note note-info note-bordered">\
                                <p>\
                                 Nenhum registro encontrado. Por favor, tente mudar os filtros para uma nova busca.\
                                </p>\
                                </div></div>');

        return;
    }
    //if(res.frequencia != 0 && res.falta_aula !=0 && res.ocorrencia!=0 && res.aluno !=0){
        var transferencia = typeof res.aluno_status.transferido != "undefined" ? res.aluno_status.transferido:0;
        var desistente = typeof res.aluno_status.desistente != "undefined" ? res.aluno_status.desistente:0;
        var ativos = typeof res.aluno_status.ativo != "undefined" ? res.aluno_status.ativo:0;
        data_stats = {
                aluno: ativos,
                falta_aula: res.falta_aula,
                ocorrencia: res.ocorrencia,
                frequencia: res.frequencia,
                transferencia: transferencia,
                desistente: desistente,
                percent_aluno: parseFloat((ativos / ativos) * 100),
                percent_transferencia: parseFloat((transferencia /ativos) * 100).toFixed(2),
                percent_desistente:  parseFloat((desistente / ativos) * 100).toFixed(2),
                // percent_fq: parseFloat((res.frequencia / res.aluno) * 100).toFixed(2),
                // percent_oc: parseFloat((res.ocorrencia / res.aluno) * 100).toFixed(2),
            };
    //} else {
    //     data_stats = {
    //         no_found:'Nenhum resultado encontrado'
    //     }
    // }

    if ($('#stats_mobi').size() !== 0 || $('#stats_mobi').hasClass('reload') ) {
        $('#stats_mobi_loading').hide();
        $('#stats_mobi_content').show();
        $.Mustache.load(Const.url_app + 'application/views/partials/mst/stats.mst')
            .done(function () {
            $('#stats_mobi').mustache('stats_mobi_tmp', data_stats);
            $('#stats_mobi').addClass('reload');
        });
    }
}

function config_moments(days, date_search_init, date_search_end){
	var search_init, search_end, range;

	if(days !='undefined'){
		range = days;
    } else {
        range = 30;
    }
    if(typeof date_search_init !='undefined'){
        search_init = moment(new Date(date_search_init));

    } else {
        search_init = moment(new Date());
        search_init.subtract(range, 'days');
    }
	if(typeof date_search_end !='undefined')
		search_end	= moment(new Date(date_search_end) );
	else
		search_end = moment(new Date());

	var head_messager = '';
	if(parseInt(moment().diff(search_init, 'days')) > 30)
		head_messager='De '+ search_init.format('DD/MM/YYYY') + ' a ' +search_end.format('DD/MM/YYYY');
	else
		//Verifica se as datas são atuais (Hoje)
		if(moment().format('L') === search_init.format('L') && moment().format('L')=== search_end.format('L'))
			head_messager='Hoje';
		//Verifica se as datas são de 1 dia atras (Ontem)
		else if(moment().subtract(1, 'days').format('L') === search_init.format('L') && moment().subtract(1, 'days').format('L') === search_end.format('L') )
			head_messager='Ontem';
		else
			head_messager='Últimos '+ search_end.diff(search_init, 'days') + ' dias';

	var moment_mb={
		data_inicial:search_init.format('YYYY-MM-DD'),
		data_final:search_end.format('YYYY-MM-DD'),
		diff_days: head_messager,
		diff_days_number:search_end.diff(search_init, 'days'),
	}
	return moment_mb;
}

/**
*Transforma o text em capitalize
*/
function capitalize( str , echo){
    var words = str.toLowerCase().split(" ");
    for ( var i = 0; i < words.length; i++ )  {
        var j = words[i].charAt(0).toUpperCase();
        words[i] = j + words[i].substr(1);
    }
    if(typeof echo =='undefined')
        return words.join(" ");
    else
      return str;
}

/**
*return string mes
*/
function format_date_mobi(str_date) {
    var monthNames = [
        "Jan", "Fev", "Mar",
        "Abr", "Mai", "Jun", "Jul",
        "Ago", "Set", "Out",
        "Nov", "Dec"
    ];
    return monthNames[parseInt(str_date)-1];
}
/*
*Converte data no formato (YYYY-DD-MM) em (DD-MM-YYYY)
*/
function convert_data(data_db){

    var con = data_db.split('-');
    var data_br = con[1]+'-'+con[2]+'-'+con[0]
    return data_br;
}
function complete_date_forma(str_date) {
    var monthNames = [
        "Jan", "Fev", "Mar",
        "Abr", "Mai", "Jun", "Jul",
        "Ago", "Set", "Out",
        "Nov", "DeZ"
    ];

    var d1 = str_date.replace('-','/').replace('-','/');
    var date = new Date(d1);
    var day = date.getDate();
    if(day<10) day +=0;
    var monthIndex = date.getMonth();
    var year = date.getFullYear();
    return day + ' de '+ monthNames[monthIndex]+ ', '+ year;
}

function turno (str){
    switch(str.charAt(3)){
        case  'M':
            return "Manhã";
        break;
        case  'T':
            return "Tarde";
        break;
        case  'N':
            return "Noite";
        break;
        default:
            return '';
        break
    }
}

function includeJs(jsFilePath) {
    var js = document.createElement("script");
    js.type = "text/javascript";
    js.src = jsFilePath;
    document.body.appendChild(js);
}

function get_two_names(name){
    if(name.split(" ")[1].length < 3){
        return name.split(" ").splice(0,3).join(" ");
    } else {
        return name.split(" ").splice(0,2).join(" ");
    }
}

function get_idade(date_nascimento) {
    var hoje = new Date();
    var nascimento = new Date(date_nascimento)
    var diferencaAnos = hoje.getFullYear() - nascimento.getFullYear();
    if ( new Date(hoje.getFullYear(), hoje.getMonth(), hoje.getDate()) <
         new Date(hoje.getFullYear(), nascimento.getMonth(), nascimento.getDate()) )
        diferencaAnos--;
    return diferencaAnos;
}

function testImage(url, callback, timeout) {
    timeout = timeout || 5000;
    var timedOut = false, timer;
    var img = new Image();
    img.onerror = img.onabort = function() {
        if (!timedOut) {
            clearTimeout(timer);
            callback(url, "error");
            return false
        }
    };
    img.onload = function() {
        res = true;
        if (!timedOut) {
            clearTimeout(timer);
            callback(url, "success");
        }
    };
    img.src = url;
    timer = setTimeout(function() {
        timedOut = true;
        callback(url, "timeout");
    }, timeout);
}

//Alfabeto
function alfabeto(){
    var alfabeto_array = [];
    var alfabeto = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    for (var i = 0; i < alfabeto.length; i++) {
      alfabeto_array.push(alfabeto.charAt(i));
    }
    return alfabeto_array;
}
//*remove las comman
function removeLastComma(strng){
    var n=strng.lastIndexOf(",");
    var a=strng.substring(0,n)
    return a;
}


//Retorno Obj com data no forma date.year date.month date.day

function get_current_date(){
    var date = new Date();
    var obj_date={
        day : date.getDate(),
        month : date.getMonth()+1,
        year : date.getFullYear(),
    }

    return obj_date;
}

/**
* Config data generica para ano
*/
function get_data_by_year(periodo, data_inicial){
    var data_moments_config = [];
    if(typeof Const.year !='undefined' && Const.year!=null && Const.year != get_current_date().year){
        var d_inicial
        if(typeof data_inicial !='undefined'){
            d_inicial = data_inicial;
        } else {
            d_inicial = Const.year+'-12-02';
        }

        data_moments_config = config_moments('undefined', ''+d_inicial+'', ''+Const.year+'-12-31');//ultimo mes do anos selecionado

    } else {
        data_moments_config = config_moments(periodo);
    }

    return data_moments_config;
}


/**
* Cinfig data para datatables
*/

function data_for_datatables(){
    var obj_date_datables=[], range_title='';
    if(typeof Const.year !='undefined' && Const.year!=null && Const.year != get_current_date().year){
        range_title = config_moments('undefined', ''+Const.year+'-12-02', ''+Const.year+'-12-31').diff_days;

        obj_date_datables={
                config_data:{day:undefined,
                    data_i:''+Const.year+'-12-02',
                    data_f:''+Const.year+'-12-31',
                },
                title:range_title,
        };

    } else {
       range_title = moment(new Date()).format('YYYY');
       obj_date_datables={
                config_data:{day:undefined,
                data_i:String(get_current_date().year+'-01-01'),//01/01/2015
                data_f:undefined
            },
            title:range_title,
        };
    }

    return obj_date_datables;
}

//util Angular params
var params = function(obj) {
    var query = '',
        name, value, fullSubName, subName, subValue, innerObj, i;

    for (name in obj) {
        value = obj[name];

        if (value instanceof Array) {
            for (i = 0; i < value.length; ++i) {
                subValue = value[i];
                fullSubName = name + '[' + i + ']';
                innerObj = {};
                innerObj[fullSubName] = subValue;
                query += params(innerObj) + '&';
            }
        }
        else if (value instanceof Object) {
            for (subName in value) {
                subValue = value[subName];
                fullSubName = name + '[' + subName + ']';
                innerObj = {};
                innerObj[fullSubName] = subValue;
                query += params(innerObj) + '&';
            }
        }
        else if (value !== undefined && value !== null) query += encodeURIComponent(name) + '=' + encodeURIComponent(value) + '&';
    }

    return query.length ? query.substr(0, query.length - 1) : query;
}

var week_day = function(data){
    var d = new Date(data);
    var weekday = new Array(7);
    weekday[0]=  "Domingo";
    weekday[1] = "Segunda";
    weekday[2] = "Terça-Feira";
    weekday[3] = "Quarta-Feira";
    weekday[4] = "Quinta-Feira";
    weekday[5] = "Sexta-Feira";
    weekday[6] = "Sábado";

    return data_day = weekday[d.getDay()];
}