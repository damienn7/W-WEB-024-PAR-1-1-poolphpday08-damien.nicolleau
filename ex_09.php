<?php

function make_pangolins(&$my_array)
{
    if(empty($my_array)||!is_array($my_array))
    {
        return NULL;
    }
    else
    {
        foreach($my_array as &$value)
        {
            $value="pangolin";
        }
        //echo $my_array[1];
        return $my_array;
    }
}

//$arr=["toto",true,"tata"];
//var_dump(make_pangolins($arr));