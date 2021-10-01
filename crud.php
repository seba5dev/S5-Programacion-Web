<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD en PHP</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/css/crud.css">
</head>

<body>
    <?php
    include("./crud/conexion.php");

    $result = mysqli_query($con, "SELECT * FROM estudiantes");
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Programación Web</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link grow" href="ej1.html">Ejercicio 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link grow" href="ej2.html">Ejercicio 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link grow active" href="crud.php">CRUD PHP</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="# "><i class="bi bi-instagram icon"></i></a>
                    <a href="# "><i class="bi bi-facebook icon"></i></a>
                    <a href="# "><i class="bi bi-twitter icon"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-12 col-lg-8">
                <h1>Estudiantes IED La Victoria</h1>
                <div class="table-responsive">

                    <div class="table">
                        <table class="table table-hover">
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Cédula</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Celular</th>
                                <th scope="col">Email</th>
                            </tr>
                            <?php
                            while ($res = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td>" . $res['id'] . "</td>";
                                echo "<td>" . $res['nombre'] . "</td>";
                                echo "<td>" . $res['apellido'] . "</td>";
                                echo "<td>" . $res['cedula'] . "</td>";
                                echo "<td>" . $res['fecha'] . "</td>";
                                echo "<td>" . $res['celular'] . "</td>";
                                echo "<td>" . $res['email'] . "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <ul class="nav justify-content-center nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="add-tab" data-bs-toggle="tab" data-bs-target="#add" type="button" role="tab" aria-controls="add" aria-selected="true">Añadir</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="edit-tab" data-bs-toggle="tab" data-bs-target="#edit" type="button" role="tab" aria-controls="edit" aria-selected="false">Actualizar</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="delete-tab" data-bs-toggle="tab" data-bs-target="#delete" type="button" role="tab" aria-controls="delete" aria-selected="false">Eliminar</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="add" role="tabpanel" aria-labelledby="add-tab">
                        <div class="row justify-content-center">
                            <div class="col-md-6 mt-5">
                                <form class="" method="post" action="./crud/add.php">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Pepito" required />
                                        <label for="nombre" class="form-label">Nombre</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Perez" required />
                                        <label for="apellido" class="form-label">Apellido</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="cedula" name="cedula" placeholder="1234567890" required />
                                        <label for="cedula" class="form-label">Cédula</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="date" class="form-control" id="fecha" name="fecha" placeholder="fecha" required />
                                        <label for="fecha" class="form-label">Fecha de Nacimiento</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="celular" name="celular" placeholder="1234567890" required />
                                        <label for="celular" class="form-label">Celular</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="correo@mail.com" required />
                                        <label for="email" class="form-label">E-mail</label>
                                    </div>
                                    <button type="submit" name="add" class="btn btn-primary w-100">
                                        Añadir estudiante
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="edit" role="tabpanel" aria-labelledby="edit-tab">
                        <div class="row justify-content-center">
                            <div class="col-md-6 mt-5">

                                <form class="" method="post" action="./crud/edit.php">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" name="id" id="id" aria-label="Seleccione un id">
                                            <?php
                                            foreach ($result as $numero) {
                                                echo "<option value='" . $numero['id'] . "'>" . $numero['id'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                        <label for="id" class="form-label">Id</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Pepito" required />
                                        <label for="nombre" class="form-label">Nombre</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Perez" required />
                                        <label for="apellido" class="form-label">Apellido</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="cedula" name="cedula" placeholder="1234567890" required />
                                        <label for="cedula" class="form-label">Cédula</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="date" class="form-control" id="fecha" name="fecha" placeholder="fecha" required />
                                        <label for="fecha" class="form-label">Fecha de Nacimiento</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="celular" name="celular" placeholder="1234567890" required />
                                        <label for="celular" class="form-label">Celular</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="correo@mail.com" required />
                                        <label for="email" class="form-label">E-mail</label>
                                    </div>
                                    <button type="submit" name="edit" class="btn btn-primary w-100">
                                        Editar estudiante
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="delete" role="tabpanel" aria-labelledby="delete-tab">
                        <div class="row justify-content-center">
                            <div class="col-md-6 mt-5">
                                <form class="" method="post" action="./crud/delete.php">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" name="id" id="id" aria-label="Seleccione un id">
                                            <?php
                                            foreach ($result as $numero) {
                                                echo "<option value='" . $numero['id'] . "'>" . $numero['id'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                        <label for="id" class="form-label">Id</label>
                                    </div>
                                    <button type="submit" name="delete" class="btn btn-primary w-100">
                                        Eliminar estudiante
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
</body>

</html>