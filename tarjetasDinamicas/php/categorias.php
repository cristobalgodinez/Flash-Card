<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temas para Revisar</title>
    <link rel="stylesheet" href="../css/temas.css">
    <?php
    include '../frameworks/bootstrap.php';
    include '../frameworks/googleFonts.php';
    ?>
</head>

<body class="body">

    <section class="tituloCategorias">
        <div class="container-fluid">
            <div class="row"><!--Titulo de temas-->
                <div class="col-sm-12 col-md-12 col-lg-12 mt-4 text-center">
                    <h2 class="btn-temas">Bienvenido a las Categorias de las Flash Cards</h2>
                </div>
            </div>
        </div>
    </section>


    <section class="ModalesContenido">
        <div class="container">
            <div class="row"><!--Botones de los modales-->
                <div class="d-grid col-sm-6 col-md-6 mt-5">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formularioCategorias">
                        Crear Categoría
                    </button>
                </div>
                <div class="d-grid col-sm-6 col-md-6 mt-5">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formularioUsuario">
                        Ingresar Usuario
                    </button>
                </div>
            </div>
        </div>


        <div class="container"><!--Modales-->

            <div class="row"><!--Modal para Categorias-->
                <div class="col-sm-6 col-md-6">
                    <div class="modal fade" id="formularioCategorias" data-bs-backdrop="static">
                        <div class="modal-dialog modal-xl modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header text-center">
                                    <h1 class="modal-title">Visualización de la categoría</h1>
                                    <button class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <div class="modal-body">
                                    <div class="container">
                                        <div class="row g-3">
                                            <div class="col-sm-12 col-md-12">


                                                <form action="" method="post"><!--Formulario para seleccionar el número de flashcards-->
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-sm-6 col-md-6">


                                                                <div class="container"><!--Formulario-->
                                                                    <div class="row">
                                                                        <div class="d-grid col-sm-12 col-md-12">
                                                                            <div class="form-floating mb-3">
                                                                                <input type="text" name="NombCategoria" id="NombCategoria" class="form-control" required placeholder="Nombre de las categorias">
                                                                                <label for="NombCategoria">Nombre de la categoría</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="d-grid col-sm-12 col-md-12">
                                                                            <div class="form-floating mb-3">
                                                                                <textarea name="descripcionCorta" id="descripcionCorta" class="form-control" required placeholder="Ingrese una descripción corta" style="height: 100px" required></textarea>
                                                                                <label for="descripcionCorta">Descripción Corta</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>



                                                            </div>
                                                            <div class="col-sm-6 col-md-6">
                                                                <div class="container"><!--Ilustración-->
                                                                    <div class="row">
                                                                        <div class="col-sm-12 col-md-12">
                                                                            <img src="../img/vistaPrevia.png" class="rounded mx-auto d-block img-fluid" alt="Esta es una vista previa a crear la categoría">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--Abaja termina el form-->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <div class="container">
                                        <div class="row">
                                            <div class="d-grid col-sm-6 col-md-6 mt-1">
                                                <button type="submit" class="btn btn-info">
                                                    Ingresar Categoría
                                                </button>
                                            </div>
                                            <div class="d-grid col-sm-6 col-md-6 mt-1">
                                                <button class="btn btn-danger" data-bs-dismiss="modal">
                                                    Cancelar
                                                </button>
                                            </div>
                                            </form><!--Aquí termina el form-->
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row"><!--Modal para agregar usuarios-->
                <div class="col-sm-6 col-md-6">
                    <div class="modal fade" id="formularioUsuario" data-bs-backdrop="static">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title text-center">Formulario para agregar un nuevo usuario</h1>
                                    <button class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row g-3">
                                        <form action="subTemas.php" method="post"><!--Formulario para seleccionar el número de flashcards-->
                                            <div class="col-12 pb-3">
                                                <div class="row pb-3">
                                                    <div class="col-6">
                                                        <input type="number" name="NumeroSubTemas" class="form-control" placeholder="Número de Sub Temas">
                                                    </div>
                                                    <div class="col-6 d-grid">
                                                        <input type="submit" value="Generar SubTemas" class="btn btn-primary">
                                                    </div>
                                                </div>
                                        </form>
                                    </div>
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
    </section>


    <section class="TarjetasCategoría">
        <div class="container mt-5">
            <div class="row pt-3 row-cols-1 row-cols-md-3 row-cols-lg-3 g-4 bg-danger"><!--Nueva Categoría Flashcard-->
                <?php
                if (!empty($_POST['NombCategoria']) && !empty($_POST['descripcionCorta'])) {
                    $NombCategoria = $_POST['NombCategoria'];
                    $descripcionCorta = $_POST['descripcionCorta']; ?>


                    <div class="col-sm-12 col-md-4 col-lg-3"><!--CONTENIDO DE PRUEBA-->
                        <div class="card" style="width: 15rem;">
                            <img src="https://images.pexels.com/photos/9220728/pexels-photo-9220728.jpeg" class="card-img-top" alt="Segundo Tema">
                            <div class="card-body">
                                <a href="temas.php" class="card-contenido text-decoration-none">
                                    <?php echo $NombCategoria; ?>
                                </a>
                                <p class="card-text"><?php echo $descripcionCorta; ?></p>
                            </div>
                        </div>
                    </div>


                <?php
                } else { ?>

                    <div class="col-sm-12 col-md-4 col-lg-3"><!--CONTENIDO DE PRUEBA-->
                        <div class="card" style="width: 15rem;">
                            <img src="" class="card-img-top" alt="Sin imagen">
                            <div class="card-body">
                                <p class="card-text">Esta tarjeta no cuenta con el contenido completo.</p>
                                <p class="card-text">Por favor llenar ambos campos del formulario.</p>
                            </div>
                        </div>
                    </div>

                <?php
                } ?>








                <div class="col-sm-12 col-md-4 col-lg-3"><!--CONTENIDO DE PRUEBA-->
                    <div class="card" style="width: 15rem;">
                        <img src="https://images.pexels.com/photos/9220728/pexels-photo-9220728.jpeg" class="card-img-top" alt="Segundo Tema">
                        <div class="card-body">
                            <a href="tarjetas.php" class="card-contenido text-decoration-none">Segundo Tema</a>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3"><!--CONTENIDO DE PRUEBA-->
                    <div class="card" style="width: 15rem;">
                        <img src="https://images.pexels.com/photos/9220728/pexels-photo-9220728.jpeg" class="card-img-top" alt="Segundo Tema">
                        <div class="card-body">
                            <a href="tarjetas.php" class="card-contenido text-decoration-none">Segundo Tema</a>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3"><!--CONTENIDO DE PRUEBA-->
                    <div class="card" style="width: 15rem;">
                        <img src="https://images.pexels.com/photos/9220728/pexels-photo-9220728.jpeg" class="card-img-top" alt="Segundo Tema">
                        <div class="card-body">
                            <a href="tarjetas.php" class="card-contenido text-decoration-none">Segundo Tema</a>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3">
                    <div class="card" style="width: 15rem;">
                        <img src="https://images.pexels.com/photos/27362362/pexels-photo-27362362/free-photo-of-comida-madera-calle-apple.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="Tercer Tema">
                        <div class="card-body">
                            <a href="tarjetas.php" class="card-contenido text-decoration-none">Tercer Tema</a>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3">
                    <div class="card" style="width: 15rem;">
                        <img src="https://images.pexels.com/photos/27362362/pexels-photo-27362362/free-photo-of-comida-madera-calle-apple.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="Tercer Tema">
                        <div class="card-body">
                            <a href="tarjetas.php" class="card-contenido text-decoration-none">Tercer Tema</a>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3">
                    <div class="card" style="width: 15rem;">
                        <img src="https://images.pexels.com/photos/27362362/pexels-photo-27362362/free-photo-of-comida-madera-calle-apple.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="Tercer Tema">
                        <div class="card-body">
                            <a href="tarjetas.php" class="card-contenido text-decoration-none">Tercer Tema</a>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3">
                    <div class="card" style="width: 15rem;">
                        <img src="https://images.pexels.com/photos/27362362/pexels-photo-27362362/free-photo-of-comida-madera-calle-apple.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="Tercer Tema">
                        <div class="card-body">
                            <a href="tarjetas.php" class="card-contenido text-decoration-none">Tercer Tema</a>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div><!--FINALIZACIÓN DEL CONTENIDO DE PRUEBA-->
            </div>
        </div>
    </section>

</body>

</html>