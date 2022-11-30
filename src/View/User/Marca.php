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
require '../../Controller/Marca.php';

require 'heder.php'

?>
<!DOCTYPE html>
    <script language="JavaScript">
    const eliminar = (id_marca) =>
    {
        Swal.fire({
  title: '¿Estas Seguro?',
  text: "No podras recuperar la información!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si, eliminalo!', 
  cancelButtonText: 'Cancelar'
}).then((result) => {
  if (result.isConfirmed) {
      var url = "DeleteMarca.php"
      var formdata = new FormData();
      formdata.append('tipo_operacion', 'eliminar');
      formdata.append('id_marca', id_marca);
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
           window.location.href = "Marca.php"
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
                        
                <h1><strong>Marcas</strong></h1>
                            <a class="btn btn-success btn-sm" href="NewMarca.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link me-1">
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                </path><polyline points="15 3 21 3 21 9"></polyline>
                                <line x1="10" y1="14" x2="21" y2="3"></line>
                            </svg>Añadir Marca</a>
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
                                        <th style="width:250px;">Marca</th>
                                        <th style="width:30px;">Editar</th>
                                        </tr>
                                    </thead>
                                    </tbody>
                                    <tbody>
                                        <?php foreach(MarcaController::searchMarca() as $r) : ?>
                                        <tr>
                                            <td><?php echo $r->Marca; ?></td>
                                            <td>
                                                <a class="btn btn-warning btn-circle" href="Edit_marca.php?id_marca=<?php echo $r->id_marca; ?>"><i class="fas fa-edit"></i></a>
                                                <button class="btn btn-danger btn-circle" onclick="eliminar('<?php echo $r->id_marca?>')"> <i class="fas fa-trash"></i></button>
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

<?php require 'footer.php' ?>