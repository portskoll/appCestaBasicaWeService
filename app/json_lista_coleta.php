<?php 
include ("../conexao/conexao.php");


$sql = "SELECT * FROM listaColeta ORDER BY produto ASC";
mysql_query('SET CHARACTER SET utf8');
$query = mysql_query($sql,$conexao);


$arr = array();

while($linha = mysql_fetch_array($query)) {

 $arr[] =
       array(
          'id'       => $linha['id'],
		  'produto'    => $linha['produto'],
		  'tipo'       => $linha['tipo'],
		  'cesta'      => $linha['cesta'],
          'qtde' 		=> $linha['qtde']
         
        );
}

$o_json = json_encode($arr);


echo '{
  "carros": {
    "carro": '.$o_json.'}
}';

?>
