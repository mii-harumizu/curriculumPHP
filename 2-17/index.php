<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<p>-サイコロ-</p>
<?php
$measure = 40;
$count = 0;
while($measure >= 0){
  $dice = mt_rand(1, 6);
  // $dice = 5;
  $count++;
  $measure -= $dice;
    echo $count. "回目＝". $dice. "<br>";
  if($measure === 0){
  break;
  }
  }
  echo $count . "回目でゴール" . "<br>";
  ?>

  <p>-時間別挨拶-</p>

<?php

$timestanp = strtotime("2010/1/1 10:00:00");
// echo $timestanp;

// $time = date("H", time());//現在の時間で
$time = date("H", $timestanp);//指定の時間で


if($time <= 11){
  echo "今は" . $time . "時台です" . "<br>";
  echo "おはようございます";
}elseif($time === 12){
  echo "今は" . $time . "時台です" . "<br>";
  echo "こんにちは";  
}elseif($time >= 13){
  echo "今は" . $time . "時台です" . "<br>";
  echo "こんばんは";  
}

?>

</body>
</html>