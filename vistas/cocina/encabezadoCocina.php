<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Proyecto Yacumama - Cocina</title>
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
    <!-- build:css /assets/styles/app.min.css -->
    <link rel="stylesheet" href="/assets/styles/app.css" type="text/css" />
    <!-- endbuild -->
    <link rel="stylesheet" href="/assets/styles/font.css" type="text/css" />
</head>

<body>
    <div class="app" id="app">

        <!-- ############ LAYOUT START-->

        <!-- BARRA IZQUIERDA -->
        <!-- aside -->
        <div id="aside" class="app-aside modal nav-dropdown">
            <!-- fluid app aside -->
            <div class="left navside dark dk" data-layout="column">
                <div class="navbar no-radius">
                    <!-- brand -->
                    <img src="/img/logo-top.png" alt=".">
                    <!-- / brand -->
                </div>
                <div class="hide-scroll" data-flex>
                    <nav class="scroll nav-light">

                        <ul class="nav" ui-nav>
                            <li class="nav-header hidden-folded">
                                <small class="text-muted">Paneles</small>
                            </li>

                            <li>
                                <a href="?c=users&a=InterfazAdminPlatos">
                                    <span class="nav-icon">
                                        <i class="fa fa-cutlery"></i>
                                    </span>
                                    <span class="nav-text">Platos</span>
                                </a>
                            </li>

                            <li>
                                <a href="?c=users&a=InterfazPedidos">
                                    <span class="nav-icon">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </span>
                                    <span class="nav-text">Pedidos</span>
                                </a>
                            </li>

                        </ul>
                    </nav>
                </div>
                <div class="b-t">
                    <div class="nav-fold">
                        <a href="#">
                            <span class="pull-left">
                                <img src="/assets/images/a0.jpg" alt="..." class="w-40 img-circle">
                            </span>
                            <span class="clear hidden-folded p-x">
                                <span class="block _500"><?= $usu->getUsers_nombres() ?> <?= $usu->getUsers_apellidos() ?></span>
                                <small class="block text-muted"><i class="fa fa-circle text-success m-r-sm"></i><?= $usu->getUsers_rol() ?></small>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- / -->

        <!-- content -->
        <div id="content" class="app-content box-shadow-z0" role="main">
            <div class="app-header white box-shadow">
                <div class="navbar navbar-toggleable-sm flex-row align-items-center">
                    <!-- Open side - Naviation on mobile -->
                    <a data-toggle="modal" data-target="#aside" class="hidden-lg-up mr-3">
                        <i class="material-icons">&#xe5d2;</i>
                    </a>
                    <!-- / -->
                    <div class="">
                        <b id="display_new_access"> </b>
                    </div>
                    <!-- Page title - Bind to $state's title -->
                    <div class="mb-0 h5 no-wrap" ng-bind="$state.current.data.title" id="pageTitle"></div>

                    <!-- BARRA DE LA DERECHA -->
                    <ul class="nav navbar-nav ml-auto flex-row">

                        <li class="nav-item dropdown">
                            <a class="nav-link p-0 clear" href="#" data-toggle="dropdown">
                                <span class="avatar w-32">
                                    <img src="assets/images/a0.jpg" alt="...">
                                    <i class="on b-white bottom"></i>
                                </span>
                            </a>      
                            <div class="dropdown-menu dropdown-menu-overlay pull-right">
                                <a class="dropdown-item" href="?c=users&a=CerrarSesion">Cerrar Sesión</a>
                            </div>
                        </li>

                        <li class="nav-item hidden-md-up">
                            <a class="nav-link pl-2" data-toggle="collapse" data-target="#collapse">
                                <i class="material-icons">&#xe5d4;</i>
                            </a>
                        </li>

                    </ul>
                    <!-- / navbar right -->

                </div>
            </div>

            <!-- PIE DE PAGINA -->
            <div class="app-footer">
                <div class="p-2 text-xs">
                    <div class="pull-right text-muted py-1">
                        Proyecto Gestión de Proyectos by <strong>Grupo 08</strong></span>
                    </div>
                </div>
            </div>