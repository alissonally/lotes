<?php 

/**
* Configuração d variável globais para js
* @author Alisson S de Araujo
* @version 1.0 07/04/2015
*/

class Localize extends View{
	
	/**
	 * Objeto de retorno JS
	 */
	public $obj = '';

	/**
	 * Variavel global javascript
	 */
	protected $js_variable = '';

	public function __construct() {
        parent::__construct();   
    }    
	/**
	* @param 1 Nome do Obj
	* @param 2 Array com chave e valor
	*/
	public function set_scritp_controller($variable, $data_script=array()){
		$this->obj = json_encode($data_script);
		$this->js_variable = $variable;
	}

	/**
	 * @return object JS (var = {key:value})
	 */
	public function get_scritp_controller(){
		echo sprintf('<script type="text/javascript">
					var %1$s=%2$s							
					</script>', 
					$this->js_variable, 
					$this->obj
				);
	}	

}
