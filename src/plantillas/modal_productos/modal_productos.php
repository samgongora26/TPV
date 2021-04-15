<div class="modal fade" id="busqueda_producto" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Buscar producto</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <form class="">
                            <label>Nombre</label>
                            <div class="input-group">
                            <!--<label>Codigo de Barras</label>
                            <input type="text"  class="form-control">-->
                            
                            <input id="valor_busqueda" type="text" class="form-control">
                            <button id="buscar" type="button" class="btn btn-info">Buscar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <hr>
                <div class="row mt-2">
                <div class="table-responsive">
                    <div id="mensaje2"></div>
                                <table class="table">
                                    <thead class="text-center">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Codigo de Barras</th>
                                            <th scope="col">Precio Venta</th>
                                            <th scope="col">Stock</th>
                                            <th scope="col">copiar codigo</th>
                                            <th scope="col">Ver</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody id="contenido_busqueda_producto" class="text-center">
                                        <!--<tr id="ver_productos_">
                                            <th scope="row">1</th>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>Cell</td>
                                            <td>
                                             <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#estado-modal"><i class="icon-note"></i></button>    
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary boton_ver"><i class="icon-eye"></i></button>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#edit-modal"><i class="icon-pencil"></i></button>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary boton_imprimir"><i class="icon-printer"></i></button>    
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary"><i class="icon-trash"></i></button>
                                            </td>
                                        </tr>-->
                                    </tbody>
                                </table>
                </div>
            
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<!---PARA USAR EL MODAL ES NECESARIO TENER EL BOTON:-->
<!--button id="" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#busqueda_producto">Buscar producto
    <i class="fa fa-search"></i> 
</button-->