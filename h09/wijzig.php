<head>
    <style>
        form {
            margin-left:180px;
            margin-top:50px;
            margin-right:180px;
        }
        form label {
            position:fixed;
            margin-left:-15px;
            font-size:15px;
            margin-top:15px;
        }
        form input {
            margin-top:10px;
            font-size:15px;
            border-radius:5px;
        }
        form input:nth-child(-n+5) {
            width:100%;
            height:30px;
            border-radius:5px;
        }
        form input:nth-child(8) {
            background-color: #ffffff;
            transition-duration:0.2s;
            padding:5px 10px;
        }
        form input:nth-child(8):hover {
            background-color: #bcbcbc;
        }
    </style>
</head>

<?php
include("header.html");
echo "<form method='post'>
        <input type='text' name='naam' placeholder='naam'><br>
        <input type='text' name='vorm' placeholder='Vorm'><br>
        <input type='text' name='gewicht' placeholder='Gewicht'>
        <label><b>g</b></label><br>
        <input type='submit' value='voeg toe'>
    </form>";
if (isset($_POST['naam']) && isset($_POST['vorm']) && isset($_POST['gewicht'])) {
    $db = new mysqli("localhost", "root", "", "bakkerij");
    $query = "UPDATE broodje SET naam='".$_POST['naam']."', vorm='".$_POST['vorm']."', gewicht='".$_POST['gewicht']."'  WHERE id='".$_GET['id']."'";
    $output = mysqli_query($db, $query);
    if ($output) {
        echo "succesvol gewijzigd!";
    } else {
        printf("error: %s\n", mysqli_error($db));
    }
}