<div ui-view class="app-body" id="view">
    <div class="padding">
        <div class="row">
            <div class="col-md-6">
              <div class="box">
                <div class="box-header">

                  <h2>Agregar Personal</h2>
                  <small>Ingresa datos de nuevo personal</small>

                </div>
                <div class="box-divider m-0"></div>
                <div class="box-body">

                  <form role="form" method="post" target="">
                    <div class="form-group">
                      <label for="dni">DNI</label>
                      <input name="dni" type="text" class="form-control" >
                    </div>
                    <div class="form-group">
                      <label for="nombres">Nombres</label>
                      <input name="nombres" type="text" class="form-control" >
                    </div>
                    <div class="form-group">
                      <label for="apellidos">Apellidos</label>
                      <input name="apellidos" type="text" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="rol">Rol</label>
                        <select name="rol" class="form-control select2" ui-jp="select2" ui-options="{theme: 'bootstrap'}">
                            <option value="Administrador" type="text">Administrador</option>
                            <option value="Cocinero" type="text">Cocinero</option>
                            <option value="Mesero" type="text">Mesero</option>
                        </select>
                    </div>

                    <div class="form-group">
                      <label for="password">Contraseña</label>
                      <input name="password" type="password" class="form-control" >
                    </div>
                    <div class="form-group">
                      <label for="password_r">Repita Contraseña</label>
                      <input name="password_r" type="password" class="form-control" >
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