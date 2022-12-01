<?php

function my_rounds($nb=NULL)
{
    if($nb==NULL)
    {
        return $nb;
    }
    else
    {
        $arr1=round($nb,0, PHP_ROUND_HALF_EVEN);
        $arr2=ceil($nb);
        $arr3=floor($nb);
        echo "Results : [$arr1] - [$arr2] - [$arr3]\n";
    }
}

//echo my_rounds(3.46);