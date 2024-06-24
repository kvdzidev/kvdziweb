<?php
require_once 'Review.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $reviewText = $_POST['review'];
    $time = getdate(); 


    $newReview = new Review($name, $reviewText, $time);

    session_start();
    if (!isset($_SESSION['reviews'])) {
        $_SESSION['reviews'] = [];
    }
    $_SESSION['reviews'][] = $newReview;

    header('Location: reviews.php');
    exit();
}
?>
