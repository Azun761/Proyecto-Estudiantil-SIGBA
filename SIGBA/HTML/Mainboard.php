<?php
session_start();
require_once 'Conexion.php';

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario'])) {
    header("Location: Login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGBA - Recursos Humanos</title>
    <link rel="stylesheet" href="../CSS/Mainboardstyle.css">
</head>
<body>
    <!-- Información del usuario -->
    <div class="user-info">
        <img src="../IMG/perfil_default.png" alt="Foto de perfil" class="user-avatar">
        <span class="user-name"><?php echo $_SESSION['nombre'] . ' ' . $_SESSION['apellido']; ?></span>
        <span class="user-cargo">(<?php echo $_SESSION['cargo']; ?>)</span>
        <a href="Logout.php" class="logout-btn">Cerrar Sesión</a>
    </div>
    
    <nav class="sidebar" id="sidebar">
        <div class="logo-container" id="sidebarLogoContainer">
            <img src="LogoMIN.JPG" alt="Logo" class="logo-img">
            <span class="minhvi-label" id="sidebarMinhviLabel">MINHVI</span>
        </div>
        <ul>
            <li><a href="">Jornadas</a></li>
            <li><a href="">Buscar beneficiarios</a></li>
            <!-- Agrega más opciones aquí -->
        </ul>
    </nav>
    
    <div class="top-bar">
        <div class="logo-container" id="logoContainer">
            <img src="LogoMIN.JPG" alt="Logo" class="logo-img">
            <span class="minhvi-label" id="minhviLabel">MINHVI</span>
        </div>
        <button class="menu-btn" id="menuBtn" onclick="toggleSidebar()">☰</button>
    </div>
    
    <div class="main-content">
        <div class="welcome-title">Bienvenido a SIGBA, <?php echo $_SESSION['nombre']; ?></div>
        <!-- Aquí puedes agregar más contenido del dashboard -->
    </div>
    
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const sidebarLogoContainer = document.getElementById('sidebarLogoContainer');
            sidebar.classList.toggle('open');
            if (sidebar.classList.contains('open')) {
                sidebarLogoContainer.classList.add('show-label');
            } else {
                sidebarLogoContainer.classList.remove('show-label');
            }
        }
    </script>
</body>
</html>