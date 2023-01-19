<header>
    <h1>Detalle</h1>
</header>
<main>
    <form name="detalle" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <table class="formulario">
            <tr>
                <td colspan="2"><input type="submit" id="volver" value="Volver" name="volver"></td>
            </tr>
        </table>
    </form>
    <div class="detalle">
        <!--Muestra del contenido de la variable $_SESSION con foreach()-->
        <h2>Mostrar $_SESSION </h2>
        <tr>
            <td>
                <?php print_r($_SESSION); ?></td>
            <td><?php $valor ?></td>;

        </tr>
        </table>
        </br>

        <!--Muestra del contenido de la variable $_COOKIE con foreach()-->
        <h2>Mostrar $_COOKIE con foreach()</h2>
        <table><tr><th>Clave</th><th>Valor</th></tr>
            <?php foreach ($_COOKIE as $key => $value) { ?>
                <tr><td><strong><?php echo $key; ?></strong></td>
                    <td> <?php echo $value; ?> </td></tr>
            <?php } ?>
        </table>
        </br>

        <!--Muestra del contenido de la variable $_SERVER con foreach()-->
        <h2>Mostrar $_SERVER con foreach()</h2>
        <table><tr><th class='cajaizquierda'>Clave</th><th class='cajaderecha'>Valor</th></tr>
                    <?php foreach ($_SERVER as $key => $value) { ?>
                <tr>
                    <td><strong> <?php echo $key; ?></strong></td>
                    <td> <?php echo $value; ?> </td>
                </tr>
            <?php } ?>
        </table>
        </br>

        <!--//Muestra del contenido de la variable $_REQUEST con foreach()-->
        <h2>Mostrar $_REQUEST con foreach()</h2>
        <table><tr><th>Clave</th><th>Valor</th></tr>
            <?php foreach ($_REQUEST as $key => $value) { ?>
                <td><strong><?php echo $key; ?></strong></td>
                <td><?php echo $value; ?></td>
            <?php } ?>
        </table>

        <!--Muestra del contenido de la variable $_GET con foreach()-->
        <h2>Mostrar $_GET con foreach()</h2>
        <table><tr><th>Clave</th><th>Valor</th></tr>
            <?php foreach ($_GET as $key => $value) { ?>
                <td><strong> <?php echo $key; ?></strong></td>";
                <td><?php echo $value; ?> </td>
            <?php } ?>
        </table>
        </br>

        <!--//Muestra del contenido de la variable $_FILES con foreach()-->
        <h2>Mostrar $_FILES con foreach()</h2>
        <table><tr><th>Clave</th><th>Valor</th></tr>
            <?php foreach ($_FILES as $key => $value) { ?>
                <td><strong><?php echo $key; ?></strong></td>
                <td> <?php echo $value; ?></td>
            <?php } ?>
        </table>
        </br>
        <!--//Muestra del contenido de la variable $_ENV con foreach()-->
        <h2>Mostrar $_ENV con foreach()</h2>
        <table><tr><th>Clave</th><th>Valor</th></th>
                <?php foreach ($_ENV as $key => $value) { ?>
                <tr><td><strong><?php echo $key; ?> </strong></td>
                    <td> <?php echo $value; ?></td></tr>
            <?php } ?>
        </table>
        </br>

        <!--Muestra del contenido de la variable $_POST con foreach()-->
        <h2>Mostrar $_POST con foreach()</h2>
        <table><tr><th>Clave</th><th>Valor</th></th>
                <?php foreach ($_POST as $key => $value) { ?>
                    <td><strong><?php echo $key; ?></strong></td>
                    <td><?php echo $value; ?></td>
                <?php } ?>
        </table>
    </div>
</main>