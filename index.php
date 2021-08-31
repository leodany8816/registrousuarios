<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <link href="css/styles.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="container">
                    <div class="" style="background-color:#424242 !important;">
                        <div class="row">
                            <div class="col-md-10" style="padding: 0 40px;">
                                <h3 class="display-5" style="color:#b2b4ba;">Registro de Usuarios</h3>
                                <p class="lead" style="color:#b2b4ba;">Por favor, rellene todos los campos del formulario para crear su cuenta.</p>
                            </div>
                        </div>
                        <form>
                            <div class="ax-container-form">
                                <div class="row f-page">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <input type="text" name="nombre" id="nombre" class="form-control ax-form-inputs" tabindex="1">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Apellido Paterno</label>
                                            <input type="text" tabindex="2" name="apellidos" id="apellidop" class="form-control ax-form-inputs">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Apellido Materno</label>
                                            <input type="text" tabindex="2" name="apellidos" id="apellidom" class="form-control ax-form-inputs">
                                        </div>
                                    </div>
                                </div>
                                <div class="row f-page">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Fecha de nacimiento</label>
                                            <input tabindex="3" type="text" class="form-control ax-form-inputs" name="fnacimiento" id="fnacimiento">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Correo electrónico (Email)</label>
                                            <input tabindex="3" type="email" name="correo" id="correo" placeholder="name@example.com" autocomplete="off" size="10" class="form-control ax-form-inputs">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Telefono</label>
                                            <input tabindex="4" type="text" name="telefono" id="telefono" maxlength="10" placeholder="0000000000" autocomplete="off" class="form-control ax-form-inputs">
                                        </div>
                                    </div>
                                </div>

                                <div class="row f-page">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Cree su contraseña</label>
                                            <input type="password" name="password" id="password" placeholder="" autocomplete="off" class="form-control ax-form-inputs" tabindex="10">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Confirme su contraseña</label>
                                            <input type="password" name="password2" id="password2" placeholder="" autocomplete="off" class="form-control ax-form-inputs" tabindex="11">
                                        </div>
                                    </div>
                                </div>
                                <div class="row f-page">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <br />
                                        <button id="btnRegister" class="btn btn-danger" style="border-radius:50px;">REGISTRARME</button>
                                    </div>
                                    <div class="col-md-4"></div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>

        </div>
        </form>
    </div>
    <script src="js/vendors.bundle.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="js/bootstrap-notify.js"></script>
    <script src="js/funciones.js"></script>
</body>

</html>