<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Log In</title>
</head>

<body>

     <form action="practice.php" method="post">
          <input type="checkbox" name="monitor" value="Monitor"> Monitor <br />
          <input type="checkbox" name="cpu" value="Cpu"> Cpu <br />
          <input type="checkbox" name="ram" value="RAM"> RAM <br />
          <input type="checkbox" name="rom" value="ROM"> ROM <br />
          <input type="submit" name="submit" value="Select Item"> 
     </form>



</body>

</html>

<?php

if(isset($_POST['submit'])){
     if(isset($_POST['monitor'])){
          echo "You have select Monitor";
     }
     elseif(isset($_POST['cpu'])){
          echo "You have select CPU";
     }
     elseif(isset($_POST['ram'])){
          echo "You have select RAM";
     }
     elseif(isset($_POST['rom'])){
          echo "You have select ROM";
     }else{
          echo "__Please select an item";
     }
}


?>