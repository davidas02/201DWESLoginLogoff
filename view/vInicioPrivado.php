<header>
    <h1>Inicio Privado</h1>
</header>
<main>
    <form name="inicioPrivado" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <table class="formulario">
            <p>
                <?php
                //Damos la bienvenida al usuario en diferentes idiomas dependiendo de la cookie idioma
                echo "Bienvenido " . $_SESSION['usuarioDAW201LoginLogoff']->getDescUsuario();
                ?>
            </p>
            <p>
                <?php
                //comprobamos el numero de conexiones si es mayor a 1 tambien mostramos la fecha y hora de la ultima conexion
                if ($_SESSION['usuarioDAW201LoginLogoff']->getNumConexiones() > 1) {
                    echo"Ultimo inicio de sesión: " . $_SESSION['usuarioDAW201LoginLogoff']->getFechaHoraUltimaConexionAnterior();
                    ?>
                </p>
                <p>
                    <?php
                    //Mostramos el numero de conexiones
                    echo"Te has conectado " . $_SESSION['usuarioDAW201LoginLogoff']->getNumConexiones() . " veces";
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
                <td><input type="submit" id="salir" value="Salir" name="salir"></td>

                <td><input type="submit" id="detalle" value="Detalle" name="detalle"></td>

                <td><input type="submit" id="modificar" value="Modificar Perfil" name="modificar"></td>

                <td><input type="submit" id="mtoDptos" name="mtoDptos" value="Mantenimiento Departamentos"></td>
            </tr>

        </table>
    </form>
</main>