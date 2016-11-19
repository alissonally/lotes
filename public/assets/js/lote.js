var api = Const;

var Lotes = Vue.extend({
    template:'#lote_tpl',
    data: function(){
        return {
            lotes:'',
            count_lotes:{
                vendidos:0,
                disponivel:0,
            }
        }
    },
    methods:{
        get_lista: function(){
            self = this;
            self.$http.get(api.home_url +'lotes/all').then(function(response){
                var l_vendidos = 0, l_disponivel=0;

                for(var l in response.data){
                    if(response.data[l].status == 1 ){
                        l_vendidos++
                    } else if(response.data[l].status ==0) {
                        l_disponivel++
                    }
                }
                self.count_lotes.vendidos=l_vendidos;
                self.count_lotes.disponivel=l_disponivel;
                self.$set('lotes', response.data);
            });
            setTimeout(function() { self.get_lista() }, 10000);
        },
        classe_status: function(val){
            if(val == '1'){
                return 'vermelho';
            } else {
                return 'verde';
            }
        }
    },
    created: function (){
        this.get_lista();
    }
});





var appComponent = Vue.extend({});

var router = new VueRouter();

router.map({
    '/': {
        component: Lotes
    }
});

router.start(appComponent,"#lotes-app");