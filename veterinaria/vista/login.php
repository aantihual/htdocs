<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>.:. CV - Login .:.</title>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
    <link rel="stylesheet" href="css/login.css">
    <script type="text/javascript" src="js/jquery-1.12.3.min.js"></script>
    <script language="javascript" src="js/login.js"></script>
</head>

<body>
    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Ingresar</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Registrarse</label>
            <div class="login-form">
                <form action="Inicio.php" method="post" onsubmit="return login();">
                    <div class="sign-in-htm">
                        <div class="group">
                            <label for="user" class="label">Nombre Usuario</label>
                            <input id="usuario" type="text" class="input" required/>
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Contraseña</label>
                            <input id="clave" type="password" class="input" data-type="password" required/>
                        </div>
                        <div class="group">
                            <input id="check" type="checkbox" class="check" checked>
                            <label for="check"><span class="icon"></span> Mantenerse conectado</label>
                        </div>
                        <div class="group">
                            <input type="submit" class="button" value="Ingresar">
                        </div>
                        <div class="hr"></div>
                    </div>
                </form>
                <form action="#Form_registro" method="post">
                    <div class="sign-up-htm">
                        <div class="group">
                            <label for="usuario" class="label">Nombre de Usuario</label>
                            <input id="usuario" type="text" class="input" required/>
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Contraseña</label>
                            <input id="clave" type="password" class="input" data-type="password" required/>
                        </div>
                        <div class="group">
                            <label for="clave" class="label">Repetir Contraseña</label>
                            <input id="clave" type="password" class="input" data-type="password" required/>
                        </div>
                        <div class="group">
                            <label for="nombre" class="label">Nombre Completo</label>
                            <input id="nombre" type="text" class="input" required/>
                        </div>
                        <div class="group">
                            <label for="email" class="label">Direccion de Correo</label>
                            <input id="email" type="email" class="input" required/>
                        </div>
                        <div class="group">
                            <input type="submit" class="button" value="Registrarse">
                        </div>
                        <div class="hr"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
