<!Doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Booking Confirmation</title>
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>

<?php

function sanitise_input($data) 
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST["firstname"])) 
{
    $err_msg = "";
    $firstname = ($_POST["firstname"]);
    $lastname = ($_POST["lastname"]);
    $age = ($_POST["age"]);

   if (trim($firstname)=="") 
        $err_msg .="<p>Please enter first name.</p>"; 
    
    else{
        $firstname = sanitise_input($firstname);
        if (!preg_match("/^[a-zA-Z]{2,40}$/", $firstname))
            {$err_msg .= "<p>Only letters are allowed in first name.</p>";}       
        }

    if (trim($lastname)=="")
    $err_msg .="<p>Please enter last name.</p>";
else {
    $lastname = sanitise_input($lastname);

    if (!preg_match("/^[a-zA-Z ]{2,40}$/", $lastname))
    {$err_msg .= "<p>Only letters are allowed in last name.</p>";}
        }

    if (trim($age)=="")
    $err_msg .="<p>Please enter age.</p>";

else {
    $age = sanitise_input($age);
    if (!preg_match("/^[0-9]{1,3}$/", $age))
    {$err_msg .= "<p>Only numbers are allowed in age.</p>";}
    }

if (!isset($_POST["species"]))
    $err_msg .="<p>Please select a species.</p>";
else
    $species = $_POST["species"];


if (!isset($_POST["accom"]))
    $err_msg .="<p>Please select an accommodation.</p>";

else 
    $accom = $_POST["accom"];


if (isset($_POST["4day"]))
    $day4 = "Four-day tour";
else
    $day4 = "";

if (isset($_POST["1day"]))
    {
    if ($day4 == "Four-day tour")
        $day1 = "and One-day tour";
    else 
        $day1 = "One-day tour";
    }
else 
    $day1 = "";


    if (!isset($_POST["food"]))
    $err_msg .="<p>Please select a food preference.</p>";
    else
    
    $food = $_POST["food"];

if (isset($_POST["bookday"]))
    $date = $_POST["bookday"];
else
    $err_msg .="<p>Please select a date.</p>";


if (isset($_POST["partysize"]))
    $partysize = $_POST["partysize"];


if ($err_msg != "")
    echo $err_msg;
else{
    echo "<p>Welcome $firstname $lastname !";
    echo "<p>You are now booked on the $day4 $day1</p>";
    echo "<p>Species: $species</p>";
    echo "<p>Age: $age</p>";
    echo "<p>Meal preference: $food</p>";
    echo "<p>Number of travellers: $partysize</p>";
    }
}

else{
    header ("location:register.html"); 
    }


?>

</body
