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

if(!isset($_SESSION["user"]))
{ 
    echo "<script> window.location='logout.php'; </script>";
}
if($_SESSION["user"]["role"] !== '1'|| $_SESSION["user"]["role"] !== '2'){
}else {
    echo "<script> window.location='logout.php'; </script>";
}

include '../../Controller/Marca.php';

if(isset($_REQUEST['id_marca'])){
    $marca = $_REQUEST['id_marca'];
    $pvd = MarcaController::Listar($marca);
}

if(isset($_POST['id_marca'])){
    MarcaController::Crud($_POST);
    echo "<script>location.href='Edit_marca.php?id_marca=".$_REQUEST['id_marca']."';</script>";
}
require 'heder.php';
?>
<!DOCTYPE html>

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                    <br>
            <form id="frm-persona" action="?id_marca=<?php echo $_REQUEST['id_marca']?>" method="POST" enctype="multipart/form-data">
            <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Editar Marca:</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
            <input type="hidden" name="id_marca" value="<?php echo $pvd->id_marca; ?>" />
                <label>Nombre de la marca: </label>
                <br>
                <input name="marca" value="<?php echo $pvd->Marca; ?>" /> 
                <br>
                <br>
                <div class="buttons">
                <button class="btn btn-outline-primary px-4" type="submit">Actualizar</button>
                </div>
            </form>
        </div>
<?php require 'footer.php' ?>