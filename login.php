

<form action="action_page.php" method="post">
    <div class="imgcontainer">
        <img src="Ashes-logo" alt="Avatar" class="avatar">
    </div>



    <div class="container">
        <label for="uname"><b>Nombre de Usuario</b></label>
        <input type="text" placeholder="Ingrese su Usuario " name="uname" required>



        <label for="psw"><b>Contraseña</b></label>
        <input type="password" placeholder="Ingrese su Contraseña" name="psw" required>



        <button type="submit">Ingresar</button>
        <label>
            <input type="checkbox" checked="checked" name="remember"> Recuerdame
        </label>
    </div>



    <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn">Cancel</button>
        <span class="psw">Olvido su <a href="#">Contraseña?</a></span>
    </div>
</form>