<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Formulário</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="color: #d6a9b0; background-color: white;">
    <nav class="navbar navbar-expand-lg bg-body-tertiary mb-4" style="background-color: #db6478;">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Flores da Terra</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              <a class="nav-link" href="#">Produtos</a>
            </div>
          </div>
        </div>
    </nav>

    <main>
        <section class="mb-4" style="background-color: #bbbbbb;">
            <h1>Cadastre-se</h1>
            <form method="POST" onsubmit="confirmar()">
                    <div class="form-group">
                      <label for="loginusuario" style="color: #000;">Nome de Usuário</label>
                      <input type="text" class="loginusuario form-control" id="loginusuario" placeholder="Usuário" maxlength="150">
                    </div>

                    <div class="form-group">
                      <label for="email" style="color: #000;">Email</label>
                      <input type="email" class="email form-control" id="email" placeholder="email@exemplo.com">
                    </div>

                    <div class="form-group">
                      <label for="senha" style="color: #000;">Senha</label>
                      <input type="password" class="senha form-control" id="senha" placeholder="Senha">
                    </div>

                    <div class="form-group">
                        <label for="telefone" style="color: #000;">Telefone</label>
                        <input type="text" class="telefone form-control" id="telefone" placeholder="(xx) xxxxx-xxxx" onkeypress="mascara_tel(this)" maxlength="15">
                    </div>

                    <div class="form-group">
                        <label for="endereco" style="color: #000;">Endereço</label>
                        <input type="text" class="endereco form-control" id="endereco" placeholder="Rua Exemplo, 1">
                    </div>

                    <div class="form-group">
                        <label for="cpf" style="color: #000;">CPF</label>
                        <input type="text" class="cpf form-control" id="cpf" placeholder="xxx.xxx.xxx-xx" onkeypress="mascara_cpf(this)" maxlength="14">
                    </div>

                    <div class="mb-2">
                      <a href="login.php" style="color: #242424;">Já tem uma conta? Faça seu login!</a>
                    </div>

                    <input type="submit" value="Enviar" class="btn btn-success">
            </form>
        </section>
    </main>


    <script src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>