<?php
$num = 0;

// 繰り返す回数が決まっていないとき
// while  ($num < 10) {
//   echo $num;
//   $num++;
// }
// 最低でも一回の処理がされる
// do {
//   echo $num;
//   $num++;
// }while ($num < 0);
// 決まった回数を繰り返す
// for($i=0;$i<10;$i++){
//   echo $num;
// }
// while ($num < 10) {
//   echo $num;
//   $num++;
//   if ($num === 9) {
//   break;
//   }
// } 

for ($i=0;$i<=100;$i++){
  echo $i. "<br>";
}


echo "<br>";
echo "<h1>用語集</h1>";
echo "<br>";
echo "<p><strong>サブクエリ</strong>:クエリの中に含まれる別の問い合わせ文のこと</p>";
echo "<br>";
echo "<p><strong>Bootstrap</strong>:コンピューターの電源を投入してからOSが操作可能な状態になるまでに自動的に行われる一連の処理/CSSのフレームワークTWitter社が開発した</p>";
echo "<br>";
echo "<p><strong>ライブラリフレームワーク</strong>:誰かが書いた再利用可能なコードの集まり。ライブラリはアプリケーションのフローをこちらで管理するが、フレームワークはフローの管理はフレームワークで行われており、コードで記入できる箇所が用意されている</p>";
?>