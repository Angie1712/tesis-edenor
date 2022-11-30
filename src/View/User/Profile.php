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

    
    <div class="row d-flex justify-content-center">
        
        <div class="col-md-4">
            
            <div class="card p-3 py-2">
            <div style="font-size: 22px;color:#0137FF" class="card-header">Detalles del Usuario :</div>
            
                                    <div class="card-body">
                                        <form>
                                            <!-- Form Row-->
                                            <div class="row gx-3 mb-1">
                                                <!-- Form Group (first name)-->
                                                <div class="col-md-6">
                                                    <label style="font-size: 24px;color:#000000" class="small mb-1" for="inputFirstName">Nombre: </label>
                                                    <br>
                                                    <a style="font-size: 22px"><?php echo $_SESSION["user"]['name']; ?></a>
                                                </div>
                                                <!-- Form Group (last name)-->
                                                <div class="col-md-6">
                                                    <label style="font-size: 24px;color:#000000" class="small mb-1" for="inputLastName">Apellido :</label>
                                                    <br>
                                                    <a style="font-size: 22px"><?php echo $_SESSION["user"]['surname']; ?></a>
                                                </div>
                                            </div>
                                            <!-- Form Group (email address)-->
                                            <div class="mb-3">
                                                <label style="font-size: 24px;color:#000000" class="small mb-1" for="inputEmailAddress">Email :</label>
                                                <br>
                                                <a style="font-size: 22px"><?php echo $_SESSION["user"]['email']; ?></a>
                                            </div>
                                            <!-- Form Row-->
                                            <div class="row gx-3 mb-1">
                                                <!-- Form Group (phone number)-->
                                                <div class="col-md-6">
                                                    <label style="font-size: 24px;color:#000000" lass="small mb-1" for="inputPhone">DNI :</label>
                                                    <br>
                                                <a style="font-size: 22px"><?php echo $_SESSION["user"]['dni']; ?></a>
                                                </div>
                                                <!-- Form Group (birthday)-->
                                                <div class="col-md-6">
                                                    <label style="font-size: 24px;color:#000000" class="small mb-1" for="inputBirthday">Legajo :</label>
                                                    <br>
                                                    <a style="font-size: 22px"><?php echo $_SESSION["user"]['Legajo']; ?></a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
 

            </div>
        </div>
    </div>
</div>
 <?php include 'footer.php'; ?>