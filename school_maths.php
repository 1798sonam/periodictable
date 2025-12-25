<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Maths</title>

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="style.css" />

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


<?php include 'footer.php' ?>
</body>
</html>


