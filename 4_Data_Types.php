<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h1 style="text-align:center;">Data Types</h1>





<?php 


/* 

                Variables can store data of different types, and different data types can do different things.

                                        PHP supports the following data types:


                                                    1.String
                                                    2.Integer
                                                    3.Float (floating point numbers - also called double)
                                                    4.Boolean
                                                    5.Array
                                                    6.Object
                                                    7.NULL
                                                    8.Resource

*/















// =============================================================== ========== ===============================================================
// =============================================================== PHP String ===============================================================
// =============================================================== ========== ===============================================================
/* 
A string is a sequence of characters, like "Hello world!".
A string can be any text inside quotes. You can use single or double quotes:
*/

        $x = "Hello world!";
        $y = 'Hello world!';

        echo $x;
        echo "<br>";
        echo var_dump($y);

// =============================================================== ============== ===============================================================
// =============================================================== PHP String end ===============================================================
// =============================================================== ============== ===============================================================










// =============================================================== =========== ===============================================================
// =============================================================== PHP Integer ===============================================================
// =============================================================== =========== ===============================================================
/* 
An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.

Rules for integers:

An integer must have at least one digit
An integer must not have a decimal point
An integer can be either positive or negative
Integers can be specified in: decimal (base 10), hexadecimal (base 16), octal (base 8), or binary (base 2) notation

In the following example $x is an integer. 

The PHP var_dump() function returns the data type and value:
 */


        $i = 5985;
        echo '<br>',var_dump($i);


// =============================================================== =============== ===============================================================
// =============================================================== PHP Integer end ===============================================================
// =============================================================== =============== ===============================================================










// =============================================================== ========= ===============================================================
// =============================================================== PHP Float ===============================================================
// =============================================================== ========= ===============================================================
/* 
A float (floating point number) is a number with a decimal point or a number in exponential form.

In the following example $x is a float. The PHP var_dump() function returns the data type and value:
 */


        $f = 10.365;
        echo '<br>', var_dump($f);


// =============================================================== ============= ===============================================================
// =============================================================== PHP Float end ===============================================================
// =============================================================== ============= ===============================================================










// =============================================================== =========== ===============================================================
// =============================================================== PHP Boolean ===============================================================
// =============================================================== =========== ===============================================================
/* 
A Boolean represents two possible states: TRUE or FALSE.
 */


        $b = true;
        $b = false;
        echo '<br>', var_dump($b);


// =============================================================== =============== ===============================================================
// =============================================================== PHP Boolean end ===============================================================
// =============================================================== =============== ===============================================================










// =============================================================== ========= ===============================================================
// =============================================================== PHP Array ===============================================================
// =============================================================== ========= ===============================================================
/* 
An array stores multiple values in one single variable.

In the following example $cars is an array. The PHP var_dump() function returns the data type and value:
 */


        $cars = array("Volvo",5,5.6,true);
        echo '<br>';
        var_dump($cars);


// =============================================================== ============= ===============================================================
// =============================================================== PHP Array end ===============================================================
// =============================================================== ============= ===============================================================










// =============================================================== ========== ===============================================================
// =============================================================== PHP Object ===============================================================
// =============================================================== ========== ===============================================================
/* 
Classes and objects are the two main aspects of object-oriented programming.

A class is a template for objects, and an object is an instance of a class.

When the individual objects are created, they inherit all the properties and behaviors from the class, but each object will have different values 
for the properties.

Let's assume we have a class named Car. A Car can have properties like model, color, etc. We can define variables like $model, $color, and so on, 
to hold the values of these properties.

When the individual objects (Volvo, BMW, Toyota, etc.) are created, they inherit all the properties and behaviors from the class, but each object 
will have different values for the properties.

If you create a __construct() function, PHP will automatically call this function when you create an object from a class.
 */
print "<br><br><br>";


        // definig Class
        class Car {
        public $color;
        public $model;
        public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
        }
        public function message() {
        return "My car is a " . $this->color . " " . $this->model . "!";
        }
        }

        // Creating Objects
        $myCar = new Car("black", "Volvo"); //If you create a __construct() function, PHP will automatically call this function when you create an object from a class.
        echo $myCar -> message();
        echo "<br>";
        $myCar = new Car("red", "Toyota");
        echo $myCar -> message();


// =============================================================== ============== ===============================================================
// =============================================================== PHP Object end ===============================================================
// =============================================================== ============== ===============================================================










// =============================================================== ============== ===============================================================
// =============================================================== PHP Null Value ===============================================================
// =============================================================== ============== ===============================================================
/* 
Null is a special data type which can have only one value: NULL.

A variable of data type NULL is a variable that has no value assigned to it.

Tip: If a variable is created without a value, it is automatically assigned a value of NULL.

Variables can also be emptied by setting the value to NULL:
 */
print "<br><br><br>";


        $x = "Hello world!";
        $x = null;
        var_dump($x);


// =============================================================== ================== ===============================================================
// =============================================================== PHP Null Value end ===============================================================
// =============================================================== ================== ===============================================================









?>







<br>
<br>
<br>
<br>
<br>
<a href="/PHP_tutorial/">Back</a>

</body>
</html>