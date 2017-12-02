<?php
$serverName = "KACONK-LAPTOP\SQLEXPRESS";
$connectionInfo = array("Database"=> "pass" , "UID" => "sa", "PWD"=> "NPMI" );
$conn = sqlsrv_connect ($serverName , $connectionInfo);
$m = sqlsrv_query("select * from tb_out where item_code='$_GET[item]'");
while($data = sqlsrv_fetch_array($m)){
echo $data['item'].'</br/>';
}
?>