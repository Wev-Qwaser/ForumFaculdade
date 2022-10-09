<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css" type="text/css">
</head>
<body>

<a id="casa" href="index.php">Fazer outra pesquisa</a>
<br>
<br>

</body>
</html>

<?php
$xml = simplexml_load_file("signos.xml") or die ("ERRO: não consegui abrir o XML");
//$objJsonDocument com essa tag converte o arquivo xml em um json
$objJsonDocument = json_encode($xml);
//$arrOutput aqui convertemos o json para array
$arrOutput = json_decode($objJsonDocument, TRUE);
// aqui pegamos a data do formulario
$data = $_POST['dataN'];
$nome = $_POST['nome'];
// transforma a data em um objeto data do php
$dataFormatada = DateTime::createFromFormat('Y-m-d', $data);
// pega o ano da data do formulario, para comparações
$ano = $dataFormatada->format('Y');
// nessa varável é definido o retorno
$seuSigno = null;

// percorremos todos os signos do arquivo xml
    foreach ($arrOutput['signos']['signo'] as  $signo){
        //concatena o ano com a data que vem do xml
        $dtInicioSigno = $signo ['dataInicio'] . '/' . $ano;
        //concatena o ano com a data que vem do xml
        $dtFinalSigno = $signo ['dataFim'] . '/' . $ano;
        //cria um objeto data para cada signo
        $dtInicioSigno = DateTime::createFromFormat('d/m/Y',  $dtInicioSigno);
        $dtFinalSigno = DateTime::createFromFormat('d/m/Y', $dtFinalSigno);
        //faz a comparação pra ver se a data do form pertence ao intervalo da data do signo dentro do if
        if (($dataFormatada >= $dtInicioSigno) && ($dataFormatada <= $dtFinalSigno)){
            $seuSigno = $signo;
            break;
        } 
    }  
    
 echo 'Parabéns ' . $nome . ' seu signo é ' . $seuSigno['signoNome'];
 echo '<br>';
 echo 'Pessoas do seu signo são ' . $seuSigno['descricao'];
    //Weverson Silva de Lima
?>
