<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title>#PartiuEventos</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
  <link rel="manifest" href="img/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <!--==========================
    Header
    ============================-->
    <header id="header">
      <div class="container">
        <?php
        require __DIR__.'/layout/menu.blade.php';
        ?>
      </header><!-- #header -->
<main id="main" class="main-page">
  <!--==========================
    logo central
    ============================-->
    <section id="intro">
      <?php
      require __DIR__.'/layout/logo_central.blade.php';
      ?>
    </section>

    <main id="main">
    <!--==========================
      Eventos em Destaques
      ============================-->
      <section id="speakers" class="wow fadeInUp">
        <?php
        require __DIR__.'/layout/evento_destaque.blade.php';
        ?>

      </section>

    <!--==========================
      Eventos do Dia
      ============================-->
      <section id="schedule" class="section-with-bg">

        <?php
        require __DIR__.'/layout/evento_dia.blade.php';
        ?>
      </section>
      
    <!--==========================
      icones de estrelas to guardando
    
    
              <div class="stars">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
             
              ============================-->
    <!--==========================
      Categorias
      ============================-->
      <section id="gallery" class="wow fadeInUp">

       <?php
       require __DIR__.'/layout/categorias.blade.php';
       ?>

     </section>
     
    <!--==========================
      Perguntas
      ============================-->
      <section id="faq" class="wow fadeInUp">

        <?php
        require __DIR__.'/layout/perguntas.blade.php';
        ?>

      </section>

    <!--==========================
      Planos
      ============================-->
      <section id="buy-tickets" class="section-with-bg wow fadeInUp">
       <?php
       require __DIR__.'/layout/planos.blade.php';
       ?>

     </section>
</main>
     

  <!--==========================
    Footer
    ============================-->
    <footer id="footer">
      <?php
      require __DIR__.'/layout/footer.blade.php';
      ?>
    </footer><!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<!--==========================
    Modal login
    ============================-->
    <div class="col-md-4">
            <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
              <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                  <div class="modal-body p-0">
                    <div class="card bg-secondary shadow border-0">
                      <div class="card-header bg-white pb-2">
                        <div class="text-muted text-center mb-3">
                        </div>
                        <div class="btn-wrapper text-center">
                          <a href="#" class="btn btn-neutral btn-icon">
                            <span class="btn-inner--icon">
                              <img src="img/icon/google.svg">
                            </span>
                            <span class="btn-inner--text">Google</span>
                          </a>
                        </div>
                      </div>
                      <div class="card-body px-lg-5 py-lg-5 cardmodal">
                        <div class="text-center text-muted mb-4">
                          <small class="logintext">Faça seu login</small>
                        </div>
                        <form role="form">
                          <div class="form-group mb-3">
                            <div class="input-group input-group-alternative">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-at" aria-hidden="true"></i></span>
                              </div>
                              <input class="form-control" placeholder="Email" type="email">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group input-group-alternative">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                              </div>
                              <input class="form-control" placeholder="Senha" type="password">
                            </div>
                          </div>
                          <div class="custom-control custom-control-alternative custom-checkbox">
                            <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                            <label class="custom-control-label" for=" customCheckLogin">
                              <span>Lembre-me</span>
                            </label>
                          </div>
                          <div class="text-center">
                            <button type="button" class="btn btn2 my-4">Entrar</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

<!--==========================
    Modal Cadastro
    ============================-->

    <div class="col-md-4">
            <div class="modal fade" id="cadastro" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
              <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                  <div class="modal-body p-0">
                    <div class="card bg-secondary shadow border-0">
                      <div class="card-header bg-white pb-2">
                        <div class="text-muted text-center mb-3">
                        </div>
                        <div class="btn-wrapper text-center">
                          <a href="#" class="btn btn-neutral btn-icon">
                            <span class="btn-inner--icon">
                              <img src="img/icon/google.svg">
                            </span>
                            <span class="btn-inner--text">Google</span>
                          </a>
                        </div>
                      </div>
                      <div class="card-body px-lg-5 py-lg-5 cardmodal">
                        <div class="text-center text-muted mb-4">
                          <small class="logintext">Faça seu Cadastro</small>
                        </div>
                        <form role="form">
                          <div class="form-group mb-3">
                            <div class="input-group input-group-alternative">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user-o" aria-hidden="true"></i></span>
                              </div>
                              <input class="form-control" placeholder="Nome" type="text">
                            </div>
                          </div>
                          <div class="form-group mb-3">
                            <div class="input-group input-group-alternative">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-at" aria-hidden="true"></i></span>
                              </div>
                              <input class="form-control" placeholder="Email" type="email">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group input-group-alternative">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                              </div>
                              <input class="form-control" placeholder="Senha" type="password">
                            </div>
                          </div>
                          <div class="custom-control custom-control-alternative custom-checkbox">
                            <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                            <label class="custom-control-label" for=" customCheckLogin">
                              <span>Eu concordo com a  <a href="#" style="color: blue">política de privacidade</a> </span>
                            </label>
                          </div>
                          <div class="text-center">
                            <button type="button" class="btn btn2 my-4">Entrar</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    
    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/venobox/venobox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>
  </body>

  </html>
