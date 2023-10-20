<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="project in using grid_CSS.css">
</head>
<?php
  session_start();
?>
<body id="farea">
    <div id="header">
        <div id="logo">
            <img src="log.jpg">
        </div>
        <div id="title">
            <h1>Bus Ticket Booking System</h1>
        </div>
        <div id="login">
            <a id="rg" href="Signup.php">SignUp</a>
            <a id="lg" href="login.php"><?php  echo "Welcom ".$_SESSION['name'];?> Login</a>
        </div>
    </div>
    <div id="navigation">
        <a id="home" class="nvigL" href="project in using grid.html">Home</a>
        <div class="dropdown">
            <h3 class="nvigL">Dashboard</h3>
            <div class="dropdown-content">
                <a href="adminpanel.html">Admin</a>
                <a href="user.html">User</a>
                <a href="#">Buses</a>
                <a href="routes.html">Routes</a>
                <a href="shedule.html">Schedule</a>
                <a href="fare.html">Fare</a>
                <!-- <a href="#">Available Seats</a> -->
            </div>
        </div>
        <a id="admin" class="nvigL" href="booking.html">Booking</a>
        <a id="passenger" class="nvigL" href="announcement.html">Announcement</a>
        <a id="About" class="nvigL" href="about.html">AboutUs</a>
        <a id="contact" class="nvigL" href="contact.html">ContactUs</a>
        <a id="feedback" class="nvigL" href="faq.html">FAQ</a>
    </div>
    <div id="Content">

    </div>
    <div id="footer">
        <br><br><br>
        <a id="ft" href="terms">Terms of Service</a>
        <a id="ft" href="contact">Contact Us</a>
        <a id="ft" href="about">About Us</a>
    </div>
</body>

</html>