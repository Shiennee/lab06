<!Doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Using PHP Variables ,arrays amd operations </title>
        <!-- add other meta -->
</head>
<body>
    <h1>PHP Variables, arrays and operations </h1>
<?php
    echo "<p>The days of the week in Englsih are: </p>";
    $days = array ("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday.");  
    echo "$days[0], $days[1], $days[2], $days[3], $days[4], $days[5], $days[6]"; 

    echo "<p>The days of the week in French are: </p>";
    $fdays = array ("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi."); 
    echo "$fdays[0], $fdays[1], $fdays[2], $fdays[3], $fdays[4], $fdays[5], $fdays[6]"; 
?>
</body> 
</html>

