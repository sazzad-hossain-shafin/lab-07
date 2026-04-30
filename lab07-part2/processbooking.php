<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Booking Confirmation</title>
</head>

<body>

<h1>Rohirrim Tour Booking Confirmation</h1>

<?php
// get values from form
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$age = $_POST["age"];
$species = $_POST["species"];
$food = $_POST["food"];
$partysize = $_POST["partysize"];

// booking options
$booking_array = array();

if (isset($_POST["accom"])) {
    $booking_array[] = "Accommodation";
}

if (isset($_POST["4day"])) {
    $booking_array[] = "Four-day tour";
}

if (isset($_POST["10day"])) {
    $booking_array[] = "Ten-day tour";
}

$booking = implode(" and ", $booking_array);

// display output
echo "<p>Welcome $firstname $lastname !</p>";
echo "<p>You are now booked on the $booking</p>";
echo "<p>Species: $species</p>";
echo "<p>Age: $age</p>";
echo "<p>Meal Preference: $food</p>";
echo "<p>Number of travellers: $partysize</p>";
?>

</body>
</html>