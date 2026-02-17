<?php include("../includes/header.php"); ?>
<?php include("../includes/nav.php"); ?>

<?php
$type = $_GET['type'] ?? "general";
$search = $_GET['search'] ?? "";
?>

<div class="container">

<button class="back-btn" onclick="history.back()">← Back</button>

<h2>Available Doctors</h2>

<form method="GET" style="text-align:right; margin-bottom:15px;">
    <input type="hidden" name="type" value="<?php echo $type; ?>">
    <input type="text" name="search" placeholder="Search doctor..."
           value="<?php echo $search; ?>">
    <button class="btn">Search</button>
</form>

<?php

$doctors = [];

if($type == "obgyn"){
    $doctors = [
        ["Dr. Maria Santos","OB-GYN",6],
        ["Dr. Angela Reyes","OB-GYN",4]
    ];
}
elseif($type == "pedia"){
    $doctors = [
        ["Dr. Juan Cruz","Pediatrician",3],
        ["Dr. Carla Mendoza","Pediatrician",5]
    ];
}
else{
    $doctors = [
        ["Dr. Ana Reyes","General Medicine",8],
        ["Dr. Mark Villanueva","General Medicine",2]
    ];
}


foreach($doctors as $doc){

    if($search != "" && stripos($doc[0], $search) === false){
        continue;
    }
?>
    <div class="card">
        <h3><?php echo $doc[0]; ?></h3>
        <p>Specialization: <?php echo $doc[1]; ?></p>
        <p>Queue: <?php echo $doc[2]; ?> Patients</p>

        <button class="btn"
        onclick="window.location.href='appointment_demo.php?doctor=<?php echo urlencode($doc[0]); ?>'">
        Appoint
        </button>
    </div>
<?php } ?>

</div>

<?php include("../includes/footer.php"); ?>
