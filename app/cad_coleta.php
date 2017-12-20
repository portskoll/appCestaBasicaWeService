<?php 
include ("../conexao/conexao.php");

$chave = $_POST["chave"];
$v_id = $_POST["codProduto"];
$v_ver_cod = $_POST["verCod"];
$v_data = $_POST["data"];
$v_valor = $_POST["valor"];
$v_cod_Smercado = $_POST["codSmercado"];
$v_cod_Coleta = $_POST["codColeta"];
$v_codUsuario = $_POST["codUser"];

if ($chave == "30be91") {
	
		$querya = "INSERT INTO Ncoletas (cod_produto,ver_cod,data,cod_supermercado,cod_coleta,valor,cod_usuario) VALUES ('$v_id',$v_ver_cod,'$v_data',$v_cod_Smercado,$v_cod_Coleta,$v_valor,$v_codUsuario)";
		mysql_query($querya, $conexao) or die("Problemas no Insert $querya");
	
		$sql3 = "SELECT DISTINCT * FROM Ncoletas WHERE ver_cod = '$v_ver_cod'";
		$query3 = mysql_query($sql3,$conexao);
	
		if($mostrar3 = mysql_fetch_array($query3)){
		echo "OK";
		}
	}else {
		echo "ERRO_CHAVE";
}

?>


	