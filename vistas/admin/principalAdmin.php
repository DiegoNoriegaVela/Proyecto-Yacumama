<!-- SECCION CENTRAL -->
<div ui-view class="app-body" id="view">
    <div class="padding">
        <div class="margin">
            <h5 class="mb-0 _300">Hola <?=$usu->getUsers_nombres()?>, bienvenido de vuelta</h5>
        </div>

        <!--DASHBOARD-->
        <div class="row no-gutter box">
            <?php
                $subtotalDia=array(0.0,0.0,0.0,0.0,0.0,0.0,0.0);
                $subtotalSemana=0;
                for($i=0;$i<7;$i++){
                    foreach($this->pedidos->ListarPedidosDia($i) as $pedido){
                        $subtotalDia[$i]+=floatval($pedido->pedido_subtotal);
                    }
                    $subtotalSemana+=$subtotalDia[$i];
                }

            ?>
            <div class="col-sm-4">
                <div class="box-header">
                    <h3>Ganancias</h3>
                </div>
                <div class="box-body">
                    <div class="col-sm-6">
                        <div class="box p-a">
                        <div class="pull-left m-r">
                            <i class="fa fa-money text-2x text-primary m-y-sm"></i>
                        </div>
                        <div class="clear">
                            <div class="text-muted">Día</div>
                            <h4 class="m-0 text-md _600">S/.<?=$subtotalDia[0]?></h4>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="box p-a">
                        <div class="pull-left m-r">
                            <i class="fa fa-money text-2x text-success m-y-sm"></i>
                        </div>
                        <div class="clear">
                            <div class="text-muted">Semana</div>
                            <h4 class="m-0 text-md _600">S/.<?=$subtotalSemana?></h4>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-8 grey lt">
                <div class="box-header">
                    <h3>Estadísticas de ingresos</h3>
                    <small>Se muestra las ganancias de la semana</small>
                </div>
                <div class="box-body">
                    <div ui-jp="plot" ui-refresh="app.setting.color" ui-options="[
                        { 
                            data: [[1,<?=$subtotalDia[6]?>],[2,<?=$subtotalDia[5]?>],[3,<?=$subtotalDia[4]?>],[4,<?=$subtotalDia[3]?>],[5,<?=$subtotalDia[2]?>],[6,<?=$subtotalDia[1]?>],[7,<?=$subtotalDia[0]?>]], 
                            points: { show: true, radius: 5}, 
                            splines: { show: true, tension: 0.45, lineWidth: 4} 
                        }
                        ], 
                        {
                        colors: ['#0cc2aa'],
                        series: { shadowSize: 3 },
                        xaxis: { show: false, font: { color: '#ccc' }, position: 'bottom' },
                        yaxis:{ show: true, font: { color: '#ccc' }},
                        grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },
                        tooltip: true,
                        tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
                        }" style="height: 162px; padding: 0px; position: relative;">
                    <canvas class="flot-base" width="425" height="162" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 425px; height: 162px;"></canvas><div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px; display: block;"><div style="position: absolute; max-width: 68px; top: 149px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 13px; text-align: center;">1.0</div><div style="position: absolute; max-width: 68px; top: 149px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 78px; text-align: center;">2.0</div><div style="position: absolute; max-width: 68px; top: 149px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 144px; text-align: center;">3.0</div><div style="position: absolute; max-width: 68px; top: 149px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 209px; text-align: center;">4.0</div><div style="position: absolute; max-width: 68px; top: 149px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 275px; text-align: center;">5.0</div><div style="position: absolute; max-width: 68px; top: 149px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 340px; text-align: center;">6.0</div><div style="position: absolute; max-width: 68px; top: 149px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 406px; text-align: center;">7.0</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px; display: block;"><div style="position: absolute; top: 138px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">3.0</div><div style="position: absolute; top: 119px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">3.5</div><div style="position: absolute; top: 100px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">4.0</div><div style="position: absolute; top: 81px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">4.5</div><div style="position: absolute; top: 62px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">5.0</div><div style="position: absolute; top: 43px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">5.5</div><div style="position: absolute; top: 24px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">6.0</div><div style="position: absolute; top: 6px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">6.5</div></div></div><canvas class="flot-overlay" width="425" height="162" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 425px; height: 162px;"></canvas></div>
                </div>
            </div>
        </div>

        <div class="row m-y-lg">
            <!--CANTIDADES-->
            <div class="col-sm-12 col-md-5 col-lg-4">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="box p-a">
                        <div class="pull-left m-r">
                            <i class="fa fa-pencil-square-o text-2x text-accent m-y-sm"></i>
                        </div>
                        <div class="clear">
                            <div class="text-muted">Pedidos del día</div>
                            <h4 class="m-0 text-md _600"><?=count($this->pedidos->ListarPedidosDia(0))?></h4>
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="box p-a">
                        <div class="pull-left m-r">
                            <i class="fa fa-cutlery text-2x text-info m-y-sm"></i>
                        </div>
                        <div class="clear">
                            <div class="text-muted">Platos</div>
                            <h4 class="m-0 text-md _600"><?=count($this->platos->Listar())?></h4>
                        </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="box p-a">
                        <div class="pull-left m-r">
                            <i class="fa fa-group text-2x text-warning m-y-sm"></i>
                        </div>
                        <div class="clear">
                            <div class="text-muted">Usuarios Totales</div>
                            <h4 class="m-0 text-md _600"><?=count($this->perfil->Listar())?></h4>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="box p-a">
                        <div class="pull-left m-r">
                            <i class="fa fa-group text-2x text-success m-y-sm"></i>
                        </div>
                        <div class="clear">
                            <div class="text-muted">Administradores</div>
                            <h4 class="m-0 text-md _600"><?=count($this->perfil->ListarPorRol("Administrador"))?></h4>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="box p-a">
                        <div class="pull-left m-r">
                            <i class="fa fa-group text-2x text-info m-y-sm"></i>
                        </div>
                        <div class="clear">
                            <div class="text-muted">Cocineros</div>
                            <h4 class="m-0 text-md _600"><?=count($this->perfil->ListarPorRol("Cocinero"))?></h4>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="box p-a">
                        <div class="pull-left m-r">
                            <i class="fa fa-group text-2x text-warn m-y-sm"></i>
                        </div>
                        <div class="clear">
                            <div class="text-muted">Mozos</div>
                            <h4 class="m-0 text-md _600"><?=count($this->perfil->ListarPorRol("Mesero"))?></h4>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--PORCENTAJES PEDIDOS ESTADO-->
            <div class="col-md-12 col-xl-4">
                <div class="box">
                <div class="box-header">
                    <h3>Estado de Pedidos</h3>
                    <small>Pedidos del día que ya fueron entregados o no.</small>
                </div>
                <div class="text-center b-t">
                    <div class="row-col">
                    <div class="row-cell p-a">
                        <div class="inline m-b">
                        <div ui-jp="easyPieChart" class="easyPieChart" ui-refresh="app.setting.color" data-redraw="true" data-percent="<?=(count($this->pedidos->ListarPendientes())/count($this->pedidos->ListarPedidosDia(0))*100)?>" ui-options="{
                            lineWidth: 8,
                            trackColor: 'rgba(0,0,0,0.05)',
                            barColor: '#0cc2aa',
                            scaleColor: 'transparent',
                            size: 100,
                            scaleLength: 0,
                            animate:{
                                duration: 3000,
                                enabled:true
                            }
                            }">
                            <div>
                            <h5><?=substr((count($this->pedidos->ListarPendientes())/count($this->pedidos->ListarPedidosDia(0))*100), 0, 4)?>%</h5>
                            </div>
                        <canvas height="100" width="100"></canvas></div>
                        </div>
                        <div>
                            Pendientes
                            <small class="block m-b"><?=count($this->pedidos->ListarPendientes())?></small>
                            <a href="?c=users&a=InterfazPedidosDia" class="btn btn-sm white rounded">Administrar</a>
                        </div>
                    </div>
                    <div class="row-cell p-a dker">
                        <div class="inline m-b">
                        <div ui-jp="easyPieChart" class="easyPieChart" ui-refresh="app.setting.color" data-redraw="true" data-percent="<?=(count($this->pedidos->ListarTerminados())/count($this->pedidos->ListarPedidosDia(0))*100)?>" ui-options="{
                            lineWidth: 8,
                            trackColor: 'rgba(0,0,0,0.05)',
                            barColor: '#fcc100',
                            scaleColor: 'transparent',
                            size: 100,
                            scaleLength: 0,
                            animate:{
                                duration: 3000,
                                enabled:true
                            }
                            }">
                            <div>
                            <h5><?=substr((count($this->pedidos->ListarTerminados())/count($this->pedidos->ListarPedidosDia(0))*100), 0, 4)?>%</h5>
                            </div>
                        <canvas height="100" width="100"></canvas></div>
                        </div>
                        <div>
                            Terminados
                            <small class="block m-b"><?=count($this->pedidos->ListarTerminados())?></small>
                            <a href="?c=users&a=InterfazPedidosDia" class="btn btn-sm white rounded">Administrar</a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            
            <!--PORCENTAJES PEDIDOS PAGO-->
            <div class="col-md-12 col-xl-4">
                <div class="box">
                <div class="box-header">
                    <h3>Pago de Pedidos</h3>
                    <small>Pedidos del día que ya fueron pagados o no.</small>
                </div>
                <div class="text-center b-t">
                    <div class="row-col">
                    <div class="row-cell p-a">
                        <div class="inline m-b">
                        <div ui-jp="easyPieChart" class="easyPieChart" ui-refresh="app.setting.color" data-redraw="true" data-percent="<?=(count($this->pedidos->ListarNoPagados())/count($this->pedidos->ListarPedidosDia(0))*100)?>" ui-options="{
                            lineWidth: 8,
                            trackColor: 'rgba(0,0,0,0.05)',
                            barColor: '#0cc2aa',
                            scaleColor: 'transparent',
                            size: 100,
                            scaleLength: 0,
                            animate:{
                                duration: 3000,
                                enabled:true
                            }
                            }">
                            <div>
                            <h5><?=substr((count($this->pedidos->ListarNoPagados())/count($this->pedidos->ListarPedidosDia(0))*100), 0, 4)?>%</h5>
                            </div>
                        <canvas height="100" width="100"></canvas></div>
                        </div>
                        <div>
                            No pagados
                            <small class="block m-b"><?=count($this->pedidos->ListarNoPagados())?></small>
                            <a href="?c=users&a=InterfazPedidosDia" class="btn btn-sm white rounded">Administrar</a>
                        </div>
                    </div>
                    <div class="row-cell p-a dker">
                        <div class="inline m-b">
                        <div ui-jp="easyPieChart" class="easyPieChart" ui-refresh="app.setting.color" data-redraw="true" data-percent="<?=(count($this->pedidos->ListarPagados())/count($this->pedidos->ListarPedidosDia(0))*100)?>" ui-options="{
                            lineWidth: 8,
                            trackColor: 'rgba(0,0,0,0.05)',
                            barColor: '#fcc100',
                            scaleColor: 'transparent',
                            size: 100,
                            scaleLength: 0,
                            animate:{
                                duration: 3000,
                                enabled:true
                            }
                            }">
                            <div>
                            <h5><?=substr((count($this->pedidos->ListarPagados())/count($this->pedidos->ListarPedidosDia(0))*100), 0, 4)?>%</h5>
                            </div>
                        <canvas height="100" width="100"></canvas></div>
                        </div>
                        <div>
                            Pagados
                            <small class="block m-b"><?=count($this->pedidos->ListarPagados())?></small>
                            <a href="?c=users&a=InterfazPedidosDia" class="btn btn-sm white rounded">Administrar</a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>

        
        </div>

        <div class="row m-y-lg">

            <div class="col-md-6 col-lg-4">
                <div class="box white box-shadow-z3 text-center">
                    <a href="?c=users&a=InterfazAdminPersonal">
                        <img class="img-responsive b-b m-b" src="/img/trabajadores.jpg" alt="default">
                        <span class="_800 p-a block h4 m-a-0">Administrar Personal</span>
                    </a>
                    <div class="box-body">
                        <p>Interfaz para Registrar nuevo personal, actualizar datos y eliminar personal</p>
                    </div>
                    <div class="row-col b-t">
                        <a href="?c=users&a=InterfazAdminPersonal" class="row-cell _500 p-a b-r">Ir a panel del Personal</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="box white box-shadow-z3 text-center">
                    <a href="?c=users&a=InterfazAdminPlatos">
                        <img class="img-responsive b-b m-b" src="/img/platos.jpg" alt="default">
                        <span class="_800 p-a block h4 m-a-0">Administrar Platos</span>
                    </a>
                    <div class="box-body">
                        <p>Interfaz para Registrar nuevos platos, actualizar datos y eliminar platos</p>
                    </div>
                    <div class="row-col b-t">
                        <a href="?c=users&a=InterfazAdminPlatos" class="row-cell _500 p-a b-r">Ir a panel del Platos</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="box white box-shadow-z3 text-center">
                    <a href="?c=users&a=InterfazCocina">
                        <img class="img-responsive b-b m-b" src="/img/pedidos.jpeg" alt="default">
                        <span class="_800 p-a block h4 m-a-0">Administrar Pedidos</span>
                    </a>
                    <div class="box-body">
                        <p>Interfaz para Registrar nuevos pedidos, actualizar pedidos y eliminar pedidos</p>
                    </div>
                    <div class="row-col b-t">
                        <a href="?c=users&a=InterfazPedidos" class="row-cell _500 p-a b-r">Ir a panel del Pedidos</a>
                    </div>
                </div>
            </div>

        </div>


    </div>

    <!-- ############ PAGE END-->
</div>

</div>
<!-- / -->