<header>
    <h1>Registro</h1>
</header>
<main>
    <form name="registro" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <table class="formulario">
            <tr>
                <td><label for="usuario">Usuario:</label></td>
                <td><input style="background-color:yellow;" type="text" name="usuario" class="usuario"/></td>
            </tr>
            <tr>
                <td><label for="password">Password:</label></td>
                <td><input style="background-color:yellow;" type="password" name="password" class="password" /></td>
            </tr>
            <tr>
                <td><label for="Rpassword">Repita el Password:</label></td>
                <td><input style="background-color:yellow;" type="password" name="Rpassword" class="password" /></td>
            </tr>
            <tr>
                <td><label for="nombre">Nombre:</label></td>
                <td><input style="background-color:yellow;" type="text" name="nombre" class="nombre" /></td>
            </tr>

            <tr>
                <td><input type="submit" id="registro" value="Registrarse" name="registro"></td>
                <td><input type="submit" value="Volver" name="volver" id="volver"></td>
            </tr>
        </table>
    </form>
</main>
