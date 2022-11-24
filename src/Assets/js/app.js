$(document).ready(function(){
    $('#loginForm').bind("submit",function(){
        
        $.ajax({
            type:$(this).attr("method"),
            url:$(this).attr("action"),
            data:$(this).serialize(),
            // beforeSend: function(){
            //     $("#submit_login").html("Ingresando...");
            //     $("#submit_login").attr("disabled","disabled");
            // },
            success:function(response){
                if(response.estado == true){
                    $("body").overhang({
                        type: "success",
                        message: "Usuario encontrado, ya te estamos redirigiendo!",
                        callback:function(){
                            window.location.href = "/View/User/index.php"
                        }
                      });
                }else{
                    $("body").overhang({
                        type: "error",
                        message: "Usuario o contraseña incorrecta!"
                      });
                }
                // $("#submit_login").html("Reintentar");
               
            },
            error:function(){
                $("body").overhang({
                    type: "error",
                    message: "Usuario o contraseña incorrecta!"
                  });
                //   $("#submit_login").html("Reintentar");
            }
        });

        return false;
    });
});