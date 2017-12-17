
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
        
        
    </form>
    <table border ='1' width = '800'>
<tr>
<th>Item Code</th>
<th>Item</th>
<th>Spesifikasi</th>
<th>Qty out</th>
<th>Uom</th>
<th>Class</th>
</tr>

<form action="tabel.php" method="post">
        <input type="text" id="cari">
        <input type="submit" name="btn" value= "Search">
        
</form>

<?php
 $serverName = "KACONK-LAPTOP\SQLEXPRESS";
 $connectionInfo = array("Database"=> "pass" , "UID" => "sa", "PWD"=> "NPMI" );
 $conn = sqlsrv_connect ($serverName , $connectionInfo);

if (isset($_POST['btn'])) {
    $nilai = $_POST['cari'];
    echo $nilai;
    $query = "SELECT item_code, item, spesifikasi, qty, uom, class FROM tb_out WHERE remark IS NULL AND item_code LIKE '%".$nilai."%'";
    $result= sqlsrv_query ($conn, $query);
} else {
    $query = "SELECT item_code, item, spesifikasi, qty, uom, class FROM tb_out WHERE remark IS NULL";
    $result= sqlsrv_query ($conn, $query);
}






while ($data = sqlsrv_fetch_array($result)){
  
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
<script src = "jquery.js"></script>
   
</div>

