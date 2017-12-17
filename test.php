<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>test jquery</title>
</head>
<body>
    <h1>Welcome</h1>
<form >
    <input type="text" id ="cari">
    <input type="submit" name = "btn" value = "Klick">
</form>
<?php
$ini= "awal";
echo $ini;
?>
<script src = "jquery.js"></script>
<script>
    $(document).ready(function () {
        $('form').submit(function () {
          var tulisan =  $('#cari').val();
          $ini.php(tulisan);
          event.preventDefault();
        });
    });
</script>
</body>
</html>




