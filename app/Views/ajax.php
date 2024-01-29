<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo Ajax</title>
    <script src="<?php echo base_url()?>/js/jquery-3.7.1.min.js"></script>
</head>
<body>
    <button onclick="mostrarSaludo()">mostrar saludo</button>

    <div id="resultados">
    </div>

    

    <script>

    function mostrarSaludo(){

        $(document).ready(function(){
            $.ajax({
                url:'http://localhost/daw/ci_BBDD/public/Articulos/pruebaAjax',
                success: function(respuesta){
                    // console.log(respuesta.support.url);
                    //  console.log(respuesta);
                     $('#resultados').html("la respuesta es :"+respuesta);
                    // console.log('la respuesta es '+respuesta);
                }
            });
        });

    }
    </script>
</body> 
</html>