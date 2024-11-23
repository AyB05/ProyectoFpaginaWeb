<?php
include('includes/conexion.php');
$mensaje = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $correo = $_POST['correo'];
    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $comentario = $_POST['comentario'];

    $sql = "INSERT INTO contacto (fecha, correo, nombre, asunto, comentario) VALUES (NOW(), ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute([$correo, $nombre, $asunto, $comentario])) {
        $mensaje = "Mensaje enviado correctamente.";
    } else {
        $mensaje = "Hubo un error al enviar el mensaje. Por favor, intenta nuevamente.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content />
        <meta name="author" content />
        <title>Modern Business - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
        <body class="d-flex flex-column">
            <main class="flex-shrink-0">
                <!-- Navigation-->
                <?php include('templates/header.php'); ?>
                <!-- Page content-->
                <section class="py-5">
                    <div class="container px-5">
                        <!-- Contact form-->
                        <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                            <div class="text-center mb-5">
                                <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                                <h1 class="fw-bolder">Contactanos</h1>
                                <p class="lead fw-normal text-muted mb-0">¡Lee con nosotros!</p>
                            </div>
                            <!--Mensaje al enviar form-->
                            <?php if ($mensaje): ?>
                                <div class="container mt-4">
                                    <div class="alert alert-primary" role="alert"><?php echo $mensaje; ?></div>
                                </div>
                            <?php endif; ?>
                            <div class="container py-3">
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <form action="contacto.php" method="POST" class="p-4 border rounded-3 shadow-sm">
                                            <div class="mb-3">
                                                <label for="nombre" class="form-label">Nombre:</label>
                                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                                            </div>

                                            <div class="mb-3">
                                                <label for="correo" class="form-label">Correo Electrónico:</label>
                                                <input type="email" class="form-control" id="correo" name="correo" required>
                                            </div>

                                            <div class="mb-3">
                                                <label for="asunto" class="form-label">Asunto:</label>
                                                <input type="text" class="form-control" id="asunto" name="asunto" required>
                                            </div>

                                            <div class="mb-3">
                                                <label for="comentario" class="form-label">Mensaje:</label>
                                                <textarea class="form-control" id="comentario" name="comentario" rows="4" required></textarea>
                                            </div>

                                            <button type="submit" class="btn btn-primary w-100">Enviar Mensaje</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </main>
        <!-- Footer-->
        <?php include('templates/footer.php'); ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        
    </body>
</html>
