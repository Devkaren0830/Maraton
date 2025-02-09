<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Navegación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./styles/header.css">
    <link rel="stylesheet" href="./styles/Main.css">
</head>
<body>

    <!-- Menú de navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <!-- Logo o título del sitio -->
            <a class="navbar-brand" href="#">Maratón</a>

            <!-- Botón hamburguesa para dispositivos pequeños -->
            <button class="navbar-toggler btn_navbar" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Enlaces del menú -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target=".navbar-collapse.show">INFORMACIÓN GENERAL</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target=".navbar-collapse.show">MM24</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target=".navbar-collapse.show">PAQUETES DE VIAJE TERRANOVA</a>
                    </li>
                </ul>
                
            </div>
        </div>
    </nav>

    <!-- Incluyendo Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        let boton = document.querySelector('.btn_navbar');
        boton.addEventListener("click", function    () {
            
        });

        document.addEventListener("DOMContentLoaded", function () {
            var navLinks = document.querySelectorAll(".nav-link");
            var navbarToggler = document.querySelector(".navbar-toggler");
    
            navLinks.forEach(function (link) {
                link.addEventListener("click", function () {
                    var navbarCollapse = document.querySelector(".navbar-collapse");
                    if (window.innerWidth < 992 && navbarCollapse.classList.contains("show")) {
                        navbarToggler.click(); // Simula el clic en el botón para cerrar el menú
                    }
                });
            });
        });
    </script>
    
    
</body>
</html>
