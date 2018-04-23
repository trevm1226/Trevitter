<?php
for ($i= 0; $i<100; $i++){
  if((($i % 3) ===0) && ($i % 5 == 0)) echo "FIZZBUZZ <br>";
  else if(($i % 3) ===0) echo "FIZZ <br> ";
  else if($i % 5 == 0) echo "BUZZ <br>";

  else echo $i . "<br>";
}
?>
