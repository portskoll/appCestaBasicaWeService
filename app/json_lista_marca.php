<?php 
include ("../conexao/conexao.php");


$sql = "SELECT * FROM Marca ORDER BY marca ASC";
mysql_query('SET CHARACTER SET utf8');
$query = mysql_query($sql,$conexao);


$arr = array();

while($linha = mysql_fetch_array($query)) {

 $arr[] =
       array(
          'cod_marca' 	=> $linha['cod_marca'],
		  'marca'    	=> $linha['marca']
		  		 
         
        );
}

$o_json = json_encode($arr);


echo '{
  "carros": {
    "carro": '.$o_json.'}
}';

?>
