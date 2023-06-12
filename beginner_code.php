<?php

// Printing something
echo "Hello World" ;

// PHP Questions (BASIC)

// Question 1
// Create a variable called "name" and assign your name to it. Print the value of the variable.
$name = "\nJohn Doe";
echo $name;

// Question 2
// Write a function that takes two numbers as parameters and returns their sum.
function addNumbers($num1, $num2) {
$sum = $num1 + $num2;
return $sum;
}

$result = addNumbers(2, 3);
echo "\n" . $result;

// Question 3
// Create an array of fruits (apple, banana, orange) and print each fruit on a new line.
$fruits = ["apple", "banana", "orange"];
foreach ($fruits as $fruit) {
echo "\n" . $fruit;
}

// Question 4
// Check if a given number is even or odd. Print "Even" or "Odd" accordingly.
$number = 7;
if ($number % 2 == 0) {
echo "\n" ."Even\n";
} else {
echo "\n" ."Odd\n";
}

// Question 6
// Write a loop to print numbers from 1 to 5.
for ($i = 1; $i <= 5; $i++) {
    echo $i . "\n";
}

// Question 7
// Create a function that checks if a given string is empty or not.
function isEmptyString($str) {
    if (empty($str)) {
        return true;
    } else {
        return false;
    }
}

$result = isEmptyString("");
if ($result) {
    echo "String is empty\n";
} else {
    echo "String is not empty\n";
}

// Question 8
// Calculate the factorial of a given number using recursion.
function factorial($num) {
    if ($num <= 1) {
        return 1;
    } else {
        return $num * factorial($num - 1);
    }
}

$result = factorial(5);
echo $result;

// Question 9
// Create a form with an input field and a submit button. Retrieve the value entered in the input field and display it.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    echo "\nYou entered: " . $name;
}
// Question 10
// Create a function that takes an array as a parameter and returns the sum of its elements.
function calculateSum($array) {
    $sum = 0;
    foreach ($array as $element) {
        $sum += $element;
    }
    return $sum;
}

$numbers = [1, 2, 3, 4, 5];
$result = calculateSum($numbers);
echo $result;

// Question 11
// Create a string variable with the value "Hello, PHP". Convert it to uppercase and print it.
$string = "\nHello, PHP";
$uppercaseString = strtoupper($string);
echo $uppercaseString;

// Question 12
// Check if a given string contains the word "PHP". Print "Found" or "Not Found" accordingly.
$string = "\nI love PHP programming";
if (strpos($string, "PHP") !== false) {
    echo "\nFound";
} else {
    echo "\nNot Found";
}

// Question 13
// Create an associative array with the keys "name" and "age" and their respective values. Print the values.
$person = [
    "name" => "\nJohn Doe",
    "age" => 25
];
echo $person["name"] . ", " . $person["age"];

// Question 14
// Calculate the average of an array of numbers and print it.
function calculateAverage($array) {
    $sum = calculateSum($array);
    $count = count($array);
    $average = $sum / $count;
    return $average;
}

$numbers = [1, 2, 3, 4, 5];
$result = calculateAverage($numbers);
echo "\n" . $result;

?>


