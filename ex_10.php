<?php

function return_calls()
{   
    static $count=0;
    if($count==0)
    {
        $count++;
        return $count;
    }
    
    if($count%2==0)
    {
        $count++;
        return $count;
    }
    
    if($count%2!=0)
    {   
        $count++;
        return NULL;
    }
}


/* -----------TEST----------- */

//echo return_calls()."\n";
//echo return_calls()."\n";
//echo return_calls()."\n";
//echo return_calls()."\n";


/*

écrire une fonction qui ne prend aucun paramètre et qui retourne une fois sur deux le nombre de fois qu’elle
est appelée.
Prototype : mixed return_calls(void);
Exemple :
return_calls () ; // NULL
return_calls () ; // 2
return_calls () ; // NULL



*/