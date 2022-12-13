    <!-- SECCION CENTRAL -->
    <div ui-view class="app-body" id="view">
        <div class="padding">

            <div class="row">
                <div class="col-sm-6">
                    <div class="box">
                        <div class="box-header">
                            <h2>Pedidos pendientes: <?=count($this->pedidos->ListarPendientes())?></h2>
                        </div>
                        <table class="table table-striped b-t">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Fecha</th>
                                    <th>Mesa</th>
                                    <th>Detalles</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($this->pedidos->ListarPendientes() as $pedido) : ?>
                                    <tr>
                                        <td><?php echo $pedido->pedido_id ?></td>
                                        <td><?php echo $pedido->pedido_date ?></td>
                                        <td><?php echo $pedido->pedido_mesa ?></td>
                                        <td><a class="btn btn-primary btn-flat" href="?c=users&a=DetallePedido&id=<?=$pedido->pedido_id?>"><i class="fa fa-lg fa-bars"></i></a></td>
                                    </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <br>
            <br>

            <div class="row">
                <div class="col-sm-6">
                    <div class="box">
                        <div class="box-header">
                            <h2>Pedidos terminados: <?=count($this->pedidos->ListarTerminados())?></h2>
                        </div>
                        <table class="table table-striped b-t">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Fecha</th>
                                    <th>Mesa</th>
                                    <th>Detalles</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($this->pedidos->ListarTerminados() as $pedido) : ?>
                                    <tr>
                                        <td><?php echo $pedido->pedido_id ?></td>
                                        <td><?php echo $pedido->pedido_date ?></td>
                                        <td><?php echo $pedido->pedido_mesa ?></td>
                                        <td><a class="btn btn-primary btn-flat" href="?c=users&a=DetallePedido&id=<?=$pedido->pedido_id?>"><i class="fa fa-lg fa-bars"></i></a></td>
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