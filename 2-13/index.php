<?php
$x = 6.6;
echo ceil($x);
echo "<br>";
$x = 6.6;
echo floor($x);
echo "<br>";
$x = 9.6;
echo round($x);
echo "<br>";
?>

<?php
echo pi();
echo "<br>";
function circleArea($r){
  $circle_Area = $r * $r * pi();
  echo $circle_Area;
}

circleArea(2);
echo "<br>";
?>

<?php
echo mt_rand(1, 10000);
echo "<br>";
$str = "hogehogehoge";
echo strlen($str);
echo "<br>";
$str = "abcdefg";
echo strpos($str, "g");
echo "<br>";
$str = "abcdefg";
echo substr($str, 0, 3);
echo "<br>";
$str = "abc de fgh i";
echo str_replace(" ", "", $str);
echo "<br>";
$str = "あいうえお";
echo mb_strlen($str);
// echo strlen($str);
echo "<br>";
$name = "土屋さん";
$limit_number = 40;
$price = 50000;
$product = "パソコン";
// echo $name."の残り時間はあと".$limit_number."です";
echo "<br>";
// printf("%sの残り時間はあと%dです。",$name, $limit_number);
printf("%sあと%d分以内の購入なら%sの値段は%dです" ,$name, $limit_number, $product, $price);
echo "<br>";
$limit_hour = 18;
$limit_minute = 10;

$limit_time = sprintf("残り%02d時間%02d分", $limit_hour , $limit_minute);
// sprintfの場合はechoなどで出力が必要
echo $limit_time;
echo "<br>";
?>


<?php

$a = 9.1;
echo ceil($a);
echo "<br>";
$b = 4.1;
echo floor($b);
echo "<br>";
$c = 9.5;
echo round($c);
echo "<br>";
echo (ceil($a) + floor($b)) * round($c);
echo "<br>";
function circleVolume($r , $h){
  $circle_volume = $r * $r * pi() * $h;
  echo $circle_volume;
};
circleVolume(5 , 9);
echo "<br>";
echo mt_rand(50, 55);
echo "<br>";
$lang = "kingkong";
echo strlen($lang);
echo "<br>";
echo strpos($lang,"o");
echo "<br>";
echo substr($lang, 0, 2);
echo"<br>";
echo str_replace("king", "small", $lang);
echo "<br>";

$my_product = "製品名";
$my_price = 4000;
printf("%sは%d円で販売します", $my_product,$my_price);
echo "<br>";
$product = "製品名";
$price = 1000;
$time = 10;

$limit = sprintf("%sは%d時までは%d円で販売します", $product , $time, $price);
echo $limit;
echo "<br>";
?>

<?php
echo "<br>";
echo "用語集";
echo "<br>";
echo "PostgreSQL・Oracle SQL:データベースで処理を行う言語。データ型に違いがある";
echo "<br>";
echo "TortoiseGit・TortoiseSVN:TortoiseGitは分散型バージョン管理システムである Git のクライアントで、TortoiseSVNをもとに、MicrosoftWindowsシェル拡張として実装。GNU General Public Licenseのもとに配布されているフリーソフトウェア。TortoiseSVNはSubversionのための同様のツール";
echo "<br>";
echo "外部設計・内部設計:外部設計は主にユーザーから見えるインターフェース部分の仕様の設計。内部設計は外部設計を基にシステム内部の動作や機能、物理データなどのユーザーから見えにくい部分の設計。";

?>
