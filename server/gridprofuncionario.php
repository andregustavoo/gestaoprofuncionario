<?php
/*require_once '../codebase/grid_config.php';
require_once '../codebase/grid_connector.php';
require("../codebase/db_mysqli.php");
$conexao=  new mysqli('10.210.1.131', 'root', 'd3adl0ck', 'cadastros_db', '3306');
$gridconnector=new GridConnector($conexao,'MYSQLi');
$grid=new GridConfiguration();
$grid->setHeader('CPF,Nome,Curso,Data,Entrada,Saída,Permanência');
$grid->setInitWidthsP('10,30,20,10,10,10,10');
//$grid->setColSorting('connector,connector,connector,connector,connector,connector,connector');
$gridconnector->set_config($grid);
$gridconnector->render_table('ponto_profuncionario','cpf','cpf,nome,departamento,dataPonto,entrada_ponto,saida_ponto,permanencia');*/
require_once './gerarXML.php';
$conexao=  new mysqli('10.210.1.131', 'root', 'd3adl0ck', 'cadastros_db', '3306');
header("Content-type: text/xml");
echo("<?xml version=\"1.0\" encoding=\"utf-8\"?>\n");
$sql="select * from ponto_profuncionario";
$criteria='';
if (isset($_POST['nome'])){
    $criteria="nome like '%".$_POST['nome']."%'";
}
if(isset($_POST['curso']) && $_POST['curso']!='-'){
    if($criteria!='')
        $criteria=$criteria." and ";
    $criteria=$criteria . "departamento='".$_POST['curso']."'";
}
if(isset($_POST['datainicio']) && isset($_POST['datatermino']) && $_POST['datainicio']!='' && $_POST['datatermino']!='') {
    if($criteria!='')
        $criteria=$criteria." and ";
    $criteria=$criteria . "dataPonto between '".$_POST['datainicio']."' and '".$_POST['datatermino']."'";
}
if($criteria!=''){
    $sql=$sql." where ".$criteria;
}
$tabela=$conexao->query($sql);
//echo($sql);
echo gerarXMLGrid($tabela->fetch_all());
?>
