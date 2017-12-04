<?php
$cars = array("Volvo", "BMW", "Toyota", "Hyundai", "Mazda", "Alfa Romeo");
$poll = new stdClass();
$poll->title = "What is your favorite car maker?";
$poll->choices = $cars;

$myJSON = json_encode($poll);
echo $myJSON;
?>