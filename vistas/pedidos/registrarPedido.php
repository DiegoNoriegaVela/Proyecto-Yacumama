<div ui-view class="app-body" id="view">
    <div class="padding">
        <div class="row">
            <div class="col-md-6">
                <div class="box">
                    <div class="box-header">

                    <h2>Registrar Pedido</h2>
                    <small>Ingresar nuevo pedido</small>

                    </div>
                    <div class="box-divider m-0"></div>
                    <div class="box-body">

                        <form role="form" method="post" target="">
                            <div class="form-group">
                                <label for="mesa">Mesa</label>
                                <select name="mesa" class="form-control select2" ui-jp="select2" ui-options="{theme: 'bootstrap'}">
                                    <?php for($i=1;$i<=8;$i++){ ?>
                                    <option value="<?=$i?>" type="number">Mesa <?=$i?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            
                            <?php foreach ($this->platos->Listar() as $plato) : ?>
                                <div class="form-group row">
                                    <label for="<?=$plato->plato_id?>" class="col-sm-3 col-form-label"><?=$plato->plato_nombre?></label>
                                    <div class="col-sm-4">
                                        <input name="<?=$plato->plato_id?>" type="number" class="form-control" min="0">
                                    </div>
                                </div>
                            <?php endforeach; ?>

                            <div class="form-group">
                                <label for="pago">Pago</label>
                                <select name="pago" class="form-control select2" ui-jp="select2" ui-options="{theme: 'bootstrap'}">
                                    <option value="Pendiente" type="text">Pendiente</option>
                                    <option value="Cancelado" type="text">Cancelado</option>
                                </select>
                            </div>

                            <br>
                            <button type="submit" class="btn btn-primary ">Registrar</button>

                        </form>

                        <!--Mensaje de error-->
                        <br><br>
                        <div style="color:yellow" class="">
                            <?php echo $msg ?>
                        </div>
                        <br>

                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- ############ PAGE END-->

</div>

</div>
<!-- / -->