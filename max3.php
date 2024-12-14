<?php
function readInt() {
    return intval(rtrim(fgets(STDIN)));
}

$a = readInt();
$b = readInt();
$c = readInt();

$max = $a;

if ($b > $max) {
    $max = $b;
}
if ($c > $max) {
    $max = $c;
}

echo "$max" . PHP_EOL;
?>
