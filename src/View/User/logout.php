<?php

    session_start();

    # Después, destruirla
    # Eso va a eliminar todo lo que haya en $_SESSION
    session_destroy();
    
    # Lo redireccionamos al formulario
    //header("Location: ./index.php");
    echo "<script> window.location='/?c=User'; </script>";

?>