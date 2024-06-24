<?php
abstract class ReviewBase {
    protected $name;
    protected $review;
    protected $time;

    public function __construct($name, $review, $time) {
        $this->name = $name;
        $this->review = $review;
        $this->time = $time;
    }

    abstract public function display();
}

class Review extends ReviewBase {
    public function display() {
        echo "
        <div class='toast align-items-center' role='alert' aria-live='assertive' aria-atomic='true'>
            <div class='toast-header'>
                <img src='star.png' class='rounded me-2' alt='star' style='width: 30px; height: 30px;'>
                <strong class='me-auto'>{$this->name}</strong>
                <small>{$this->time}</small>
                <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
            </div>
            <div class='toast-body'>
                {$this->review}
            </div>
        </div>
        ";
    }
}
?>
