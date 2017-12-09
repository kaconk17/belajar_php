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
<div>
    <h1></h1>
    <form>
        <label>Departemen</label>
        <select>
            <option value="foundry">Foundry</option>
            <option value="machining">Machining</option>
            <option value="grinding">Grinding</option>
            <option value="technical">Technical</option>
            <option value="kensa">Kensha</option>
        </select>
        <input type="submit" value= "Search">
    </form>
</div>
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
$query = "SELECT item_code, item, spesifikasi, qty, uom, class FROM tb_out WHERE remark IS NULL";

$hasil = sqlsrv_query ($conn, $query);
//if($hasil){
   // echo "berhasil";
//}
//else{
   // echo "gagal";
//}
while ($data = sqlsrv_fetch_array($hasil)){
   //foreach ($hasil->result() as $row) {
       # code...
   
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
    //sqlsrv_close();
}
?>