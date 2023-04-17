<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>
</head>
<body>
    <div class="container">
        This is my first php website
        
        <?php
        echo"hello world and this is printed using php";
        // secret algorithm
        //single line comment
        /*this
        is
        a
        multiline comment*/

        $variable1=5;
        $variable2=2;
        echo$variable1;
        echo$variable2;

        echo$variable1+$variable2;

        //operators in php

      //  arithmetic operators
      echo"the value of variable1 + variable2 is";
      echo"<br>";
      echo $variable1 + $variable2;
      echo"<br>";
      echo $variable1 - $variable2;
      echo"<br>";
      echo $variable1 * $variable2;
      echo"<br>";
      echo $variable1 / $variable2;
      echo"<br>";

        //assignment operators
        $newVar = $variable1;
        $newVar += 5;
        echo "the value of new variable is";
        echo $newVar;
        echo"<br>";



       // logical operators
           
    // and (&&)
    // or (||)
    // xor 
    // !

    // $myVar = (true and true);
    // $myVar = (false and true);
    // $myVar = (false and false);
    // $myVar = (true and false);
    // $myVar = (true or false);

    // $myVar = (true xor true);
    // $myVar = (false and true);
    // $myVar = (false xor false);
    $myVar = (true and false);
    echo "<br>";
    echo var_dump($myVar);



        //comparision operators
       
    // echo "<h1> Comparison Operators </h1>";
    echo "The value of 1==4 is ";
    echo var_dump(1==4);
    echo "<br>";

    echo "The value of 1!=4 is ";
    echo var_dump(1!=4);
    echo "<br>";

    echo "The value of 1>=4 is ";
    echo var_dump(1>=4);
    echo "<br>";

    echo "The value of 1<=4 is ";
    echo var_dump(1<=4);
    echo "<br>";


        
// Increment/Decrement Operators 
    // echo $variable1++;
    // echo $variable1--;
    // echo ++$variable1;
    echo --$variable1;
    echo "<br>";
    echo $variable1;     
        ?>

        <?php
      /*data types in php
      1.string
      2.integer
      3.float
      4.boolean
      5.array
      6.object

      $var = "this is a string";
      echo $var_dump($var);*/




      ?>
    </div>
</body>
</html>