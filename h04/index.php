<?php
function ctof($x) {
    $output = ($x * 1.8) + 32;
    return $output;
}

function deelbaar($x) {
    if ($x % 3 == 0) {
        $output = True;
    } else {
        $output = False;
    }
    return $output;
}

function reverse($x) {
    $x = strrev($x);
    return $x;
}

echo reverse("hallo");
