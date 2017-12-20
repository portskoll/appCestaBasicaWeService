<?php 
include ("../conexao/conexao.php");


$vUpdate=0;
$chave = $_POST["chave"];
$v_id = $_POST["codProduto"];
$v_nomeProduto = $_POST["produto"];
$v_marcaProduto = $_POST["marca"];
$v_tipoProduto = $_POST["tipo"];
$v_cestaProduto = $_POST["cesta"];
$v_urlFotoProduto = $_POST["foto"];
$v_codUsuario = $_POST["codUser"];




if ($chave == "30be91") {
	$sql1 = "SELECT DISTINCT * FROM Nprodutos WHERE codProduto='".$_POST["codProduto"]."'";
	$query1 = mysql_query($sql1,$conexao);


	if($mostrar1 = mysql_fetch_array($query1)){
	$vUpdate=1;
	}

	if ($vUpdate==1){
	
		
		echo "VALOR_JA_EXISTE";
		
	
	}else{
		
	
            
            
            $querya = "INSERT INTO Nprodutos (codProduto,cod_listaColeta,marca_nome,urlFotoProduto,codUsuario) VALUES ('$v_id',$v_nomeProduto,'$v_marcaProduto','$v_urlFotoProduto','$v_codUsuario')";
		mysql_query($querya, $conexao) or die("Problemas no Insert $querya");
	
		$sql3 = "SELECT DISTINCT * FROM Nprodutos WHERE codProduto = '$v_id'";
		$query3 = mysql_query($sql3,$conexao);
	
		if($mostrar3 = mysql_fetch_array($query3)){
                   
                
                    $qMarca = "SELECT  * FROM Marca WHERE marca = '$v_marcaProduto'";//verifica a marca se não tiver salva
                    $sqlMarca = mysql_query($qMarca,$conexao);
                
                    if(mysql_fetch_array($sqlMarca)){
                        
                        
                    
                    }else {
                        $queryaX = "INSERT INTO Marca VALUES(0,'$v_marcaProduto')";
                        mysql_query($queryaX, $conexao) or die("Problemas no InsertMarca $queryaX");
                    }
                    
                     echo "CADASTRADO_COM_SUCESSO";
		}
		
	}
	
}else {
	echo "ERRO_CHAVE";
}

?>
