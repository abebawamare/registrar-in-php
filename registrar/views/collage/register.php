<?php
require '../../core/Collage.php';
$txtName = $_POST['txtName'];
$txtPhone = $_POST['txtPhone'];
$collage = new Collage();
$collage->setName($txtName);
$collage->setPhone($txtPhone);
$is_success = $collage->register($collage);
if ($is_success == true) {
    echo "Record saved successfully.";
} else {
 echo "Sorry, Something went wrong. Try again.";
}

