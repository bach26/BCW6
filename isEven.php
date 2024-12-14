<?php
function readInt() {
        return intval(rtrim(fgets(STDIN)));
    }

$x = readInt();

if ($x % 2 == 0) {
    echo "yes" . PHP_EOL;
} else {
    echo "no" . PHP_EOL;
}

?>
