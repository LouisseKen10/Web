<?php include("../includes/header.php"); ?>
<?php include("../includes/nav.php"); ?>

<div class="container">
    <h2>Select Hospital</h2>

    <button class="back-btn" onclick="history.back()">← Back</button>

    <div class="card">
        <h3>Angeles Medical Center</h3>
        <p>Available Rooms: 3</p>
        <a class="btn" href="choose_type.php">Make Appointment</a>
    </div>

    <div class="card">
        <h3>Holy Family Hospital</h3>
        <p>Available Rooms: 5</p>
        <a class="btn" href="choose_type.php">Make Appointment</a>
    </div>
</div>

<?php include("../includes/footer.php"); ?>
