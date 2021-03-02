<?php
if ($_POST['dier'] === "hond") {
    echo "<img src='img/hond.jpg'>";
} elseif ($_POST['dier'] === "kat") {
    echo "<img src='img/kat.jpg'>";
} elseif ($_POST['dier'] === "vis") {
    echo "<img src='img/vis.jpg'>";
}