<?php

$a = 8;
$b = 5;

$a = "$a$b";
$b = +($a[0]);
$a = +($a[1]);

echo "<pre>";
echo "Переменная a = $a;\n";
echo "Переменная b = $b;";
echo "</pre>";
