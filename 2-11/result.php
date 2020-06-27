<?php
$my_name = $_POST["name"];
$password = $_POST["password"];
$mail = $_POST["mail"];
var_dump($_POST);
?>
<p>私の名前は、<?php echo $my_name; ?></p>
<p>私のアドレスは、<?php echo $mail; ?></p>
<p>私のパスワードは、<?php echo $password; ?></p>