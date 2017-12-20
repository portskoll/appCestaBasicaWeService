<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
$conexao = mysql_connect('localhost','u174943423_ifspb','ports1');


if ($db = mysql_select_db('u174943423_ifspb',$conexao)) {

}
else {
echo 'erro';
}

?>