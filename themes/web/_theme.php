<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pharmative &mdash; Colorlib Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?=url("/assets/web/fonts/icomoon/style.css")?>">

  <link rel="stylesheet" href="<?=url("/assets/web/css/bootstrap.min.css")?>">
  <link rel="stylesheet" href="<?=url("/assets/web/fonts/flaticon/font/flaticon.css")?>">
  <link rel="stylesheet" href="<?=url("/assets/web/css/magnific-popup.css")?>">
  <link rel="stylesheet" href="<?=url("/assets/web/css/jquery-ui.css")?>">
  <link rel="stylesheet" href="<?=url("/assets/web/css/owl.carousel.min.css")?>">
  <link rel="stylesheet" href="<?=url("/assets/web/css/owl.theme.default.min.css")?>">

  <link rel="stylesheet" href="<?=url("/assets/web/css/aos.css")?>">

  <link rel="stylesheet" href="<?=url("/assets/web/css/style.css")?>">

</head>

<body>

  <div class="site-wrap">


    <div class="site-navbar py-2">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="index.html" class="js-logo-clone"><strong class="text-primary">Pharma</strong>tive</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active"><a href="<?= url() ?>">Home</a></li>
                <li class="has-children">
                  <a href="<?= url("medicamentos") ?>">Medicamentos</a>
                  <ul class="dropdown">
                    <li><a href="<?= url("Contínuos") ?>">Contínuos</a></li>
                    <li><a href="<?= url("Controlados") ?>">Controlados</a></li>
                    
                  </ul>
                </li>
                <li><a href="<?= url("sobre") ?>">Sobre</a></li>
                <li><a href="<?= url("contato") ?>">Contato</a></li>
              </ul>
            </nav>
          </div>
          <div class="icons">
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
    <main id = "main">
<?php 
echo $this->section("content");
?>
</main>
    <footer class="site-footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">

            <div class="block-7">
              <h3 class="footer-heading mb-4">About <strong class="text-primary">Pharmative</strong></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quae reiciendis distinctio voluptates
                sed dolorum excepturi iure eaque, aut unde.</p>
            </div>

          </div>
          <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Navigation</h3>
            <ul class="list-unstyled">
              <li><a href="#">Supplements</a></li>
              <li><a href="#">Vitamins</a></li>
              <li><a href="#">Diet &amp; Nutrition</a></li>
              <li><a href="#">Tea &amp; Coffee</a></li>
            </ul>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">203 Fake St. Mountain View, San Francisco, California, USA</li>
                <li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
                <li class="email">sustentamedicamentos@gmail.com</li>
              </ul>
            </div>

  <script src="<?= url("/assets/web/js/jquery-3.3.1.min.js")?>" async></script>
  <script src="<?= url("/assets/web/js/jquery-ui.js")?>" async></script>
  <script src="<?= url("/assets/web/js/popper.min.js")?>" async></script>
  <script src="<?= url("/assets/web/js/bootstrap.min.js")?>" async></script>
  <script src="<?= url("/assets/web/js/owl.carousel.min.js")?>" async></script>
  <script src="<?= url("/assets/web/js/jquery.magnific-popup.min.js")?>"async></script>
  <script src="<?= url("/assets/web/js/aos.js")?>" async></script>

  <script src="<?= url("/assets/web/js/main.js")?>" async></script>

</body>

</html>