<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructura de las tarjetas</title>
    <link rel="stylesheet" href="../css/tarjetas.css">
    <?php
    include '../frameworks/bootstrap.php';
    include '../frameworks/googleFonts.php';
    ?>
</head>

<body class="body">


    <section class="Titulo"><!--Titulo de las tarjetas-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-5 text-center">
                    <h2 class="text-white">TARJETAS DE CONTENIDO</h2>
                </div>
            </div>
        </div>
    </section>


    <section class="ContenidoCardView">
        <div class="container" style="margin-top: 3rem;"><!--Inicio de estructura de tarjetas-->

            <?php
            if (
                !empty($_POST['nombreSubTema']) && !empty($_POST['contenidoSubtema'])
                && !empty($_POST['respuestaSubtema']) || !empty($_POST['preguntaSubtema'])
            ) {
                $nombreSubTema = $_POST['nombreSubTema'];
                $contenidoSubtema = $_POST['contenidoSubtema'];
                $respuestaSubtema = $_POST['respuestaSubtema'];
                $preguntaSubtema = $_POST['preguntaSubtema'];
            ?>




                <div class="row"><!--Card view contenido-->
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="card text-center bg-dark">
                            <div class="card-body">
                                <div class="container">
                                    <div class="row"><!--Contenido de la tarjeta-->
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                                            <h2 class="card-title text-white"><?php echo $nombreSubTema; ?></h2><!--Titulo-->
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                                            <p class="card-text text-white"><?php echo $contenidoSubtema ?></p><!--Contenido-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                                    <h6 class="card-text text-white"><?php echo $preguntaSubtema ?></h6><!--Pregunta-->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="row"><!--Boton hacía el menú-->
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-5 d-flex justify-content-center align-items-center">
                        <a href="temas.php" class="btn-regresar mt-3"><i class="fa-solid fa-house-user fa-2xl"></i></a>
                    </div>
                </div>

                <div class="row"><!--Botones-->
                    <div class="col-2 col-sm-3 col-md-3 col-lg-3 d-flex justify-content-center align-items-star"><!--Anterior-->
                        <a href="temas.php" class="btn-regresar mt-3"><i class="fa-solid fa-angles-left fa-2xl"></i></a>
                    </div>
                    <div class="d-grid col-4 col-sm-3 col-md-3 col-lg-3"><!--Rivisar Primero-->
                        <div class="d-grid">
                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#revisarAntes">
                                Leer antes
                            </button>
                        </div>
                    </div>
                    <div class="d-grid col-4 col-sm-3 col-md-3 col-lg-3"><!--Ver la respuesta-->
                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#respuesta">
                            <i class="fa-solid fa-lightbulb fa-2xl"></i>
                        </button>
                    </div>
                    <div class="col-2 col-sm-3 col-md-3 col-lg-3 d-flex justify-content-center align-items-end"><!--Siguiente-->
                        <a href="temas.php" class="btn-regresar mt-3"><i class="fa-solid fa-angles-right fa-2xl"></i></a>
                    </div>
                </div>


                <div class="container-fluid Modales"><!--Modales de leer antes y respuesta-->
                    <div class="row"><!--Leer antes-->
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center">
                            <div class="modal fade" id="revisarAntes" data-bs-backdrop="static">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title">Recuerda</h1>
                                            <button class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Lee y analiza el contenido, puedes meditar la respuesta y cuando estes
                                                preparado presiona el botón para conocer si has acertado en la respuesta</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn" data-bs-dismiss="modal">Cancelar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row"><!--Respuesta-->
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center">
                            <div class="modal fade" id="respuesta" data-bs-backdrop="static">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title">Respuesta</h1>
                                            <button class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p><?php echo $respuestaSubtema ?></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn" data-bs-dismiss="modal">Cancelar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>




            <?php
            } else {
            ?><label for="">No esta mostrando ningun mensaje</label><?php
                                                                }
                                                                    ?>


        </div>
    </section>

</body>

</html>