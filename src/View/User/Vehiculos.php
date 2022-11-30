<?php
session_start();

if(!isset($_SESSION["user"]))
{ 
    echo "<script> window.location='logout.php'; </script>";
}
if($_SESSION["user"]["role"] !== '1'|| $_SESSION["user"]["role"] !== '2'){
}else {
    echo "<script> window.location='logout.php'; </script>";
}
require '../../Controller/Vehiculo.php';

require 'heder.php'

?>
<!DOCTYPE html>

    <script language="JavaScript">
    const eliminar = (patente) =>
    {
        Swal.fire({
  title: '¿Estas Seguro?',
  text: "Al eliminar el vehiculo se eliminaran todos los reclamos asociados",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si, eliminalo!', 
  cancelButtonText: 'Cancelar'
}).then((result) => {
  if (result.isConfirmed) {
      var url = "DeleteVehiculo.php"
      var formdata = new FormData();
      formdata.append('tipo_operacion', 'eliminar');
      formdata.append('patente', patente);
      fetch(url, {
          method: 'post',
          body: formdata
      }).then(res => res.json())
      .then(response =>{
          console.log('Success:', response)
          Swal.fire(
          'Eliminado!',
          'Su vehiculo se elimino.',
          'success',
           window.location.href = "Vehiculos.php"
        )
      })
      .catch(error => console.error('Error:', error));
  }
})
    }
</script>

</head>

                
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
                                        <th style="width:30px;">Editar</th>
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
                                            <a class="btn btn-warning btn-circle" href="Edit_vehiculo.php?Patente=<?php echo $r->Patente; ?>"><i class="fas fa-edit"></i></a>
                                                <button class="btn btn-danger btn-circle" onclick="eliminar('<?php echo $r->Patente?>')"><i class="fas fa-trash"></i></button>
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

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../Login/index.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
<?php require 'footer.php' ?>