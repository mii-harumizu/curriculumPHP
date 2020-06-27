<?php
$name =$_POST["name"];
$product =$_POST["product"];
$number =$_POST["number"];
var_dump($_POST)
?>

<p>お名前：<?php echo $name; ?></p>
<p>ご希望商品<?php echo $product; ?></p>
<p>個数：<?php echo $number; ?></p>
