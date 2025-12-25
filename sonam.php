<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>10x10 Grid with Axis</title>
<style>
  body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    margin-top: 50px;
  }
  .container {
    display: flex;
  }
  
</style>
</head>
<body>

<div class="container">
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

</body>
</html>
