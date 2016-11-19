<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Hash
 *
 * @author Alisson
 */

class Hash{
    
    /**
     *
     * @param string $algoritmo O algororitmo (md5, sha1, whirlpool, etc)
     * @param string $data senha a ser criptografada
     * @param string $generator Gera um chave de acordo com hash apartir de uma string do usuário.
     */
    public static function create($algoritmo, $data, $generator)  {
        
        $hash = hash_init($algoritmo, HASH_HMAC, $generator);
        hash_update($hash, $data);
        
        return hash_final($hash);
        
    }
    
}
