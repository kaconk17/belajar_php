<?php
$serverName = "KACONK-LAPTOP\SQLEXPRESS";
$connectionInfo = array("Database"=> "pass" , "UID" => "sa", "PWD"=> "NPMI" );
$conn = sqlsrv_connect ($serverName , $connectionInfo);
$query = "SELECT * FROM tb_out WHERE remark IS NULL";

$hasil = sqlsrv_query ($conn, $query);
//$hasil = $conn ->query("SELECT * FROM tb_out");

while ($row = $hasil->fetch()) {
    echo $row ['item'].'<br>';
}


?>