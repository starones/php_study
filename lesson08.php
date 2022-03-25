<!-------- while文 -------->

<?php

// 変数$iを定義してください
$i = 2;

// while文を書いてください
while($i <= 100) {
  echo $i;
  $i += 2;
  echo "<br>";
}

?>

<!-------- break文 ---------->
<?php

// もし501以上ならストップさせる文
for($i = 1; $i <= 1000; $i++) {
  if($i >= 501) {
    break;
  }
  echo $i;
  echo "<br>";
}

?>

<!------- continue ---------->
<?php

// この下にfor文を書いてください
for($i = 1; $i <= 1000; $i++) {
  if($i % 3 == 0) {
    continue;
  }
  echo $i;
  echo "<br>";
}

?>
