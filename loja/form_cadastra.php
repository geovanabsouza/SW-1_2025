<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>LOJINHA ETECMCM</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="template3/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">Lojinha Etec MCM</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#about">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#projects">Produtos</a></li>
                    </ul>
                </div>
            </div>

            <section class="signup-section" id="signup">
                <div class="container px-4 px-lg-5">
                    <div class="row gx-4 gx-lg-5">
                        <div class="col-md-10 col-lg-8 mx-auto text-center">
                            <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                            <?php
                                include 'pedaco.php';
                            ?>
                            <div class="container">
                                <form class="form-signup" id="contactForm" action="inserir.php" method="POST" data-sb-form-api-token="API_TOKEN">
                                    <div class="row input-group-newsletter">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" name="nome" placeholder="Digite o nome do produto">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" name="preco" placeholder="Digite o preço do produto">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" name="quantidade" placeholder="Digite a quantidade">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Cadastar</button>
                                    </div>
                                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </body>
        </html>