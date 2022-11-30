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
include '../../Controller/User.php';
include '../../Controller/Rol.php';

if(isset($_REQUEST['id_user'])){
    $user = $_REQUEST['id_user'];
    $pvd = UserController::Listar($user);
}

if(isset($_POST['id_user'])){
    UserController::Crud($_POST);
    echo "<script>location.href='Edit_user.php?id_user=".$_REQUEST['id_user']."';</script>";
}
require 'heder.php';
?>
<!DOCTYPE html>

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                    <br>
            <form id="frm-persona" action="?id_user=<?php echo $_REQUEST['id_user']?>" method="POST" enctype="multipart/form-data">
            <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Editar Usuarios:</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
            <input type="hidden" name="id_user" value="<?php echo $pvd->id_user; ?>" />
                <label>Nombre: </label>
                <br>
                <input name="name" value="<?php echo $pvd->Name; ?>" /> 
                <br>
                <br>
                <label>Apellido: </label>
                <br>
                <input name="surname" value="<?php echo $pvd->Surname; ?>" /> 
                <br>
                <br>
                <label>Email: </label>
                <br>
                <input name="email" value="<?php echo $pvd->email; ?>" /> 
                <br>
                <br>
                <label>Rol</label>
                <br>
                <select name="id_rol" class="form-select styled-select" aria-label="Default select example">
                    <?php 
                    foreach(RolDao::searchRol() as $r) :
                    $selected = ($pvd->detail_rol == $r->detail_rol) ? "selected": '';
                    ?>
                    <option 
                        value='<?php echo $r->id_rol;?>' 
                        <?php echo $selected;?> 
                    >
                        <?php echo $r->detail_rol;?>
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

<?php  require 'footer.php';  ?>