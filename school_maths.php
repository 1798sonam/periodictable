<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Maths</title>

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="style.css" />
<style>

  .grid-wrapper {
    position: relative;
  }
  .grid {
    display: grid;
    grid-template-columns: repeat(10, 30px);
    grid-template-rows: repeat(10, 30px);
  }
  .cell {
    width: 30px;
    height: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
    border: 1px solid #333;
    font-size: 12px;
  }
  /* .cell.odd {
    background-color: orange;
    color: white;
  } */
  /* X-axis below grid */
  .x-axis {
    display: grid;
    grid-template-columns: repeat(10, 30px);
    margin-top: 5px;
  }
  .x-axis div {
    text-align: center;
    font-weight: bold;
  }
  /* Y-axis right side */
  .y-axis {
    display: grid;
    grid-template-rows: repeat(10, 30px);
    margin-left: 5px;
  }
  .y-axis div {
    text-align: center;
    font-weight: bold;
  }
</style>
</head>

<body>
<?php include 'header.php'; ?>



<div class="container py-5">
    <h2 class="text-center mb-4 fw-bold">Maths</h2>

    <div class="row g-3">
        <?php
        $maths = [
            "Logic Gates",
            "Intregation",
            "Differentiation"
        ];

        // Loop through array to generate buttons
        foreach($maths as $math) {
            echo '<div class="col-lg-3 col-md-4 col-sm-6">';
            echo '<a href="#" class="branch-btn">'.$math.'</a>';
            echo '</div>';
        }
        ?>
    </div>
</div>




<div class="container" style="display:flex;">
  <div class="grid-wrapper">
    <div class="grid" id="grid"></div>
    <div class="x-axis" id="x-axis"></div>
  </div>
  <div class="y-axis" id="y-axis"></div>
</div>

<script>
  const grid = document.getElementById('grid');
  const xAxis = document.getElementById('x-axis');
  const yAxis = document.getElementById('y-axis');

  // Fill grid with 1 to 100
  let number = 1;
  for (let i = 1; i <= 100; i++) {
    const cell = document.createElement('div');
    cell.classList.add('cell');
    if (number % 2 !== 0) cell.classList.add('odd'); // odd number highlight
    cell.textContent = number;
    grid.appendChild(cell);
    number++;
  }

  // X-axis labels 1-10
  for (let i = 1; i <= 10; i++) {
    const div = document.createElement('div');
    div.textContent = i;
    xAxis.appendChild(div);
  }

  // Y-axis labels 1-10
  for (let i = 1; i <= 10; i++) {
    const div = document.createElement('div');
    div.textContent = i;
    yAxis.appendChild(div);
  }
</script>




<?php include 'footer.php' ?>
</body>
</html>


