    <!-- SECCION CENTRAL -->
    <div ui-view class="app-body" id="view">
        <div class="padding">

            <div class="row">
                <div class="col-sm-6">
                    <div class="box">
                        <div class="box-header">
                            <h2>Personal Yacumama</h2>
                        </div>
                        <table class="table table-striped b-t">
                            <thead>
                                <tr>
                                    <th>DNI</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Rol</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($this->perfil->Listar() as $user) : ?>
                                    <tr>
                                        <td><?php echo $user->users_dni ?></td>
                                        <td><?php echo $user->users_nombres ?></td>
                                        <td><?php echo $user->users_apellidos ?></td>
                                        <td><?php echo $user->users_rol ?></td>
                                        <td>
                                            <a class="btn btn-info btn-flat" href="?c=users&a=AdminActualizarUsuario&dni=<?=$user->users_dni?>"><i class="fa fa-lg fa-refresh"></i></a>
                                            <?php if($user->users_rol!="Administrador"){ ?>
                                                <a class="btn btn-warning btn-flat" href="?c=users&a=AdminBorrarUsuario&dni=<?=$user->users_dni?>"><i class="fa fa-lg fa-trash"></i></a>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <a href="?c=users&a=AdminRegistrarUsuario" class="btn btn-primary" role="button" aria-pressed="true">Registrar Nuevo Usuario</a>
            </div>

        </div>


    </div>
<!-- ############ PAGE END-->

</div>

</div>
<!-- / -->