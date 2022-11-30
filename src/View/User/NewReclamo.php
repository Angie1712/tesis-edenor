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
require '../../Controller/TipoReclamo.php';

require 'heder.php';

?>
<!DOCTYPE html>

                <div class="container-fluid">
    <form id="vehiculo" action="CreatReclamo.php" method="POST">
        <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Reclamo:</h6>
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="p-5">
                            <!--<form class="user" id="form_step_1">-->
                            <div class="form-group row">
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                <label for="exampleFormControlSelect1">Vehiculo</label>
                                <input type="hidden" name="id_user" value="<?php echo $_SESSION["user"]['id']; ?>" />
                                    <select method="post" name="Vehiculo" class="form-control" id="examCategory">
                                        <?php foreach(VehiculoController::searchVehiculo() as $r) :?>
                                            <?php var_dump($r); ?>
                                        <option value=<?php echo $r->id_vehiculo;?>><?php echo $r->Patente; ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <label for="exampleFormControlSelect1">Tipo de Reclamo</label>
                                            <select method="post" name="tipo_reclamo" class="form-control" id="examCategory">
                                                <?php foreach(TiporeclamoController::searchTipoReclamo() as $r) :?>
                                                    <?php var_dump($r); ?>
                                                <option value=<?php echo $r->id_tipo_reclamo;?>><?php echo $r->Tipo_reclamo; ?>
                                                </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div>
                                        <label>Detalle :</label>
                                        <br>
                                        <textarea name="detalle" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        <br>
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
            <!-- End of Main Content -->

<?php require 'footer.php'; ?>