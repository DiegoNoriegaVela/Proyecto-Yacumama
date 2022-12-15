<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Portal Yacumama - Inicie Sesión</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="/img/logo-top.png">

  <!-- style -->
  <link rel="stylesheet" href="/assets/animate.css/animate.min.css" type="text/css" />
  <link rel="stylesheet" href="/assets/glyphicons/glyphicons.css" type="text/css" />
  <link rel="stylesheet" href="/assets/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="/assets/material-design-icons/material-design-icons.css" type="text/css" />

  <link rel="stylesheet" href="/assets/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
  <!-- build:css ../assets/styles/app.min.css -->
  <link rel="stylesheet" href="/assets/styles/app.css" type="text/css" />
  <!-- endbuild -->
  <link rel="stylesheet" href="/assets/styles/font.css" type="text/css" />
</head>
<body>
  <div class="app" id="app">

<!-- ############ LAYOUT START-->
  <div class="center-block w-xxl w-auto-xs p-y-md">
    <div class="navbar">
      <div style="height: 100px;">
        <img class="img-fluid" style="max-width:auto; height:autopx;" src="/img/logo-top.png">
      </div>
    </div>
    <div class="p-a-md box-color r box-shadow-z1 text-color m-a">
      <div class="m-b text-sm">
        Iniciar sesión
      </div>

      <form target="" method="post" name="form">
        <div class="md-form-group float-label">
          <input name="dni" type="number" class="md-input" value="<?php echo $dni ?>" ng-model="user.dni" required >
          <label>dni</label>
        </div>
        <div  class="md-form-group float-label">
          <input name="password" type="password" class="md-input" ng-model="user.password" required >
          <label>Contraseña</label>
        </div>
        <button type="submit" class="btn primary btn-block p-x-md">Iniciar Sesión</button>
      </form>

      <div style="color:red" class="">
        <?php echo $msg ?>
      </div>


    </div>

  </div>

<!-- ############ LAYOUT END-->

  </div>
<!-- build:js scripts/app.html.js -->
<!-- jQuery -->
  <script src="/libs/jquery/jquery/dist/jquery.js"></script>
<!-- Bootstrap -->
  <script src="/libs/jquery/tether/dist/js/tether.min.js"></script>
  <script src="/libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
<!-- core -->
  <script src="/libs/jquery/underscore/underscore-min.js"></script>
  <script src="/libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js"></script>
  <script src="/libs/jquery/PACE/pace.min.js"></script>

  <script src="/html/scripts/config.lazyload.js"></script>

  <script src="/html/scripts/palette.js"></script>
  <script src="/html/scripts/ui-load.js"></script>
  <script src="/html/scripts/ui-jp.js"></script>
  <script src="/html/scripts/ui-include.js"></script>
  <script src="/html/scripts/ui-device.js"></script>
  <script src="/html/scripts/ui-form.js"></script>
  <script src="/html/scripts/ui-nav.js"></script>
  <script src="/html/scripts/ui-screenfull.js"></script>
  <script src="/html/scripts/ui-scroll-to.js"></script>
  <script src="/html/scripts/ui-toggle-class.js"></script>

  <script src="/html/scripts/app.js"></script>

  <!-- ajax -->
  <script src="/libs/jquery/jquery-pjax/jquery.pjax.js"></script>
  <script src="/html/scripts/ajax.js"></script>

  

<!-- endbuild -->
</body>
</html>
