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
require '../../Controller/Rol.php';

require 'heder.php';
?>
<!DOCTYPE html>

                <h1><strong>Nuevo Usuario: </strong></h1>
                <div class="container-fluid">
    <form id="vehiculo" action="CreatUser.php" method="POST">
        <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Agregar Usuario</h6>
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="form-group row">
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <label for="exampleFormControlSelect1">Nombre:</label>
                                    <input type="text" name="name" class="form-control" id="examName">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <label for="exampleFormControlSelect1">Apellido:</label>
                                    <input type="text" name="surname" class="form-control" id="examName">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <label for="exampleFormControlSelect1">Email:</label>
                                    <input type="text" name="email" class="form-control" id="examName">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <label for="exampleFormControlSelect1">DNI:</label>
                                    <input type="text" name="dni" class="form-control" id="examName">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <label for="exampleFormControlSelect1">Legajo:</label>
                                    <input type="text" name="legajo" class="form-control" id="examName">
                                </div>
                            </div>
                            <div class="form-group row">
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <label for="exampleFormControlSelect1">Tipo de usuario:</label>
                                            <select method="post" name="id_rol" class="form-control" id="examCategory"
                                                onchange=setQuestion(this.value)>
                                                <?php foreach(RolController::searchRol() as $r) :?>
                                                    <?php print_r($r);?>
                                                <option value=<?php echo $r->id_rol;?>><?php echo $r->detail_rol; ?>
                                                </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                            <button class="btn btn-primary btn-user btn-block col-sm-1" type="submit">
                                Continuar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

            </div>
            <!-- End of Main Content -->
<?php require 'footer.php' ?>