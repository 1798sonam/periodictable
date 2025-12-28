<?php
include 'config.php';

$market_research= [
    
        "Science" => "science.php",
        "Commerce" => "commerce.php",
        "Arts" => "arts.php"
];





?>

<!DOCTYPE html>
<html>
<head>
<title>School</title>
 <link rel="stylesheet" href="style.css" />
</head>

<body>


<?php include 'header.php' ?>


<?php
$depth = [
    ['title'=>'School','url'=>'school.php']
];
pageDepth($depth);
?>
<h2 align="center">School</h2>



<div class="table">
    <?php foreach ($market_research as $ministry => $link) { ?>
        <a href="<?= $link ?>">
            <div class="element">
                <div class="name"><?= htmlspecialchars($ministry) ?></div>
            </div>
        </a>
    <?php } ?>
</div>


<?php include 'footer.php' ?>
</body>
</html>
