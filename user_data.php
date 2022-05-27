<?php
$file = fopen("userdata.csv", "w");
foreach($_POST as $name => $value) {
    fwrite($file, ucfirst($name) . ": " . htmlentities($value) . "\n");
}
fclose($file);
print_r(file("userdata.csv"));
?>