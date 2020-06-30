<?php

// $members = ["tanaka", "sasaki", "kimura", "uchida", "yoshida"];
// echo count($members);
$members = ["tanaka", "sasaki", "kimura", "uchida", "yoshida"];
sort($members);
var_dump($members);
echo "<br>";
$numbers = [27, 28, 89, 1, 99];
sort($numbers);
var_dump($numbers);
echo "<br>";
if(in_array("tanaka", $members)){
  echo "田中さんがいるよ";
}else {
  echo "田中さんはいないよ";
}
echo "<br>";
$atstr = implode("@", $members);
var_dump($atstr);
echo "<br>";
$str = "1,2,3,4,5";
$array = explode(",", $str);
var_dump($array);
?>
<p>ここから練習</p>
<?php
echo "<br>";
$foods = ["curry", "stew", "ramen", "udon"];
sort($foods);
var_dump($foods);
echo "<br>";
if(in_array("stew",$foods)){
  echo "シチューはあり";
}else{
  echo "シチューはなし";
}
echo "<br>";
$food = implode(".", $foods);
var_dump($food);
echo "<br>";
$re_foods = explode(".", $food);
var_dump($re_foods);
echo "<br>";
echo "用語集";
echo "<br>";
echo "要件定義(要求仕様書):開発において実装すべき機能や満たすべき性能などを明確にしていく作業。ユーザー部門から要求を引き出し、システムに実装する機能を整理する。整理した内容を基に業務フローや業務シナリオを作成し、齟齬がないことを確認する";
echo "<br>";
echo "単体テスト・結合テスト:単体テストは個々のモジュールに対してテストを実施。結合テストは個々のモジュールを組み合わせてのテスト";
echo "<br>";
echo "テスト仕様書(どのようなもの、項目):システムやソフトウェアがクライアントのヒアリングを基に作り上げた要件定義書の通りに機能するかどうか、テストするポイントをまとめたドキュメントのこと。「テスト計画」
どんなテストをするのか（テストの種類）機能テスト、セキュリティテストや負荷テスト
どこまで担保するのか
テストを中止する場合や再開する基準は（実施環境の設定不備）
実行環境の確認
テスト結果（「OK」はどこまでの範囲か、「NG」はどこからなどを決める）
テストツールは使用するのか（使用する場合は、対象案件での使用メリットも記載）
全体のスケジュール（定例MTGや、各テストの期間、実施担当者）
組織図
どのようなテストデータを用意するか
仕様変更や、FIX決めの対応
テストリスク（リスク発生頻度、重大度）と対策事項（リスクレベルの設定）はまとめているか

「テスト設計」
仕様書からよみとれるレベル
内部構造を理解して設計するレベル
テスト経験者の間や知識から実行する探索的テスト

「テスト仕様書」
設計書を基にテストケースをおこす
無駄なケースがないかを確認する。
前提条件を必ず記載
大項目、中項目、小項目、前提条件、操作方法を記載
テスターは
期待値が実測値とあっているかを確認し、テスト結果を「OK」「NG」「PN」で記載。また、不具合管理票も記載。
「OK」は、期待値と実測値が同じである
「NG」は、期待値と実測値が異なっている
「PN」は、テスト環境不備やテストケース自体実行できない場合";
?>