<?php
require_once 'dbconnect.php';
require_once 'rolet.php';
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: Sign-in-page.php");
    exit;
}

$userId = $_SESSION["id"];
$userEmri = $_SESSION["emri"];
$userMbiemri = $_SESSION["mbiemri"];
$roli = $roli = isset($_SESSION["role"]) ? $_SESSION["role"] : "user"; // Retrieve the user's role  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="Admin-dashboard.css">
</head>
<body>
    <div class="div1">
        <div class="userdashboard">
            <img class="userprofile" src="profileicon.png" alt="">
            <div class="teksti">
                <div class="text1"><b><p>USER ID: <?php echo $userId; ?></p></b></div>
                <div class="text1"><b><p>EMRI: <?php echo $userEmri; ?></p> </b></div>
                <div class="text1"><b><p>MBIEMRI: <?php echo $userMbiemri; ?></p></b></div>
                <div class="text1"><b><p>ROLI: <?php echo $roli; ?></p></b></div>
            </div>
            <div class="buttonat">
                <?php if ($roli == "user"): ?>
                    <a href="logout.php"><button class="Signout-button"><b>SIGN OUT</b></button></a>
                <?php elseif ($roli == "admin"): ?>
                    <a href="Changepassword.php"><button class="Changepassword"><b>CHANGE PASSWORD</b></button></a>
                    <a href="userlist.php"><button class="Userlist"><b>VIEW USERS</b></button></a>
                    <a href="logout.php"><button class="Signout-button1" ><b>SIGN OUT</b></button></a>
                <?php endif; ?>
            </div>

        </div>
    </div>
</body>
</html>