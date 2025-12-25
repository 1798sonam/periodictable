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
  .cell.odd {
    background-color: orange;
    color: white;
  }
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
