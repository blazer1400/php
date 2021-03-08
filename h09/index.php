<head>
    <style>
        main {
            margin-left:80px;
            margin-top:50px;
            margin-right:80px;
        }
        main h3 {
            margin-top:-20px;
            margin-left:2px;
        }
        table {
            width:100%;
            text-align:center;
        }
        .form {
            margin-top:-50px;
        }
    </style>
</head>
<body>
    <?php include("header.html"); ?>
    <main>
        <h1>Overzicht van broodjes</h1>
        <h3>Informatie over broodjes</h3>
        <table>
            <tr>
                <th>Naam</th>
                <th>Vorm</th>
                <th>Gewicht</th>
            </tr>
            <?php
            $db = new mysqli("localhost", "root", "", "bakkerij");
            $query = "SELECT * FROM broodje";
            $output = mysqli_query($db,$query);
            while ($data = mysqli_fetch_array($output)) {
                echo "<tr id='" . $data['naam'] ."'>
                            <td>" . $data['naam'] . "</td>
                            <td>" . $data['vorm'] . "</td>
                            <td>" . $data['gewicht'] . "</td>
                            <td><a href='wijzig.php?id=". $data['id'] ."'>wijzig</a></td>
                        </tr>";
            }
            ?>
        </table>
    </main>
</body>