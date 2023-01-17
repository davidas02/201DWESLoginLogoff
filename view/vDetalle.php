

    <form name="ejercicio21" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <table class="formulario">
            <tr>
                <td colspan="2"><input type="submit" id="volver" value="Volver" name="volver"></td>
            </tr>
        </table>
    </form>
<div id="detalle">
    <?php
    //Muestra del contenido de la variable $_SESSION con foreach()
    echo '<h2>Mostrar $_SESSION con foreach()</h2>';

    echo "<table><tr><th class='cajaizquierda'>Clave</th><th class='cajaderecha'>Valor</th></tr>";
    foreach ($_SESSION as $clave => $valor) {
        echo "<tr>";
        echo "<td><strong>$clave</strong></td>";
        if (is_object($valor)) {
            echo '<td><table><th>Clave</th><th>valor</th>';
            foreach ($valor as $c => $v) {
                echo "<tr><th>$c</th>";
                echo "<td>$v</td></tr>";
            }
            echo"</table></td>";
        } else {
            echo "<td>" . $valor . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    echo "</br>";

    //Muestra del contenido de la variable $_COOKIE con foreach()
    echo '<h2>Mostrar $_COOKIE con foreach()</h2>';
    echo '<table><tr><th>Clave</th><th>Valor</th></tr>';
    foreach ($_COOKIE as $key => $value) {
        echo "<tr><td><strong>" . $key . "</strong></td>";
        echo "<td>" . $value . "</td></tr>";
    }
    echo '</table>';
    echo "</br>";

    //Muestra del contenido de la variable $_SERVER con foreach()
    echo '<h2>Mostrar $_SERVER con foreach()</h2>';
    echo "<table><tr><th class='cajaizquierda'>Clave</th><th class='cajaderecha'>Valor</th></tr>";
    foreach ($_SERVER as $key => $value) {
        echo "<tr>";
        echo "<td><strong>" . $key . "</strong></td>";
        echo "<td>" . $value . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</br>";

    //Muestra del contenido de la variable $_REQUEST con foreach()
    echo '<h2>Mostrar $_REQUEST con foreach()</h2>';
    echo '<table><tr><th>Clave</th><th>Valor</th></th>';
    foreach ($_REQUEST as $key => $value) {
        echo "<td><strong>" . $key . "</strong></td>";
        echo "<td>" . $value . "</td>";
    }
    echo '</table>';

    //Muestra del contenido de la variable $_GET con foreach()
    echo '<h2>Mostrar $_GET con foreach()</h2>';
    echo '<table><tr><th>Clave</th><th>Valor</th></th>';
    foreach ($_GET as $key => $value) {
        echo "<td><strong>" . $key . "</strong></td>";
        echo "<td>" . $value . "</td>";
    }
    echo '</table>';
    echo "</br>";

    //Muestra del contenido de la variable $_FILES con foreach()
    echo '<h2>Mostrar $_FILES con foreach()</h2>';
    echo '<table><tr><th>Clave</th><th>Valor</th></th>';
    foreach ($_FILES as $key => $value) {
        echo "<td><strong>" . $key . "</strong></td>";
        echo "<td>" . $value . "</td>";
    }
    echo '</table>';
    echo "</br>";

    //Muestra del contenido de la variable $_ENV con foreach()
    echo '<h2>Mostrar $_ENV con foreach()</h2>';
    echo '<table><tr><th>Clave</th><th>Valor</th></th>';
    foreach ($_ENV as $key => $value) {

        echo "<tr><td><strong>" . $key . "</strong></td>";
        echo "<td>" . $value . "</td></tr>";
    }
    echo '</table>';
    echo "</br>";

    //Muestra del contenido de la variable $_POST con foreach()
    echo '<h2>Mostrar $_POST con foreach()</h2>';
    echo '<table><tr><th>Clave</th><th>Valor</th></th>';
    foreach ($_POST as $key => $value) {
        echo "<td><strong>" . $key . "</strong></td>";
        echo "<td>" . $value . "</td>";
    }
    echo '</table>';
    echo "</br>";

    //Muestra del contenido de la variable $GLOBALS con foreach(), uso de dos foreach para mostrar el contenido de algunos arrays dentro del array de la variable
    echo '<h2>Mostrar $GLOBALS con foreach()</h2>';
    echo "<table><tr><th class='cajaizquierda'>Clave</th><th class='cajaderecha'>Valor</th></tr>";
    foreach ($GLOBALS as $clave => $valor) {
        echo "<tr>";
        echo "<td><strong>$clave</strong></td>";
        if (is_array($valor)) {
            echo '<td><table><th>Clave</th><th>valor</th>';
            foreach ($valor as $c => $v) {
                echo "<tr><th>$c</th>";
                echo "<td>$v</td></tr>";
            }
            echo"</table></td>";
        } else {
            echo "<td>" . $valor . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "</br>";
    ?>
</div>

