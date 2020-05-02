<?php
    /*
            action => declara la direccion de envio del formulario -->
                    Si action = vacio -> El formulario de procesa en la misma pagina-->
                    Si action posee ruta => la direccion de envio del formulario donde se procesaran -->
            method => indica de que manera se envian los datos del formulario al servidor -->
                    post => Los datos se envian de manera interna desde el formulario al servidor-->
                    get => Los datos se enviaran a traves de la url de la pagina-->
                    put => Los datos se envian desde el formulario al servidor por interno verificando que 
                            la accion se realice solo una vez (se utiliza cuando los datos se actualizan en el servidor)
     */

     /*
        $_POST es un array asociativo =>

        $formulario = array('nombre' => '', 'email' => '', 'asunto' => '', 'comentario' => '');

     */

     //print_r($_POST);
$mensaje=' ';
// verificar que los datos del formulario se hayan enviado via POST
/*--------------------------------------------------------------------
// Las variables PHP solo existen si tienen un valor asociado
----------------------------------------------------------------------*/
    if(isset($_POST['enviar']) && $_POST['enviar']=='si'){
        print_r($_POST);
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $asunto = $_POST['asunto'];
        $comentario = $_POST['comentario'];

        if(!$nombre){
            $mensaje = 'Ingrese nombre';
        }elseif(!$email){
            $mensaje = 'Ingrese email';
        }elseif(!$asunto){
            $mensaje = 'Ingrese asunto';
        }elseif(!$comentario){
            $mensaje = 'Ingrese comentario';
        }else{
            $mensaje = 'Gracias por su formulario';
        }

    }else{
        $mensaje ="El formulario ha sido rechazado";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    <title>Document</title>

</head>

<body>
    <div class="container">

        <div class="col-md-6">
            
            <h3>Formulario de contacto</h3>

                <?php if($mensaje): ?>
                    <p class="alert alert-danger"><?php echo $mensaje; ?></p>
                <?php endif;?>

            <form action="" method="POST">

                <div class="form-group">
                    <label for="nombre"> Ingrese su nombre: </label>
                    <input type="text" name="nombre" placeholder="Ingrese su nombre" class = "form-control" value="<?php echo @($nombre); ?>">
                </div>

                <div class="form-group">
                    <label> Ingrese email: </label>
                    <input type="email" name="email" placeholder="Ingrese su correo electronico" class="form-control" value="<?php echo @($email); ?>">
                </div>

                <div class="form-group">
                    <label>Seleccione asunto:</label>
                    <select name="asunto" >
                        <option value="">Seleccione...</option>
                        <option value="1">Consultas Generales</option>
                        <option value="2"> Soporte Tecnico</option>
                        <option value="3"> Servicios</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Comentario:</label>
                    <textarea name="comentario" rows="4" placeholger="Ingrese su comentario" style="resize:nonde;" ></textarea>
                </div>

                <div class="form-group">
                    <input type="hidden" name="enviar" value="si">
                    <button type="submit" class="btn btn-success" >Enviar Comentario</button>
                </div>  

            </form>   

        </div>

    </div>
    
</body>

</html>