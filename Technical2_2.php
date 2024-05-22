<?php
// Define the functions to calculate the volume of each shape
function volume_cube($side_length) {
    return pow($side_length, 3);
}

function volume_rectangular_prism($length, $width, $height) {
    return $length * $width * $height;
}

function volume_cylinder($radius, $height) {
    return pi() * pow($radius, 2) * $height;
}

function volume_cone($radius, $height) {
    return (1/3) * pi() * pow($radius, 2) * $height;
}

function volume_sphere($radius) {
    return (4/3) * pi() * pow($radius, 3);
}

// Formulas array
$formulas = [
    "Cube" => "V = s<sup>3</sup>",
    "Right Rectangular Prism" => "V = l × w × h",
    "Cylinder" => "V = π r<sup>2</sup> h",
    "Cone" => "V = (1/3) π r<sup>2</sup> h",
    "Sphere" => "V = (4/3) π r<sup>3</sup>"
];

// Example values for calculations
$example_values = [
    "Cube" => 'side_length = 3',
    "Right Rectangular Prism" => 'length = 3, width = 4, height = 5',
    "Cylinder" => 'radius = 3, height = 5',
    "Cone" => 'radius = 3, height = 5',
    "Sphere" => 'radius = 3'
];

// Calculated volumes
$volumes = [
    "Cube" => volume_cube(3),
    "Right Rectangular Prism" => volume_rectangular_prism(3, 4, 5),
    "Cylinder" => volume_cylinder(3, 5),
    "Cone" => volume_cone(3, 5),
    "Sphere" => volume_sphere(3)
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volume Calculations</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Volume Calculations</h1>
    <table>
        <thead>
            <tr>
                <th>Shape</th>
                <th>Values</th>
                <th>Formula</th>
                <th>Volume</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($formulas as $shape => $formula): ?>
                <tr>
                    <td><?php echo $shape; ?></td>
                    <td><?php echo $example_values[$shape]; ?></td>
                    <td><?php echo $formula; ?></td>
                    <td><?php echo number_format($volumes[$shape], 2); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
