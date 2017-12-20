<?php

include ("../conexao/conexao.php");

$usuario = $_GET['codUser'];


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
        
        
        
        'nomeSuper' => $linha['nomeSuper'],
        'nomeColeta' => $linha['nomeColeta'],
        'nomeCidade' => $linha['nomeCidade'],
        'codSuper' => $linha['codSupermercado'],
        'codColeta' => $linha['codColeta']
        
    );
    
    
}

if (!empty($arr)) {
  $arr2 = $arr;
} else {
   $arr2[] = array(
        
        'nomeSuper' => '---',
        'nomeColeta' => '---',
        'nomeCidade' => '---',
        'codSuper' => '---',
        'codColeta' => '-1'
        
    );
}


$o_json = json_encode($arr2);


echo $o_json;
