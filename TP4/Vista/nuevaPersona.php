<?php
include_once '../configuracion.php';
include_once '../menuTP4.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir persona</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/scriptNuevaPersona.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h2 style="text-align: center; margin:50px 0px">Añadir persona</h2>
    <div class="container" style="margin: auto;">
        <form id="form" action="./accionNuevaPersona.php" method="post" class="row g-3 needs-validation" novalidate>
            <div class="col-md-4">
                <label for="NroDni" class="form-label">DNI</label>
                <input class="form-control" type="text" pattern="[0-9]-" min="0" maxlength="9" placeholder="12345678" id="NroDni" name="NroDni" required/>
                <div class="valid-feedback">
                    Dato ingresado correctamente!
                </div>
                <div class="invalid-feedback">
                    Ingrese un DNI válido
                </div>
            </div>
            <div class="col-md-4">
                <label for="Nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="Nombre" name="Nombre" required>
                <div class="valid-feedback">
                    Dato ingresado correctamente!
                </div>
                <div class="invalid-feedback">
                    Ingrese un nombre válido
                </div>
            </div>
            <div class="col-md-4">
                <label for="Apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="Apellido" name="Apellido" required>
                <div class="valid-feedback">
                    Dato ingresado correctamente!
                </div>
                <div class="invalid-feedback">
                    Ingrese un apellido válido
                </div>
            </div>
            <div class="col-md-4">
                <label for="fechaNac" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control" id="fechaNac" name="fechaNac" required>
                <div class="valid-feedback">
                    Dato ingresado correctamente!
                </div>
                <div class="invalid-feedback">
                    Ingrese una fecha válida
                </div>
            </div>
            <div class="col-md-4">
                <label for="Telefono" class="form-label">Teléfono</label>
                <input class="form-control" type="text" pattern="[0-9]" maxlength="10" min="0" placeholder="299-1231234" name="Telefono" id="Telefono" required>
                <div class="valid-feedback">
                    Dato ingresado correctamente!
                </div>
                <div class="invalid-feedback">
                    Ingrese un teléfono válido
                </div>
            </div>
            <div class="col-md-4">
                <label for="Direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" placeholder="Ingrese su dirección" id="Direccion" name="Direccion" required>
                <div class="valid-feedback">
                    Dato ingresado correctamente!
                </div>
                <div class="invalid-feedback">
                    Ingrese una dirección válida
                </div>
            </div>
            <div class="d-flex align-content justify-content-center">
                <button type="submit" class="btn btn-primary btn-sm" style="margin-top:15px; font-size:1.1em;">Enviar</button>
            </div>
        </form>
    </div>
</body>
</html>