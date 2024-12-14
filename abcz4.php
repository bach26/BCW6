<?php
function readInt() {
    return intval(rtrim(fgets(STDIN)));
}

    $x = readInt();
    $y = readInt();

    if ($x > $y && $y > 0) {
    echo "alpha" . PHP_EOL;
    } elseif ($x < 0 && $y == 0) {
    echo "bravo" . PHP_EOL;
    } elseif ($x == 0 || $y == 0) {
    echo "charlie" . PHP_EOL;
    } else {
    echo "zulu" . PHP_EOL;
}
?>
