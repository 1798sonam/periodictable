<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Doctorate / PhD Degrees</title>

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css" />

</head>

<body>
<?php include 'header.php'; ?>

<div class="container py-5">
    <h2 class="text-center mb-4 fw-bold">Doctorate / PhD Degrees</h2>

    <div class="row g-3">
        <?php
        // PhD / Doctorate degrees array
        $phdDegrees = [
            "PhD / DPhil - Doctor of Philosophy",
            "DM - Doctorate in Medicine",
            "MCh - Master of Chirurgiae (Surgery Specialty)",
            "EdD - Doctor of Education",
            "DBA - Doctor of Business Administration"
        ];

        // Loop through array to generate buttons
        foreach($phdDegrees as $degree) {
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
