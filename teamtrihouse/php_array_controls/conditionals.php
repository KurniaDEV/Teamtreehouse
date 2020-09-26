<?php   

$score=55;
if($score>=60)
{
    echo "congratulations, You finish this level";
}elseif($score>=50 && $score<60)
{
    echo "sorry, you must try again";
}else
{
    echo "you fail the test";
}

echo  PHP_EOL;

function grade($number)
{
    if($number>95 && $number==100)
    {
        return 'A';
    }elseif($number>75 && $number<=95)
    {
        return 'B';
    }elseif($number>=65 && $number<=75)
    {
        return 'C';
    }else
    {
        return 'D';
    }
}

echo grade(97);

echo PHP_EOL;

// Compare

var_dump((1<>2));
var_dump((1!=1));

// identical

var_dump((1==="1"));

// not identical

var_dump((1==2));

$nomor=10000;

if($nomor>=10 && $nomor<=1000)
{
  echo "Your number is in the range";
}else
{
    echo "Your number is not in the range";
}

echo PHP_EOL;

$var1=true && false;

var_dump($var1);

echo PHP_EOL;

switch(date('l'))
{
case 'Monday':
    echo "Monday left me broken";
break;
case 'Tuesday':
    echo "Tuesday i was through with hopin'";
break;
case 'Wednesday':
    echo "Wednesday my empty arms were open";
break;
case 'Thursday':
    echo "Thursday waiting for love, waiting for love";
break;
case 'Friday':
    echo "thank the stars its friday";
break;
case 'Saturday':
    echo "I'm burnin like a fire wild on saturday";
break;
default:
    echo "Holiday";
}