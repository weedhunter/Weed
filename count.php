<?php
// Define field size (rows x columns)
$rows = 5;
$cols = 5;

// Initialize the field with random weed counts (0 to 5 weeds per cell)
$field = [];
for ($r = 0; $r < $rows; $r++) {
    for ($c = 0; $c < $cols; $c++) {
        // Random number of weeds in each cell
        $field[$r][$c] = rand(0, 5);
    }
}

// Function to count total weeds in the field
function countTotalWeeds(array $field): int {
    $total = 0;
    foreach ($field as $row) {
        foreach ($row as $weeds) {
            $total += $weeds;
        }
    }
    return $total;
}

// Function to print the field grid
function printField(array $field): void {
    echo "Field Weed Distribution (weeds per cell):\n";
    foreach ($field as $row) {
        foreach ($row as $weeds) {
            echo str_pad($weeds, 3, ' ', STR_PAD_LEFT);
        }
        echo "\n";
    }
}

// Display the field
printField($field);

// Count total weeds
$totalWeeds = countTotalWeeds($field);
echo "\nTotal number of weeds in the field: $totalWeeds\n";

// Optional: Count weeds per row
echo "\nWeed count per row:\n";
foreach ($field as $index => $row) {
    $rowCount = array_sum($row);
    echo "Row " . ($index + 1) . ": $rowCount weeds\n";
}
?>
