<?php include("../includes/header.php"); ?>
<?php include("../includes/nav.php"); ?>

<div class="container">

    <button class="back-btn" onclick="history.back()">← Back</button>

    <h2>Contact Support</h2>

    <form class="card">
        <label>Your Name:</label><br>
        <input type="text" required><br><br>

        <label>Your Concern:</label><br>
        <textarea rows="4" required></textarea><br><br>

        <button class="btn">Send Message</button>
    </form>

</div>

<?php include("../includes/footer.php"); ?>
