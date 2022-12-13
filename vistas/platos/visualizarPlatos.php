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
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($this->platos->Listar() as $plato) : ?>
                                    <tr>
                                        <td><img src="<?=$plato->plato_img?>"></td>
                                        <td><?php echo $plato->plato_id ?></td>
                                        <td><?php echo $plato->plato_nombre ?></td>
                                        <td><?php echo $plato->plato_descripcion ?></td>
                                        <td><?php echo $plato->plato_precio ?></td>
                                    </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>


    </div>
<!-- ############ PAGE END-->

</div>

</div>
<!-- / -->