<form name="ejercicio21" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <table class="formulario">
        <p>
            <?php
            //Damos la bienvenida al usuario en diferentes idiomas dependiendo de la cookie idioma
            echo "Bienvenido " . $_SESSION['usuarioDAW201AppLoginLogoff']->T01_DescUsuario;
            ?>
        </p>
        <p>
            <?php
            //comprobamos el numero de conexiones si es mayor a 1 tambien mostramos la fecha y hora de la ultima conexion
            if ($_SESSION['usuarioDAW201AppLoginLogoff']->T01_NumConexiones > 1) {
                echo"Ultimo inicio de sesión: " . $_SESSION['FechaHoraUltimaConexionAnterior'];
                ?>
            </p>
            <p>
    <?php
    //Mostramos el numero de conexiones
    echo"Te has conectado " . $_SESSION['usuarioDAW201AppLoginLogoff']->T01_NumConexiones . " veces";
} else {
    ?>
            </p>
            <p>
                <?php
                echo 'Es la primera vez que te conectas';
            }
            ?>
        </p>
        <tr>
            <td colspan="2"><input type="submit" id="salir" value="Salir" name="salir"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" id="detalle" value="Detalle" name="detalle"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" id="modificar" value="Modificar Perfil" name="modificar"></td>
        </tr>
    </table>
</form>

