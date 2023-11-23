<?php
$age = (int)readline("Enter your age");

switch ($age) {
    case ($age >= 12 && $age <= 17):
        echo "Try Next Year";
        break;
    case ($age >= 18 && $age <= 25):
        echo "Entry Level";
        break;
    case ($age >= 26 && $age <= 35):
        echo "Intermediate Level";
        break;
    case ($age >= 36 && $age <= 50):
        echo "Advanced Level";
        break;
    default:
        echo "Try Another Course";
        break;
}
?>
