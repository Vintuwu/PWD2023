<?php
include_once '../../navbar.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Cambio de duenio</title>
    <script src="js/scriptCambioDuenio.js"></script>
</head>

<body>
    <div class="contenedor">
        <form action="./accion/accionBuscarPersona.php" method="get" class="d-flex text-center" >
            <div class="d-flex  align-items-lg-end flex-column bg-dark" style="padding: 20px; border-radius: 10px;">
                <h1 class="fs-3 bg-info w-100" style="border-radius:10px; padding: 5px 10px; margin:0;">Buscar Persona</h1>
                <div class="form-group w-100">
                    <label for="dni-modificar" class="text-primary fs-4" style="margin: 5px;">DNI de la Persona a Buscar</label>
                    <div class="input-group-text" id="input-dni-modificar">
                        <i class="fa fa-user" style="width: 10%; margin-right:10px;"></i>
                        <input type="text" class="form-control" maxlength="8" id="dni-modificar" name="dni-modificar" placeholder="Ejemplo: 44041670">
                    </div>
                    <div class="invalid-feedback formatoCorrectoDNI" style="font-size: 1.2em; margin-bottom:-10px;">Debe contener solo números.</div>
                    <div class="invalid-feedback caracteresCorrectosDNI" style="font-size: 1.2em; margin-bottom:-13px;">Deben ser máximo 8 digitos.</div>
                </div>
                <button type="submit" class="btn btn-primary btn-sm" style="margin-top:15px; font-size:1.1em;">Enviar</button>
            </div>
        </form>
    </div>
</body>

</html>