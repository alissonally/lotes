<?php 
/**
* Alisson Araújo
*/
class Upload {
	
	public $tamanhoMax = 1048576;
	public $extensoes  = array(".jpg",".png",".gif");
	public $folder     = '';
	public $nomeFoto   = '';
	public $tamanhoFoto = '';
	public $nomeTemp    = '';
	public $errosFoto	= '';	
	public $nome_unico = '';
	public $meta_data_image = array();
	public $name_image = '';
	public $name_image_save = '';
	public $name_image_save_unico = '';
	public $e	= array();	
	//Trata erros $_FILES
	
	public function upload_files($files, $destino){

		$this->folder = $destino;
		$this->e['erros'][0] = "Sem erros";
		$this->e['erros'][1] = "O arquivo no upload é maior do que o limite do servidor";
		$this->e['erros'][2] = "O arquivo ultrapassa o limite de tamanho permitido";
		$this->e['erros'][3] = "O upload do arquivo foi feito parcialmente";
		$this->e['erros'][4] = "Não foi feito o upload do arquivo";
		//var_dump($files);
		$this->nomeFoto   = $files['file']['name'];
		$this->tamanhoFoto= $files['file']['size'];
		$this->nomeTemp   = $files['file']['tmp_name'];
		$this->errosFoto  = $files['file']['error'];
		$this->meta_data_image = exif_read_data($this->nomeTemp);									
		$this->name_image = $this->nomeFoto;									
		//Incrementa qnt de fotos
		if(!empty($this->nomeFoto)){
			if ($this->errosFoto != 0) 
				throw new Exception("<span class='erro'>Erro no arquivo ".$this->nomeFoto ."<br />  <em>Erro: ". $e['erros'][$errosFoto]."</em></span>");	
		
			if($this->tamanhoFoto > $this->tamanhoMax) 												
				throw new Exception('<span class="erro">O arquivo '.$this->nomeFoto.' não pode ser maior que '.$tamanhoMax/$tamanhoMax.' MB </span>');	
			
			if(!in_array(strrchr($this->nomeFoto, "."), $this->extensoes))
				throw new Exception('<span class="erro">O extensão do arquivo '.$this->nomeFoto.' não é válida</span>');
											
			if(file_exists($this->nomeTemp)){
				$array_pic = explode(".",$this->nomeFoto);
				$ext = end($array_pic);
				$this->name_image_save = UtilLib::gen_slug($array_pic[0]).'.'.$ext;
				$this->nome_unico = $this->incrementFileName($this->folder .DS. $this->name_image_save);
				$this->name_image_save_unico = str_replace($this->folder .DS, '', $this->nome_unico);
				//echo $this->get_folder() .DS. $this->nomeFoto;
				
				if (!$this->errosFoto){
					move_uploaded_file($this->nomeTemp, $this->nome_unico );
					return true;
				} 			
			}
		}
	}

	public function incrementFileName($file){
		while(is_file($file)){
	        preg_match("/\d+\.[^.]*$/", $file, $matches);
	        if (!$matches){
	            $file = preg_replace('/(\.[^.]*)$/', '-1${1}', $file);
	            //return $file;
	        } else {
	            list($i, $extension) = explode(".",$matches[0]);
	            $file = preg_replace('/(\d+\.[^.]*)$/', ++$i.".".$extension, $file);
	        }
	 	}
	    return $file;
	}


	public function set_meta_data_image(){		
	 	return $this->meta_data_image;
	}

	public function get_name_image(){		
	 	$array_pic = explode(".",$this->name_image);
		$ext = end($array_pic);		
	 	return str_replace('.'.$ext, '', $this->name_image);
	}

	public function get_name_save(){		
	 	return $this->name_image_save_unico;
	}
}