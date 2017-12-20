<?php

include ("../conexao/conexao.php");


$sql = "SELECT * FROM buscaCodigo";
mysql_query('SET CHARACTER SET utf8');
$query = mysql_query($sql, $conexao);


$arr = array();

while ($linha = mysql_fetch_array($query)) {

    $arr[] = array(
                'codigo' => $linha['Codigo'],
                'produto' => $linha['Produto'],
                'marca' => $linha['Marca']
    );
}

$o_json = json_encode($arr);
echo $o_json;

