<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller
 *
 * @author alissonaraujo
 */
abstract class Controller {

    protected $helper = '';
    protected $_params=array();
    protected $_config_app=array();
    var $call = array();
    function __construct() {

        $this->view = new View();

        $this->view->controller = str_ireplace('controller', '', get_class($this));

        $this->loadHelper();
        Hooks::add_filter('localize', array($this, 'constScripts'), 10 );
        $this->config_app();
    }

    /**
     *
     * @param string $name Nome do Model
     * @param string $path Endereco do model
     */
    public function loadModel($name, $modelPath = 'models/') {
        $path = APP_PATH . $modelPath . $name.'.php';

        if (file_exists($path)) {
            require_once $path;
            $modelName = $name ;
            $this->model[strtolower($name)] = new $modelName();
        }

    }

    public function loadHelper(){
        $pathHelper =  HELPERS .$this->helper. '.php';

        if(file_exists($pathHelper)){
            require_once $pathHelper;
            $this->helper_instance = new $this->helper();
        }

    }

    public function config_app(){
        global $config_app;
        $this->_config_app = $config_app;
        $this->_params = array(
                'localize' => '',
            );
        $this->view->assign("aplication", array_merge($this->_config_app, $this->_params));
    }

    public function constScripts(){
        $current_page = isset($_GET['url']) ? rtrim($_GET['url'], '/') : 'inicio';
        $c = explode('/' , $current_page);
        $usuario = Session::get('usuario') !=null ? Session::get('usuario') : '';
        $id_empresa = $usuario !=null ? $usuario->empresa->id : '';
        $escola = isset($usuario->escola->id) ? $usuario->escola->id : '';

        echo sprintf('<script id="obj-config" type="text/javascript">
                    /* <![CDATA[ */
                    var Const = {
                        "url_app":"%1$s",
                        "assets":"%2$spublic/assets/",
                        "current":"%3$s",
                        "request":%4$s,
                        "usuario":%5$s,
                        "url_api":"http://apiv2.mobieduca.me/",
                        "escola":"%6$s",
                        "id_empresa":"%7$s",
                        "zona":%8$s,
                        "year":%9$s,
                        "views":"%10$s",
                        "si":%11$s,
                        }
                    /* ]]> */
                </script>',
                URL_FULL,
                BASE_URL,
                $c[0],
                json_encode($c),
                json_encode($usuario),
                $escola,
                $id_empresa,
                json_encode(Session::get('zona')),
                json_encode(Session::get('year')),
                VIEWS_URL,
                json_encode(Session::get('si'))
            );
    }
}
