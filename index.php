<html>
<head>
    <meta charset="utf-8">
    <title>Test</title>
    <link rel="stylesheet" href="./css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>
</head>
<body>
<div class="total">
    <div class="content-total">
        <div class="content-total-fleche">
            <div class="fleche"><img src="./img/chevron.png" alt=""></div>
        </div>
        <div class="content-total-books">
            <div class="field-guide-total"><span>0</span><img src="img/field-guide.png"></div><div class="ministry-manual-total"><span>0</span><img src="img/ministry-manual.png"></div><div class="dada-book-total"><span>0</span><img src="img/dada-book.png"></div><div class="restricted-book-total"><span>0</span><img src="img/restricted-book.png"></div>
        </div>
        <div class="content-total-spell">
            <div class="S-1"><span class="value">0</span><span class="lib"> Maitrise des sorts</span></div>
        </div>
    </div>
</div>
<?php
    $position = array(1,3,1,4,2,3,2,5,3,1,3,3,4,2,4,3,4,4,5,2,5,3,5,4,6,1,6,2,6,5,7,2,7,3,7,4,7,5,8,5,9,2,9,3,9,4,9,5,10,1,10,4,11,2,11,3,11,4,12,1,12,5,13,2,14,2,14,3,14,4,14,5,15,1,15,2,16,3,16,4,17,2,17,4,18,1,18,2,18,5,19,1,19,4,20,1,20,3,20,4,20,5,21,2,21,3,21,5,22,1,22,4,22,5,23,2,23,3,24,1,25,1,25,4,26,2,26,3,26,4,27,2,27,4,27,5,28,1,28,5,29,2,29,4,30,2,30,3,30,4,31,2,31,4,31,5,32,1,32,5,33,1,33,2,33,3,33,4,34,1,34,4,35,3,36,2,37,3,37,5);
    $field_guide = array(0,14,0,13,14,0,21,0,73,49,0,6,7,13,7,19,25,29,7,8,23,0,69,8,105,9,9,0,25,10,27,11,16,0,16,148,14,27,0,30,21,96,23,23,17,50,19,21,0,27,27,270,135,30,294,24,49,320,25,29,32,42,69,0,45,49,76,76,82,82,59,59,176,0,64,213,69,213,232,232,82,82,253,379,275,179,300,327,357,357);
    $ministery_manual = array(0,1,0,0,0,0,0,0,4,0,0,0,0,1,0,1,2,0,0,0,0,0,0,0,5,0,0,0,0,1,2,1,0,0,0,0,0,2,0,2,2,6,2,2,2,4,2,2,0,2,2,19,10,3,22,2,4,25,2,3,3,4,6,0,4,5,7,7,8,8,6,6,19,0,7,23,8,23,27,27,10,10,30,45,34,23,39,45,51,51);
    $restricted_book = array(0,0,0,0,0,0,0,0,0,0,0,0,0,12,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,5,0,0,0,0,0,0,0,0,12,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,12,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,5,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
    $dada_book = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,4,0,0,0,0,0,0,0,0,0,0,0,10,0,0,0,4,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,20,0,20,20,20,0,0,20,0,20,0,20,20,20,20);
    $level = array(1,1,1,2,2,1,1,1,1,5,1,2,2,1,2,2,1,2,2,2,2,1,5,2,1,2,3,1,3,3,3,3,3,1,3,1,2,1,1,1,3,1,3,3,2,3,2,2,1,3,3,1,1,3,1,2,1,1,3,2,2,3,1,1,3,3,1,1,1,1,3,3,3,1,3,1,3,1,1,1,3,3,1,1,1,3,1,1,1,1);
    ?>
<div class="Arbre-1">
    <img class="BaseCalamite" src="./img/Arbre1.png" alt="">
    <?php
    for ($i = 0; $i < 90; $i++) {
        echo '  
        <div class="BC-values" id="BC-'. ($i+1) . '" style="top: '. ((($position[$i*2] -1 ) * 2.69) + 0.5).'%;right:' ;
        switch ($position[($i*2)+1] ) {
            case 1:
                echo '77';
                break;
            case 2:
                echo '60';
                break;
            case 3:
                echo '42';
                break;
            case 4:
                echo '26';
                break;
            case 5:
                echo '8';
                break;
        }
        echo '%;">
            <div class="value-max"><span class="value">0</span>/<span class="max">' . $level[$i] . '</span></div>
            <div class="properties" id="P-' . ($i+1) .'">';

        for ($lvl = 1; $lvl <= $level[$i]; $lvl++){
            echo '
                <div class="level'. $lvl .'">
                    <span class="field-guide">'. $field_guide[$i] .'</span><span class="ministry-manual">' . $ministery_manual[$i] . '</span><span class="restricted-book">' . $restricted_book[$i] . '</span><span class="dada-book">' . $dada_book[$i] . '</span>
                </div>';
        }

        echo'
            </div>
        </div>
        ';
    }
    ?>

</div>
<div class="Arbre-2">
    <img class="BaseCalamite" src="./img/Arbre2.png" alt="">
    <img class="BaseCalamite" src="./img/Arbre3.png" alt="">
</div>
</body>
</html>
