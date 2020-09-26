<?php

// $score=90;

// if($score>=100)
// {
//     echo"you did it";
// }
// elseif($score>=75 && $score<95)
// {
//     echo "guud2";
// }
// elseif($score>=64 && $score<75)
// {
//     echo "guud3";
// }
// else{
//     echo "Try Again";
// }


function  Grade($score)
{
    if($score<=100 && $score>95){ return "wtf yu did it";}
    elseif($score>=75 && $score<95){return "so yu need me";}

// if($score<=100 && $score>95)
// {
//     echo"you did it";
// }
// elseif($score>=75 && $score<95)
// {
//     echo "guud2";
// }
// elseif($score>=64 && $score<75)
// {
//     echo "guud3";
// }
// else{
//     echo "Try Again";
// }

}

echo grade(96);

// var_dump((1<>2));


echo PHP_EOL;


$num=1;

if($num>=10)
{
    if($num<=1000)
    {echo "your numbet is in range";}
     else{echo "Your number is greater then 1000";}

}
else {echo "your number has been slayer an enemy";}

var_dump(($number=true) || (false && true));




switch(date("l"))
{
    case "Monday":
        echo "isneinssnka";
    break;
    case "Tuesday":
        echo "tueaaaaaa";
    break;
    case "wednesday":
        echo "jadi ginini";
    break;
    case "thrusday":
        echo "mamaggag";
    break;
    case "friday":
       echo "freee pler";
    break;
    case "saturday":
    break;
    case "sunday":
        echo "aaaaaaaa";
    break;
    default:
    echo "mantap jiwa";

}


$data=["arrel","tante","gilang"];

$musisi=implode("\n",$data);//Array -> String
echo $musisi;

$musisis=explode("\n",$musisi);//string ->array

print_r($musisis);