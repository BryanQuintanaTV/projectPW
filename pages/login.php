<?php
include 'db.php';


session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password, profile FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['profile'] = $row['profile'];
            if ($_SESSION['profile'] == "admin") {
                header("location: admin_dashboard.php");
            }
            if ($_SESSION['profile'] == "tecnico") {
                header("location: technician_dashboard.php");
            } else {
                header("location: dashboard.php");
            }
        } else {
            echo "Password incorrect.";
        }
    } else {
        echo "Email no encontrado";
    }

    $stmt->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/icons/loginIcon.svg" type="image/x-icon">
    <title>Document</title>
    <!-- Styles -->
    <link rel="stylesheet" href="../styles/nav.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../styles/login.css">
    <link rel="stylesheet" href="../styles/inputs/inputOne.css">
    <link rel="stylesheet" href="../styles/buttons/buttonOne.css">
</head>

<body>

    <section class="layout">
        <div class="header">
            <?php include '../components/nav.html'; ?>
        </div>
        <div class="section1">

            <form action="login.php" method="post">
                <label for="email">Email</label><br>
                <input type="email" name="email" class="inputOne"> <br>

                <label for="password">Password</label><br>
                <input type="password" name="password" class="inputOne"><br><br>

                <input type="submit" value="Login" id="show1" class="botonOne">
            </form>

        </div>
        <div class="section2">

            <img src="../assets/images/login_page.svg" alt="imagen">

        </div>
        <div class="footer">
            <?php include '../components/footer.html' ?>

        </div>
    </section>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const componente = document.getElementById('botonLogin');
            componente.parentNode.removeChild(componente);
        });
    </script>


</body>

</html>