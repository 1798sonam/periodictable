<?php
include 'config.php';

$id = intval($_GET['id']);
$query = mysqli_query($con, "SELECT * FROM elements WHERE id=$id");
$data = mysqli_fetch_assoc($query);

if(!$data){
    echo "Element not found";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title><?=$data['name']?> Details</title>
<style>
body{
    font-family:Arial;
    background:#f4f6f8;
}
.card{
    max-width:500px;
    background:#fff;
    margin:50px auto;
    padding:20px;
    border-radius:8px;
    box-shadow:0 3px 10px rgba(0,0,0,.15);
}
h2{
    text-align:center;
}
.row{
    margin:8px 0;
}
.label{
    font-weight:bold;
}
.back{
    display:block;
    margin-top:15px;
    text-align:center;
}

h3{
    margin-top:20px;
    color:#333;
}
.row{
    margin-bottom:10px;
    background:#f8f9fa;
    padding:8px;
    border-radius:5px;
}


</style>
</head>

<body>

<div class="card">
<h2><?=$data['name']?> (<?=$data['symbol']?>)</h2>

<div class="row"><span class="label">Atomic Number:</span> <?=$data['atomic_number']?></div>
<div class="row"><span class="label">Atomic Weight:</span> <?=$data['atomic_weight']?></div>
<div class="row"><span class="label">Group:</span> <?=$data['group_no']?></div>
<div class="row"><span class="label">Period:</span> <?=$data['period_no']?></div>
<div class="row"><span class="label">Category:</span> <?=$data['category']?></div>
<div class="row"><span class="label">State:</span> <?=$data['state']?></div>
<div class="row"><span class="label">Discovered By:</span> <?=$data['discovered_by']?></div>

<p><?=$data['description']?></p>

<h3>SWOT Analysis</h3>

<div class="row">
    <strong>Strength:</strong><br>
    <?=$data['strength'];?>
</div>

<div class="row">
    <strong>Weakness:</strong><br>
    <?=$data['weakness'];?>
</div>

<div class="row">
    <strong>Opportunity:</strong><br>
    <?=$data['opportunity'];?>
</div>

<div class="row">
    <strong>Threat:</strong><br>
    <?=$data['threat'];?>
</div>



<a class="back" href="index.php">⬅ Back to Periodic Table</a>
</div>



</body>
</html>
