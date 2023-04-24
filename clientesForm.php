<?php
require 'Views/head.php';
require 'Views/topBar.php';
require 'Views/sideBar.php';
?>


<!DOCTYPE html>

<head>
     <!-- datatables css -->
     <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    
</head>
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
                        <div class="col-md-12 col-lg-6 col-sm-12">
                          <div class="white-box">
                            <div class="d-md-flex mb-3">
                                <h3 class="box-title mb-0">Clientes</h3>

                                <div class="container">
                                      
                                      <form class="form" action="Controllers/create-customer.php" method="POST">
                                        
                                        <div class="form-group">
                                          <label for="ruc">RUC: </label>
                                          <input type="text" class="form-control" id="ruc" name="ruc">
                                        </div>


                                        <div class="form-group">
                                          <label for="name">Nombre: </label>
                                          <input type="text" class="form-control" id="name" name="name">
                                        </div>


                                        <div class="form-group">
                                          <label for="direccion">Telefono:</label>
                                          <input type="text" class="form-control" id="phone" name="phone">
                                        </div>
                                        
                                        <div class="form-group">
                                          <label for="email">Email:</label>
                                          <input type="text" class="form-control" id="email" name="email">
                                        </div>
                                        
                                        <div class="form-group">
                                          <label for="city">Ciudad:</label>
                                          <input type="text" class="form-control" id="city" name="city">
                                        </div>
                                        <div class="form-group">
                                          <label for="address">Dirección:</label>
                                          <input type="text" class="form-control" id="address" name="address">
                                        </div>
                                        
                                        <div class="form-group">
                                          <label for="contacto">Contacto:</label>
                                          <input type="text" class="form-control" id="contacto" name="contacto">
                                        </div>
                                        <div class="form-group">
                                          <label for="gerente">Gerente:</label>
                                          <input type="text" class="form-control" id="gerente" name="gerente">
                                        </div>
                                   
                                        <div class="form-group">
                                          <label for="estado">Estado:</label>
                                          <input type="text" class="form-control" id="estado" name="estado">
                                        </div>
                                        <button type="submit" class="btn btn-success">Agregar</button>
                                        <button type="submit" class="btn btn-primary">Editar</button>
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                      </form>
                                  </div>

                            </div>
                          </div>
                      </div>
                      
                      <!-- AQUI VA EL DATATABLES DE LA TABLA CLIENTE -->
                      <div class="col-md-12 col-lg-6 col-sm-12">
                        <div class="white-box">
                            <div class="d-md-flex mb-3">
                                <h3 class="box-title mb-0">Clientes Recientes</h3>
                                <?php 
                                $conexion = mysqli_connect("192.168.0.10", "root", "kakokeko", "rbpy");

                                $sql = "SELECT * FROM rb_clientes";

                                $result = $conexion->query($sql);

                                ?>
                            </div>
                            <div class="table-responsive">
                                <table class="table no-wrap" id="tablaCliente">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">Ruc</th>
                                            <th class="border-top-0">Nombre</th>
                                            <th class="border-top-0">Estado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            while ($row = mysqli_fetch_array($result)) {
                                                echo "<tr>";
                                                echo "<td>" . $row['ruc'] . "</td>";
                                                echo "<td>" . $row['name'] . "</td>";
                                                echo "<td>" . $row['estado'] . "</td>";
                                                echo "</tr>";
                                            }
                                        ?>


                                         
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     
                    </div>

                    <!-- FIN DEL FORMULARIO -->

                    

                    <!-- AQUI TERMINA -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
    <?php
        require 'Views/footer.php';
    ?>

    <!-- SCRIPT DEL DATATABLE -->
    <script>$(document).ready(function () {
    $('#tablaCliente').DataTable();
});</script>

<!-- datatables script -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

</html>