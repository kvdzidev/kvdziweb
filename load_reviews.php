<?php
require_once 'Review.php';

$reviews = [
    new Review('Michael', 'Fast graphics delivery. Looks astonishing!', '53 mins ago'),
    new Review('Mainst', 'Amazing translation, cheap and fast, 112 pages translated in 4 days! Definitely will use services again.', '4 hrs ago'),
    new Review('SArid0', 'Edited my gaming video perfectly, exactly as I wanted it, cheers!', '2d ago')
];

if (isset($_SESSION['reviews'])) {
    $reviews = array_merge($reviews, $_SESSION['reviews']);
}

foreach ($reviews as $review) {
    $review->display();
}
?>
