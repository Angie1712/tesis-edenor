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

include '../../Controller/Modelo.php';
include '../../Controller/Marca.php';


if(isset($_REQUEST['id_modelo'])){
    $modelo = $_REQUEST['id_modelo'];
    $pvd = ModeloController::Listar($modelo);
}

if(isset($_POST['id_modelo'])){
    ModeloController::Crud($_POST);
    echo "<script>location.href='Edit_modelo.php?id_modelo=".$_REQUEST['id_modelo']."';</script>";
}

require 'heder.php'
?>
<!DOCTYPE html>

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                    <br>
            <form id="frm-persona" action="?id_modelo=<?php echo $_REQUEST['id_modelo']?>" method="POST" enctype="multipart/form-data">
            <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Editar Modelo: </h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
            <input type="hidden" name="id_modelo" value="<?php echo $pvd->id_modelo; ?>" />
                <label>Nombre del Modelo: </label>
                <br>
                <input style=" HEIGHT: 28px" size=32 name="modelo" value="<?php echo $pvd->Modelo; ?>" /> 
                <br>
                <br>
                <label>Marca</label>
                <br>
                <select name="id_marca" class="form-select styled-select" aria-label="Default select example">
                    <?php 
                    foreach(MarcaDao::searchMarca() as $r) :
                    $selected = ($pvd->Marca == $r->Marca) ? "selected": '';
                    ?>
                    <option 
                        value='<?php echo $r->id_marca;?>' 
                        <?php echo $selected;?> 
                    >
                        <?php echo $r->Marca;?>
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

<?php require 'footer.php' ?>