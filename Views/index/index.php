<?php
error_reporting(E_ALL ^ E_WARNING);
if(defined(CSS_PATH)==false ){
    define('CSS_PATH', '../../css/');
}
if(defined(IMG_PATH)==false){
    define('IMG_PATH', '../../img/');
}

if(defined(VIEWS_PATH)==false){
    define('VIEWS_PATH', '../');
}


include 'header.php';
?>

<!-- Outer Row -->
<div class="row justify-content-center" id="inicio">
    <div class=" col-xl-8 col-lg-10 col-md-7">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0" id="card">
                <!-- Nested Row within Card Body -->
                <div class="row  ">
                    <div class="col-lg-6 d-none d-lg-block">

                        <img src="<?php echo IMG_PATH;?>gif1.gif" alt="Imagen de inicio" width="400px" height="300px">
                    </div>
                    <div class="col-lg-6" class="btn btn-light">
                        <div class="p-5">
                            <div class="d-flex justify-content-center">
                                <h1 class="fst-italic lh-1 mb-2 justify-content-center"></h1>
                                <strong class="fst-italic lh-1 mb-2"> Bienvenidos a DELIBERATE.com</strong>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-center">
                                <a href="<?php echo VIEWS_PATH;?>index/Login.php"
                                    class="btn btn-primary rounded-circle">Ingresar</a>
                            </div>
                            <br>
                            <div class="d-flex justify-content-center">
                                <a href="<?php echo VIEWS_PATH;?>index/singup.php"
                                    class="btn btn-info rounded-circle">Registrar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Version 2.0 26/11/2021 -->
<?php
include 'footer.php';
?>