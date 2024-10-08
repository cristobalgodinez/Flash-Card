<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SubTemas</title>
    <link rel="stylesheet" href="../css/subtema.css">
    <?php
    include '../frameworks/bootstrap.php';
    include '../frameworks/googleFonts.php';
    ?>
    <script src="../javascript/butones.js"></script>
</head>

<body class="body">

    <section class="Titulo"><!--Titulo del la ventana-->
        <div class="container-fluid contenido mb-2">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-7 text-center mt-5 mb-5">
                    <h2>Contenido de Cada Flashcard</h2>
                </div>
                <div class="col-12 col-sm-12 col-md-5 text-center mt-3 mb-2">
                    <img class="img-fluid rounded" src="../img/vistaPreviaSubTemas.png" alt="VistaPrevia">
                </div>
            </div>
        </div>
    </section>


    <section class="FormularioParaContenido"><!--Formulario para para el contenido de cada tarjeta-->
        <div class="container">
            <div class="row">
                <form action="tarjetas.php" method="post"><!--Formulario principal-->


                    <?php
                    //Aquí se esta tomando la información del formulario para agregar los número de subtemas
                    if (!empty($_POST['NoSubtemas'])) {
                        $NoSubtemas = $_POST['NoSubtemas'];
                        $i = 0;
                        for ($i = 1; $i <= $NoSubtemas; $i++) {
                            $i;
                    ?>


                            <div class="col-12 col-sm-12 col-md-12 text-center mb-2 px-4 titulo-SubTemas"><!--Titulo y número de flashcard-->
                                <label for="">Tarjeta <?php echo $i; ?></label>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 px-4 contenido-SubTemas"><!--Titulo del subtema-->
                                <label for="nombreSubTema" class="contenidoFlashCard">Contenido de la Tarjeta</label>
                            </div>

                            
                            <div class="col-12 col-sm-12 col-md-12 pb-2 px-4"><!--Titulo-->
                                <div class="form-floating mb-1">
                                    <input type="text" class="form-control" name="nombreSubTema" requered id="nombreSubTema" required placeholder="Nombre del Subtema"><!--Agregar el nombre del subtema-->
                                    <label for="nombreSubTema">Titulo</label>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 mb-3 px-4"><!--Contenido-->
                                <div class="form-floating pb-2">
                                    <textarea class="form-control" name="contenidoSubtema" placeholder="Ingrese el contenido del tema" id="floatingTextarea2" style="height: 100px"></textarea>
                                    <label for="floatingTextarea2">Contenido y/o Pregunta</label>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 pb-2 px-4"><!--Respuesta-->
                                <div class="form-floating mb-1">
                                    <input type="text" class="form-control" name="respuestaSubtema" required id="respuestaSubtema" placeholder="Respuesta"><!--Agregar respuesta del subtema-->
                                    <label for="respuestaSubtema">Respuesta</label>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 pb-2 px-4 mb-5"><!--Respuesta-->
                                <div class="form-floating mb-1">
                                    <input type="text" class="form-control" name="preguntaSubtema" id="preguntaSubtema" placeholder="Puede hacer una pregunta ¿pregunta?"><!--Agregar respuesta del subtema-->
                                    <label for="preguntaSubtema">Puede hacer una pregunta ¿pregunta?</label>
                                </div>
                            </div>

                        <?php
                        }
                    } else {
                        ?><label for=""><?php echo "No Ingreso una cantidad valida"; ?></label><?php
                                                                                            } ?>


            </div>
        </div>
    </section>

        
    <section class="BotonesFormularios"><!--Buton para enviar formulario-->
        <div class="container-fluid mb-5">
            <div class="row">

                <!-- <div class="btn-volverMenuPrincipal"> -->
                <div class="d-grid col-12 col-12 col-sm-6 col-md-6 mt-5">
                    <button type="submit" class="btn btn-success">Registrar Tarjetas</button>
                </div>
                <!-- </div> -->


                <div class="d-grid col-12 col-12 col-sm-6 col-md-6 mt-5">
                    <a type="button" href="temas.php" class="btn btn-danger btn-regresar">Cancelar Registro</a>
                </div>
                </form><!--Finalización del formulario principal-->
            </div>
        </div>
    </section>

</body>

</html>