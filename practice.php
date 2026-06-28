<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Log In</title>
</head>

<body>

     <form action="practice.php" method="post">
          <input type="checkbox" name="pizza" value="Pizza"> Pizza <br />
          <input type="checkbox" name="hamburger" value="Hamburger"> Hamburger <br />
          <input type="checkbox" name="hotdog" value="Hotdog"> Hotdog <br />
          <input type="checkbox" name="taco" value="Taco"> Taco <br />
          <input type="submit" name="submit" value="Select Food">
     </form>


</body>

</html>

<?php

if(isset($_POST['submit'])){
     if(isset($_POST['pizza'])){
          echo " You like Pizza!";
     }elseif(isset($_POST['hamburger'])){
          echo "You like Hamburger";
     }elseif(isset($_POST['hotdog'])){
          echo "You like Hotdog";
     }elseif(isset($_POST['taco'])){
          echo "You like Taco";
     }else{
          echo "__Please Select a food";
     }
}



?>