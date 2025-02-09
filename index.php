<?php

include_once('./Templates/header.php');
?>


<main class="site-main">
    <!-- Carrusel con Indicadores de Imágenes -->
    <section class="carousel-section">
        <div class="container mt-5">
            <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <!-- Slides del Carrusel -->
                <div class="carousel-inner">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <img src="./Images/uploads/2024/08/portada1-1-1019x1024.png" alt="">
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <img src="./Images/uploads/2024/08/portada2-1-1019x1024.png" alt="">
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item">
                        <img src="./Images/portada1-1-1019x1024.png" alt="">
                    </div>
                </div>

                <!-- Controles del Carrusel -->
                <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        </div>
    </section>

    <section class="container section-inscribete my-5">
        <div class="row g-4">
            <!-- Tarjeta 10K -->
            <div class="col-md-6">
                <div class="card div_card_inscribete">
                    <h5 class="card-title">INSCRIPCIONES 10K</h5>
                    <p class="card-text">¡Corre para disfrutar de una experiencia única!</p>
                    <button class="btn btn-register">INSCRÍBETE AHORA</button>
                </div>
            </div>

            <!-- Tarjeta 21K -->
            <div class="col-md-6">
                <div class="card div_card_inscribete">
                    <h5 class="card-title">INSCRIPCIONES 21K</h5>
                    <p class="card-text">¡Desafía tus límites en esta emocionante carrera!</p>
                    <button class="btn btn-register">INSCRÍBETE AHORA</button>
                </div>
            </div>
        </div>
    </section>


    <section class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="hero-section">
                    <h2 class="hero-title">¿Listo para correr Entre Montañas? ⛰️</h2>
                    <p class="hero-text">
                        La <strong>MM Entre Montañas</strong> te ofrece la oportunidad de combinar tu pasión por el running con la exploración de uno de los paisajes más emblemáticos de Colombia.
                        Corre 100% sobre asfalto, respira aire puro, disfruta de la brisa fresca de la montaña, del mejor paisaje natural de Colombia, de las emblemáticas casas pintorescas de Salento, del aroma a café y déjate envolver por la magia del Quindío.
                    </p>
                    <p class="hero-text">
                        Un evento sin igual en el Valle de Cocora. Corre rodeado de la majestuosa palma de cera y siente la adrenalina de una carrera inolvidable.
                    </p>
                    <p class="hero-text">
                        <strong>¡Sé parte de esta experiencia única y descubre por qué el Quindío es el destino favorito de los amantes de la naturaleza!</strong>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección principal más compacta -->
    <section class="container py-3">
        <div class="row text-center">
            <!-- Ítem 1 -->
            <div class="col-md-3 info-item">
                <div class="info-icon">
                    <img src="./Images/Icon/ico-fecha.svg" alt="" style="width: 80px; height: 80px;">
                </div>
                <div class="info-title" style="font-size: 16px;">FECHA</div>
                <div class="info-description" style="font-size: 14px;">JULIO 27/2025</div>
            </div>
            <!-- Ítem 2 -->
            <div class="col-md-3 info-item">
                <div class="info-icon">
                    <img src="./Images/Icon/ico-recorrido.svg" alt="" style="width: 80px; height: 80px;">
                </div>
                <div class="info-title" style="font-size: 16px;">DISTANCIAS</div>
                <div class="info-description" style="font-size: 14px;">21 K y 10 K</div>
            </div>
            <!-- Ítem 3 -->
            <div class="col-md-3 info-item">
                <div class="info-icon">
                    <img src="./Images/Icon/ico-zona.svg" alt="" style="width: 80px; height: 80px;">
                </div>
                <div class="info-title" style="font-size: 16px;">SALIDA Y META</div>
                <div class="info-description" style="font-size: 14px;">
                    P. Simón Bolívar<br>
                    Zona concentración: Plaza de Eventos
                </div>
            </div>
            <!-- Ítem 4 -->
            <div class="col-md-3 info-item">
                <div class="info-icon">
                    <img src="./Images/Icon/ico-kit.svg" alt="" style="width: 80px; height: 80px;">
                </div>
                <div class="info-title" style="font-size: 16px;">EXPOMEDIA</div>
                <div class="info-description" style="font-size: 14px;">
                    JULIO 24-26/2025<br>
                    Corferias
                </div>
            </div>
        </div>
    </section>



    <section class="container my-5" id="section_6">
        <div class="row gy-4">
            <!-- Primer bloque: Recorrido 21K -->
            <div class="col-md-6">
                <img src="./Images/uploads/2024/03/FOTO41-1024x768.jpg" class="rounded img-fluid" alt="Imagen 2">
            </div>
            <div class="col-md-6">
                <h3 class="fw-bold">Recorrido 21K</h3>
                <p>
                    ⛰️ La MM Entre Montañas te espera el 14 de septiembre en el Valle de Cócora. Disfruta de una carrera de 21 km sobre asfalto con vistas espectaculares de la Cordillera Central. Esta ruta inicia en la Plaza de Bolívar Salento, pasa por la calle real de Salento y alcanza su punto de retorno a los 10k en el emblemático restaurante Donde JuanB, encontraras la meta en la Plaza de Bolívar Salento. Disfruta de la vista de las majestuosas palmas de cera y de las típicas casas pintorescas de Salento, descubre la magia del Quindío. ¡Inscríbete ahora y sé parte de esta gran aventura!
                </p>
            </div>
            <!-- Segundo bloque: Recorrido 10K -->
            <div class="col-md-6 order-md-2">
                <img src="./Images/uploads/2024/03/FOTO38-1024x678.jpg" class="rounded img-fluid" alt="Imagen 1">
            </div>
            <div class="col-md-6 order-md-1">
                <h3 class="fw-bold">Recorrido 10K</h3>
                <p>
                    ¡Domina los 10K en el corazón del Quindío! ⛰️ La MM Entre Montañas te invita a poner a prueba tus límites el 14 de septiembre en el Valle de Cocora. Disfruta de un desafiante recorrido de 10 km sobre asfalto con vistas panorámicas de la Cordillera Central. Esta ruta inicia en la Plaza de Bolívar Salento, pasa por la calle real de Salento y alcanza su punto de retorno a los 5k, encontraras la meta en la Plaza de Bolívar Salento. Vive la emoción de la competencia, respira aire puro y descubre la magia del Quindío. "¿Eres un #runner de corazón? ¡Demuéstralo! Inscripciones abiertas para los más locos por correr."
                </p>
            </div>
        </div>
    </section>


    <section class="container my-5 text-center">
        <div class="d-flex justify-content-center align-items-center gap-3">
            <span class="custom-text">PLANEA TU VIAJE</span>
            <button class="custom-button" id="bton_viaje">HAZ TU PLAN</button>
        </div>
    </section>

    <section class="container my-5 d-flex gap-1 flex-column" id="section_8">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center gap-2">
                        <img src="./Images/uploads/2024/03/FOTO01-768x576.jpg" class="rounded img-fluid" alt="Imagen 1">
                        <img src="./Images/uploads/2024/03/FOTO02-600x450.png" class="rounded img-fluid" alt="Imagen 2">
                        <img src="./Images/uploads/2024/03/FOTO03-768x576.png" class="rounded img-fluid" alt="Imagen 3">
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center gap-2">
                        <img src="./Images/uploads/2024/03/FOTO20-1-1024x768.jpg" class="rounded img-fluid" alt="Imagen 4">
                        <img src="./Images/uploads/2024/03/FOTO28.jpg-1024x768.jpg" class="rounded img-fluid" alt="Imagen 5">
                        <img src="./Images/uploads/2024/03/FOTO33-1.jpg-1-768x576.jpg" class="rounded img-fluid" alt="Imagen 6">
                    </div>
                </div>
                <!-- Slide 3 (Solo 2 imágenes) -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center gap-2">
                        <img src="./Images/uploads/2024/03/FOTO34-1024x769.jpg" class="rounded img-fluid" alt="Imagen 7">
                        <img src="./Images/uploads/2024/03/FOTO37-1024x678.jpg" class="rounded img-fluid" alt="Imagen 8">
                    </div>
                </div>
            </div>
            <!-- Controles de navegación -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>
        <div id="carouselExample_2" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center gap-2">
                        <img src="./Images/uploads/2024/03/FOTO38-1024x678.jpg" class="rounded img-fluid" alt="Imagen 1">
                        <img src="./Images/uploads/2024/03/FOTO41-1024x768.jpg" class="rounded img-fluid" alt="Imagen 2">
                        <img src="./Images/uploads/2024/03/group-legs-runners-athletes-6VAUFLN-1-768x512.jpg" class="rounded img-fluid" alt="Imagen 3">
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center gap-2">
                        <img src="./Images/uploads/2024/03/FOTO20-1-1024x768.jpg" class="rounded img-fluid" alt="Imagen 4">
                        <img src="./Images/uploads/2024/03/FOTO28.jpg-1024x768.jpg" class="rounded img-fluid" alt="Imagen 5">
                        <img src="./Images/uploads/2024/03/FOTO33-1.jpg-1-768x576.jpg" class="rounded img-fluid" alt="Imagen 6">
                    </div>
                </div>
                <!-- Slide 3 (Solo 2 imágenes) -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center gap-2">
                        <img src="./Images/uploads/2024/03/FOTO34-1024x769.jpg" class="rounded img-fluid" alt="Imagen 7">
                        <img src="./Images/uploads/2024/03/FOTO37-1024x678.jpg" class="rounded img-fluid" alt="Imagen 8">
                    </div>
                </div>
            </div>
            <!-- Controles de navegación -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample_2" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample_2" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>
    </section>
</main>

<!-- Footer -->
<footer class="text-center text-white py-3 footer_marathon" style="background-color: #a9d18e;">
    <div class="container">
        <p class="mb-1"><i class="bi bi-whatsapp"></i> Whatsapp: 3142017745</p>
        <p class="mb-1"><i class="bi bi-envelope-fill"></i> Correo: mediamaratonentremontanas@gmail.com</p>
        <p class="mb-0"><i class="bi bi-clock-fill"></i> Horario de atención: 8 am a 12 m y de 2 pm a 6 pm de lunes a viernes</p>
    </div>
</footer>