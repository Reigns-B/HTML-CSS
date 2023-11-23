<?php
// Function to calculate the surface area of a cylinder
function calculateCylinderSurfaceArea($radius, $height) {
    $cylinderArea = 2 * M_PI * $radius * ($radius + $height);
    return $cylinderArea;
}

// Function to calculate the volume of a cylinder
function calculateCylinderVolume($radius, $height) {
    $cylinderVolume = M_PI * pow($radius, 2) * $height;
    return $cylinderVolume;
}

// Check if user provided values
if (isset($_POST['radius']) && isset($_POST['height'])) {
    // Get the dimensions from user input
    $radius = floatval($_POST['radius']);
    $height = floatval($_POST['height']);

    // Calculate the surface area and volume
    $surfaceArea = calculateCylinderSurfaceArea($radius, $height);
    $volume = calculateCylinderVolume($radius, $height);

    // Display the results
    echo "Cylinder Surface Area: " . $surfaceArea . " square units<br>";
    echo "Cylinder Volume: " . $volume . " cubic units";
} else {
    // Display a form to input the dimensions
    echo "<form method='POST' action=''>
            Enter the radius of the cylinder: <input type='text' name='radius'><br>
            Enter the height of the cylinder: <input type='text' name='height'><br>
            <input type='submit' value='Calculate'>
          </form>";
}
?>
