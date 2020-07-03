<?php
$testfile = "test.txt";
$contents = "こんにちは";

if(is_writable($testfile)){
  echo "writabele!";
  $fp = fopen($testfile, "w");
  fwrite($fp,$contents);
  fclose($fp);
  echo "finish writing";
}else {
  echo "not writable";
  exit;
}
?>

<?php
$test_file ="test2.txt";

if(is_readable($test_file)) {
  $fp = fopen($test_file,"r");
  while($line = fgets($fp)) {
    echo $line. "<br>";
  }
  fclose($fp);
}else{
  echo "not readable";
  exit;
}
echo "<br>";

?>

<?php
$testt = "test3.html";

if(is_readable($testt)){
  $fp = fopen($testt,"r");
  while($line = fgets($fp)){
    echo $line . "<br>";
  }
  fclose($fp);
} else{
  echo "not readable";
  exit;
}
echo "<br>";

?>

<?php
echo "<br>";
echo "用語集";
echo "<br>";
echo "CakePHPの2系・3系の違い:バージョンの違い。2系⇒3系デザイン回りなどが強化されている。";
echo "<br>";
echo "LAMP:LINUX＋Apache＋MYSQL＋PHP(perlもしくはPython)のセットである";
echo "<br>";
echo "AWS:AmazonWebServicesの略
クラウド市場の3割程度のシェアを誇っていてシェア率トップ
仮想サーバ(EC2)、データベース（RDS）、ストレージ（S3）などがある";
?>