<?php

include ("../conexao/conexao.php");

$nome = $_GET['nome'];


$sql = "SELECT id_usuario, nome FROM Usuario where nome like'%".$nome."%'";
mysql_query('SET CHARACTER SET utf8');
$query = mysql_query($sql, $conexao);


$arr = array();

while ($linha = mysql_fetch_array($query)) {

    $arr[] = array(
                'codigo' => $linha['id_usuario'],
                'nome' => $linha['nome']
               
    );
}

$o_json = json_encode($arr);
echo $o_json;

