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
          <input type="submit" name="submit" value="Select" />
     </form>


</body>

</html>

<?php

if (isset($_POST['submit'])) {
     $MobileBank = $_POST['MobileBank'] ?? null;
     switch ($MobileBank) {
          case ('Bkash'):
               echo "You have selected Bkash";
               break;
          case ('Nagad'):
               echo "You have selected Nagad";
               break;
          case ('Rocket'):
               echo "You have selected Rocket";
               break;
          default:
               echo " You must select a type of Mobile Bank";
     }
}


?>