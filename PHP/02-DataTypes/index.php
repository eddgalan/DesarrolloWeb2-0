<?php
echo "<h1>Data Type String</h1>";
/*
Variables can store data of different types, and different data types can do different things.
PHP supports the following data types:
	String
	Integer
	Float (floating point numbers - also called double)
	Boolean
	Array
	Object
	NULL
	Resource
*/
$x = "Hello world!";	//Se puede usar comillas dobles ""
$y = 'Hello world!';	//Se puede usar comillas simples ''
echo $x;
echo "<br>"; 
echo $y;

echo "<h1>Data Type Integer</h1>";
/*
An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.
Rules for integers:
	An integer must have at least one digit
	An integer must not have a decimal point
	An integer can be either positive or negative
	Integers can be specified in three formats: decimal (10-based), hexadecimal (16-based - prefixed with 0x) or octal (8-based - prefixed with 0)
	In the following example $x is an integer. The PHP var_dump() function returns the data type and value:
*/
$x = 5985;
echo $x;		//Escribe el valor de x en el documento
echo "<br>";
var_dump($x);	//Regresa el tipo de dato y el valor.

echo "<h1>Data Type Float</h1>";
/*Data Type Float:
A float (floating point number) is a number with a decimal point or a number in exponential form.
*/
$x = 10.365;
var_dump($x);

echo "<h1>Boolean</h1>";
/*Data Type Boolean
A Boolean represents two possible states: TRUE or FALSE.
*/
$bool1 = true;
$bool2 = false;
var_dump($bool1);
var_dump($bool2);

echo "<h1>Array</h1>";
/*
An array stores multiple values in one single variable.
*/
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

echo "<h1>PHP Object</h1>";
/*PHP Object
An object is a data type which stores data and information on how to process that data.
In PHP, an object must be explicitly declared.
First we must declare a class of object. For this, we use the class keyword. A class is a structure that can contain properties and methods:
*/
class Car {
    function Car() {
        $this->model = "VW";
    }
}

// create an object
$herbie = new Car();

// show object properties
var_dump($herbie);
echo "<br>";
echo $herbie->model;

echo "<h1>NULL Value</h1>";
/*
Null is a special data type which can have only one value: NULL.
A variable of data type NULL is a variable that has no value assigned to it.
Tip: If a variable is created without a value, it is automatically assigned a value of NULL.
*/
$varNULL=null;
var_dump($varNULL);

?>