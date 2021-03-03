<?php
session_start();
$db = new mysqli("localhost","root","","school","3308");
echo "<form method='POST'>
    <input type='text' name='email' placeholder='email'>
    <input type='password' name='password' placeholder='password'>
    <input type='submit' name='submit' value='login'>
</form>";


if (isset($_POST['submit'])) {
    $query = "SELECT * FROM account WHERE email='" . $_POST['email'] ."' AND password='" . $_POST['password']. "'";
    $output = mysqli_query($db, $query);
    $data = mysqli_fetch_array($output);

    if ($data['email'] === $_POST['email'] && $data['password'] === $_POST['password']) {
        $_SESSION['role'] = $data['role'];
        $_SESSION['logged'] = True;
        $_SESSION['email'] = $data['email'];
    } else {
        echo "email/wachtwoord klopt niet";
    }
}

if(isset($_SESSION['role'])) {
    if ($_SESSION['role'] === "admin") {
        echo "hallo admin";
    } else {
        echo "hallo gebruiker";
    }
} else {
    echo"Hallo gast";
}

echo "<a href='admin.php'>admin page</a>";