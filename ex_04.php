<?php


function clear_and_replace($string=NULL, $word=NULL)
{
    if(($string==NULL || $word==NULL) || (!is_string($string) || !is_string($word)))
    {
        return;
    }
    else
    {
        $arr = explode(" ",$string);
        $i=2;
        $chaine="";
        foreach($arr as $value)
        {
            $test=" ".$value." ";
            $test2=$value." ";
            $test3=" ".$value;
            if($i!=0 && (($test==$word||$value==$word)||($test2==$word||$test3==$word)))
            {
                $value="Pangolin";
                $chaine.=$value." ";
                $i--;
            }
            else
            {
                $chaine.=$value." ";
            }
        }
        echo $chaine;
    }

}

/* -----------TEST----------- */

//clear_and_replace (" Salut le chat , le chien et le lapin " , "le") ;
/*

écrire une fonction qui supprime tous les espaces au début et à la fin de la chaîne “$string”, puis qui remplace les 2 premières occurrences (répétitions) de la chaîne “$word” présentes dans “$string”, par la chaîne
“Pangolin” et qui renvoie le résultat.
Prototype : string clear_and_replace(string $string, string $word);
Exemple:
clear_and_replace (" Salut le chat , le chien et le lapin " , " le ") ;
// Cet appel devra retourner " Salut Pangolin chat , Pangolin chien et le lapin "

*/