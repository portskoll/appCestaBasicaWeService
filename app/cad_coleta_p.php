<?php 
include ("../conexao/conexao.php");

$chave = $_GET["chave"];
$v_id = $_GET["codProduto"];
$v_ver_cod = $_GET["verCod"];
$v_data = $_GET["data"];
$v_valor = $_GET["valor"];
$v_cod_Smercado = $_GET["codSmercado"];
$v_cod_Coleta = $_GET["codColeta"];
$v_codUsuario = $_GET["codUser"];

if ($chave == "30be91") {
	
      $sql3 = "SELECT DISTINCT * FROM Ncoletas WHERE cod_produto = $v_id and cod_coleta = $v_cod_Coleta and cod_usuario = $v_codUsuario and cod_supermercado = $v_cod_Smercado" ;
		$query3 = mysql_query($sql3,$conexao);
	
		if($mostrar3 = mysql_fetch_array($query3)){
                    $arr[] = array(
                'resposta' => "existe");
                    
		}else {
                    $querya = "INSERT INTO Ncoletas (cod_produto,ver_cod,data,cod_supermercado,cod_coleta,valor,cod_usuario) VALUES ('$v_id',$v_ver_cod,'$v_data',$v_cod_Smercado,$v_cod_Coleta,$v_valor,$v_codUsuario)";
                    $resp = mysql_query($querya, $conexao) or die("-1");
                    $arr[] = array('resposta' => $resp);
                    
                                    }
    	
}else {
    
    $arr[] = array('reposta' => "erroChave");
}

$o_json = json_encode($arr);
echo $o_json;



	