
    <h1>Registra tus datos</h1>
    <form action="<?php echo base_url()?>usuarios/guardar" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre"/>
        <label for="marca">marca</label>
        <input type="text" name="marca"/>
        <label for="DNI">DNI</label>
        <input type="text" name="DNI"/>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>