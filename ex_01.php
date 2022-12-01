<?php

function which_is_longer($str1=-1, $str2=-1)
{
    if(!is_string($str1)||!is_string($str2))
    {
        return $str1;
    }

    if(strlen($str1)==strlen($str2))
    {
        return strlen($str1);
    }

    if(strlen($str1)>strlen($str2))
    {
        return strlen($str1);
    }
    elseif(strlen($str1)<strlen($str2))
    {
        return strlen($str2);
    }
}

/* -----------TEST----------- */

//echo which_is_longer("fejfzlzhef");