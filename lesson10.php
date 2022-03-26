<!--------- 関数 ---------->

<?php

// 変数の文字の数を表示（実行値は7になる）
$str = 'progate';
echo strlen($str);
echo "<br>";

// 配列の数を数える（実行値は3になる）
$array = array('HTML', 'CSS', 'PHP');
echo count($array);
echo "<br>";

// ランダムに数字を表示（実行値は10から18のどれか一つ）
echo rand(10,18);

?>



<!-------- 関数の定義 -------->
<?php
// 関数を定義(function)して実行
function hello() {
  echo "Hello World";
}
hello();

// （）の中で仮引数を定義（実行値は28になる）
function printRectangleArea($height,$width) {
  echo $height * $width;
}
printRectangleArea(4,7);

?>
