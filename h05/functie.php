<?php
function inlog($username, $password) {
    if ($username === "test" && $password === "test123") {
        $output = True;
    } else {
        $output = False;
    }
    return $output;
}
echo inlog("test","test123");