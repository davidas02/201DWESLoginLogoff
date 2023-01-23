<header>
    <h1>LogIn</h1>
</header>
<main>
    <form name="loginLogoff" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form" method="post">
        <div class="login">
            <table class="formulario">
                <tr>
                    <td><label for="usuario">Usuario:</label></td>
                    <td><input type="text" name="usuario" class="usuario"/></td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" name="password" class="password" /></td>
                </tr>
                <tr><td colspan="2"><input type="submit" id="iniciarSesion" value="Iniciar Sesion" name="iniciarSesion"></td></tr>
            </table>
        </div>
        <div class="cancelar">
            <input type="submit" id="cancelar" name="cancelar" value="Cancelar">
        </div>
        <div class="registro">
            <p>No tiene una cuenta, Registrese ahora, es Gratis</p>
            <input type="submit" id="registro" name="registro" value="Registrarse">
        </div>
    </form>
</main>
