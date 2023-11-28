<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body{
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

        .login{
            width: 100%;
            height: 100vh;
            align-items: center;
            justify-content: center;
            display: flex;
        }
        h3{
          text-align: center;
        }
    </style>
</head>
<body class="bg-dark">
    <div class="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h3>Cadastrar novo usuário</h3>
                        </div>
                        <div class="card-body">
                            <form action="inserir.php" method="POST">
                                <div>
                                    <div class="mb-3">
                                        <label>Usuário</label>
                                        <input type="text" name="login" required class="form-control">
                                    </div>
                                </div>
                                <div>
                                    <div class="mb-3">
                                        <label>Senha</label>
                                        <input type="password" name="senha" required class="form-control">
                                    </div>
                                </div>
                                    <div class="mb-3">
                                        <div style="text-align: center;">
                                            <button type="submit" class="btn btn-primary rounded-pill px-3">Enviar</button>
                                       </div>
                                    </div>
                                    
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>