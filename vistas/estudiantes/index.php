<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>App de Estudiantes</title>
</head>
<body>
    <br>
    <br>
    <br>
    <div class="container">
        <h1 class="text-center">Formulario de Estudiantes de Informatica</h1>
        <div class="row justify-content-center">
            
            <form action="/Practica_no.7/controladores/estudiantes/guardar.php" method="POST" class="col-lg-8 border bg-light p-3">

                <div class="row mb-3">
                    <div class="col">
                        <label for="primer_nombre">Primer Nombre:</label>
                        <input type="text" name="primer_nombre" id="primer_nombre" class="form-control">
                    </div>
                    <div class="col">
                        <label for="segundo_nombre">Segundo Nombre:</label>
                        <input type="text" name="segundo_nombre" id="segundo_nombre" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="primer_apellido">Primer Apellido:</label>
                        <input type="text" name="primer_apellido" id="primer_apellido" class="form-control">
                    </div>
                    <div class="col">
                        <label for="segundo_apellido">Segundo Apellido:</label>
                        <input type="text" name="segundo_apellido" id="segundo_apellido" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="alumno_nacimiento">Fecha de Nacimiento:</label>
                        <input type="date" name="alumno_nacimiento" id="alumno_nacimiento" class="form-control">
                    </div>
                    <div class="col">
                        <label for="alumno_tel">Número de Teléfono:</label>
                        <input type="tel" name="alumno_tel" id="alumno_tel" class="form-control">
                    </div>                       
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="alumno_email">Correo Electronico:</label>
                        <input type="email" name="alumno_email" id="alumno_email" class="form-control">
                    </div>                    
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-primary w-100">Guardar</button>
                    </div>                
                </div>

            </form>
        </div>
    </div>
</body>
</html>