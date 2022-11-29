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

require 'heder.php';

?>
<!DOCTYPE html>

                <h1><strong>Crear Vehiculos</strong></h1>
                <div class="container-fluid">
    <form id="vehiculo" action="CreatVehiculo.php" method="POST">
        <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Agregar Vehiculo</h6>
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="p-5">
                            <!--<form class="user" id="form_step_1">-->
                            <div class="form-group row">
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <label for="exampleFormControlSelect1">Patente:</label>
                                    <input type="text" name="patente" class="form-control" id="examName">
                                </div>
                            </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <label for="exampleFormControlSelect1">Modelo:</label>
                                            <select method="post" name="id_modelo" class="form-control" id="examCategory"
                                                onchange=setQuestion(this.value)>
                                                <?php foreach(VehiculoController::searchModelo() as $r) :?>
                                                <option value=<?php echo $r->id_modelo;?>><?php echo $r->Modelo; ?>
                                                </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                            <button class="btn btn-primary btn-user btn-block col-sm-1" type="submit">
                                Continuar
                            </button>
                            <!--</form>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

            </div>

<?php include 'footer.php' ?>