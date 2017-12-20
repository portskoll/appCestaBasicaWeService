<?php 
include ("../conexao/conexao.php");


$vUpdate=0;
$chave = $_POST["chave"];
$v_email = $_POST["email_pront"];



if ($chave == "30be91") {
	$sql1 = "SELECT DISTINCT * FROM Usuario WHERE email_prontuario = '$v_email'";
	$query1 = mysql_query($sql1,$conexao);

		
		if($linha = mysql_fetch_array($query1)){
			echo $linha['id_usuario'];
	
		}else {
			echo "000";
		}

	}else {
		
	echo "ERRO_CHAVE";
}

?>
