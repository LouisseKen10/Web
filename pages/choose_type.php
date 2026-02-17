<?php include("../includes/header.php"); ?>
<?php include("../includes/nav.php"); ?>

<div class="container">
    <h2>Select Checkup Type</h2>

    <button class="back-btn" onclick="history.back()">← Back</button>

    <a class="card" href="doctor_list.php?type=obgyn">
        <h3>OB-GYN Consultation</h3>
    </a>

    <a class="card" href="doctor_list.php?type=pedia">
        <h3>Pediatric Checkup</h3>
    </a>

    <a class="card" href="doctor_list.php?type=general">
        <h3>General Checkup</h3>
    </a>
</div>

<?php include("../includes/footer.php"); ?>
