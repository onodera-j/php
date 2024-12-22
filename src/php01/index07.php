<?php
function text($number1, $number2, $number3){
    $value = $number1 * $number2 - $number3;
    return $value;
}

$total = text(5, 4, 15);
echo $total . "<br>";

function test($score1, $score2, $score3){
    $total = $score1 + $score2 + $score3;
    if ($total > 210){
        echo  "合計点は" . $total . "点なので合格です";
    }else{
        echo "合計点は" . $total . "点なので不合格です";
    }
}

echo test(80,70,60);

function sankaku($teihen, $takasa){
    $menseki1 = $teihen * $takasa / 2;
    echo "三角形の面積は" . $menseki1 . "です";
}
function shikaku($tate, $yoko){
    $menseki2 = $tate * $yoko;
    echo "四角形の面積は" . $menseki2 . "です";
}
function daikei($row, $high, $taka){
    $menseki3 = ($row + $high) * $taka / 2;
    echo "台形の面積は" . $menseki3 . "です";
}

echo sankaku(10,5) . "<br>";
echo shikaku(6,7) . "<br>";
echo daikei(7,3,6);