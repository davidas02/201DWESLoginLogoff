<header>
    <h1>Modificar Cuenta</h1>
</header>
<main>
    <form name="miCuenta" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <table class="formulario">
            <tr>
                <td><label for="usuario">Usuario:</label></td>
                <td><input style="background-color: grey" type="text" name="usuario" class="usuario" value="<?php echo $_SESSION['usuarioDAW201LoginLogoff']->getCodUsuario(); ?>" readonly="true" /></td>
            </tr>
            <tr>
                <td><label for="nombre">Nombre:</label></td>
                <td><input type="text" name="nombre" class="nombre" value="<?php echo $_SESSION['usuarioDAW201LoginLogoff']->getDescUsuario(); ?>" /></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" id="aceptar" value="Aceptar" name="aceptar"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Volver" name="volver" id="volver"></td>

                <td><input type="submit" value="Borrar Usuario" name="borrarUsuario" id="borrarUsuario"></td>
            </tr>
            <tr>
                <td><label for="password">Password Antigua:</label></td>
                <td><input style="background-color: yellow;" type="password" name="Apassword" id="password" /></td>
            </tr>
            <tr>
                <td><label for="password">Password Nueva:</label></td>
                <td><input style="background-color: yellow;" type="password" name="Npassword" id="password" /></td>
            </tr>
            <tr>
                <td><label for="Rpassword">Repita el Password Nuevo:</label></td>
                <td><input style="background-color: yellow;" type="password" name="RNpassword" id="Rpassword" /></td>
            </tr>
            <tr>
                <td><input type="submit" value="Cambiar Contraseña" name="cambiarPassword" id="cambiarPassword"></td>
            </tr>
        </table>
        <p>
            Bienvenido <?php echo $_SESSION['usuarioDAW201LoginLogoff']->getDescUsuario(); ?>
        </p>

        <?php
        //comprobamos el numero de conexiones si es mayor a 1 tambien mostramos la fecha y hora de la ultima conexion
        if ($_SESSION['usuarioDAW201LoginLogoff']->getNumConexiones() > 1) {
            ?>
            <p>
                Ultimo inicio de sesión: "<?php echo $_SESSION['usuarioDAW201LoginLogoff']->getFechaHoraUltimaConexionAnterior(); ?>;

            </p>
            <p>
                Te has conectado <?php echo $_SESSION['usuarioDAW201LoginLogoff']->getNumConexiones(); ?> veces
            </p>
        <?php } else { ?>
            <p>
                Es la primera vez que te conectas
            </p>
        <?php } ?>
    </form>
</main>