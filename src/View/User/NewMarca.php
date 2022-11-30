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
require '../../Controller/Marca.php';

require 'heder.php';

?>
<!DOCTYPE html>
                
                <div class="container-fluid">
                
    <form id="vehiculo" action="CreatMarca.php" method="POST">
        <div class="card">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Agregar Marca</h6>
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="form-group row">
                                <div class="col-sm-4 mb-3 mb-sm-0">
                                    <label for="exampleFormControlSelect1">Nombre de la Marca:</label>
                                    <input type="text" name="marca" class="form-control" id="examName">
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

<?php require 'footer.php'; ?>