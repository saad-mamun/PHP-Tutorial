<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Button</title>
</head>

<body>
    <form action="index.php" method="post">
        <input type="radio" value="Visa" name="card"> Visa <br>
        <input type="radio" value="MasterCard" name="card"> MasterCard <br>
        <input type="radio" value="American Express" name="card"> American Express <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>

<?php

// role 1:

// if (isset($_POST['submit'])) {

//     if (isset($_POST['card'])) {
//         $card = $_POST['card'];
//         echo " You have selected: " . $card;

//     } else {
//         echo "Please select a card type.";
//     }
// }


// role 2:

// if (isset($_POST['submit'])) {
//     $card = null;

//     if (isset($_POST["card"])) {
//         $card = $_POST['card'];
//     }

//     if ($card == "Visa") {
//         echo "You have selected Visa.";
//     } elseif ($card == "MasterCard") {
//         echo "You have selected MasterCard.";
//     } elseif ($card == "American Express") {
//         echo "You have selected American Express.";
//     } else {
//         echo "Please select a card type.";
//     }
// }

// role 3:

if (isset($_POST['submit'])) {
    $card = $_POST['card'] ?? null;

    switch ($card) {
        case "Visa":
            echo "You have selected Visa.";
            break;
        case "MasterCard":
            echo "You have selected MasterCard.";
            break;
        case "American Express":
            echo "You have selected American Express.";
            break;
        default:
            echo "Please select a card type.";
    }
}






?>