<?php

$a = 7;

if($a === 5){
 echo "\$aは5です";
}elseif($a === 7){
 echo "\$aは7です";
}else{
    echo "\$aは5でも7でもありません";
}
echo "<br>";


$people = "Saburo";

switch($people){
    case "Taro";
    echo "太郎です";
    case "Jiro";
    echo "次郎です";
    case "Saburo";
    echo "三郎です";
break;
}
echo "<br>";

$b = ($a < 10) ? "TRUE" : "FALSE";
echo $b;