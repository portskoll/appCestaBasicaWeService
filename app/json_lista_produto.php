<?php 
include ("../conexao/conexao.php");


$sql = "SELECT * FROM Nprodutos ";
mysql_query('SET CHARACTER SET utf8');
$query = mysql_query($sql,$conexao);


$arr = array();

while($linha = mysql_fetch_array($query)) {

 $arr[] =
       array(
          'codProduto'       => $linha['codProduto'],
		  'urlFotoProduto'    => $linha['urlFotoProduto'],
		  'cod_listaColeta'      => $linha['cod_listaColeta'],
          'marca_nome' 		=> $linha['marca_nome']
         
        );
}

$o_json = json_encode($arr);


echo '{
  "carros": {
    "carro": '.$o_json.'}
}';

?>
