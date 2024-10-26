<?php
    function adicao($num1, $num2)
    {
        $result = $num1 + $num2;
        return $result;
    }
    function subtracao($num1, $num2)
    {
        $result = $num1 - $num2;
        return $result;
    }
    function multiplicacao($num1, $num2)
    {
        $result = $num1 * $num2;
        return $result;
    }
    function divisao($num1, $num2)
    {
        $result = $num1 / $num2;
        return $result;
    }
     function celsius ($num1)
    {
        $result = ($num1 - 32) * 5/9 ; 
        return $result;
    }
    function fahrenheit($num1)
    {
        $result = ($num1 * 9/5) + 32; 
        return $result;
    }
    function metro($num1)
    {
        $result = $num1 / 100 ; 
        return $result;
    }
    function centimetro($num1)
    {
        $result = $num1 * 100 ; 
        return $result;
    }
?>