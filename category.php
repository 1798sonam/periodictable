<?php
include 'db.php';

$category = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM categories LIMIT 1"));

$branches = mysqli_query($con,"
    SELECT * FROM branches 
    WHERE category_id={$category['id']}
");
?>
<!DOCTYPE html>
<html>
<head>
<title>Mind Map</title>
<style>

    body{
    margin:0;
    background:#f6f9fc;
    font-family: 'Segoe UI', sans-serif;
}

.mindmap-wrapper{
    position:relative;
    width:100%;
    height:100vh;
}

.center-node{
    position:absolute;
    top:50%;
    left:40%;
    transform:translate(-50%,-50%);
    background:#6dd5c6;
    padding:18px 35px;
    border-radius:30px;
    font-size:26px;
    font-weight:600;
    color:#055;
}

.connections{
    position:absolute;
    width:100%;
    height:100%;
}

.connections path{
    fill:none;
    stroke:#9be3d5;
    stroke-width:3;
}

.right-branches{
    position:absolute;
    right:60px;
    top:100px;
    display:flex;
    flex-direction:column;
    gap:60px;
}

.branch-title{
    background:#8ee0d1;
    padding:10px 20px;
    border-radius:20px;
    font-weight:600;
    margin-bottom:10px;
}

.course{
    background:#e8f7f4;
    padding:8px 15px;
    border-radius:15px;
    margin:6px 0;
    width:200px;
    transition:0.3s;
}

.course:hover{
    background:#6dd5c6;
    color:#fff;
    transform:translateX(8px);
}

</style>
</head>
<body>

<div class="mindmap-wrapper">

    <!-- CENTER NODE -->
    <div class="center-node">
        <?= $category['name'] ?>
    </div>

    <!-- SVG CONNECTIONS -->
    <svg class="connections" viewBox="0 0 1000 600">
        <?php
        $y = 150;
        while($b = mysqli_fetch_assoc($branches)){
            echo "<path d='M500 300 C650 300, 650 $y, 750 $y' />";
            $y += 120;
        }
        ?>
    </svg>

    <!-- RIGHT SIDE BRANCHES -->
    <div class="right-branches">
        <?php
        mysqli_data_seek($branches,0);
        while($b = mysqli_fetch_assoc($branches)){
        ?>
        <div class="branch">
            <div class="branch-title"><?= $b['name'] ?></div>

            <?php
            $courses = mysqli_query($con,"SELECT * FROM courses WHERE branch_id={$b['id']}");
            while($c = mysqli_fetch_assoc($courses)){
            ?>
                <div class="course"><?= $c['name'] ?></div>
            <?php } ?>
        </div>
        <?php } ?>
    </div>

</div>

</body>
</html>
