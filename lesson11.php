<!------- 戻り値 -------->
<?php
// 関数定義
function getCircleArea($radius) {
  return $radius * $radius * 3;
}

// 戻り値代入
$circleArea = getCircleArea(5);

// 定義呼び出し（実行値75になる）
echo $circleArea;
?>