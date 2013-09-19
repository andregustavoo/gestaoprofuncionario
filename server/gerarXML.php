<?php
    function gerarXMLGrid($tabela){
        $xml='';
        $xml=$xml.'<rows>';
        $id=0;
        foreach($tabela as $linha){
             $xml= $xml . '<row id=\''.(++$id).'\'>';
            for($i=0;$i<count($linha);$i++){
                if (isset($linha[$i]))
                  $xml = $xml . '<cell>'.$linha[$i].'</cell>';
            }

            $xml = $xml . '</row>';
        }
        $xml = $xml . '</rows>';
        return $xml;
    }
    
?>
