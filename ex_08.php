<?php

function get_median($vals)
{
    if(empty($vals)||!is_array($vals))
    {
        return NULL;
    }
    else
    {   $len=0;
        //var_dump($vals);
        sort($vals);
        //var_dump($vals);
        foreach($vals as $key => $value)
        {
            if(is_int($value)||is_float($value))
            {
                $len=$key;
            }
        }
        $len= $len+1;
        if($len%2!=0)
        {
            $milieuimpair=($len)/2;
            $median=$vals[$milieuimpair];
        }
        else
        {
            $milieupair=$len/2;

            $n1=$milieupair;
            $n2=+$milieupair+1;

            $value1=$vals[$n1-1];
            $value2=$vals[$n2-1];
            $median=($value1+$value2)/2;
        }
        return $median;
    }
}

/* -----------TEST----------- */

//$values = array (11 , 2 , 23 , 5 , 9 , 84 , 25) ;
//echo get_median($values) ; // retourne 11
//$values = array (11 , 2 , 23 , 5 , 9 , 84 , 11 , 3) ;
//echo get_median($values) ; // retourne 10
//$values = array (999 , 0) ;
//echo get_median($values) ; // retourne 499.5

/*

(n+1) ÷ 2 = (7 +1) ÷ 2 = 4

array_flip()

écrire une fonction nommée “get_median” qui retourne la médiane d’un ensemble de valeurs passés en
paramètre sous forme de tableau. Dans le cas d’une liste paire d’éléments, c’est la moyenne arithmétique
des deux valeurs centrales qui doit être retourné.
Prototype : mixed get_median(array $vals);
Exemple :
$values = array (11 , 2 , 23 , 5 , 9 , 84 , 25) ;
get_median ( $values ) ; // retourne 11
$values = array (11 , 2 , 23 , 5 , 9 , 84 , 11 , 3) ;
get_median ( $values ) ; // retourne 10
$values = array (999 , 0) ;
get_median ( $values ) ; // retourne 499.5


*/