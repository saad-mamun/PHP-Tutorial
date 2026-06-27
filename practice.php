<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Log In</title>
</head>

<body>

     <form action="practice.php" method="post">
          <input type="radio" name="MobileBank" value="Bkash"> Bkash <br />
          <input type="radio" name="MobileBank" value="Nagad"> Nagad <br />
          <input type="radio" name="MobileBank" value="Rocket"> Rocket <br />
          <input type="radio" name="MobileBank" value="Upai"> Upai <br />
          <input type="radio" name="MobileBank" value="Fast Pay"> Fast Pay <br />
          <input type="submit" name="submit" value="Select" >
     </form>


</body>

</html>

<?php

if(isset($_POST['submit'])){
     $MobileBank = null;

     if(isset($_POST['MobileBank'])){
          $MobileBank = $_POST['MobileBank'];
     }

     if($MobileBank == "Bkash"){
          echo "You have selected: " . $MobileBank . "<br>";
     }
     if($MobileBank == "Nagad"){
          echo "You have selected: " . $MobileBank . "<br>";
     }
     if($MobileBank == "Rocket"){
          echo "You have selected: " . $MobileBank . "<br>";
     }
     if($MobileBank == "Upai"){
          echo "You have selected: " . $MobileBank . "<br>";
     }
     if($MobileBank == "Fast Pay"){
          echo "You have selected: " . $MobileBank . "<br>";
     }
}



?>