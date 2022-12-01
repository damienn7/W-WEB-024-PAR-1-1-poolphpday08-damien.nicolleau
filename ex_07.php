<?php

function count_char($str=NULL)
{
    if($str==NULL || !is_string($str))
    {
        return $str;
    }
    else
    {
        $arr=str_split($str);
        $occurence=array_count_values($arr);
        //var_dump($arr);
        return $occurence;
    }
}

//$chaine = " Hello World ";
//count_char ( $chaine ) ;

/*
écrire une fonction nommée “count_char” qui prend une chaîne de caractères en paramètre et qui retourne
un tableau qui contient le nombre d’occurrences de
chaque caractère (sauf les espaces et les tabulations).
La fonction est sensible à la casse. Aussi, vous devez impérativement trier le tableau dans l’ordre croissant
des clés avant d’être retourné.
Prototype : array count_char(string $str);
Exemple :
$chaine = " Hello World ";
count_char ( $chaine ) ; // array ( " H " = > 1 , " W " = > 1 , " d " = > 1 , " e " = > 1 , " l " = > 3 , " o " ,
= > 2 , " r " = > 1)
$chaine = " H e l l o ";
count_char ( $chaine ) ; // array ( " H " = > 1 , " e " = > 1 , " l " = > 2 , " o "= > 1)
*/