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
require '../../Controller/Reclamo.php';
require 'heder.php';
?>

<!DOCTYPE html>

    <script language="JavaScript">
    const eliminar = (id_reclamo) =>
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
            var url = "DeleteReclamo.php"
            var formdata = new FormData();
            formdata.append('tipo_operacion', 'eliminar');
            formdata.append('id_reclamo', id_reclamo);
            fetch(url, {
                method: 'post',
                body: formdata
            }).then(res => res.json())
            .then(response =>{
                console.log('Success:', response)
                Swal.fire(
                'Eliminado!',
                'Su reclamo se elimino.',
                'success',
                window.location.href = "Reclamos.php"
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
                <h1><strong>Reclamos</strong></h1>
                    <!-- <p class="mb-4">Crear Exámen<a target="_blank"
                            href="register_exam3.php"></a>.</p> -->
                            <a class="btn btn-success btn-sm" href="NewReclamo.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-external-link me-1">
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                </path><polyline points="15 3 21 3 21 9"></polyline>
                                <line x1="10" y1="14" x2="21" y2="3"></line>
                            </svg>Crear Reclamo</a>
                            <hr>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Información de los Turnos</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th style="width:180px;">Vehiculo</th>
                                        <th style="width:120px;">Patente</th>
                                        <th style="width:120px;">Tipo de Reclamo</th>
                                        <th style="width:180px;">Reclamo</th>
                                        <th style="width:120px;">Estado</th>
                                        <th style="width:120px;">Fecha</th>
                                        <?php if($_SESSION["user"]["role"] == 1) {?>
                                        <th style="width:120px;">Editar</th>
                                        <?php } ?>

                                        
                                        </tr>
                                    </thead>
                                    </tbody>
                                    <tbody>
                                    <input type="hidden" name="id_user" value="<?php echo $_SESSION["user"]['id']; ?>" />
                                    <?php if($_SESSION["user"]["role"] == 2) {?>
                                        <?php foreach(ReclamoController::searchReclamo($_SESSION["user"]['id']) as $r) : ?>
                                        <tr>
                                            <td><?php echo $r->Modelo; ?></td>
                                            <td><?php echo $r->Patente; ?></td>
                                            <td><?php echo $r->Tipo_reclamo; ?></td>
                                            <td><?php echo $r->Reclamo; ?></td>
                                            <td><?php echo $r->detail_estado ?></td>
                                            <td><?php echo $r->fecha; ?></td>
                                            <?php if($_SESSION["user"]["role"] == 1) {?>
                                            <td>
                                                <a href="Edit_reclamo.php?id_Reclamo=<?php echo $r->id_Reclamo; ?>">Editar</a>
                                                <button onclick="eliminar('<?php echo $r->id_Reclamo?>')"> Eliminar</button>
                                            </td>
                                            <?php } ?>
                                        </tr>
                                        <?php endforeach;?>
                                        <?php } ?>
                                    <?php if($_SESSION["user"]["role"] == 1) {?>
                                    <?php foreach(ReclamoController::searchReclamoAdmin() as $r) : ?>
                                        <tr>
                                            <td><?php echo $r->Modelo; ?></td>
                                            <td><?php echo $r->Patente; ?></td>
                                            <td><?php echo $r->Tipo_reclamo; ?></td>
                                            <td><?php echo $r->Reclamo; ?></td>
                                            <td><?php echo $r->detail_estado ?></td>
                                            <td><?php echo $r->fecha; ?></td>
                                            <?php if($_SESSION["user"]["role"] == 1) {?>
                                            <td>
                                                <a class="btn btn-warning btn-circle" href="Edit_reclamo.php?id_Reclamo=<?php echo $r->id_Reclamo; ?>"><i class="fas fa-edit"></i></a>
                                                <button class="btn btn-danger btn-circle"  onclick="eliminar('<?php echo $r->id_Reclamo?>')"> <i class="fas fa-trash"></i></button>
                                            </td>
                                            <?php } ?>
                                        </tr>
                                        <?php endforeach;?>
                                        <?php } ?>
                                    <tbody> 
                                    
                                       
                                    </tbody>
                                </table>
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

<?php require 'footer.php' ?>