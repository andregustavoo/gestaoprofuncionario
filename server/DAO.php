<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DAO
 *
 * @author 1577655
 */
class DAO {
    private static $conexao;
    
    public static function getConexao(){
        if (!isset($conexao))
           $conexao=  new mysqli('10.210.1.131', 'root', 'd3adl0ck', 'cadastros_db', '3306');
       return $conexao;
    }
    

}

?>
