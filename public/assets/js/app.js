var api = Const;
var Painel = Vue.extend({
    template:'#painel',
    data: function(){
        return{
            app:'Painel',
            cliente:'',
            lista:''
        }
    },
    methods: {
        chamada: function() {
            var self = this;
            self.$http.get(api.home_url+'painel/comparece/1').then(function(response){
                //console.log(response.data)
                self.$set('cliente', response.data);
            });
            setTimeout(function() { self.chamada() }, 10000);
        },
        list: function() {
            var self = this;
            self.$http.get(api.home_url+'painel/comparece/5').then(function(response){
                for(var i in response.data){
                    var dat = response.data[i].cliente.com_data
                    //console.log(moment(dat).format('DD-MM-YY H:s'));
                }
                self.$set('lista', response.data);
            });
            setTimeout(function() { self.list() }, 10000);
        },
        moment: function (date, format) {
            var m = moment.parseZone(date)
            return m.format(format);
        }
    },
    created: function() {
        this.chamada();
        this.list();
    }

})


var appComponent = Vue.extend({});

var router = new VueRouter();

router.map({
    '/': {
        component: Painel
    }
});

router.start(appComponent,"#painelapp");