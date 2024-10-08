<!--Sky Reekie SN#3809237 BIT608 Assesment 3-->
<!--Doctype and Language-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="
    default-src 'self';
    script-src 'self';
    style-src 'self' https://fonts.googleapis.com 'unsafe-inline';
    font-src 'self' https://fonts.gstatic.com;
    img-src 'self';
    object-src 'none';
    frame-src 'self' https://www.google.com;
    upgrade-insecure-requests;">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href='stylesheet.css' rel='stylesheet'>
</head>

<!--------------------------------->
<!--Nav Bar-->
<!--------------------------------->
<body>
    <header>
        <div class="wrapper">
            <div class="logo">
                <a href="index.html">
                    <img src="../BIT608_AS3_Images/graphic.png" alt="Logo" height="100" width="240">
                </a>
            </div>

            <nav id="navbar">
                <a href="index.html">Home</a>
                <a href="NewCustomer.php">New Customer</a>
                <a href="CustomerDashboard.php">Customer Dashboard</a>
                <a href="AdminDashboard.php">Admin Dashboard</a>
            </nav>
            <div class="mobile-menu-icon" onclick="toggleMenu()">
                ☰
            </div>
        </div>
    </header>
    <div class="centered-content">
    <h1>The Motueka Bed & Breakfast<br></h1></div>
</body>

<?php
session_start();

// Check if the user is an admin
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}
?>
<div class="centered-content">
    <h2>Admin Dashboard</h2>
    <!-- Links to return to bookings list and homepage -->
    <a href="CurrentBookingsList.php" style="font-size: 20px;">[Current bookings list]</a>
    <a href="CreateBooking.php" style="font-size: 20px;">[Create a Booking]</a>
    <a href="Logout.php" style="font-size: 20px;">[Logout]</a>
</div>
<hr class="hr-line">

<!-- Page Footer -->
<div class="pagefooter">
<a href="PrivacyPolicy.php">Privacy Policy</a>
</div>
</body>
</html>