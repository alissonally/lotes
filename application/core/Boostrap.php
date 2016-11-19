<?php

class Boostrap {

    private $_url = null;
    private $_controller = null;
    private $_params = null;
    public $_getController = 'Controller';
    private $_controllerPath = 'controllers/'; // Pasta dos controllera
    private $_modelPath = 'models/'; // Pasta dos models
    private $_errorFile = 'nofound'; //controller padr�o de errors
    private $_defaultFile = 'index'; //controller padr�o

    protected $route;
    
    /**
     * Inicializa a aplica��o
     */
    public function init()  {

        $this->route = RoutesConfig::getInstance();

        // Seta o atributa $_url
        $this->_getUrl();

        // Carreha o controller padr�o se a url n�o for passada
        // ex: o dominio carrega o Controller padr�o
        if (empty($this->_url[0])) {
            $this->_loadDefaultController();			
            return false;
        }

        $this->_loadExistingController();
        $this->_callControllerMethod();
    }
    
    /**
	 * Carrega o $_GET da url
     */
    private function _getUrl() {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $this->_url = explode('/', $url);
    }
    
    /**
     * Carrega se n�o houver parametros na url
     */
    private function _loadDefaultController() {
        require APP_PATH . $this->_controllerPath . $this->_defaultFile . $this->_getController .'.php';
        $this->_controller = new indexController();
        $this->_controller->loadModel($this->_defaultFile, $this->_modelPath);  
        $this->_controller->index();  
    }
    
    /**
     * Carrega um controller existente se for passado na url
     *
     */
    private function _loadExistingController() {

        $file = APP_PATH . $this->_controllerPath . str_replace("-", "_",$this->_url[0]) . $this->_getController . '.php';
        if (file_exists($file)) {
            require $file;   
            $controller_instance =  str_replace("-", "_",$this->_url[0]) . $this->_getController;
            $this->_controller = new $controller_instance ; 
            $this->_controller->loadModel(str_replace("-", "_",$this->_url[0]), $this->_modelPath);
        } else {

            $rurl = $this->route->getRoute($this->_url);
            if($rurl == null)
                throw new Exception("a url <strong>" .str_replace("-", "_",$this->_url[0]). "</strong> n&atilde;o foi encontrada");

            $this->_url = $rurl;
            $this->_loadExistingController();
            
        }
    }
    
    /**
     * Se um metodo � passado no parametro do GET
     * 
     *  http://localhost/controller/method/(param)/(param)/(param)
     */
    private function _callControllerMethod()  {
	
        $length = count($this->_url);
        // Certifica se o parametro chamado existe
        if ($length > 1) {

            if (!method_exists($this->_controller, $this->_url[1])) {
                
                $rurl = $this->route->getRoute($this->_url);
                if($rurl == null)
                    throw new Exception("metodo n&atilde;o encontrado");

                $this->_url = $rurl;
                $length = count($this->_url);
                  
            }
                //throw new Exception("metodo n&atilde;o encontrado");
        }
        
        /**
		 * Se igual a um ler o controller
		 * Se maior que um, trata todos como parametros
		 */
        switch ($length) {
            case 1:                
                $this->_controller->index();
                break;            
           default:		
                $this->setParams(); 
                break;		
        }
    }
	
	public function setParams(){
		/** 
		 * Pega tudo do $_GET a partir do indice 2
		 * Os impares s�o os indices e os pares os valores 
		 */

		$params = array(); 
		for($i = 2; $i < count($this->_url); $i = $i+2) 
			$params[] = $this->_url[$i];    					   
		call_user_func_array(array($this->_controller, $this->_url[1]), $params); 		                  
		
	}
	
    
}