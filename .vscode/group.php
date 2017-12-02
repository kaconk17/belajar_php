<?php 
$serverName = "KACONK-LAPTOP\SQLEXPRESS";
$connectionInfo = array("Database"=> "pass" , "UID" => "sa", "PWD"=> "NPMI" );
$conn = sqlsrv_connect ($serverName , $connectionInfo);
if ($conn){
    echo "Koneksi OK";
}
else {
    echo "Koneksi NG";
}
$query = "SELECT item_code FROM tb_out WHERE remark IS NULL GROUP BY item_code";
$hasil = sqlsrv_query ($conn, $query);
while ($data = sqlsrv_fetch_array($hasil)){
    echo  '<a href="item.php?item='.$data['item'].'">'.$data['item'].'</a><br/>';
}
?>