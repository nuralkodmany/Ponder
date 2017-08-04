<?php
$filename = "data.txt" ;
$newData = $_POST['newData'] . "\n" ;
file_put_contents($filename, $newData, FILE_APPEND);

$lines = file($filename) ;

echo '<ul>' ;

foreach ($lines as $line) {
  echo "<li>$line</li>" ;
}

  echo '</ul>' ;
?>
