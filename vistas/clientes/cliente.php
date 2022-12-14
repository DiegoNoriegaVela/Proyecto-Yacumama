<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Inicio - Yacumama</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="./img/logo-top.png">

  <!-- style -->
  <link rel="stylesheet" href="./assets/animate.css/animate.min.css" type="text/css" />
  <link rel="stylesheet" href="./assets/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="./assets/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="./assets/styles/app.min.css" type="text/css" />
  <link rel="stylesheet" href="./assets/styles/font.css" type="text/css" />
</head>

<body>
  <header>
    <nav class="navbar navbar-toggleable-sm navbar-md fixed-top green-900">
      <div class="container">
        <!-- brand -->
        <a class="navbar-brand md" href="#home" ui-scroll-to="home">
          <img src="./img/logo-top.png">
        </a>
        <!-- / brand -->

        <!-- navbar collapse -->
        <div class="collapse navbar-collapse text-center green-900" id="navbar-1">
          <!-- link and dropdown -->
          <ul class="nav navbar-nav nav-active-border bottom ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="https://yacumama.ml:8083/login">
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
              <span class="btn btn-sm rounded orange-800 text-u-c _700">
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


    <div class="row " style="height: 250px;">
      <img class="img-responsive" src="./img/fondo.jpg">
    </div>

    <div class="white row-col">
      <div class="row-cell p-y-lg">
        <div class="container p-y-lg text-primary-hover">
          <h1 class="display-3 _700 l-s-n-3x m-t-lg m-b-md text-white">Proyecto <span class="text-success">Yacumama</span></h1>
          <h5 class=" m-b-lg text-white">Simulación control de<span class="label orange-800">pedidos</span> de la empresa(restaurante) Yacumama S.A.</h5>
          <h5 class=" m-b-lg text-white">Administración de platillos, pedidos y personal</h5>
        </div>
      </div>
    </div>

    <div ui-view="" class="white ng-scope" style="">
      <div class="padding ng-scop p-y-lg">
          <div class="container p-y-lg">
            <h5 class="display-4 _700 l-s-n-3x">Carta</h5>
            <h5 class="text-muted">Administración de platillos, pedidos y personal</h5>
          </div>


        <div class="row">
          <div class="container">
            <div class="row">
              <div class="col-xs-6 col-sm-4 col-md-3">
                <div class="box p-a-xs">
                  <a href="#"><img src="./assets/images/c1.jpg" alt="" class="img-responsive"></a>
                  <div class="p-a-sm">
                    <div class="text-ellipsis">Skyline collection</div>
                  </div>
                </div>
              </div>
              <div class="col-xs-6 col-sm-4 col-md-3">
                <div class="box p-a-xs">
                  <a href="#"><img src="./assets/images/c2.jpg" alt="" class="img-responsive"></a>
                  <div class="p-a-sm">
                    <div class="text-ellipsis">Morbi nec nunc condimentum</div>
                  </div>
                </div>
              </div>
              <div class="col-xs-6 col-sm-4 col-md-3">
                <div class="box p-a-xs">
                  <a href="#"><img src="./assets/images/c3.jpg" alt="" class="img-responsive"></a>
                  <div class="p-a-sm">
                    <div class="text-ellipsis">Vestibulum ullamcorper sodales nisi</div>
                  </div>
                </div>
              </div>
              <div class="col-xs-6 col-sm-4 col-md-3">
                <div class="box p-a-xs">
                  <a href="#"><img src="./assets/images/c4.jpg" alt="" class="img-responsive"></a>
                  <div class="p-a-sm">
                    <div class="text-ellipsis">Lorem ipsum dolor sit amet</div>
                  </div>
                </div>
              </div>
              <div class="col-xs-6 col-sm-4 col-md-3">
                <div class="box p-a-xs">
                  <a href="#"><img src="./assets/images/c0.jpg" alt="" class="img-responsive"></a>
                  <div class="p-a-sm">
                    <div class="text-ellipsis">Donec eleifend condimentum nisl eu consectetur.</div>
                  </div>
                </div>
              </div>
              <div class="col-xs-6 col-sm-4 col-md-3">
                <div class="box p-a-xs">
                  <a href="#"><img src="./assets/images/c6.jpg" alt="" class="img-responsive"></a>
                  <div class="p-a-sm">
                    <div class="text-ellipsis">Duis non malesuada est</div>
                  </div>
                </div>
              </div>
              <div class="col-xs-6 col-sm-4 col-md-3">
                <div class="box p-a-xs">
                  <a href="#"><img src="./assets/images/c0.jpg" alt="" class="img-responsive"></a>
                  <div class="p-a-sm">
                    <div class="text-ellipsis">Mauris convallis mauris at pellentesque</div>
                  </div>
                </div>
              </div>
              <div class="col-xs-6 col-sm-4 col-md-3">
                <div class="box p-a-xs">
                  <a href="#"><img src="./assets/images/c7.jpg" alt="" class="img-responsive"></a>
                  <div class="p-a-sm">
                    <div class="text-ellipsis">Donec eleifend</div>
                  </div>
                </div>
              </div>
              <div class="col-xs-6 col-sm-4 col-md-3">
                <div class="box p-a-xs">
                  <a href="#"><img src="./assets/images/c8.jpg" alt="" class="img-responsive"></a>
                  <div class="p-a-sm">
                    <div class="text-ellipsis">Vestibulum ullamcorper sodales</div>
                  </div>
                </div>
              </div>
              <div class="col-xs-6 col-sm-4 col-md-3">
                <div class="box p-a-xs">
                  <a href="#"><img src="./assets/images/c0.jpg" alt="" class="img-responsive"></a>
                  <div class="p-a-sm">
                    <div class="text-ellipsis">Dapibus porta</div>
                  </div>
                </div>
              </div>
              <div class="col-xs-6 col-sm-4 col-md-3">
                <div class="box p-a-xs">
                  <a href="#"><img src="./assets/images/c9.jpg" alt="" class="img-responsive"></a>
                  <div class="p-a-sm">
                    <div class="text-ellipsis">Phasellus at ultricies neque,</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="p-y-lg">
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
  <footer class="green-900 pos-rlt">
    <div class="footer dk">
      <div class="p-a-md">
        <div class="row footer-bottom">
          <div class="col-sm-8">
            <small class="text-muted">Proyecto Yacumama Dashboard by Grupo 8</small>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="libs/jquery/jquery/dist/jquery.js"></script>
  <script src="libs/jquery/tether/dist/js/tether.min.js"></script>
  <script src="libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
  <script src="libs/jquery/plugins/integration/bootstrap/3/dataTables.bootstrap.js"></script>
  <script src="html/scripts/ui-scroll-to.js"></script>

</body>

</html>