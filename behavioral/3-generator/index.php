<?php


function squareNumber($start, $end): Generator
{
    var_dump("Genenrator Start <br>");
    for ($i = $start; $i<= $end; $i++){
        var_dump("$i in Series");
        yield $i => pow($i , 2);
    }
    var_dump("Genenrator End <br>");
}

foreach (squareNumber(1, 6) as $key => $num){
    echo $key."=>". $num;
    echo "<br>";
}
