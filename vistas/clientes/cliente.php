<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Inicio - Yacumama</title>
  <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="../assets/images/logo.png">
  <meta name="apple-mobile-web-app-title" content="Flatkit">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="../assets/images/logo.png">

  <!-- style -->
  <link rel="stylesheet" href="assets/animate.css/animate.min.css" type="text/css" />
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="assets/styles/app.min.css" type="text/css" />
  <link rel="stylesheet" href="assets/styles/font.css" type="text/css" />
</head>
<body>
  <header>
      <nav class="navbar navbar-toggleable-sm navbar-md fixed-top white">
        <div class="container">
          <a data-toggle="collapse" data-target="#navbar-1" class="navbar-item pull-right hidden-md-up m-a-0 m-l">
            <i class="fa fa-bars"></i>
          </a>

          <!-- brand -->
          <a class="navbar-brand md" href="#home" ui-scroll-to="home">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="32" height="32">
              <path d="M 4 4 L 44 4 L 44 44 Z" fill="#a88add" />
              <path d="M 4 4 L 34 4 L 24 24 Z" fill="rgba(0,0,0,0.15)" />
              <path d="M 4 4 L 24 4 L 4  44 Z" fill="#0cc2aa" />
            </svg>

            <span class="hidden-folded inline">UNMSM</span>
          </a>
          <!-- / brand -->

          <!-- navbar collapse -->
          <div class="collapse navbar-collapse text-center white" id="navbar-1">
            <!-- link and dropdown -->
            <ul class="nav navbar-nav nav-active-border bottom b-primary ml-auto">

              <li class="nav-item">
                <a class="nav-link" href="https://yacumama.ml:8083/login" >
                  <span class="nav-text">Vesta Panel</span>
                </a>
              </li>
            </ul>
            <!-- / link and dropdown -->
          </div>
          <!-- / navbar collapse -->

          <!-- nabar right -->
          <ul class="nav navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="?c=users&a=FormLoginUsuario">
                <span class="btn btn-sm rounded accent text-u-c _700">
                  Iniciar Sesión
                </span>
              </a>
            </li>
          </ul>
          <!-- / navbar right -->
        </div>
      </nav>
  </header>
  <div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="30" height="30" style="position:fixed; z-index:0; left:50%; top: 20%" class="animated fadeInDownBig">
        <path d="M 48 0 L 24 48 L 0 0 Z" fill="rgba(0,0,0,0.05)" />
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="10" height="10" style="position:fixed; z-index:0; left:49%; top: 15%" class="animated fadeInDown">
        <path d="M 48 0 L 24 48 L 0 0 Z" fill="#a88add" />
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="5" height="5" style="position:fixed; z-index:0; left:30%; top: 0%" class="animated fadeInDown">
        <path d="M 48 0 L 24 48 L 0 0 Z" fill="#a88add" />
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="20" height="20" style="position:fixed; z-index:0; right:5%; top: 30%" class="animated fadeInDown">
        <path d="M 48 0 L 24 48 L 0 0 Z" fill="#0cc2aa" />
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="15" height="15" style="position:fixed; z-index:0; left:34.5%; top: 55%" class="animated fadeIn">
        <path d="M 0 48 L 24 0 L 48 48 Z" fill="#fcc100" />
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="200" height="200" style="position:fixed; z-index:0; right:20%; top: 70%" class="animated fadeInUp">
        <path d="M 0 48 L 24 0 L 48 48 Z" fill="rgba(252,193,0,0.1)" />
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="120" height="120" style="position:fixed; z-index:0; left:0%; top: 30%" class="animated fadeInLeftBig">
        <path d="M 0 48 L 48 24 L 0 0 Z" fill="rgba(0,0,0,0.03)" />
      </svg>
  </div>
  <div class="page-content" id="home">
    <div class="h-v white row-col">
      <div class="row-cell v-b">
        <div class="container p-y-lg pos-rlt">
          <h1 class="display-3 _700 l-s-n-3x m-t-lg m-b-md">Proyecto <span class="text-primary">Yacumama</span> UNMSM</h1>
          <h5 class="text-muted m-b-lg">Simulación control de<span class="label accent">pedidos</span> de la empresa(restaurante) Yacumama S.A.</h5>
          <h5 class="text-muted m-b-lg">Administración de platillos, pedidos y personal</h5>
        </div>
      </div>
    </div>
    <div class="p-y-lg" id="demos">
      <div class="container p-y-lg text-primary-hover">
        <h2 class=" _700 l-s-n-1x m-b-md">Integrantes <span class="text-primary">Grupo 8</span></h2>
        <h5 class="m-y-lg text-muted text-center">Noriega Vela, Diego</h5>
        <h5 class="m-y-lg text-muted text-center">Quintanilla Jaimes, Sebastian Yimmy</h5>
        <h5 class="m-y-lg text-muted text-center">Salvatierra Flores, Brayan Raúl</h5>
        <h5 class="m-y-lg text-muted text-center">Tupayachi Rivas, David Yaku</h5>
        <h5 class="m-y-lg text-muted text-center">Velasquez Diaz, Rahmat Izzat</h5>
      </div>
    </div>

  </div>
  <footer class="black pos-rlt">
    <div class="footer dk">
      <div class="text-center container p-y-lg">
        <div class="clearfix text-lg m-t">
           Proyecto <strong>Yacumama</strong> by Grupo 8 - Gestión de proyectos de TI
        </div>
      </div>
      <div class="b b-b"></div>
      <div class="p-a-md">
        <div class="row footer-bottom">
          <div class="col-sm-8">
            <small class="text-muted">&copy; Copyright 2017. All rights reserved.</small>
          </div>
          <div class="col-sm-4">
            <div class="text-sm-right text-xs-left">
              <strong>Flatkit</strong>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script src="libs/jquery/jquery/dist/jquery.js"></script>
  <script src="libs/jquery/tether/dist/js/tether.min.js"></script>
  <script src="libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
  <script src="html/scripts/ui-scroll-to.js"></script>
</body>
</html>