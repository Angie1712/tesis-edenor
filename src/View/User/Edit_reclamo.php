<?php
session_start();

include '../../Controller/Reclamo.php';

if(isset($_REQUEST['id_Reclamo'])){
    $patente = $_REQUEST['id_Reclamo'];
    $pvd = ReclamoController::Listar($patente);
}

if(isset($_POST['id_Reclamo'])){
    ReclamoController::Crud($_POST);
    echo "<script>location.href='Edit_reclamo.php?id_Reclamo=".$_REQUEST['id_Reclamo']."';</script>";
}
require 'heder.php';
?>
<!DOCTYPE html>

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->

            <form id="frm-persona" action="?Patente=<?php echo $_REQUEST['Patente']?>" method="POST" enctype="multipart/form-data">
            <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Editar Reclamo con patente:  <?php echo $pvd->Patente; ?> </h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
            <h4><strong>Vehiculo:  <?php echo $pvd->Modelo; ?> </strong></h4>
            <br>
            <input type="hidden" name="id_Reclamo" value="<?php echo $pvd->id_Reclamo; ?>" />
                <label>Tipo de Reclamo</label>
                <br>
                <select name="tipo_reclamo" class="form-select styled-select" aria-label="Default select example">
                    <?php 
                    foreach(ReclamoDao::searchTipoReclamo() as $r) :
                    $selected = ($pvd->Tipo_reclamo == $r->Tipo_reclamo) ? "selected": '';
                    ?>
                    <option 
                        value='<?php echo $r->id_tipo_reclamo;?>' 
                        <?php echo $selected;?> 
                    >
                        <?php echo $r->Tipo_reclamo;?>
                    </option>
                    <?php endforeach; ?>
                </select>
                <br>
                <br>
                <h6><strong>Detalles:  <?php echo $pvd->Reclamo; ?> </strong></h6>
                <br>
                <label>Estado del reclamo</label>
                <br>
                <select name="estado" class="form-select styled-select" aria-label="Default select example">
                    <?php 
                    foreach(ReclamoDao::searchEstado() as $r) :
                    $selected = ($pvd->detail_estado == $r->detail_estado) ? "selected": '';
                    ?>
                    <option 
                        value='<?php echo $r->id_estado;?>' 
                        <?php echo $selected;?> 
                    >
                        <?php echo $r->detail_estado;?>
                    </option>
                    <?php endforeach; ?>
                </select>
                <br>
                <br>
                <div class="buttons">
                <button class="btn btn-outline-primary px-4" type="submit">Actualizar</button>
                </div>
            </form>
        </div>

<?php require 'footer.php'  ?>