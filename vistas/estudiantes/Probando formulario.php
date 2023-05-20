<!doctype html>
<html lang="en">

<head>
  <title>App de Estudiantes</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
  <div class="container mt-5">
        <h2>Formulario de Estudiantes de Informática</h2>
        <form action="/ruta_al_servidor" method="post">
            <div class="form-group row">
                <label for="nombre" class="col-md-1 col-form-label">Nombre1:</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <label for="nombre" class="col-md-1 col-form-label">Nombre2:</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>            
            </div>
<br>
            <form action="/ruta_al_servidor" method="post">
            <div class="form-group row">               
                <label for="apellido" class="col-md-1 col-form-label">Apellido:</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" id="apellido" name="apellido" required>
                </div>
                <label for="apellido" class="col-md-1 col-form-label">Apellido:</label>
                <div class="col-md-4">
                    <input type="text" class="form-control" id="apellido" name="apellido" required>
                </div>
            </div>

            <div class="form-group">
                <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
            </div>
            <div class="form-group">
                <label for="telefono">Número de Teléfono:</label>
                <input type="tel" class="form-control" id="telefono" name="telefono" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>