<?php
// Number of weed plants to display
$plantCount = 5; // You can change this number or get it from user input

// Simple SVG plant as a string (same as previous example but smaller)
$plantSVG = <<<SVG
<svg width="60" height="90" viewBox="0 0 200 300" xmlns="http://www.w3.org/2000/svg">
  <rect x="95" y="180" width="10" height="80" fill="#3b5e2b"/>
  <polygon points="100,180 120,80 100,100 80,80" fill="#4CAF50" stroke="#2e7d32" stroke-width="2"/>
  <polygon points="100,180 60,120 80,130 90,120" fill="#388E3C" stroke="#2e7d32" stroke-width="2"/>
  <polygon points="100,180 140,120 120,130 110,120" fill="#388E3C" stroke="#2e7d32" stroke-width="2"/>
  <polygon points="100,200 40,170 70,170 90,180" fill="#43A047" stroke="#2e7d32" stroke-width="2"/>
  <polygon points="100,200 160,170 130,170 110,180" fill="#43A047" stroke="#2e7d32" stroke-width="2"/>
  <polygon points="100,100 110,60 100,70 90,60" fill="#66BB6A" stroke="#2e7d32" stroke-width="2"/>
</svg>
SVG;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Weed Trees Count</title>
  <style>
    body {
      background: #e8ffe8;
      font-family: Arial, sans-serif;
      text-align: center;
      padding: 20px;
    }
    .plant-container {
      display: flex;
      justify-content: center;
      gap: 15px;
      flex-wrap: wrap;
      margin-bottom: 20px;
    }
    .plant {
      width: 60px;
      height: 90px;
    }
    h1 {
      color: #2e7d32;
    }
  </style>
</head>
<body>

  <h1>Weed Trees Count: <?php echo $plantCount; ?></h1>

  <div class="plant-container">
    <?php
      for ($i = 0; $i < $plantCount; $i++) {
        echo '<div class="plant">' . $plantSVG . '</div>';
      }
    ?>
  </div>

</body>
</html>
