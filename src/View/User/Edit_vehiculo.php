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
include '../../Controller/Vehiculo.php';

if(isset($_REQUEST['Patente'])){
    $patente = $_REQUEST['Patente'];
    $pvd = VehiculoController::Listar($patente);
}

if(isset($_POST['Patente'])){
    VehiculoController::Crud($_POST);
    echo "<script>location.href='Edit_vehiculo.php?Patente=".$_REQUEST['Patente']."';</script>";
}
require 'heder.php';
?>
<!DOCTYPE html>

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Page Heading -->
                    
                    <br>
            <form id="frm-persona" action="?Patente=<?php echo $_REQUEST['Patente']?>" method="POST" enctype="multipart/form-data">
            <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Editar Vehiculo con patente:  <?php echo $pvd->Patente; ?></h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <input type="hidden" name="Patente" value="<?php echo $pvd->Patente; ?>" />
                                <label>Modelo</label>
                                <br>
                                <select name="modelo" class="form-select styled-select" aria-label="Default select example">
                                    <?php foreach(VehiculoDao::searchModelo() as $r) :
                                    $selected = ($pvd->Modelo == $r->Modelo) ? "selected": '';?>
                                        <option 
                                        value='<?php echo $r->id_modelo;?>' 
                                        <?php echo $selected;?> 
                                        >
                                        <?php echo $r->Modelo;?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <br>
                <div class="buttons">
                <button class="btn btn-outline-primary px-4" type="submit">Actualizar</button>
                
            </div>
            </form>
            </div>             
<?php require 'footer.php' ?>