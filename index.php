<?php
session_start();
if (!empty($_SESSION['active'])) {
    header('Location: administrador/');
} else if (!empty($_SESSION['activeP'])) {
    header('Location: profesor/');
}else if (!empty($_SESSION['activeA'])) {
    header('Location: alumno/');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>INGRESO AL SISTEMA</title>
</head>

<body>
    <header class="main-header">

        <div class="main-cont">
            <div class="desc-header">
                <img src="images/school.svg" alt="image school">
                <p>School</p>
            </div>
        </div>
        <div class="cont-header">
            <h1>Bienvenid@</h1>

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Administrador</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profesor</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="alumno-tab" data-toggle="tab" href="#alumno" role="tab" aria-controls="alumno" aria-selected="false">Alumno</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <form action="" onsubmit="return validar()">
                        <label for="usuario">Usuario</label>
                        <input type="text" name="usuario" id="usuario" placeholder="Nombre de usuario">
                        <label for="password">Contrase??a</label>
                        <input type="password" name="pass" id="pass" placeholder="Contrase??a">
                        <div id="messageUsuario"></div>
                        <button id="loginUsuario" type="button">INICIAR SESI??N</button>
                    </form>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <form action="" onsubmit="return validar()">
                        <label for="usuario">Usuario</label>
                        <input type="text" name="usuarioProfesor" id="usuarioProfesor" placeholder="Cedula">
                        <label for="password">Contrase??a</label>
                        <input type="password" name="passProfesor" id="passProfesor" placeholder="Contrase??a">
                        <div id="messageProfesor"></div>
                        <button id="loginProfesor" type="button">INICIAR SESI??N</button>
                    </form>
                </div>
                <div class="tab-pane fade" id="alumno" role="tabpanel" aria-labelledby="alumno-tab">
                    <form action="" onsubmit="return validar()">
                        <label for="usuario">Usuario</label>
                        <input type="text" name="usuarioAlumno" id="usuarioAlumno" placeholder="No. Documento">
                        <label for="password">Contrase??a</label>
                        <input type="password" name="passAlumno" id="passAlumno" placeholder="Contrase??a">
                        <div id="messageAlumno"></div>
                        <button id="loginAlumno" type="button">INICIAR SESI??N</button>
                    </form>
                </div>
            </div>
        </div>

    </header>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/login.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>