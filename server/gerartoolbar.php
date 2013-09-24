<?php

require_once './DAO.php';
header("Content-type: text/xml");
echo("<?xml version=\"1.0\" encoding=\"utf-8\"?>\n");
echo("<toolbar>");
echo('<item id="texto" type="text" text="Responsável:"/>');
echo('<item id="responsavel" type="buttonSelect" mode="select" text="Funcionários">');
$sql="select idfuncionario,nomefuncionario from funcionario order by nomefuncionario";
$tabela=DAO::getConexao()->query($sql);
$registros=$tabela->fetch_all();
foreach($registros as $linha){
    echo('<item id="'.$linha[0].'" type="button" text="'.$linha[1].'"/>');
}
echo('</item>');
echo('</toolbar>');
?>
