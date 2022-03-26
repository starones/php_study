<!------ foreach ------->
<?php

$score = array('数学' => 50, '英語' => 30, '国語' => 20);

foreach($score as $key => $value) {
  echo $key."は".$value."点でし";
}

?>