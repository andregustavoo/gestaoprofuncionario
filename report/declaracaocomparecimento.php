<html>

<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<meta name=Generator content="Microsoft Word 14 (filtered)">
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:Helvetica;
	panose-1:2 11 6 4 2 2 2 2 2 4;}
@font-face
	{font-family:Helvetica;
	panose-1:2 11 6 4 2 2 2 2 2 4;}
@font-face
	{font-family:Tahoma;
	panose-1:2 11 6 4 3 5 4 4 2 4;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin:0cm;
	margin-bottom:.0001pt;
	font-size:12.0pt;
	font-family:"Arial","sans-serif";}
p.MsoHeader, li.MsoHeader, div.MsoHeader
	{mso-style-link:"Cabeçalho Char";
	margin:0cm;
	margin-bottom:.0001pt;
	font-size:12.0pt;
	font-family:"Arial","sans-serif";}
p.MsoBodyTextIndent, li.MsoBodyTextIndent, div.MsoBodyTextIndent
	{mso-style-link:"Recuo de corpo de texto Char";
	margin:0cm;
	margin-bottom:.0001pt;
	text-align:justify;
	text-indent:70.9pt;
	font-size:14.0pt;
	font-family:"Arial","sans-serif";}
p.MsoAcetate, li.MsoAcetate, div.MsoAcetate
	{mso-style-link:"Texto de balão Char";
	margin:0cm;
	margin-bottom:.0001pt;
	font-size:8.0pt;
	font-family:"Tahoma","sans-serif";}
span.RecuodecorpodetextoChar
	{mso-style-name:"Recuo de corpo de texto Char";
	mso-style-link:"Recuo de corpo de texto";
	font-family:"Arial","sans-serif";}
span.CabealhoChar
	{mso-style-name:"Cabeçalho Char";
	mso-style-link:Cabeçalho;
	font-family:"Arial","sans-serif";}
span.TextodebaloChar
	{mso-style-name:"Texto de balão Char";
	mso-style-link:"Texto de balão";
	font-family:"Tahoma","sans-serif";}
.MsoChpDefault
	{font-family:"Calibri","sans-serif";}
.MsoPapDefault
	{margin-bottom:10.0pt;
	line-height:115%;}
@page WordSection1
	{size:595.3pt 841.9pt;
	margin:70.85pt 3.0cm 70.85pt 3.0cm;}
div.WordSection1
	{page:WordSection1;}
-->
</style>

</head>

<body lang=PT-BR>

<div class=WordSection1>

<p class=MsoNormal align=center style='text-align:center'><img width=339
height=146 id="Imagem 1"
src="declaracaocomparecimento_arquivos/image001.jpg"
alt="Descrição: Logo_IFRN"></p>

<p class=MsoHeader align=center style='margin-top:3.0pt;margin-right:4.8pt;
margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:center'><b>Câmpus
EaD</b></p>

<p class=MsoHeader align=center style='margin-top:3.0pt;margin-right:4.8pt;
margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:center'><span
style='font-size:11.0pt;text-transform:uppercase'>Diretoria acadêmica</span></p>

<p class=MsoHeader align=center style='margin-top:3.0pt;margin-right:4.8pt;
margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:center'><span
style='font-size:8.0pt;text-transform:uppercase'>Avenida Senador salgado filho,
1559, tirol, natal/rn</span></p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal align=center style='text-align:center'><b><span
style='font-size:18.0pt;letter-spacing:4.0pt'>DECLARAÇÃO</span></b></p>

<p class=MsoHeader>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<?php
require_once '../server/DAO.php';
        setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
        date_default_timezone_set('America/Sao_Paulo');
    $cpf='';
    if(isset($_GET['cpf']))
        $cpf=$_GET['cpf'];
    $sql="select * from ponto_profuncionario";
    $criteria='';

        $criteria="cpf='".$cpf."'";

    if(isset($_GET['datainicio']) && isset($_GET['datatermino']) && $_GET['datainicio']!='' && $_GET['datatermino']!='') {
        if($criteria!='')
            $criteria=$criteria." and ";
        $datainicio=  DateTime::createFromFormat('d-m-Y', $_GET['datainicio']);
        $datatermino= DateTime::createFromFormat('d-m-Y', $_GET['datatermino']);
        $criteria=$criteria . "ponto_profuncionario.data>='".  $datainicio->format('Y-m-d')."' and ponto_profuncionario.data<='".  $datatermino->format('Y-m-d')."'";
    }
    if($criteria!=''){
        $sql=$sql." where ".$criteria;
    }
    $sql=$sql." order by nome,data";
    
    $tabela=DAO::getConexao()->query($sql);
    $dados=$tabela->fetch_all(MYSQLI_BOTH);
    
    

?>

<p class=MsoBodyTextIndent style='margin-top:12.0pt;line-height:150%'><span
style='line-height:150%'>Declaramos para os fins que se fizerem necessários, e
por nos haver sido solicitado, que <?= $dados[0]['nome']; ?> inscrito(a) no CPF  <?= $dados[0]['CPF']?>
</span><span style='line-height:150%'>, aluno(a) do</span><span style='line-height:
150%'> curso <?=$dados[0]['departamento'] ?> desta Instituição de
Ensino no período letivo de 2013.2, compareceu ao polo de apoio presencial
situado no câmpus Parnamirim do IFRN no período especificado na tabela a
seguir:</span></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse'>
 <tr style='height:15.0pt'>
  <td width="24%" style='width:24.92%;border:solid #B8B8B8 1.0pt;background:
  #E3E3E3;padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:9.0pt;font-family:"Helvetica","sans-serif";color:black'>Data</span></b></p>
  </td>
  <td width="25%" style='width:25.08%;border:solid #B8B8B8 1.0pt;border-left:
  none;background:#E3E3E3;padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:9.0pt;font-family:"Helvetica","sans-serif";color:black'>Entrada</span></b></p>
  </td>
  <td width="24%" style='width:24.92%;border:solid #B8B8B8 1.0pt;border-left:
  none;background:#E3E3E3;padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:9.0pt;font-family:"Helvetica","sans-serif";color:black'>Saída</span></b></p>
  </td>
  <td width="25%" style='width:25.08%;border:solid #B8B8B8 1.0pt;border-left:
  none;background:#E3E3E3;padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:9.0pt;font-family:"Helvetica","sans-serif";color:black'>Permanência</span></b></p>
  </td>
 </tr>
 <?php
    foreach($dados as $linha){
        
    
 ?>
 <tr style='height:15.0pt'>
  <td width="24%" valign=bottom style='width:24.92%;border:solid #B8B8B8 1.0pt;
  border-top:none;background:white;padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:"Helvetica","sans-serif";color:black'><?=$linha['dataPonto'];?></span></p>
  </td>
  <td width="25%" valign=bottom style='width:25.08%;border-top:none;border-left:
  none;border-bottom:solid #B8B8B8 1.0pt;border-right:solid #B8B8B8 1.0pt;
  background:white;padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:"Helvetica","sans-serif";color:black'><?=$linha['Entrada_Ponto'];?></span></p>
  </td>
  <td width="24%" valign=bottom style='width:24.92%;border-top:none;border-left:
  none;border-bottom:solid #B8B8B8 1.0pt;border-right:solid #B8B8B8 1.0pt;
  background:white;padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:"Helvetica","sans-serif";color:black'><?=$linha['Saida_Ponto'];?></span></p>
  </td>
  <td width="25%" valign=bottom style='width:25.08%;border-top:none;border-left:
  none;border-bottom:solid #B8B8B8 1.0pt;border-right:solid #B8B8B8 1.0pt;
  background:white;padding:0cm 3.5pt 0cm 3.5pt;height:15.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:9.0pt;font-family:"Helvetica","sans-serif";color:black'><?=$linha['Permanencia'];?></span></p>
  </td>
 </tr>
 
 
    <?php }    ?>
</table>

<p class=MsoNormal align=center style='text-align:center;line-height:150%'><span
style='font-size:14.0pt;line-height:150%'>&nbsp;</span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:14.0pt'>&nbsp;</span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:14.0pt'>Parnamirim, </span><span
    style='font-size:14.0pt'><?php echo strftime("%d de %B de %Y") ?></span><span style='font-size:
14.0pt'>.</span></p>

<p class=MsoNormal><span style='font-size:14.0pt'>&nbsp;</span></p>

<p class=MsoNormal>                                                                       
</p>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<div align=center>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
 style='margin-left:6.4pt;border-collapse:collapse'>
 <tr>
  <td width=411 valign=top style='width:308.3pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'>&nbsp;</p>
  </td>
 </tr>
 <?php
    if (isset($_GET['idfuncionario'])){
    $sql="select nomefuncionario,matricula,cargo from funcionario where idfuncionario=".$_GET['idfuncionario'];
    $tabela=DAO::getConexao()->query($sql);
    $dados=$tabela->fetch_assoc();
    
 ?>
 <tr>
  <td width=411 valign=top style='width:308.3pt;border:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><span
  style='font-size:11.0pt'><?=$dados['nomefuncionario'];?><br>
  Matrícula SIAPE <?=$dados['matricula'];?></span></b></p>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt'><?=$dados['cargo'];?></span></p>
  </td>
 </tr>
    <?php }?>
</table>

</div>

<p class=MsoNormal>&nbsp;</p>

</div>

</body>

</html>
