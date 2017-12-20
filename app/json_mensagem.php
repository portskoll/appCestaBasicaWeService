<?php

include ("../conexao/conexao.php");

$usuario = $_POST['codUser'];


$sql = "SELECT * 
FROM  `MenColeta` 
WHERE codUsuario =$usuario
AND statusColeta =1";


mysql_query('SET CHARACTER SET utf8');
$query = mysql_query($sql, $conexao);




$arr = array();
$arr2 =array();



while ($linha = mysql_fetch_array($query)) {

    
    $arr[] = array(
        'mensagem' => $linha['mensagem'],
        'endereco' => $linha['endereco'],
        'urlFoto' => $linha['foto'],
        'nomeSuper' => $linha['nomeSuper'],
        'nomeColeta' => $linha['nomeColeta'],
        'nomeCidade' => $linha['nomeCidade'],
        'dataInicial' => $linha['dataInicial'],
        'dataFinal' => $linha['dataFinal'],
        'codSuper' => $linha['codSupermercado'],
        'codColeta' => $linha['codColeta']
        
    );
    
    
}

if (!empty($arr)) {
  $arr2 = $arr;
} else {
   $arr2[] = array(
        'mensagem' => 'Você não possui coletas no momento, qualquer dúvida procure pelo seu responsavel...',
        'endereco' => '---',
        'urlFoto' => '---',
        'nomeSuper' => '---',
        'nomeColeta' => '---',
        'nomeCidade' => '---',
        'dataInicial' => '---',
        'dataFinal' => '---',
        'codSuper' => '---',
        'codColeta' => '-1'
        
    );
}


$o_json = json_encode($arr2);


echo '{
  "carros": {
    "carro": ' . $o_json . '}
}';
