<form action="result.php" method="post">
    お名前：<input type="text" name="name"/>
    <br>
    ご希望商品：<input type="radio" name="product" value="A賞"/>A賞
    <input type="radio" name="product" value="B賞"/>B賞
    <input type="radio" name="product" value="C賞"/>C賞
    <br>
    個数：<select name="number">
      <?php for ($u=1; $u<=10; $u++){ ?>
        <option value="<?php echo $u; ?>">
          <?php echo $u; ?>
        </option>
      <?php } ?>
    </select> 
    <input type="submit" value="申し込み"/>
</form>

<?php
echo "<br>";
echo "用語集";
echo "<br>";
echo "<p>モジュール:機器やシステムの一部を構成するひとまとまりの部品。追加や交換が容易にできる。</p>";
echo "<br>";
echo "<p>バージョン管理システム:ファイルの変更履歴の保存・管理を行うソフトウェア。管理下のファイルについて、過去の参照や複数の比較、差分の検出を行うことができる</p>";
echo "<br>";
echo "<p>サブクエリ:クエリの内部に含まれる別の問い合わせ文</p>";

?>