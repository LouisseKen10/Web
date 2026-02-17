<?php include("../includes/header.php"); ?>
<?php include("../includes/nav.php"); ?>

<?php
$doctor = $_GET['doctor'] ?? "No appointment yet";
?>

<div class="container">

    <button class="back-btn" onclick="history.back()">← Back</button>

    <h2>My Ongoing Appointment</h2>

    <div class="card">
        <p><strong>Hospital:</strong> Angeles Medical Center</p>
        <p><strong>Doctor:</strong> Dr. Maria Santos</p>
        <p><strong>Checkup Type:</strong> Consultation</p>
        <p><strong>Status:</strong> Waiting in Queue</p>
    </div>

</div>

<?php include("../includes/footer.php"); ?>
