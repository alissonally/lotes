<?php

/**
 * Description of UtilLib
 *
 * @author MagnoCMT
 */
class UtilLib {

  /**
   * FUNCAO PARA AJUSTAR VALOR DE 10.000,00 PARA 10000.00
   * */
  static function stringToFloat($valor) {

    if (!strpos($valor, ",") && !strpos($valor, "."))
      return $valor;

    $valor = str_replace(".", "", $valor);
    $valor = str_replace(",", ".", $valor);
    return $valor;
  }

  /**
   * FUNCAO PARA AJUSTAR VALOR DE 10000.00 PARA 10.000,00
   * */
  static function floatToString($valor) {

    if (!isset($valor) || strlen($valor) <= 0)
      return "0,00";

    $valor = str_replace(",", "", $valor);
    $valor = number_format($valor, 2, ',', '.');
    return $valor;
  }

  /**
   * FUNCAO PARA MOSTRAR A DATA NA TELA DE 2010-10-10 PARA 10/10/2010
   * */
  static function dateToString($data) {
    if ($data != '') {
      return (substr($data, 8, 2) . '/' . substr($data, 5, 2) . '/' . substr($data, 0, 4));
    } else {
      return '';
    }
  }

  /**
   * FUNCAO PARA GRAVAR A DATA NO BANCO DE  22:00 10/10/2010 PARA 2010-10-10 22:00
   * */
  static function stringToDateTime($data) {
    if (strlen($data) > 0) {
      $data = explode(" ", $data);
      return UtilLib::stringToDate($data[1]) . " " . $data[0];
    } else {
      return null;
    }
  }

  /**
   * FUNCAO PARA GRAVAR A DATA NO BANCO DE  2010-10-10 22:00 PARA 22:00 10/10/2010
   * */
  static function dateTimeToString($data) {
    if ($data != '') {
      $data = explode(" ", $data);
      return $data[1] . " " . UtilLib::dateToString($data[0]);
    } else {
      return '';
    }
  }

  /**
   * FUNCAO PARA GRAVAR A DATA NO BANCO DE 10/10/2010 PARA 2010-10-10
   * */
  static function stringToDate($data) {
    if ($data != '') {
      return (substr($data, 6, 4) . '-' . substr($data, 3, 2) . '-' . substr($data, 0, 2));
    } else {
      return '';
    }
  }

  static function getFileName($file) {
    $ext = explode("/", $file);

    if (count($ext) > 1)
      $nome = $ext[count($ext) - 1];
    else
      $nome = $file;

    return $nome;
  }

  static function getFileExtension($file) {
    $ext = explode("/", $file);

    if (count($ext) > 1)
      $nome = $ext[count($ext) - 1];
    else
      $nome = $file;

    $ext = explode(".", $nome);

    if (count($ext) > 1)
      $nome = $ext[count($ext) - 1];
    else
      $nome = "";

    return strtolower($nome);
  }

  static function isImage($file) {
    $ext = UtilLib::getFileExtension($file);

    $imgs = "|.png|.jpg|.gif|.jpeg|.bmp|";

    if (stripos($imgs, $ext) !== FALSE)
      return true;

    return false;
  }

  static function getThumb($file, $folder = '.tmb/') {
    $name = UtilLib::getFileName($file);
    $thumb = dirname($file) . '/' . $folder . $name;

    if (file_exists($thumb))
      return $thumb;

    return $file;
  }

  /**
   * FUNCAO PARA AJUSTAR VALOR DE 100.0 PARA 100.00
   * */
  static function ajustaDecimais($valor) {

    if (!isset($valor) || strlen($valor) <= 0)
      return "0.00";

    $valor = number_format($valor, 2);
    return $valor;
  }

  static function pointScale($s1, $s2, $p) {

    if ($s2 == 0)
      return 0;

    return ($s1 * $p) / $s2;
  }

  static function toUrl($namespace = '', $controller = '', $action = ''){
    $url = '';
    if(strlen($namespace) > 0)
      $url = $namespace.Bloum\Config::SEP_URL;

    return $url.$controller.Bloum\Config::SEP_URL.$action;
  }

  static function urlToArray($url){

    $data = array();

    $url = explode(Bloum\Config::SEP_URL, $url);
    $count = count($url);
    $data['namespace'] = '';
    if($count > 2)
      $data['namespace'] = $url[0];
    $data['controller'] = $url[$count - 2];
    $data['action'] = $url[$count - 1];
    return $data;
  }

  static function datetimePickToActiveRecord($data) {
    $data = explode(" ", $data);
    $data = array_reverse($data);
    $data = implode(" ", $data);
    return new \ActiveRecord\DateTime(UtilLib::stringToDateTime($data));
  }

  static function activeRecordToDateTimePick($data) {
    $data = $data->format();
    $data = explode(" ", $data);
    $data[1] = substr($data[1], 0, 5);
    return implode(" ", $data);
  }

  static function keyRandom($lenght = 8){
    return substr(md5(time(1)), 0, $lenght);
  }

  /**
   * FUNCAO PARA VALIDAR CPF
   * */
  static function validaCPF($number) {

    if (strstr($number, "_"))
      $number = str_replace("_", "", $number);
    if (strstr($number, "."))
      $number = str_replace(".", "", $number);
    if (strstr($number, "-"))
      $number = str_replace("-", "", $number);
    if (strstr($number, "/"))
      $number = str_replace("/", "", $number);
    if (strlen($number) != 11)
      return false;

    $d1 = 0;
    $d2 = 0;

    for ($i = 0; $i < 9; $i++)
      $d1 = $d1 + ($number[$i] * (10 - $i));

    $d1 = 11 - ($d1 % 11);
    if ($d1 >= 10)
      $d1 = 0;
    for ($i = 0; $i < 9; $i++)
      $d2 = $d2 + ($number[$i] * (11 - $i));

    $d2 = 11 - (($d2 + ($d1 * 2)) % 11);

    if ($d2 >= 10)
      $d2 = 0;
    if ($number[9] == $d1 && $number[10] == $d2)
      return true;

    return false;
  }

  /**
   * FUNCAO PARA VALIDAR CNPJ
   * */
  static function validaCNPJ($number) {

    if (strstr($number, "_"))
      $number = str_replace("_", "", $number);
    if (strstr($number, "."))
      $number = str_replace(".", "", $number);
    if (strstr($number, "-"))
      $number = str_replace("-", "", $number);
    if (strstr($number, "/"))
      $number = str_replace("/", "", $number);
    if (strlen($number) != 14)
      return false;

    $d1 = $number[11] * 2 + $number[10] * 3 + $number[9] * 4 + $number[8] * 5 +
            $number[7] * 6 + $number[6] * 7 + $number[5] * 8 + $number[4] * 9 +
            $number[3] * 2 + $number[2] * 3 + $number[1] * 4 + $number[0] * 5;

    $d1 = 11 - ($d1 % 11);
    if ($d1 >= 10)
      $d1 = 0;
    $d2 = $d1 * 2 + $number[11] * 3 + $number[10] * 4 + $number[9] * 5 +
            $number[8] * 6 + $number[7] * 7 + $number[6] * 8 + $number[5] * 9 +
            $number[4] * 2 + $number[3] * 3 + $number[2] * 4 + $number[1] * 5 + $number[0] * 6;
    $d2 = 11 - ($d2 % 11);
    if ($d2 >= 10)
      $d2 = 0;
    if ($number[12] == $d1 && $number[13] == $d2)
      return true;

    return false;
  }

  static function month($m){
    $m = intval($m);
    switch ($m) {
      case 1:    return 'Janeiro';
      case 2:    return 'Fevereiro';
      case 3:    return 'Março';
      case 4:    return 'Abril';
      case 5:    return 'Maio';
      case 6:    return 'Junho';
      case 7:    return 'Julho';
      case 8:    return 'Agosto';
      case 9:    return 'Setembro';
      case 10:    return 'Outubro';
      case 11:    return 'Novembro';
      case 12:    return 'Dezembro';
    }

  }
  static function get_excerpt_by_id($post_id){
    $the_post = get_post($post_id); //Gets post ID
    $the_excerpt = $the_post->post_content; //Gets post_content to be used as a basis for the excerpt
    $excerpt_length = 70; //Sets excerpt length by word count
    $the_excerpt = strip_tags(strip_shortcodes($the_excerpt)); //Strips tags and images
    $words = explode(' ', $the_excerpt, $excerpt_length + 1);

    if(count($words) > $excerpt_length) :
        array_pop($words);
        array_push($words, '…');
        $the_excerpt = implode(' ', $words);
    endif;
    return $the_excerpt;
  }

  static function imagem_destacada_tec($path_img, $largura=null, $altura=null, $qualidade, $classe=null, $align='t'){

        echo URL_FULL.'thumb?src='.$path_img.'&amp;w='.$largura.'&amp;h='.$altura.'&amp;zc=1&amp;a='.$align.'&amp;q='.$qualidade.'" class="'.$classe;

    }
  static function gen_slug($str){
    $slug = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
    $slug = preg_replace("/[^a-zA-Z0-9\/_| -]/", '', $slug);
    $slug = strtolower(trim($slug, '-'));
    $slug = preg_replace("/[\/_| -]+/", '-', $slug);

    return $slug;
  }
  static function get_atributos_image($atributos){
     print_r($atributos);
      /*$attr ='data-mime_type="'.$atributos['mime_type'].'"
              data-width="'.$atributos['width'].'"
              data-height="'.$atributos['height'].'"
              data-size="'.$atributos['size'].'"';
      return $attr; */
  }
}