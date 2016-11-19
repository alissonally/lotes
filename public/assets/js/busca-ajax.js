(function( $ ){
    $.fn.BuscaAjax = function(options){
        console.log(this);

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