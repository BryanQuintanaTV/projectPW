<?php
session_start();

if (!isset($_SESSION['profile']) || ($_SESSION['profile'] != "admin" && $_SESSION['profile'] != "tecnico")) {
    header("location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tecnico Dashboard</title>
    <!-- Styles -->
    <link rel="stylesheet" href="../styles/reset.css">
    <link rel="stylesheet" href="../styles/layout.css">
    <link rel="stylesheet" href="../styles/nav.css">
    <link rel="stylesheet" href="../styles/footer.css">

    <!-- <script src="../js/changeLogStatus.js"></script> -->
</head>

<body>

    <section class="layout">
        <div class="header">
            <?php include '../components/nav.html' ?>
        </div>
        <div class="main">
            jjj
        </div>
        <div class="footer">
            <?php include '../components/footer.html' ?>
        </div>
    </section>

</body>


<script src="../js/changeLogStatus.js"> </script>

</html>

<!-- <h1>Dashboard</h1>
<p>Welcome, <?php echo ucfirst($_SESSION['profile']); ?>!</p>
<a href="logout.php">Logout</a> -->