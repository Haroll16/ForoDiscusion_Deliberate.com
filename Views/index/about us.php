<?php

define('CSS_PATH', '../../css/');
define('JS_PATH', '../../js/');
define('IMG_PATH', '../../img/');
define('CONTROLLER_PATH', '../../Controller/');
define('VIEWS_PATH', '../');

include VIEWS_PATH . 'index/header.php';

include VIEWS_PATH . 'index/menu.php';
?>

<div class="container-fluid mt-5 ">

    <div class="row">
        <div class="col-12">
            <div class="jumbotron jumbotron-fluid">

                <br>
                <br>
                <h1 class="display-1 text-center">Bienvenidos a Deliberate.com</h1>
                <p class="lead text-center">En este apartado sientanse libres de
                    expresar sus ideas para debatir con
                    personas en todo el resto del mundo</p>


            </div> <!-- cierra Jumbotron-->
        </div> <!-- cierra col-->
    </div>
    <!-- cierra row-->
    <br>
    <hr>
    <br>
    <div class="row-2">
        <div class="col-12">
            <div class="jumbotron jumbotron-fluid text-center ">

                <br>
                <br>
                <h1 class="display-4 ">Nuestra Historia</h1>
                <p class="lead">Este sitio en sus inicios empezó como una idea de proyecto con el fin

                    de presentar algo no nuevo, pero que tuviera un estilo único y diferente
                    que le permitiera diferenciarse del resto. Queremos que nuestros
                    usuarios tengan un repertorio extenso de herramientas para compartir
                    ideas y expresarse frente a otros usuarios con los que compartan o
                    deseen tratar algún tema en común, todo siempre bajo una normativa
                    que estos mismos establezcan, permitir moderar y agregar filtros de
                    censura a su contenido cuando se requiera, que no se necesite pagar
                    de nada para obtener acceso completo al sitio y tengan libertad frente
                    a cualquier tema a exponer.</p>


            </div> <!-- cierra Jumbotron-->
        </div> <!-- cierra col-->
    </div> <!-- cierra row-->
    <br>
    <hr>
    <br>
    <div class="row-2">
        <div class="col-12">
            <div class="jumbotron jumbotron-fluid text-center ">

                <br>
                <br>
                <h1 class="display-4 ">Propósito</h1>
                <p class="lead ">Desarrollar un sitio web dinámico en donde tú puedas interacturar con el
                    mundo
                    exterior compartiendo tus ideales.</p>


            </div> <!-- cierra Jumbotron-->
        </div> <!-- cierra col-->
    </div> <!-- cierra row-->

    <br>
    <hr>
    <br>

    <div class="row-2">
        <div class="col-12">
            <div class="jumbotron jumbotron-fluid">

                <br>
                <br>
                <h1 class="display-4 text-center">Nuestro equipo de trabajo</h1>


            </div> <!-- cierra Jumbotron-->
        </div> <!-- cierra col-->
    </div> <!-- cierra row-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/svg-with-js.min.css"
        integrity="sha512-W3ZfgmZ5g1rCPFiCbOb+tn7g7sQWOQCB1AkDqrBG1Yp3iDjY9KYFh/k1AWxrt85LX5BRazEAuv+5DV2YZwghag=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <section class="team-section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6">
                    <div class="card border-0 shadow-lg pt-5 my-5 position-relative">
                        <div class="card-body p-4">
                            <div class="member-profile position-absolute w-100 text-center">
                                <img class="rounded-circle mx-auto d-inline-block shadow-sm"
                                    src="<?php echo IMG_PATH; ?>hombre-arana.png" alt="Avatar de usuario">
                            </div>
                            <div class="card-text pt-1">
                                <h5 class="member-name mb-0 text-center text-primary font-weight-bold">Harold Ospina
                                </h5>
                                <div class="mb-3 text-center">Co-fundador / CEO</div>
                                <div class="text-center">Estudiante de la Escuela de Ciencia y Tecnología de Midtown
                                    que, después de adquirir sus habilidades a causa de la mordida de una araña
                                    radiactiva, eligió combatir el crimen como el Hombre Araña. <br>ㅤ</div>
                            </div>
                        </div>
                        <!--//card-body-->
                        <!--//card-body-->


                        <!--//social-list-->

                        <!--//card-footer-->
                    </div>
                    <!--//card-->
                </div>
                <!--//col-->

                <div class="col-12 col-md-6 ">
                    <div class="card border-0 shadow-lg pt-5 my-5 position-relative">
                        <div class="card-body p-4">
                            <div class="member-profile position-absolute w-100 text-center">
                                <img class="rounded-circle mx-auto d-inline-block shadow-sm"
                                    src="<?php echo IMG_PATH; ?>hombre-murcielago.png" alt="Avatar de usuario">
                            </div>
                            <div class="card-text pt-1">
                                <h5 class="member-name mb-0 text-center text-primary font-weight-bold">Julian Agamez
                                </h5>
                                <div class="mb-3 text-center">Co-fundador / CTO</div>
                                <div class="text-center">Empresario multimillonario, galán y filántropo. Presenció el
                                    asesinato de sus padres cuando era niño lo marcó profundamente y lo llevó a
                                    entrenarse en la perfección física e intelectual para ponerse un disfraz de
                                    murciélago con el fin de combatir el crimen.</div>
                            </div>
                        </div>
                        <!--//card-body-->

                        <!--//card-footer-->
                    </div>
                    <!--//card-->
                </div>
                <!--//col-->




            </div>

    </section>
</div>
<style>
body {
    margin-top: 20px;
}

.py-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
}

.pt-5 {
    padding-top: 3rem !important;
}

.my-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
}

.border-0 {
    border: 0 !important;
}

.position-relative {
    position: relative !important;
}

.shadow-lg {
    box-shadow: 0 1rem 3rem rgb(0 0 0 / 18%) !important;
}

.card {
    position: relative;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, 0.125);
    border-radius: .25rem;
}

.member-profile {
    top: -50px;
    left: 0;
}

.text-center {
    text-align: center !important;
}

.w-100 {
    width: 100% !important;
}

.position-absolute {
    position: absolute !important;
}

.member-profile img {
    width: 100px;
    height: 100px;
}

.rounded-circle {
    border-radius: 50% !important;
}

.mx-auto {
    margin-right: auto !important;
    margin-left: auto !important;
}

.shadow-sm {
    box-shadow: 0 0.125rem 0.25rem rgb(0 0 0 / 8%) !important;
}
</style>


<!-- Finalizado 12/11/2021-->