<?php

// $countres = ["America" , "japan" ,  "china" , "korea"];

// echo $countres[0];
// echo $countres[1];
// echo $countres[2];
// echo $countres[3];
// echo "<br>";
// var_dump($countres);
// echo "<br>";
// print_r($countres);
// echo "<br>";

// $fruits = ["apple" => "りんご", "orange" => "みかん", "grape" => "ぶどう"];
// echo $fruits["apple"];
// echo "<br>";
// echo $fruits["orange"];
// echo "<br>";
// echo $fruits["grape"];
// echo "<br>";
// var_dump($fruits);
// echo "<br>";
// print_r($fruits);
// echo "<br>";

$colors = [
  "red"   => "赤", 
  "blue"  => "青", 
  "green" => "緑",
];
var_dump($colors);
echo "<br>";

$colors = [
  "red"    => "赤", 
  "blue"   => "青", 
  "green"  => "緑",
  "yellow" => "黄色",
];
var_dump($colors);
echo "<br>";

echo "<br>";
echo "<h1>用語集</h1>";
echo "<br>";
echo "<p><strong>プルリクエスト</strong>:コードの変更をレビュワーに通知し、マージを依頼する機能。</p>";
echo "<br>";
echo "<p><strong>Git Flow</strong>:Gitの機能であるブランチを活用した開発手法。(ツールの名前でもある)master, release, develop, feature, hot-fixの5つのブランチに使い分けて開発を進めていく</p>";
echo "<br>";
echo "<p><strong>CRON</strong>:UNIX系OSで標準的に利用される常駐プログラムの一種で利用者の設定したスケジュールにしたがって指定されたプログラムを定期的に起動するもの</p>";

?>