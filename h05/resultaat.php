<?php
if (isset($_POST['inlognaam']) && isset($_POST['wachtwoord']) && isset($_POST['wachtwoord'])) {
    print_r($_POST);
} else {
    echo "Niet alle velden zijn ingevult!";
}
