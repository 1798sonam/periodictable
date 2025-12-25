<?php
include 'config.php';

$departments= [
            "Concept Visualization" => "#",
            "Budgeting Team" => "#",
            "Investor Relations" => "#",
            "Product Development" => "#",
            "Quality and Standards" => "#",
            "Manufacturing" => "#",
            "Production" => "#",
            "Operations and Logistics" => "#",
            "Business Development" => "#",
            "Marketing" => "#",
            "Sales" => "#",
            "IT Automation" => "#",
            "Research and Development" => "#",
            "Finance and Accounts" => "#",
            "Legal and Compliance" => "#",
            "Administration" => "#",
            "Closed-Loop Feedback and Research Optimization" => "#"

];


?>

<!DOCTYPE html>
<html>
<head>
<title>Department</title>
 <link rel="stylesheet" href="style.css" />
</head>

<body>


<?php include 'header.php' ?>



<h2 align="center">Department</h2>



<div class="table" style="grid-template-columns: repeat(10, 1fr) !important;">
    <?php foreach ($departments as $department => $link) { ?>
        <a href="<?= $link ?>">
            <div class="element">
                <div class="name"><?= htmlspecialchars($department) ?></div>
            </div>
        </a>
    <?php } ?>
</div>


<?php include 'footer.php' ?>
</body>
</html>
