<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/icons/homeIcon.svg" type="image/x-icon">
    <link rel="stylesheet" href="./styles/reset.css">
    <link rel="stylesheet" href="./styles/nav.css">
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/buttons/buttonOne.css">
    <link rel="stylesheet" href="./styles/buttons/buttonTwo.css">
    <link rel="stylesheet" href="./styles/footer.css">

    <title>Home</title>
</head>

<body>


    <section class="layout">
        <div class="header">
            <?php
            include './components/nav.html'
            ?>
        </div>

        <div class="section1">
            <img class="logo-itch" src="./assets/images/ITCH II.png" alt="imagen">
        </div>

        <div class="section2">

            <h1 class="titulo_index">Mantenimiento de la Infraestructura y Equipo</h1>
            <p class="texto_index">Cubrir el servicio de mantenimiento de la Infraestructura y equipo del Instituto Tecnológico de Chihuahua II.</p>
            <button class="botonOne">Login &rightarrow;</button>
            <br>
            <button class="botonTwo">Mantenimientos En Progreso</button>

        </div>
        <div class="footer">
            <?php
            include './components/footer.html'
            ?>
        </div>
    </section>

</body>

</html>