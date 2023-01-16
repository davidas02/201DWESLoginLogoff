
<header>
                <h1>Tema 5 Proyecto LoginLogoff</h1>
                <div id="nav">
                    <h2>Login</h2>
                </div>
            </header>
            <div id="ejercicios">
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
                            <td><label for="nombre">Nombre:</label></td>
                            <td><input style="background-color:yellow;" type="text" name="nombre" class="nombre" /></td>
                        </tr>
                        
                        <tr>
                            <td><input type="submit" id="iniciarSesion" value="Iniciar Sesion" name="iniciarSesion"></td>
                            <td><input type="submit" value="Volver" name="volver" id="volver"></td>
                        </tr>
                    </table>
                </form>
            </div>
