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

    <section class="tituloTemas"><!--Titulo de los temas-->
        <div class="container">
            <div class="row">
                <div class="col-12 mt-4 text-center">
                    <h2 class="btn-temas">Aquí puede crear un nuevo tema o revisar los existentes</h2>
                </div>
            </div>
        </div>
    </section>


    <section class="ModalParaTemas"><!--Modal para crear temas-->
        <div class="container">
            <div class="row"><!--Botones de los modales-->
                <div class="d-grid col-sm-4 col-md-4 mt-5">
                    <a href="categorias.php" class="btn btn-primary">Volver a las categorías</a>
                </div>
                <div class="d-grid col-sm-8 col-md-8 mt-5">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formularioTemas">
                        Crear Nuevo Tema
                    </button>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row"><!--Modal para crear los temas-->
                <div class="col-sm-6 col-md-6">
                    <div class="modal fade" id="formularioTemas" data-bs-backdrop="static">
                        <div class="modal-dialog modal-xl modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header text-center">
                                    <h1 class="modal-title">Visualización del tema</h1>
                                    <button class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <div class="modal-body">
                                    <div class="container">
                                        <div class="row g-3"><!--Formulario para agregar contenido a la tarjeta del tema-->
                                            <div class="col-sm-12 col-md-12">
                                                <div class="container">
                                                    <form action="" method="post"><!--Formulario para agregar contenido a la tarjeta del tema-->
                                                        <div class="row">
                                                            <div class="col-sm-6 col-md-6">
                                                                <div class="container"><!--Formulario-->
                                                                    <div class="row">
                                                                        <div class="d-grid col-sm-12 col-md-12">
                                                                            <div class="form-floating mb-3">
                                                                                <input type="text" class="form-control" name="NombCategoria" id="NombCategoria" required placeholder="Nombre de las categorias">
                                                                                <label for="NombCategoria">Nombre del tema</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="d-grid col-sm-12 col-md-12">
                                                                            <div class="form-floating mb-3">
                                                                                <textarea name="descripcionCorta" class="form-control" placeholder="Ingrese una descripción corta" required id="descripcionCorta" style="height: 100px"></textarea>
                                                                                <label for="descripcionCorta">Descripción corta</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="d-grid col-sm-12 col-md-12">
                                                                            <button type="" class="btn btn-info">
                                                                                <!-- data-bs-toggle="modal" data-bs-target="#formularioTemas" -->
                                                                                Guardar Modificación
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                            <div class="col-sm-6 col-md-6 mt-2">
                                                                <div class="container"><!--Ilustración-->
                                                                    <div class="row">
                                                                        <div class="col-sm-12 col-md-12">
                                                                            <img src="../img/vistaPrevia.png" class="rounded mx-auto d-block img-fluid" alt="Esta es una vista previa a crear la categoría">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer bg-info">
                                    <div class="container">
                                        <div class="row">
                                            </form><!--Aquí termina el form-->
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="tarjetas"><!--Tarjetas-->
        <div class="container mt-3">
            <div class="row pt-3 row-cols-1 row-cols-md-3 row-cols-lg-3 g-4">

                <?php //Aquí se esta tomando la información que viene del formulario de subtemas para agregar el contenido a las tarjetas
                if (!empty($_POST['NombCategoria']) && !empty($_POST['descripcionCorta'])) {
                    $NombCategoria = $_POST['NombCategoria'];
                    $descripcionCorta = $_POST['descripcionCorta']; ?>

                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <div class="card" style="width: 15rem;">
                            <img src="https://images.pexels.com/photos/9220728/pexels-photo-9220728.jpeg" class="card-img-top" alt="Primer Tema">
                            <div class="card-body">
                                <div class="container">

                                    <div class="row"><!--Titulo y plus-->
                                        <div class="d-flex">
                                            <div class="col-8 col-sm-8 col-md-8 col-lg-8">
                                                <a href="tarjetas.php" class="card-contenido text-decoration-none"><?php echo $NombCategoria; ?></a>
                                            </div>
                                            <div class="col-4 col-sm-4 col-md-4 col-lg-4 ps-2">
                                                <button class="btn" data-bs-toggle="modal" data-bs-target="#CrearNoSubtemas">
                                                    <i class="fa-solid fa-circle-plus fa-xl"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row"><!--Contenido-->
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <p class="card-text"><?php echo $descripcionCorta; ?></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                <?php
                } else {
                ?><label for="" class="text-primary">Por favor ingresa datos correctos o crea flashcards</label><?php
                                                                                                            }
                                                                                                                ?>


                <div class="col-sm-12 col-md-4 col-lg-3"><!--CONTENIDO DE PRUEBA-->
                    <div class="card" style="width: 15rem;">
                        <img src="https://images.pexels.com/photos/7031693/pexels-photo-7031693.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="Segundo Tema">
                        <div class="card-body">
                            <a href="tarjetas.php" class="card-contenido text-decoration-none">Informática</a>

                            <button class="btn ms-5" data-bs-toggle="modal" data-bs-target="#CrearNoSubtemas">
                                <i class="fa-solid fa-circle-plus fa-xl"></i>
                            </button>

                            <p class="card-text">Esta es una categoría dedicada a la informática y su extenso campo, aportando siempre a la humanidad.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3"><!--CONTENIDO DE PRUEBA-->
                    <div class="card" style="width: 15rem;">
                        <img src="https://images.pexels.com/photos/7031693/pexels-photo-7031693.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="Segundo Tema">
                        <div class="card-body">
                            <a href="tarjetas.php" class="card-contenido text-decoration-none">Informática</a>
                            <p class="card-text">Esta es una categoría dedicada a la informática y su extenso campo, aportando siempre a la humanidad.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3"><!--CONTENIDO DE PRUEBA-->
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


    <section class="ModalParaFlashcards"><!--Modal para el PLUS y seleccionar número de subtemas-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="modal fade" id="CrearNoSubtemas" data-bs-backdrop="static">
                        <div class="modal-dialog modal-sm modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title">Crear flashcards</h2>
                                    <button class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <div class="row"><!--Formulario para seleccionar el número de flashcards-->
                                            <form action="subTemas.php" method="post"><!--Formulario para seleccionar el número de flashcards-->
                                                <div class="d-grid col-12 col-sm-12 col-md-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="number" class="form-control" name="NoSubtemas" id="NoSubtemas" required placeholder="Número de subtemas de este tema">
                                                        <label for="NoSubtemas">Número de subtemas</label>
                                                    </div>
                                                </div>
                                                <!--Etiqueta del form-->
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="container">
                                        <div class="row">
                                            <div class="d-grid col-sm-12 col-md-12 mt-1">
                                                <button type="submit" class="btn btn-success">
                                                    Crear
                                                </button>
                                            </div>
                                            <div class="d-grid col-sm-12 col-md-12 mt-1">
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
        </div>
    </section>

</body>

</html>