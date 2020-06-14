<?php include("variables.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <?php include("navbar.php"); ?>
  	<br>
  	<center>
    	<?php

			//Print out to the screen
			//echo "Hello World";
      //$first_name = "John";
      //$favorite_number = 41;
      //echo $first_name;

      //Math Operators
      // + - * / % **
      //$num_1 = 41;
      //$num_2 = 4;
      //echo $num_1 % $num_2;
      //echo --$num_1;

      //Concatenation
      //$first_name = "John";
      //$last_name = "Elder";
      //echo $first_name." ".$last_name;

      //Comparison Operators
      // == != > < >= <= === !== works with strings too
      //$num_1 = 41;
      //$num_2 = 41;
      //var_dump($num_1 == $num_2);

      //Escape Characters
      //echo "And then she said: \"YOU'RE UGLY!\"";

      //If Else Statements (&& (AND) & || (OR)), elif
      //$first_name = "Pete";
      //$num_1 = 41;
      //$num_2 = 5;
      

      //if($num_1 > 100){
      //  echo $num_1 . " is greater than 100";
      //}elseif($num_2 == 4){
      //  echo $num_2 . " equals 5!";
      //}else{
      //  echo $num_1 . " is less than 100";
      //}

      // Arrars - Numeric
      //$car_names = array("Honda","Toyata","Ford","Jeep","Christal",array("Subaru","Smart","Chevrolet","Ferrari","BMW"));
      //echo $car_names[5][3];

      //Arrays - Associative
      //$fav_pizza = array(
      //  "John"=>"Pepperoni",
      //  "Benjamin"=>"Extra Daiya Cheese",
      //  "Mary"=>"Hawaian",
      //  "Thomas"=>"Salami"
      //);
      //echo count($fav_pizza);

      //While Loops
      //$count = 0;
      //while($count < 10){
      //    $count++;
      //    echo "The count is: $count<br>";
      //}

      //For Loops
      //for($num = 0;$num <= 10; $num++){
      //  echo "The count is: $num<br>";
      //}

      //Foreach Loops
      //$car_names = array("Honda","Toyata","Ford","Jeep","Christal",array("Subaru","Smart","Chevrolet","Ferrari","BMW"));
      //foreach($car_names as $blargh){
      //  if(is_array($blargh)){
      //    foreach($blargh as $tuturu){
      //     echo "$tuturu<br>";
      //   }
      //  }else{
      //    echo "$blargh<br>";
      //  }
      //}

      //Functions
      //function helloThere($name){
      //  return "Hello There $name!";
      //}

      //Random Functions
      //echo helloThere("John");
      //echo mt_rand(0,100);
      //$names = array("John","Steve", "mary","Ben","Tim","Jimmy","Tristou");
      //echo $names[mt_rand(0,6)];

      //Date Functions
      //echo date('l jS \of F, Y');

      //String Manipulation
      //$stuff = "John Elder is a PHP Coding Monster";
      //echo str_replace("Elder","Youngter",$stuff);
      //echo strtoupper($stuff);

      //Include Functions
      //include("variables.php");
      //echo "Copyright (c) ".$company_name." ".date("Y")." - All Rights Reserved";

      //Template out a website
      ?>
      <div class="container">
        <div class="jumbotron">
          <h1 class="display-4">Welcome to Guitar world!</h1>
          <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
          <hr class="my-4">
          <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                </div>
      </div>
      <?php
      include("footer.php");

		?>
		
	</center>
  <br>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
