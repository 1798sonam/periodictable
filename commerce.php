<?php
include 'config.php';

$market_research= [
        "Accounting" => "#",
        "Economics" => "#",
        "Business Studies" => "#"
        // "Biology" => "school_biology.php",
        // "Evolution and Timeline" => "evolution_and_timeline.php"
];



?>

<!DOCTYPE html>
<html>
<head>
<title>Commerce</title>
 <link rel="stylesheet" href="style.css" />
</head>

<body>


<?php include 'header.php' ?>



<h2 align="center">Commerce</h2>



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
