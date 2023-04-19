<?php
require 'Views/head.php';
require 'Views/topBar.php';
require 'Views/sideBar.php';
?>


<!DOCTYPE html>

   <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Formulario de Clientes</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal">contratos</a></li>
                            </ol>
                            
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->

            <div class="container-fluid">
                 

                     <!-- AQUI DEBE IR TODO EL FORMULARIO -->
                     <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12">
                          <div class="white-box">
                            <div class="d-md-flex mb-3">
                                <h3 class="box-title mb-0">Clientes</h3>

                                <div class="container">
                                      
                                      <form>
                                        <div class="form-group">
                                          <label for="ruc">RUC:</label>
                                          <input type="text" class="form-control" id="ruc" placeholder="Ingresa tu RUC">
                                        </div>
                                        <div class="form-group">
                                          <label for="nombre">Nombre:</label>
                                          <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre">
                                        </div>
                                        <div class="form-group">
                                          <label for="direccion">Dirección:</label>
                                          <input type="text" class="form-control" id="direccion" placeholder="Ingresa tu dirección">
                                        </div>
                                        <div class="form-group">
                                          <label for="telefono">Teléfono:</label>
                                          <input type="text" class="form-control" id="telefono" placeholder="Ingresa tu teléfono">
                                        </div>
                                        <div class="form-group">
                                          <label for="email">Email:</label>
                                          <input type="email" class="form-control" id="email" placeholder="Ingresa tu email">
                                        </div>
                                        <div class="form-group">
                                          <label for="gerente">Gerente:</label>
                                          <input type="text" class="form-control" id="gerente" placeholder="Ingresa el nombre del gerente">
                                        </div>
                                        <button type="submit" class="btn btn-success">Agregar</button>
                                        <button type="submit" class="btn btn-primary">Editar</button>
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                      </form>
                                  </div>

                            </div>
                          </div>
                      </div>
                    </div>

                    <!-- FIN DEL FORMULARIO -->

                    <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="d-md-flex mb-3">
                                <h3 class="box-title mb-0">Clientes Recientes</h3>
                                <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                                    <select class="form-select shadow-none row border-top">
                                        <option>March 2021</option>
                                        <option>April 2021</option>
                                        <option>May 2021</option>
                                        <option>June 2021</option>
                                        <option>July 2021</option>
                                    </select>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table no-wrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">Name</th>
                                            <th class="border-top-0">Status</th>
                                            <th class="border-top-0">Date</th>
                                            <th class="border-top-0">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td class="txt-oflo">Elite admin</td>
                                            <td>SALE</td>
                                            <td class="txt-oflo">April 18, 2021</td>
                                            <td><span class="text-success">$24</span></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td class="txt-oflo">Real Homes WP Theme</td>
                                            <td>EXTENDED</td>
                                            <td class="txt-oflo">April 19, 2021</td>
                                            <td><span class="text-info">$1250</span></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td class="txt-oflo">Ample Admin</td>
                                            <td>EXTENDED</td>
                                            <td class="txt-oflo">April 19, 2021</td>
                                            <td><span class="text-info">$1250</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td class="txt-oflo">Medical Pro WP Theme</td>
                                            <td>TAX</td>
                                            <td class="txt-oflo">April 20, 2021</td>
                                            <td><span class="text-danger">-$24</span></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td class="txt-oflo">Hosting press html</td>
                                            <td>SALE</td>
                                            <td class="txt-oflo">April 21, 2021</td>
                                            <td><span class="text-success">$24</span></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td class="txt-oflo">Digital Agency PSD</td>
                                            <td>SALE</td>
                                            <td class="txt-oflo">April 23, 2021</td>
                                            <td><span class="text-danger">-$14</span></td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td class="txt-oflo">Helping Hands WP Theme</td>
                                            <td>MEMBER</td>
                                            <td class="txt-oflo">April 22, 2021</td>
                                            <td><span class="text-success">$64</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                    <!-- AQUI TERMINA -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
    <?php
        require 'Views/footer.php';
    ?>
</html>