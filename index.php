<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 5;
    $b = 15;
    $c = $a + $b; 
    $d = 25;
    $e = 30;
    $f = $d + $f;
    $g = $b * $d;
    $h = $f / $a;
    $i = 33;
    $j = 70;

    if ($a <= $b) {
        echo '<h2 style="color : olive">'.$a.'</h2>';
    }
    elseif ($b >= $a) {
        echo '<h2 style="color : yellow">'.$b.'</h2>';
    }
    elseif ($c >= 22) { 
        echo '<h3 style="color : green">'.$c.'</h3>';
    }
    elseif ($b <= $d) {
        echo '<h4 style="color : orange">'.$d.'</h4>';
    }
    elseif ($c >= $e) {
        echo '<h5 style="color : purple">'.$e.'</h5>';
    }
    elseif ($a >= 66) {
        echo '<h6 style="color : skyblue">'.$f.'</h6>';
    }
    elseif ($e > $d) {
        echo '<h7 style="color : lavender">'.$g.'</h7>';
    }
    elseif ($c < $f) {
        echo '<h8 style="color : brown">'.$h.'</h8>';
    }
    elseif ($d > $a) {
        echo '<h9 style="color : grey">'.$i.'</h9>';
    }elseif ($e >= f) {
        echo '<h10 style="color : red">'.$j.'</h10>';
    }
?>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin
</body>
</html>