<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Physics</title>

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css" />

</head>

<body>
<?php include 'header.php'; ?>
<?php
$depth = [
    ['title'=>'School','url'=>'school.php'],
    ['title'=>'Science','url'=>'science.php'],
    ['title'=>'Physics','url'=>'school_physics.php']
];
pageDepth($depth);
?>

<div class="container py-5">
    <h2 class="text-center mb-4 fw-bold">Physics</h2>

    <div class="row g-3">
        <?php
        $physics = [
            "Force",
            "Magnetisam",
            "Electricity",
            "Dual Nature"
        ];

        // Loop through array to generate buttons
        foreach($physics as $degree) {
            echo '<div class="col-lg-3 col-md-4 col-sm-6">';
            echo '<a href="#" class="branch-btn">'.$degree.'</a>';
            echo '</div>';
        }
        ?>
    </div>
</div>

<?php include 'footer.php' ?>
</body>
</html>
