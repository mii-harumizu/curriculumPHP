<?php
// $age = 22;

// if ($age >= 20) {
//   echo "お酒が飲めるぞ！";
// }else {
//   echo "お酒は二十歳になってから！";
// }
// echo "<br>";
// $is_student = true;
// if ($is_student == true) {
//   echo "あなたは学生です";
// }else {
//   "あなたは学生ではありません";
// }
// $age = 27;
// $is_student = true;
// if ($age < 25 && $is_student) {
//   echo "学割パックが使えるよ";
// } elseif ($age < 30) {
//   echo "若者応援割引が使えるよ";
// }

// $blood = "A";
// if ($blood == "A") {
//   echo "A型です";
// } elseif ($blood == "B") {
//   echo "B型です";
// } elseif ($blood == "AB") {
//   echo "AB型です";
// } elseif ($blood == "O"){
//   echo "O型です";
// } else {
//   echo "A/B/AB/Oから選択してください！";
// }

// $blood = "A";
// switch ($blood) {
//   case "A":
//     print "A型です";
//   break;
//   case "B":
//     print "B型です";
//   break;
//   case "AB":
//     print "AB型です";
//   break;
//   case "O":
//     print "O型です";
//   break; 
//   default:
//     echo "A/B/AB/Oから選択してください";
//     break;
// }

// $name =  "";
// if ($name != ""){
//     echo "名前を受付けました";
// } else {
//   echo "名前を入力してください";
// }

// echo ($name != "") ? "名前を受け付けました" : "名前を入力してください";  

$name = "taro";
$pass = "pass";

if ($name === "taro" && $pass === "pass"){
  echo "ログイン成功です";
}elseif ($name === "taro" && $pass !== "pass"){
  echo "パスワードが違います";
}elseif ($name !== "taro" && $pass === "pass"){
  echo "名前が違います";
}elseif($name !== "taro" && $pass !== "pass"){
  echo "入力情報が間違っています";
}

echo "<br>";
echo "<h1>用語集</h1>";
echo "<br>";
echo "<p><strong>IDE</strong>:エディタやコンパイラ、リンカ、デバッカなどのソフトウェア開発で利用されるこれらのソフトウェアを支援ツールなどでまとめて統一的に扱えるようにした開発環境</p>";
echo "<br>";
echo "<p><strong>JOIN</strong>:データベースにおいて複数のテーブルを統合すること</p>";
echo "<br>";
echo "<p><strong>MVCモデル</strong>:複数の装置やプログラムなどが同じ資源を同時に利用しようとして競合状態になることを意味する</p>";



?>