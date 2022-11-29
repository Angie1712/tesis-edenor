<?php
include_once 'heder.php';

require '../../Controller/Vehiculo.php'



?>
<!DOCTYPE html>
<html lang="en">

                
                <div class="container-fluid">
                <div class="card shadow mb-4">
                <div class="card-header py-3">
                        
                <h1><strong>Vehiculos</strong></h1>
                    <!-- <p class="mb-4">Crear Exámen<a target="_blank"
                            href="register_exam3.php"></a>.</p> -->
                            <a class="btn btn-success btn-sm" href="NewVehiculo.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link me-1">
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                </path><polyline points="15 3 21 3 21 9"></polyline>
                                <line x1="10" y1="14" x2="21" y2="3"></line>
                            </svg>Añadir Vehiculo</a>
                            <hr>
                            <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Información de los vehiculos</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th style="width:120px;">Patente</th>
                                        <th style="width:180px;">Modelo</th>
                                        <th style="width:120px;">Marca</th>
                                        <th style="width:120px;">Editar</th>
                                        </tr>
                                    </thead>
                                    </tbody>
                                    <tbody>
                                        <?php foreach(VehiculoController::searchVehiculo() as $r) : ?>
                                        <tr>
                                            <td><?php echo $r->Patente; ?></td>
                                            <td><?php echo $r->Modelo; ?></td>
                                            <td><?php echo $r->Marca; ?></td>
                                            <td>
                                                <a href="Edit_vehiculo.php?Patente=<?php echo $r->Patente; ?>">Editar</a>
                                                <button onclick="eliminar('<?php echo $r->Patente?>')"> Eliminar</button>
                                            </td>
                                        </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    </div>     

                </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

<?php
include_once 'footer.php';
?>