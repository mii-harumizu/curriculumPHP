<!-- <form action="result.php" method="get">
  名前：<input type="text" name="my_name" />
  <br>
  パスワード：<input type="password" name="password" />
  <br>
  <input type="submit" value="送信" />
</form> -->

<!-- <form method="post" action="result.php">
  名前:<input type ="text" name="name" />
  <br>
  パスワード:<input type="password" name="password" />
  <br>
  メール:<input type ="email" name="mail" />
  <br>
  <input type ="submit" value="送信" />
</form> -->

<form method="post" action="result.php">
  名前:<input type ="text" name="name" />
  <br>
  パスワード:<input type="password" name="password" />
  <br>
  メール:<input type ="text" name="mail" />
  <br>
  <input type ="submit" value="送信" />
</form>

<?php
echo "<br>";
echo "<h1>用語集</h1>";
echo "<br>";
echo "<p>仕様書・設計書:仕様書は何を構築するのかの完成図。設計書は仕様書に記されたものをどうやって作成するのかを記したもの</p>";
echo "<br>";
echo "<p>Git:分散がバージョン管理システムの一つ。複数の開発者が共同で一つのソフトウエアを開発するときにソースコードやドキュメントなどの編集履歴を統一的に管理するのに利用する</p>";
echo "<br>";
echo "<p>マージツール:ソースをマージする際に用いるツール。チーム開発の際に修正箇所がコンフリクトしたり不整合が発生するなどのタイムロスを防ぎ効率化できる</p>";
?>