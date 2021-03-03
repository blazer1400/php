<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== "admin") {
    echo "<script>window.location.href='index.php';</script>";
    exit;
} else {
    echo "geheime tekst";
}