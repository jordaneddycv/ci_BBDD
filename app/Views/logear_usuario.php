
<form action="<?php echo base_url()?>usuarios/check" method="post"action="">
    <label for="">Email:</label>
    <input type="text" name="email">
    <br>
    <label for="">Password:</label>
    <input type="password" name="pass">
    <br>
    <input type="submit" value="Enviar">
</form>
<button onclick="mostrarPopup()" value="Register">Register</button>


<div id="overlay" class="overlay"></div>

<!-- Contenido del Pop-up -->
<div id="popup" class="popup">
        <img src="<?php echo base_url()?>/wallacapi.png" alt="" width="100%">
        <form action="<?php echo base_url()?>usuarios/guardar" method="post" id="registrarse">
        <label for="Nombre" style="margin-right:55px;">Nick</label>
        <input type="text" name="nombre" style="font-size:1rem;" required/>
        <br><br>
        <label for="Password" style="margin-right:10px;">Password</label>
        <input type="password" name="password" style="font-size:1rem;" required/>
        <br><br>
        <label for="Direccion" style="margin-right:7.5px;">Direccion</label>
        <input type="text" name="direccion" style="font-size:1rem;" required/>
        <br><br>
        <label for="DNI" style="margin-right:71px;">dni</label>
        <input type="text" name="dni" style="font-size:1rem;" required/>
        <br><br>
        <input type="submit" value="Enviar">
        <button onclick="cerrarPopup()">Cerrar</button>
        </form>
</div>

<script>
    // Función para mostrar el pop-up
    function mostrarPopup() {
        document.getElementById('overlay').style.display = 'block';
        document.getElementById('popup').style.display = 'block';
    }

    // Función para cerrar el pop-up
    function cerrarPopup() {
        document.getElementById('overlay').style.display = 'none';
        document.getElementById('popup').style.display = 'none';
    }
</script>
</body>
</html>