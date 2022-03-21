<!-------- 配列 -------->

<?php

  $colors = array("赤","青","黄");

  echo $colors[0];

  $colors[] = ("白");

  echo $colors[3];

?>

<!----------- 連想配列 --------->

<?php

$scores = array(
  "数学" => 59,
  "国語" => 44,
  "英語" => 33
);

$scores["国語"] += 5;

echo $scores["国語"];

?>