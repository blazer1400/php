<?php

$class = new Apennamen();
echo "<head>
<link rel='preconnect' href='https://fonts.gstatic.com'>
<link href='https://fonts.googleapis.com/css2?family=Bangers&display=swap' rel='stylesheet'>
<style>
    body {
        font-family: 'Bangers', cursive;
    }
    .namen a {
        display:block;
        color:#ff8400;
        font-size:30px;
        text-decoration: none;
    }
    img {
        display:block;
    }
</style>
</head>
<body>
    <center>
        <img src='img/monkey-business.jpg'>
        <img src='img/monkey_swings.png'>
        <div class='namen'>";
$class->genereerHtml();
echo "             
        </div>
    </center>
</body>";

class Apennamen {
    public $array = ["baviaan", "guereza", "langoer", "neusaap","tamarin","brulaap","halfaap","mandril"];
    public function genereerHtml() {
        for ($i = 0; $i < 8; $i++) {
            echo "<a href='https://www.google.nl/search?q=" . $this->array[$i] . "'>" . $this->array[$i] . "</a>";
        }
    }
}