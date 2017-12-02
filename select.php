<?php
$serverName = "KACONK-LAPTOP\SQLEXPRESS";
$connectionInfo = array("Database"=> "pass" , "UID" => "sa", "PWD"=> "NPMI" );
$conn = sqlsrv_connect ($serverName , $connectionInfo);
$query = "SELECT * FROM tb_out WHERE remark IS NULL";

$hasil = sqlsrv_query ($conn, $query);
$grouped = array();

while ($row = sqlsrv_fetch_array($hasil) ){  // or however you get your data
    if (isset($grouped[$row['item_code']])) {
        $grouped[$row['item_code']]['count']++;
    } else {
        $grouped[$row['item_code']] = $row + array('count' => 1);
    }
}
?>