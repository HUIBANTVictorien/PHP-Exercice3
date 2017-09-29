

<?php
$min = 1;
$max = 300;

echo 'Les nombres impairs compris entre '.$min.' et '.$max.' sont:';

for($i = $min; $i < $max ; $i=$i+2){
  echo $i.' ';
}

?>
