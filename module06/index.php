<?php
    $array1 = array("cor" => "vermelho",2,4);
    $array2 = array("a","b","cor" => "verde","forma" => "trapezóide",4);
    $result = array_merge($array1,$array2);
    print_r($result);
?>