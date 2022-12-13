    <!-- SECCION CENTRAL -->
    <div ui-view class="app-body" id="view">
        <div class="padding">

            <div class="row">
                <div class="col-sm-8">
                    <div class="box">
                        <div class="box-header">
                            <h2>Platos Yacumama</h2>
                        </div>
                        <table class="table table-striped b-t">
                            <thead>
                                <tr>
                                    <th>Imagen</th>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Precio</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($this->platos->Listar() as $plato) : ?>
                                    <tr>
                                        <td><img src="img/imgplatos/<?=$plato->plato_img?>"></td>
                                        <td><?php echo $plato->plato_id ?></td>
                                        <td><?php echo $plato->plato_nombre ?></td>
                                        <td><?php echo $plato->plato_descripcion ?></td>
                                        <td><?php echo $plato->plato_precio ?></td>
                                        <td>
                                            <a class="btn btn-info btn-flat" href="?c=users&a=AdminActualizarPlato&id=<?=$plato->plato_id?>"><i class="fa fa-lg fa-refresh"></i></a>
                                            <a class="btn btn-warning btn-flat" href="?c=users&a=AdminBorrarPlato&id=<?=$plato->plato_id?>"><i class="fa fa-lg fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <a href="?c=users&a=AdminRegistrarPlato" class="btn btn-primary" role="button" aria-pressed="true">Registrar Nuevo Plato</a>
            </div>

        </div>


    </div>
<!-- ############ PAGE END-->

</div>

</div>
<!-- / -->