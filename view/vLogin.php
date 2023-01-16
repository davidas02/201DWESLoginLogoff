  <div id="ejercicios">
      <h3>LogIn</h3>
                <form name="loginLogoff" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
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
                        <tr>
                            <td colspan="2"><input type="submit" id="registro" name="registro" value="Registrarse"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" id="cancelar" name="cancelar" value="Cancelar"></td>
                        </tr>
                    </table>
                </form>
            </div>
