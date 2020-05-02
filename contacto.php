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

            <form action="" method="post">
                <div class="form-group">
                    <label for="nombre"> Ingrese su nombre: </label>
                    <input type="text" name="nombre" placeholder="Ingrese su nombre" class = "form-control">
                </div>

                <div class="form-group">
                    <label> Ingrese email: </label>
                    <input type="email" name="email" placeholder="Ingrese su correo electronico" class="form-control">
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
                    <textarea name="comentario" rows="4" placeholger="Ingrese su comentario" style="resize:nonde;"></textarea>
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