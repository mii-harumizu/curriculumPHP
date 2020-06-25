<?php
// $fruits = [
//   "りんご",
//   "みかん",
//   "もも",
// ];

// foreach ($fruits as $value) {
//   echo $value;
// }

$fruits = [
  "apple"  =>"りんご",
  "orange" => "みかん",
  "peach"  => "もも",
];

foreach ($fruits as $key => $value){
  echo $key;
  echo "といったら";
  echo $value;
  echo "<br>";
};

echo "<br>";
echo "<h1>用語集</h1>";
echo "<br>";
echo "<p><strong>トランザクション</strong>:関連する複数の処理や操作を一つの処理単位にまとめて管理する方式。複数の処理を連結した処理単位の事</p>";
echo "<br>";
echo "<p><strong>排他ロック</strong>:データベースシステム等で記憶領域への同時アクセスを制限するロック機構の一つで他の実行主体によるアクセスを完全に禁止するもの</p>";
echo "<br>";
echo "<p><strong>チューニング</strong>:システムやプログラムなどの改良し、パフォーマンスの向上を図ること</p>";
