<?php
$serverName = "KACONK-LAPTOP\SQLEXPRESS";
$connectionInfo = array("Database"=> "pass" , "UID" => "sa", "PWD"=> "NPMI" );
$conn = sqlsrv_connect ($serverName , $connectionInfo);

?>
<html>
<head>
<title>Tabel Out</title>
<body>
    
</body>
</head>

</html>
<center>
<font name="Arial" size="3" color="red">DATA TRANSAKSI</font>
<br>
<br>

<table border ='1' width = '800'>
<tr>
<th>Item Code</th>
<th>Item</th>
<th>Spesifikasi</th>
<th>Qty out</th>
<th>Uom</th>
<th>Class</th>
</tr>

<?php
//$i=0;
$query = "SELECT item_code, item, spesifikasi, qty, uom, class FROM tb_out";

$hasil = sqlsrv_query ($conn, $query);
if($hasil){
    echo "berhasil";
}
else{
    echo "gagal";
}
while ($data = sqlsrv_fetch_array($hasil)){
   // $i++;
    echo "
    <tr>
   
    <td>".$data['item_code']."</td>
    <td>".$data ['item']."</td>
    <td>".$data['spesifikasi']."</td>
    <td>".$data['qty']."</td>
    <td>".$data ['uom']."</td>
<td>".$data['class']."</td>
    </tr>
    ";
}
?>