    <!-- SECCION CENTRAL -->
    <div ui-view class="app-body" id="view">
        <div class="padding">

            <div class="row">
                <div class="col-sm-6">
                    <div class="box">
                        <div class="box-header">
                            <h2>Detalles Pedido N°<?=$detpedido->getPedido_id()?> - Mesa <?=$detpedido->getPedido_mesa()?></h2>
                            <small>Se muestran los detalles de cada plato pedido</small>
                        </div>
                        <table class="table table-striped b-t">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                    <th>Precio Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for($i=0;$i<count($platosPed)-1;$i++){
                                    $detPlatoPed = null; 
                                    $detPlatoPed = explode(",",$platosPed[$i]);
                                    $platoPed = $this->platos->ObtenerPlato($detPlatoPed[0]);
                                    if($detPlatoPed[1]==null){
                                        continue;
                                    }
                                    ?>
                                    <tr>
                                        <td><?php echo $platoPed->getPlato_nombre() ?></td>
                                        <td><?php echo $detPlatoPed[1] ?></td>
                                        <td><?php echo $platoPed->getPlato_precio() ?></td>
                                        <td><?php echo $platoPed->getPlato_precio()*$detPlatoPed[1] ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <br>
                        <div class="box-header">
                            <h6>Subtotal: S/.<?=$detpedido->getPedido_subtotal()?></h6>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="col-sm-6">
                <a href="?c=users&a=InterfazPedidos" class="btn btn-primary" role="button" aria-pressed="true">Aceptar</a>
            </div>

        </div>


    </div>
<!-- ############ PAGE END-->

</div>

</div>
<!-- / -->