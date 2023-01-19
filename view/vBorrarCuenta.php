<header>
    <h1>Borrar Cuenta</h1>
</header>
<main>
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

    <form name="borrarCuenta" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <table class="formulario">
            <tr>
                <td><label for="usuario">Usuario:</label></td>
                <td><input style="background-color: yellow" type="text" name="usuario" id="usuario"/></td>
            </tr>
            <tr>
                <td><label for="password">Password:</label></td>
                <td><input style="background-color: yellow;" type="password" name="password" id="password" /></td>
            </tr>
            <tr>
                <td><label for="Rpassword">Repita el Password:</label></td>
                <td><input style="background-color: yellow;" type="password" name="Rpassword" id="Rpassword" /></td>
            </tr>
            <tr>
                <td><input type="submit" id="borrar" value="Borrar Cuenta" name="borrar"></td>
                <td><input type="submit" value="Volver" name="volver" id="volver"></td>
            </tr>
        </table>
    </form>
</table>  
</main>