var api = Const;
var corretodIDComponent = Vue.extend({
    template:'#painel'
});

var CorretorComponent = Vue.extend({
    template:'#corretor_lista',
    data: function(){
        return {
            lista:{},
        }
    },
    methods:{
        get_lista: function(){
            self = this;
            self.$http.get(api.home_url +'corretor/all').then(function(response){
                self.$set('lista', response.data);
            });
        }
    },
    created: function (){
        this.get_lista();
    },
    ready: function(){
        if(Const.user.nivel ==3){
            this.$router.go('/id/' + Const.user.corretor_id)
        }
    }
});

Vue.component('count-lotes', {
    template:'#count-lotes',
    data: function(){
        return {
            counts:{},
            corretores:{},
            id: '',
            user:{},
            Const:Const,
        }
    },
    methods:{
        counts_gerencia: function(){
            this.user = Const.user;
            self = this;
            self.$http.get(api.home_url +'corretor/count/'+this.$route.params.id).then(function(response){
                    self.$set('counts', response.data);
                });
            setTimeout(function() { self.counts_gerencia() }, 10000);
        },
        counts_corretores: function(){
            self = this;
            self.$http.get(api.home_url +'corretor/corretor_count/'+this.$route.params.id).then(function(response){
                    self.$set('corretores', response.data);
                });
            setTimeout(function() { self.counts_corretores() }, 10000);
        },

        soma: function(num, num2){
            return (parseInt(num) + parseInt(num2));
        },
        get_two_names: function(name){

            if(typeof name.split(" ")[1] =='undefined'){
                return name;
            } else  if(name.split(" ")[1].length < 3){
                return name.split(" ").splice(0,3).join(" ");
            } else {
                return name.split(" ").splice(0,2).join(" ");
            }
        },
        presenca: function(val){
            if(val == '1'){
                return {
                    label:'Compareceu',
                    class:'success',
                };
            } else {
                return {
                    label:'Ainda não Compareceu',
                    class:'danger',
                };
            }
        }
    },
    created: function(){
        this.counts_gerencia();
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



var appComponent = Vue.extend({
    ready: function(){
        if(Const.user.nivel ==3){
            this.$router.go('/id/' + Const.user.corretor_id)
        }
    }
});
Vue.config.silent = true
var router = new VueRouter();

router.map({
    '/': {
        component: CorretorComponent
    },
    '/id/:id': {
        component: corretodIDComponent
    }
});

router.start(appComponent,"#corretorapp");