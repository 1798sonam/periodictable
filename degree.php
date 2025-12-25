<?php
include 'config.php';

$category = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM categories LIMIT 1"));
$branches = mysqli_query($con,"SELECT * FROM branches WHERE category_id={$category['id']}");
$branchesArray = [];
while($b = mysqli_fetch_assoc($branches)){
    $branchesArray[] = $b;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Mind Map Animation</title>
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
    stroke-dasharray: 1000;
    stroke-dashoffset: 1000;
    animation: draw 1s forwards;
}

@keyframes draw {
    to {
        stroke-dashoffset: 0;
    }
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
    <div class="center-node" id="centerNode">
        <?= $category['name'] ?>
    </div>

    <!-- SVG CONNECTIONS -->
    <svg class="connections" id="connectionsSvg"></svg>

    <!-- RIGHT SIDE BRANCHES -->
    <div class="right-branches" id="rightBranches">
        <?php foreach($branchesArray as $b){ ?>
        <div class="branch" data-branch-id="<?= $b['id'] ?>">
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

<script>
// Draw lines dynamically with animation
window.onload = function(){
    const svg = document.getElementById('connectionsSvg');
    const center = document.getElementById('centerNode');
    const branches = document.querySelectorAll('.branch');

    const cx = center.offsetLeft + center.offsetWidth;
    const cy = center.offsetTop + center.offsetHeight/2;

    branches.forEach((branch, index) => {
        const rect = branch.getBoundingClientRect();
        const svgRect = svg.getBoundingClientRect();

        const startX = cx;
        const startY = cy;
        const endX = rect.left - svgRect.left;
        const endY = rect.top + branch.offsetHeight/2 - svgRect.top;

        const midX = startX + (endX - startX)/2;

        const path = document.createElementNS("http://www.w3.org/2000/svg","path");
        path.setAttribute("d", `M${startX},${startY} C${midX},${startY} ${midX},${endY} ${endX},${endY}`);
        path.setAttribute("stroke","#9be3d5");
        path.setAttribute("stroke-width","3");
        path.setAttribute("fill","none");

        // Animation delay for each path
        path.style.strokeDasharray = path.getTotalLength();
        path.style.strokeDashoffset = path.getTotalLength();
        path.style.animation = `draw 1s forwards ${index * 0.3}s`;

        svg.appendChild(path);
    });
};
</script>

</body>
</html>
