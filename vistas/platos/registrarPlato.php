<div ui-view class="app-body" id="view">
    <div class="padding">
        <div class="row">
            <div class="col-md-6">
              <div class="box">
                <div class="box-header">

                  <h2>Registrar Plato</h2>
                  <small>Registrar nuevo plato</small>

                </div>
                <div class="box-divider m-0"></div>
                <div class="box-body">

                  <form role="form" method="post" target="">
                    <div class="form-group">
                      <label for="nombre">Nombre</label>
                      <input name="nombre" type="text" class="form-control" >
                    </div>
                    <div class="form-group">
                      <label for="descripcion">Descripcion</label>
                      <input name="descripcion" type="text" class="form-control" >
                    </div>
                    <div class="form-group">
                      <label for="precio">Precio</label>
                      <input name="precio" type="text" class="form-control" >
                    </div>
                    <div class="form-group">
                      <label for="imagen">Imagen</label>
                      <input name="imagen" type="text" class="form-control" >
                    </div>

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