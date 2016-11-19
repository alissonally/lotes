<?php
/**
 * Classe Para Configurações de Banco de Dados<br />
 *
 * {driver}://{user}:{pass}@{host}/{database}
 *
 * @author Magno Leal <magnoleal89@gmail.com>
 * @version 1.0 - 21 de Maio de 2012
 */
class DbConfig{

  public static $connections = array(
    'development' => 'mysql://root:root@127.0.0.1/loteamento_palmeiras;charset=utf8',
    'production' => 'mysql://root:root@127.0.0.1/loteamento_palmeiras',
    'test' => 'mysql://root:root@127.0.0.1/sgperson'
  );

}