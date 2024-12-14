<?php
$fd = fopen('file.txt', "r");

$line = 1;

while (!feof($fd)) {
    $buffer = fread($fd, 4096);
    if ($line >= 1) {
        echo $buffer;
    };
    $line++;
}
fclose($fd);

//fwrite example

$fp = fopen('file.txt', "w");

fwrite($fp, "linha 1" . PHP_EOL);
fwrite($fp, "linha 2" . PHP_EOL);
fwrite($fp, "linha 3" . PHP_EOL);
