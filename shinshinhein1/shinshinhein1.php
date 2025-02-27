<?php
//1. About spaceship(<=>)

// The PHP spaceship operator (<=>) is used for comparing two values.It returns
// -1 (if the left value is less than the right value)
// 1 (if the left value is greather than the right value)
// 0 (if the left value and right value are equal)

//Example1: Comparing Numbers
$num1 = 10;
$num2 = 20;
$result1 = $num1 <=> $num2;
echo "result1 is: $result1";    //output: -1 because 10 is less than 20
echo "<br>";


$num3 = 10;
$num4 = 10;
$result2 = $num3 <=> $num4;
echo "result2 is: $result2";   //output: 0 because both are equal

echo "<br>";

$num5 = 30;
$num6 = 20;
$result3 = $num5 <=> $num6;
echo "result3 is: $result3";   //output: 1 because 30 is greater than 20

echo "<br>";

//Example2: Comparing Strings
$stringOne = "Apple";
$stringTwo = "Banana";
$stringResult1 = $stringOne <=> $stringTwo;
echo "string result1 is: $stringResult1";  //output: -1 because "Apple" comes before "Banana" alphabetically

echo "<br>";

$stringThree = "Orange";
$stringFour = "Mango";
$stringResult2 = $stringThree <=> $stringFour;
echo "string result2 is: $stringResult2";  //output: 1 because "Orange" comes after "Mango" alphabetically

echo "<br>";

$stringFive = "Grape";
$stringSix = "Grape";
$stringResult3 = $stringFive <=> $stringSix;
echo "string result3 is: $stringResult3";  //output: 0 because both string are equal

echo "<br>";


//2. About string operator

//In PHP, the string operator is the concatenation operator, represented by the dog(.).It is used to combine two strings two together.

//Example1: Concatenation Operator (.)

$firstName = "shin shin";
$lastName = "hein";

$fullName = $firstName." ".$lastName;
echo "full name is: $fullName";

echo "<br>";

//Example2: Concatenation Assignment Operator
//PHP also have concatenation assignment operator (.=), which appends a string to an existing variable.

$message = "Hello";
$message .= ", World!";

echo "message is: $message";  //Output: Hello, World

echo "<br>";

//Example3: Using String Operators in Loops

$sentence = "";
$words = ["PHP", "is", "Awesome"];

forEach($words as $word){
    $sentence .= $word. " ";
}

echo "sentence is: $sentence";  //Output: PHP is Awesome

echo "<br>";

//Example4: Multiple Concatenations in One Line

$greeting = "Good";
$time = "morning";
$name = "Alice";

$greetingMessage = $greeting . " " . $time . ", " . $name . "!";
echo $greetingMessage; // Outputs: Good morning, Alice!

echo "<br>";

$age = 20;

switch(true){
    case ($age <= 12):
        echo "ticket value is: $5";
    break;
    case ($age >= 13 && $age <= 18):   
        echo "ticket value is: $8";
    break;
    case ($age >=19):
        echo "ticket value is: $12";
    break;
}

echo "<br>";

$fruit = "strawberry";

switch($fruit){
    case "apple":
        echo "this is apple";
        break;
    case "banana":
        echo "this is banana";
        break;
    case "mango":
        echo "this is mango";
        break;
    default:
    echo "this is another fruit";

}


?>