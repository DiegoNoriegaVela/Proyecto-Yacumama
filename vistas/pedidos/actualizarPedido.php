<div ui-view class="app-body" id="view">
    <div class="padding">
        <div class="row">
            <div class="col-md-6">
                <div class="box">
                    <div class="box-header">

                    <h2>Actualizar Pedido</h2>
                    <small>Modificar el pedido</small>

                    </div>
                    <div class="box-divider m-0"></div>
                    <div class="box-body">

                        <form role="form" method="post" target="">
                            <div class="form-group">
                                <label for="mesa">Mesa</label>
                                <select name="mesa" class="form-control select2" ui-jp="select2" ui-options="{theme: 'bootstrap'}">
                                    <?php for($i=1;$i<=8;$i++){ 
                                        if($i==$pedido_a->getPedido_mesa()){
                                        ?>
                                        <option value="<?=$i?>" type="number" selected>Mesa <?=$i?></option>
                                        <?php continue; }?>
                                        <option value="<?=$i?>" type="number">Mesa <?=$i?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            
                            <?php foreach ($this->platos->Listar() as $plato) : 
                                $i=0;
                                for($i;$i<count($platosPed)-1;$i++){
                                    $detPlatoPed = null; 
                                    $detPlatoPed = explode(",",$platosPed[$i]); 
                                    if($detPlatoPed[0]!=$plato->plato_id){ continue; } ?>
                                    
                                    <div class="form-group row">
                                        <label for="<?=$plato->plato_id?>" class="col-sm-3 col-form-label"><?=$plato->plato_nombre?></label>
                                        <div class="col-sm-4">

                                            <?php if($detPlatoPed[0]==$plato->plato_id){ ?>
                                                <input name="<?=$plato->plato_id?>" type="number" class="form-control" min="0" value="<?=$detPlatoPed[1]?>">
                                                </div>
                                                </div>
                                            <?php break;}?>

                                            <input name="<?=$plato->plato_id?>" type="number" class="form-control" min="0">
                                        </div>
                                    </div>

                                <?php } if($i<count($this->platos->Listar()) && $i>count($platosPed)-2){ ?>
                                    
                                    <div class="form-group row">
                                        <label for="<?=$plato->plato_id?>" class="col-sm-3 col-form-label"><?=$plato->plato_nombre?></label>
                                        <div class="col-sm-4">
                                            <input name="<?=$plato->plato_id?>" type="number" class="form-control" min="0">
                                        </div>
                                    </div>

                                <?php $i++;} endforeach; ?>

                            <div class="form-group">
                                <label for="pago">Pago</label>
                                <select name="pago" class="form-control select2" ui-jp="select2" ui-options="{theme: 'bootstrap'}">
                                    <?php if($pedido_a->getPedido_pago()=="Pendiente"){ ?>
                                        <option value="Pendiente" type="text" selected>Pendiente</option>
                                        <option value="Cancelado" type="text">Cancelado</option>
                                    <?php }else{?>
                                        <option value="Pendiente" type="text" >Pendiente</option>
                                        <option value="Cancelado" type="text" selected>Cancelado</option>
                                    <?php }?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="estado">Estado</label>
                                <select name="estado" class="form-control select2" ui-jp="select2" ui-options="{theme: 'bootstrap'}">
                                    <?php if($pedido_a->getPedido_estado()=="Pendiente"){ ?>
                                        <option value="Pendiente" type="text" selected>Pendiente</option>
                                        <option value="Terminado" type="text">Terminado</option>
                                    <?php }else{?>
                                        <option value="Pendiente" type="text" >Pendiente</option>
                                        <option value="Terminado" type="text" selected>Terminado</option>
                                    <?php }?>
                                </select>
                            </div>

                            <br>
                            <button type="submit" class="btn btn-primary ">Actualizar</button>

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