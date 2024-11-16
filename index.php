<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Floricultura</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="color: #d6a9b0; background-color: white;">
    <nav class="navbar navbar-expand-lg bg-body-tertiary" id="sobe" style="background-color: #db6478;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Flores da Terra</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
              <a class="nav-link" href="#">Produtos</a>
              <a class="nav-link" href="crud.php">Lista de Usuários</a>
            </div>
          </div>
          <form class="form-inline">
            <a href="formulario.php" class="btn my-2 my-sm-0" style="background-color: #fff; color: #db6478;">Cadastre-se</a>
          </form>
        </div>
    </nav>


    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" height="720px" src="img/pexels-anh-nguyen-517648218-20242458.jpg" alt="Primeiro Slide">
          <div class="carousel-caption">
            <h1 style="color: #000;">Flores da Terra</h1>
            <p style="color: #000;">A Flores da Terra é o lugar onde a beleza das flores ganha vida. Nossa floricultura oferece arranjos personalizados e criativos para todas as ocasiões, desde casamentos até eventos corporativos.</p>
            <button class="btn btn-success">Acessar</button>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" height="720px" src="img/pexels-anh-nguyen-517648218-20242461.jpg" alt="Segundo Slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" height="720px" src="img/pexels-anh-nguyen-517648218-20242802.jpg" alt="Terceiro Slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
    </div>

    
  
      <section class="home mt-5 mb-5" style="background-color: #db6478;">


        <div class="row gy-4 m-20">
          <div class="col-md-6 col-lg-3">
            <div class="icon-box">
              <div class="icon"></div>
              <h4 class="title"><a href="">Variedade de Flores Frescas</a></h4>
              <p class="description">Oferecemos uma ampla gama de flores frescas, desde as mais tradicionais até as exóticas, garantindo qualidade e beleza.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-gem"></i></div>
              <h4 class="title"><a href="">Atendimento Personalizado</a></h4>
              <p class="description">Proporcionamos um atendimento dedicado, ajudando os clientes a escolherem o arranjo perfeito para suas necessidades.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-geo-alt"></i></div>
              <h4 class="title"><a href="">Serviço de Entrega Rápida</a></h4>
              <p class="description">Temos um serviço de entrega eficiente para garantir que os arranjos cheguem frescos e pontuais aos destinos desejados.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-command"></i></div>
              <h4 class="title"><a href="">Programas de Fidelidade</a></h4>
              <p class="description">Disponibilizamos um programa de fidelidade que recompensem clientes frequentes com descontos ou ofertas exclusivas.</p>
            </div>
          </div>

        </div>
      </div>

    </section>
    

    <footer class="text-light" style="background-color: #883b48;">
      <div class="container-fluid py-3">
      <div class="row">
        <div class="col-4">
          <ul class="nav flex-column">
            <li class="nav-link"><a href="#sobe">Retornar à Loja</a></li>
            <li class="nav-link"><a href="#">Sobre</a></li>
            <li class="nav-link"><a href="#">Contato</a></li>
            <li class="nav-link"><a href="#">Suporte</a></li>
          </ul>
        </div>
        <div class="col-8">
          <p>
            Nosso ambiente acolhedor e a decoração elegante proporcionam uma experiência sensorial única, com flores frescas e aromas delicados. Oferecemos serviços de entrega rápida e programas de fidelidade para tornar a experiência ainda mais especial. Venha descobrir como um toque de flores pode transformar seu dia na Flores da Terra.
          </p>
          <ul class="nav">
            <li class="nav-link" ><i class="fab fa-facebook fa-3x "></i></li>
            <li class="nav-link"><i class="fab fa-instagram fa-3x"></i></li>
            <li class="nav-link"><i class="fab fa-twitter fa-3x"></i></li>
            <li class="nav-link"><i class="fab fa-whatsapp fa-3x"></i></li>
          </ul>
        </div>
      </div>
      </div>
      <div class="text-center" style="background-color: #000000; padding: 20px;" >
        &copy 2024 Copyright: <a href="#">Lojas Virtuais</a>
      </div>
    </footer>









    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>