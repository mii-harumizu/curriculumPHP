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
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$name = $_POST["name"];
$que1 = $_POST["que1"];
$que2 = $_POST["que2"];
$que3 = $_POST["que3"];
$ans1 = $_POST["ans1"];
$ans2 = $_POST["ans2"];
$ans3 = $_POST["ans3"];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function getAnswer($que, $ans){
  $correct_answer = $que === $ans;
  if($que === $ans){
    echo "正解！";
  }else {
    echo "残念・・・";
  }
}


?>
<p><!--POST通信で送られてきた名前を表示--><?php echo $name ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php getAnswer($que1, $ans1) ?><br>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php getAnswer($que2, $ans2) ?><br>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php getAnswer($que3, $ans3) ?><br>
</div>
</body>
</html>