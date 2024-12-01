<?php
//php and c program structure are simillar
//In php we are using each and every varibales in the format $ symbol followed by variable name example $a,$b,$sum. 
//In c we are using varibale name directly.
//In php to print data or messages we use echo,where the words needs to be printed is enclosed in dobule qoutes .example. echo "hello world";
//In c we are using printf() function to print data or messages where the words needs to be
//Every statment in php is terminated using semicolom ;
$a=(int)readline("Enter the first operand-->");
$b=(int)readline("Enter the second operand-->");

while(1)
{
    
    echo "\n1.ADDITION\n";
    echo "2.SUBTRACTION\n";
    echo "3.MULTIPLICATION\n";
    echo "4.DIVISION\n";
    echo "5.EXIT\n";
    $op=(int) readline("Please enter option  to perfrom the above operation-->");
    switch($op)
    {
        case 1:
            $result=$a+$b;
            break;
        case 2:
            $result=$a-$b;
            break;
        case 3:
            $result=$a*$b;
            break;
        case 4:
            $result=$a/$b;
            break;
        case 5:
            exit();
    }
    echo "*****************************************\n";
    echo "The operation of $a and $b is  $result ";
    echo "\n*****************************************";
}
