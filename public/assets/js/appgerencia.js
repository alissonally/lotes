var api = Const;
var Painel = Vue.extend({
    template:'#painel'
});

Vue.component('count-lotes', {
    template:'#count-lotes',
    data: function(){
        return {
            counts:'',
            corretores:'',
        }
    },
    methods:{
        counts_gerencia: function(){
            self = this;
            self.$http.get(api.home_url +'gerencia/count').then(function(response){
                    self.$set('counts', response.data);
                });
            setTimeout(function() { self.counts_gerencia() }, 10000);
        },
        counts_corretores: function(){
            self = this;
            self.$http.get(api.home_url +'gerencia/corretor_count').then(function(response){
                    self.$set('corretores', response.data);
                });
            setTimeout(function() { self.counts_corretores() }, 10000);
        },

        soma: function(num, num2){
            return (parseInt(num) + parseInt(num2));
        }
    },
    created: function(){
        this.counts_gerencia();
        if(Const.user.nivel == 0 || Const.user.nivel == 1 || Const.user.nivel == 2)
            this.counts_corretores();
    }
});

// Vue.component('cor-componente', {
//     template:'#corretores',
//     data: function(){
//         return {
//             corretores:'',
//         }
//     },
//     methods:{
//         counts_corretores: function(){
//             self = this;
//             self.$http.get(api.home_url +'gerencia/corretor_count').then(function(response){
//                     self.$set('corretores', response.data);
//                 });
//             setTimeout(function() { self.counts_corretores() }, 10000);
//         }
//     },
//     ready: function(){
//         this.counts_corretores();
//     }
// });



var appComponent = Vue.extend({});

var router = new VueRouter();

router.map({
    '/': {
        component: Painel
    }
});

router.start(appComponent,"#gerenciaapp");