<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Log In</title>
</head>

<body>

     <form action="practice.php" method="post">
          <input type="radio" name="card" value="Visa"> Visa <br />
          <input type="radio" name="card" value="BKash"> BKash <br />
          <input type="radio" name="card" value="Nagad"> Nagad <br />
          <input type="radio" name="card" value="Rocket"> Rocket <br />
          <input type="radio" name="card" value="MasterCard"> MasterCard <br />
          <input type="radio" name="card" value="American Express"> American Express <br />
          <input type="submit" name="submit" value="Submit Card" >
     </form>

</body>

</html>

<?php


if(isset($_POST['submit'])){
     if(isset($_POST['card'])){
          $card = $_POST['card'];
          echo "You have selected: " . $card . " card <br>";
     }else{
          echo "Please select a car";
     };
}


?>