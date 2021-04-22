<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center;"> Variables </h1>
    

<?php 


////////////////////////   //////////////////////////////////////////   /////////////////////// 
////////////////////////   variable in php and printing that variable   /////////////////////// 
////////////////////////   //////////////////////////////////////////   /////////////////////// 

            /* 
            
            Rules for PHP variables:

            A variable starts with the $ sign, followed by the name of the variable
            A variable name must start with a letter or the underscore character
            A variable name cannot start with a number
            A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
            Variable names are case-sensitive ($age and $AGE are two different variables)

            */
        
                            $txt1 = "Learn PHP";
                            $txt2 = "W3Schools.com";
                            $x = 5;
                            $y = 4;

                            print "<h2>" . $txt1 . "</h2>";
                            print "Study PHP at " . $txt2 . "<br>";
                            print $x + $y;

                            echo "<h2>" . $txt1 . "</h2>";
                            echo "Study PHP at " . $txt2 . "<br>";
                            echo $x + $y;


            /* 
            
            >>>>>>>>>>>>>>>>>>>>>>>>>>>>> =================== <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
            >>>>>>>>>>>>>>>>>>>>>>>>>>>>> PHP Variables Scope <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
            >>>>>>>>>>>>>>>>>>>>>>>>>>>>> =================== <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<

            In PHP, variables can be declared anywhere in the script.

            The scope of a variable is the part of the script where the variable can be referenced/used.

            PHP has three different variable scopes:

           1. local
           2. global
           3. static

            */



                            //===========   ================   ===========
                            //===========   Global Variables   ===========
                            //===========   ================   ===========
                            // A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function

                            $x = 5; // global scope

                            function myTest1() {
                            // using x inside this function will generate an error
                            // echo "<p>Variable x inside function is: $x </p>";
                            }
                            myTest1();

                            echo "<p>Variable x outside function is: $x</p>";


                            // ===============  ==============  ===============
                            // ===============  local variable  ===============
                            // ===============  ==============  ===============
                            // A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:

                            function myTest2() {
                            $x = 5; // local scope
                            echo "<p>Variable x inside function is: $x</p>";
                            }
                            myTest2();

                            // using x outside the function will generate an error
                            echo "<p>Variable x outside function is: $x</p>";


                            // ===============  ===============  ===============
                            // ===============  Static Keyword   ===============
                            // ===============  ===============  ===============
                            /*  Normally, when a function is completed/executed, all of its variables are deleted. However, 
                                sometimes we want a local variable NOT to be deleted. We need it for a further job.
                                To do this, use the static keyword when you first declare the variable:
                            */
                            function myTest3() {
                            static $x = 0;
                            echo $x;
                            $x++;
                            }

                            myTest3();
                            myTest3();
                            myTest3();



                            // ===============  ===============  ===============
                            // ===============  Global Keyword   ===============
                            // ===============  ===============  ===============
        
                            /* 
                            
                            The global keyword is used to access a global variable from within a function.

                            To do this, use the global keyword before the variables (inside the function):

                            */

                            $x = 5;
                            $y = 10;

                            function myTest() {
                            global $x, $y;
                            $y = $x + $y;
                            }

                            myTest();
                            echo $y; // outputs 15



                            

////////////////////////    ///////////////////////////////////////////////   /////////////////////// 
////////////////////////    variable in php and printing that variable end    ///////////////////////
////////////////////////    ///////////////////////////////////////////////   /////////////////////// 


   


?>

<br>
<br>
<br>
<br>
<br>
<a href="/PHP_tutorial/">Back</a>

</body>
</html>