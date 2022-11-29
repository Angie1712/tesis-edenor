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
require '../../Controller/Reclamo.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Reclamos</title>

    <!-- Custom fonts for this template-->
    <link href="/Assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/Assets/css/sb-admin-2.css" rel="stylesheet">
    <script language="JavaScript">
    const eliminar = (id_reclamo) =>
    {
        Swal.fire({
        title: '¿Estas Seguro?',
        text: "No podras recuperar la indormación!",
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

<body id="page-top">
 <!-- Page Wrapper -->
 <div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">EDENOR</div>
    </a>
    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="Reclamos.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Mis Reclamos</span></a>
    <?php if($_SESSION["user"]["role"] == 1) {?>
    <li class="nav-item">
        <a class="nav-link" href="Vehiculos.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Vehiculos</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="Marca.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Marca</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="Modelo.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Modelo</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="Usuarios.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Usuarios</span></a>
    </li>
    <?php }?>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->
            <form
                class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                        aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                        aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small"
                                    placeholder="Search for..." aria-label="Search"
                                    aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Nav Item - Alerts -->
                

                <!-- Nav Item - Messages -->
                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                        <img class="img-profile rounded-circle"
                            src="/Assets/img/undraw_profile.svg">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                            Settings
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                            Activity Log
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../Login/index.php" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>

        </nav>
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

    <!-- Bootstrap core JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="/Assets/vendor/jquery/jquery.min.js"></script>
    <script src="/Assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/Assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/Assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/Assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/Assets/js/demo/chart-area-demo.js"></script>
    <script src="/Assets/js/demo/chart-pie-demo.js"></script>

</body>

</html>