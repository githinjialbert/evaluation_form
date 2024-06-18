<?php 

require_once 'eval_model.inc.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fname = htmlspecialchars(trim($_POST["fname"]));
    $lname = htmlspecialchars(trim($_POST["lname"]));
    $age = intval($_POST["age"]);
    $impression = htmlspecialchars(trim($_POST["impression"]));
    $rating = intval($_POST["rating"]);
    $improvement = htmlspecialchars(trim($_POST["improvement"]));
}

//ERRORS

$errors = [];

if (empty($fname) || empty($lname) || empty($age) || empty($impression) || empty($rating) || empty($improvement)) {
    $errors["empty_input"] = "All fields are required.";
}

if ($age <= 0 || $age > 120) {
    $errors["incorrect_age"] = "Please enter a valid age.";
}

if ($rating < 1 || $rating > 5) {
    $errors["incorrect_rating"] = "Please enter a valid rating.";
}

if (strlen($impression) > 1000) {
    $errors["extra_chars"] = "Impression should not exceed 1000 characters.";
}