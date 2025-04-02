<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    
</head>
<body>
    <div class= "container" >
        <form action= "processa.php" method= "POST">
            <!-- Email input -->
             <div class="bloquinho">
                <h1 class="h1pa">PÁGINA INICIAL - PROJETO AULA 05</h1>
             </div>
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="email" id="form1Example1" class="form-control" name="email"/>
                <label class="form-label" for="form1Example1">Endereço de Email</label>
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" id="form1Example2" class="form-control" name="senha" />
                <label class="form-label" for="form1Example2">Senha</label>
            </div>
    
            <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                <div class="col">

            <!-- Simple link -->
               <a class="esqueceu" href="#!">Esqueceu a senha?</a>
              

            </div>
            </div>

           
            <!-- Submit button -->
                <!--button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block">Sign in</button !-->
                <input type="submit" class="signin" value="Sign in">
                <p class"pregistro" >Não é membro? <a  href="#!">Registro</a> </p>

                
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>