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
include 'heder.php';
?>
<!DOCTYPE html>

                <div class="col-xl-8">
                                <!-- Account details card-->
                                <div class="card mb-4">
                                    <div class="card-header">Detalles del Usuario</div>
                                    <div class="card-body">
                                        <form>
                                            <!-- Form Row-->
                                            <div class="row gx-3 mb-3">
                                                <!-- Form Group (first name)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputFirstName">Nombre</label>
                                                    <br>
                                                    <a><?php echo $_SESSION["user"]['name']; ?></a>
                                                </div>
                                                <!-- Form Group (last name)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputLastName">Apellido</label>
                                                    <br>
                                                    <a><?php echo $_SESSION["user"]['surname']; ?></a>
                                                </div>
                                            </div>
                                            <!-- Form Group (email address)-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <br>
                                                <a><?php echo $_SESSION["user"]['email']; ?></a>
                                            </div>
                                            <!-- Form Row-->
                                            <div class="row gx-3 mb-3">
                                                <!-- Form Group (phone number)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputPhone">DNI</label>
                                                    <br>
                                                <a><?php echo $_SESSION["user"]['dni']; ?></a>
                                                </div>
                                                <!-- Form Group (birthday)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputBirthday">Legajo</label>
                                                    <br>
                                                    <a><?php echo $_SESSION["user"]['Legajo']; ?></a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                </div>
 <?php include 'footer.php'; ?>