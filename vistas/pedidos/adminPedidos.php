    <!-- SECCION CENTRAL -->
    <div ui-view class="app-body" id="view">
        <div class="padding">

            <div class="row">
                <div class="col-sm-8">
                    <div class="box">
                        <div class="box-header">
                            <h2>Pedidos Yacumama</h2>
                        </div>
                        <table class="table table-striped b-t">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Fecha</th>
                                    <th>Mesa</th>
                                    <th>Subtotal</th>
                                    <th>Pago</th>
                                    <th>Estado</th>
                                    <th>Detalles</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($this->pedidos->Listar() as $pedido) : ?>
                                    <tr>
                                        <td><?php echo $pedido->pedido_id ?></td>
                                        <td><?php echo $pedido->pedido_date ?></td>
                                        <td><?php echo $pedido->pedido_mesa ?></td>
                                        <td><?php echo $pedido->pedido_subtotal ?></td>
                                        <td><?php echo $pedido->pedido_pago ?></td>
                                        <td><?php echo $pedido->pedido_estado ?></td>
                                        <td><a class="btn btn-primary btn-flat" href="?c=users&a=DetallePedido&id=<?=$pedido->pedido_id?>"><i class="fa fa-lg fa-bars"></i></a></td>
                                        <td>
                                            <a class="btn btn-info btn-flat" href="?c=users&a=ActualizarPedido&id=<?=$pedido->pedido_id?>"><i class="fa fa-lg fa-refresh"></i></a>
                                            <a class="btn btn-warning btn-flat" href="?c=users&a=BorrarPedido&id=<?=$pedido->pedido_id?>"><i class="fa fa-lg fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <a href="?c=users&a=RegistrarPedido" class="btn btn-primary" role="button" aria-pressed="true">Registrar Nuevo pedido</a>
            </div>

        </div>


    </div>
<!-- ############ PAGE END-->

</div>

</div>
<!-- / -->