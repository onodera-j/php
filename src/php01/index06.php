<?php



for ( $i = 1; $i <= 5; $i++) {
    echo $i * 2;
    echo "<br>";

}

$i = 0;
while ($i < 3){
    echo "i = " . $i . "<br>";
    $i += 1; 
}

$count = 1;
while ($count <= 20){
    echo $count . "<br>";
    $count += 1;
}

$count = 0;
while ($count <= 100){
    if($count == 20){
        break;
    }
    if($count % 3 == 0){
        $count++;
        continue;
    }
    echo $count . "<br>";
    $count++;
}

$i = 0;
do{
    echo $i . "<br>";
    $i++;
} while($i < 5);

$num = 0;
do{
    echo "num = " . $num . "<br>";
    $num++;
} while($num < 3);

for ($num = 1; $num <= 50; $num++){
     if ($num % 3 === 0 and $num % 5 ===0){
        echo "$num = FizzBuzz"."<br>";
    }elseif($num % 3 === 0){
        echo "$num = Fizz"."<br>";
    }elseif($num % 5 === 0){
        echo "$num = Buzz"."<br>";
    }else{
        echo "$num = $num"."<br>";
    }
}

for($i = 0; $i < 5; $i++){
    for($j = 0; $j < 5; $j++){
        echo "●";
    }
    echo "<br>";
}

