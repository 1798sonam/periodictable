<?php
include 'config.php';
$result = mysqli_query($con, "SELECT * FROM elements ORDER BY atomic_number ASC");




?>

<!DOCTYPE html>
<html>
<head>
<title>Periodic Table</title>
 <link rel="stylesheet" href="style.css" />
</head>

<body>


<?php include 'header.php' ?>



<h2 align="center">Periodic Table</h2>

<div class="table">
<?php while($row = mysqli_fetch_assoc($result)) { ?>
    <a href="element.php?id=<?=$row['id']?>">
        <div class="element">
            <div class="atomic"><?=$row['atomic_number']?></div>
            <div class="symbol"><?=$row['symbol']?></div>
            <div class="name"><?=$row['name']?></div>
        </div>
    </a>
<?php } ?>
</div>

<?php include 'footer.php' ?>
</body>
</html>
