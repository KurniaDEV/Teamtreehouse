<?php

$firstName="";
$lastName="";
$currentGrade=9;
$finalAverage=0;
$messageBody='';

if(!$firstName || !$lastName)
{
    echo "Please enter a student Name !";
}elseif($currentGrade < 9 || $currentGrade > 12)
{
    echo "This is only for highschool students, please enter a grade between 9 and 10";
}else
{
    if($finalAverage<.70)
    {
        echo "m";
    }
}

