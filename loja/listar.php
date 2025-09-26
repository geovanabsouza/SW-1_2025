
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
            <button class="navbar-toggler navbar-toggler-right" type="button" 
                    data-bs-toggle="collapse" data-bs-target="#navbarResponsive" 
                    aria-controls="navbarResponsive" aria-expanded="false" 
                    aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="form_cadastra.php">Cadastro</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Cadastro em tela cheia -->
    <section class="signup-section" id="signup">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">

                    <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                    <?php include 'pedaco.php'; ?>

                    <table class="table">
            <thead>
                <tr>
                    <th scope="col">CÓDIGO</th>
                    <th scope="col">NOME</th>
                    <th scope="col">PREÇO</th>
                    <th scope="col">QUANTIDADE</th>
                    <th scope="col">OPÇÕES</th>
                </tr>
            </thead>
            <tbody>
            <?php
                require 'conexao.php';
                $sql = "SELECT * FROM produtos";
                $stmt = $pdo->query($sql);
                while ($produto = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td>" . $produto['id'] . "</td>";
                    echo "<td>" . $produto['nome'] . "</td>";
                    echo "<td>" . $produto['preco'] . "</td>";
                    echo "<td>" . $produto['quantidade'] . "</td>";
                 echo "
                 <td>
                 <div class='btn-group' role='group'>
                 <a href='form_atualiza.php?id=" . $produto['id'] . "' type='button' class='btn btn-danger'>ATUALIZAR</a>
                 <a href='excluir.php?id=" . $produto['id'] . "' 
                 onclick=\"return confirm('Tem certeza que deseja excluir este produto?')\" 
                 class='btn btn-warning'>APAGAR</a>
                 </div> 
                 </td>";

                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </section>
    <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; Your Website 2025</div></footer>
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

        
    



                