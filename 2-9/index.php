<?php
// for($i = 1; $i <= 100; $i++){
//   if(($i % 3) == 0 ){
//     echo "Fizz !<br>";
//   // break;
//   } elseif(($i % 5) == 0){
//     echo "Buzz!<br>";
//   // break;
//   } elseif (($i % 3) == 0 && ($i % 5) == 0 ){
//     echo "FizzBuzz!<br>";
//   // break;
//   }else{
//     echo $i . "<br>";
//   // break;
//     }
// }

for ($i = 1; $i <= 100; $i++){
  if (($i % 3) == 0 && ($i % 5) == 0 ) {
  echo "FizzBuzz!<br>";
  }elseif(($i % 3) == 0) {
  echo "Fizz!<br>";
}elseif(($i % 5) == 0) {
  echo "Buzz!<br>";
}else{
  echo $i . "<br>";
}
}

echo "<br>";
echo "<h1>用語集</h1>";
echo "<br>";
echo "<p>パフォーマンス:ソフトウェアやシステムなどの処理性能や実行速度、通信回線・ネットワークなどの伝送速度・容量などを指すことが多い</p>";
echo "<br>";
echo "<p>スロークエリ:データベースにおいて時間のかかっているSQLの事</p>";
echo "<br>";
echo "<p>クエリログ:SQLから出力されるクエリのログ</p>";

?>