document.addEventListener('DOMContentLoaded', function() {

    // Assume some condition, for example, a variable named isLoggedIn
    var isLoggedIn = true;

    // Get the link element by its ID
    var myLink = document.getElementById('logRef');

    // Check the condition and set the href accordingly
    if (isLoggedIn) {
        myLink.href = 'http://localhost/ProyectoFinal/WebProject/pages/logout.php';
        const botonLogin = document.getElementById('logRef');
        botonLogin.textContent = 'Log Out';
    } else {
        const botonLogin = document.getElementById('logRef');
        botonLogin.textContent = 'Error';
        myLink.href = 'http://localhost/ProyectoFinal/WebProject/pages/login.php';
    }
});