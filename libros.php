<?php
include('includes/conexion.php');

$sql = "SELECT * FROM titulos";
$stmt = $pdo->query($sql);
$libros = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Personal - Start Bootstrap Template</title>
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
    <body class="d-flex flex-column h-100 bg-light">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <?php include('templates/header.php'); ?>
            <!-- Page Content-->
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Todos nuestros libros</span></h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-11 col-xl-9 col-xxl-8">
                        <!-- Experience Section-->
                        <section>
                                <div class="container mt-4">
                                    <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Título</th>
                                            <th>Tipo</th>
                                            <th>Editorial</th>
                                            <th>Precio</th>
                                            <th>Ventas Totales</th>
                                            <th>Notas</th>
                                            <th>Fecha de Publicación</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($libros as $libro): ?>
                                            <tr>
                                                <td><?php echo $libro['id_titulo']; ?></td>
                                                <td><?php echo $libro['titulo']; ?></td>
                                                <td><?php echo $libro['tipo']; ?></td>
                                                <td><?php echo $libro['id_pub']; ?></td>
                                                <td><?php echo $libro['precio']; ?></td>
                                                <td><?php echo $libro['total_ventas']; ?></td>
                                                <td><?php echo $libro['notas']; ?></td>
                                                <td><?php echo date("d-m-Y", strtotime($libro['fecha_pub'])); ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                           
                        </section>
                        
                        
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer-->
        <?php include('templates/footer.php'); ?>
    </body>
</html>
