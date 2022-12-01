<?php

function which_is_longer($str1, $str2)
{
    if(!is_string($str1)||!is_string($str2))
    {
        return -1;
    }

    if(strlen($str1)==0||strlen($str2)==0)
    {
        return -1;
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

//echo which_is_longer("fejfzlzhef");