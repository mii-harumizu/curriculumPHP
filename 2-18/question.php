<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  
<div class="main">
<?php
//POST送信で送られてきた名前を受け取って変数を作成
$name = $_POST["my_name"];
//①画像を参考に問題文の選択肢の配列を作成してください。
  $port = [80,22,20,21];
  $lang = ["PHP","pytion","JAVA","HTML"];
  $SQL = ["join","socket","insert","update"];


  //② ①で作成した、配列から正解の選択肢の変数を作成してください
  $port_ans = $port[0];
  $lang_ans = $lang[3];
  $SQL_ans = $SQL[1];

  ?>
  <p>お疲れ様です<!--POST通信で送られてきた名前を出力--><?php echo $name; ?>さん</p>
  <!--フォームの作成 通信はPOST通信で-->
  <h2>①HTTPプロトコルで使用されるポート番号は何番？</h2>
  <!--③ 問題のradioボタンを「foreach」を使って作成する-->
  <form method="POST" action="answer.php">
    <?php foreach($port as $value){?>
      <span class="que" te:col="4">
      <input type ="radio" name ="que1" value ="<?php echo $value ?>">
      <?php print $value ?>
      </span>
      <?php }; ?>
      <h2>②動的Webページを作成するための言語は？</h2>
      <!--③ 問題のradioボタンを「foreach」を使って作成する-->
      <?php foreach($lang as $value){?>
      <span class="que" te:col="4">
      <input type ="radio" name ="que2" value ="<?php echo $value ?>">
      <?php print $value ?>
      </span>
      <?php }; ?>
      <h2>③MySQLで情報を取得するためのコマンドは？</h2>
      <?php foreach($SQL as $value){?>
      <span class="que" te:col="4">
      <input type ="radio" name ="que3" value ="<?php echo $value ?>">
      <?php print $value ?>
      </span>
      <?php }; ?>
      
      <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
      <input type="hidden" name="ans1" value="<?php echo $port_ans?>">
      <input type="hidden" name="ans2" value="<?php echo $lang_ans?>">
      <input type="hidden" name="ans3" value="<?php echo $SQL_ans?>">
      <input type="hidden" name="name" value="<?php echo $name?>">
      <br>
      <input type="submit" value="回答する" class="submit">
      
    </form>
</div>
</body>
</html>