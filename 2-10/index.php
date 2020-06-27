<?php
// $base1 = 10;
// $height1 = 5;
// $area1 = $base1 * $height1 / 2;

// $base2 =  15;
// $height2 = 8;
// $area2 = $base2 * $height2 /2;

// $base3 =  8;
// $height3 =  6;
// $area3 = $base3 * $height3 / 2;

// echo $area1;
// echo "<br>";
// echo $area2;
// echo "<br>";
// echo $area3;

// function getTriangleArea($base, $height){
//   $area = $base * $height / 2;
//   print "三角形の面積は" . $area . "だよ。";
// }

// getTriangleArea(10, 5);
// echo "<br>";
// getTriangleArea(15, 8);
// echo "<br>";
// getTriangleArea(8, 6);
// echo "<br>";
// $myname = "ruby";
// function sayHi($name = "goto"){
//   $myname = "php";
//   return "Hi!" .$name. "from" .$myname;
// }
// echo sayHi();
// echo $myname;

function getTriangleArea($base, $width, $height){
  $area = $base * $width * $height;
  print "直方体の体積は" . $area . "だよ";
}
getTriangleArea(5, 10, 8);

echo "<br>";
echo "用語集";
echo "<br>";
echo "<p>ハッシュ化:元のデータから計算手順にしたがってハッシュ値と呼ばれる規則性のない固定値の値を求め、その値によって元のデータに置き換えること。パスワードの保管などでよく用いられる手法</p>";
echo "<br>";
echo "<p>総合テスト:ソフトウェア及びシステムの検証手法の一つで構築したシステムが全体で予定通りの機能を満たしているか、また機能や性能が仕様書通りに構築できているかを検証すること。単体テスト、結合テストの実施後に本番と殆ど同じ環境でテストする</p>";
echo "<br>";
echo "<p>デバック:プログラムに潜む欠陥を探し出して取り除くこと</p>";
?>