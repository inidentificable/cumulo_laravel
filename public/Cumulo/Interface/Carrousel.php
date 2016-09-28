<?php
/**
 * Created by PhpStorm.
 * User: inidentificable
 * Date: 28-06-15
 * Time: 01:47 PM
 */
?>

<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="first-slide" src="/assets/imagenes/carr1.jpg" alt="First slide">

            <div class="container">
                <div class="carousel-caption">
                    <h1>Agrúpate</h1>

                    <p>Conoce nuevas empresas, comunicate con ellas y crea proyectos.</p>

                    <p><a class="btn btn-lg btn-primary" href="?i=CasosExito" role="button">Ver los casos de éxito</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="second-slide" src="/assets/imagenes/carr2.jpg" alt="Second slide">

            <div class="container">
                <div class="carousel-caption">
                    <h1>Comparte</h1>

                    <p>Construye redes, comparte tus experiencias, tus necesidades e ideas.</p>

                    <p><a class="btn btn-lg btn-primary" href="?i=OportunidadesNegocio" role="button">Revisa las
                            oportunidades de negocio</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="third-slide" src="/assets/imagenes/carr3.jpg" alt="Third slide">

            <div class="container">
                <div class="carousel-caption">
                    <h1>Crece</h1>

                    <p>El apoyo de tus redes te permitiraá crecer, dinamizar tus proyectos y ganar experiencia para
                        enfrentar el mercado.</p>

                    <p><a class="btn btn-lg btn-primary" href="?i=ConectarEmpresas" role="button">Aprende cómo conectar
                            con otras empresas</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div><!-- /.carousel -->