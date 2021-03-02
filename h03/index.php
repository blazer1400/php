<?php
for ($i = 0; $i < 10; $i++) {
    echo "<img src='img/monke".$i.".png'>";
}
$star = ["*","* *", "* * *", "* * * *", "* * * * *", "* * * * * *"];
for ($y = 0; $y < 6; $y++) {
    echo "<p style='text-align:center'>" . $star[$y] . "</p>";
}

for($x = 35; $x >= 25; $x--) {
    echo "hoppelepee";
}

for($i = 0; $i < 9; $i++) {
    if ($i % 2 == 0) {
        echo "<img style='border: solid 3px red' src='img/monke" . ($i + 1) . ".png'>";
    } else {
        echo "<img style='border: solid 3px blue' src='img/monke" . ($i + 1) . ".png'>";
    }
}

$leeftijd = [10,2,65,12];
$betalen = 0;
$mensen = 0;
for ($i = 0; $i <= count($leeftijd) - 1; $i++) {
    if ($leeftijd[$i] > 65 || $leeftijd[$i] < 3) {
        $mensen++;
    } elseif ($leeftijd[$i] <= 12) {
        $betalen += 5;
        $mensen++;
    } else {
        $betalen += 10;
        $mensen++;
    }
}
echo "<p> betalen: " . $betalen . "</p><p> mensen: " . $mensen . "</p>";

$zwemclubs["spartelkuikens"] = 25;
$zwemclubs["waterbuffels"] = 32;
$zwemclubs["Plonsmderin"] = 11;
$zwemclubs["Bommetje"] = 23;

echo "<table border='1'>";
foreach ($zwemclubs as $label => $waarde) {
    echo "<tr><td>" . $label . "</td><td>" . $waarde . "</td><td>";
    for ($i = 0; $i < (floor($waarde / 5)); $i++) {
        echo "<img src='img/zwemmer.png'>";
    }
    echo "</td></tr>";
}
echo "</table>";

$kappersagenda["9:15"] = "";
$kappersagenda["9:30"] = "";
$kappersagenda["9:45"] = "Hans";
print("De volgende momenten zijn nog beschikbaar:<ul>");
foreach($kappersagenda as $tijd => $afspraak) {
    if($afspraak == "") {
        print("<li>".$tijd."</li>") ;
    }
}
print("</ul>");
