<?php
class app{
    function maxRange($a, $b){
        $maxLength = $a + $b - 1;
        return $maxLength;
    }

    function binCount($a){
        $numCount = 0;
        while($a)
        {
            $numCount += ($a & 1);
            $a = $a >> 1;
        }
        return $numCount;
    }

    function partJoin($a, $b){
        $output = str_replace('/', '', $a);
        $output .= "/" . str_replace('/', '', $b);
        return $output;
    }

    function sastryNum($a){
        $conc = $a . $a+1;
        $check = 0;
        for ($i = 1; $i * $i <= $conc; $i++) {
                if (($conc % $i == 0) && ($conc / $i == $i)) {
                    $check = 1;
                    return "<h1>THE SQUARE ROOT OF ". $conc . " IS ". sqrt($conc) . " IT IS A SASTRY NUMBER</h1>";
                }
            }
        if($check == 0){
        return "<h1>".$conc . " IS NOT A SASTRY NUMBER</h1>";
        }
    }
}
?>