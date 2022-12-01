<?php

function my_mail ($mail=NULL)
{
    if($mail==NULL || !is_string($mail))
    {
        return;
    }

    if(!substr_count($mail,'@')||!substr_count($mail,'.'))
    {
        return;
    }

    $mail=str_replace(" ","",$mail);
    $id=strstr($mail,'@',true);
    $dom=strstr($mail,'@');

    if(!$id==""|| !$id==NULL)
    {   
        //echo $dom;
        $point=substr_count($dom,'.');
        if($point>0)
        {
            $dom=str_replace("@","",$dom);
            $return=explode(".",$dom);

            if($point==1)
            {
                echo $return[0]."\n";
            }

            if($point>1){
                $i=0;
                $chaine=$return[$i];
                do
                {
                    $i++;
                    $chaine.='.'.$return[$i];
                }while($point-1>$i);
                echo $chaine."\n";
            }
            else
            {
                return;
            }

        }
    }
    else
    {
        return;
    }

}

//my_mail (" fakemail@mon . mail . tralala .com ") ;

/*


écrire une fonction qui prend en paramètre une chaîne de caractères et qui affiche les caractères entre
le premier arobase rencontré et le dernier point suivant celui-ci, suivi d’un retour à la ligne. En cas d‘erreur,
la fonction n’affichera rien.

my_mail (" fakemail@mon . mail . com ") ;
// Cet appel devra afficher " mon . mailn "

*/