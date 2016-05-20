<div class="container">

    <form class="form-signin" action="http://www.cumulo.cl/index.php" method="get">
        <h2 class="form-signin-heading">Ingresar al Cúmulo</h2>
        <label for="rutUsuario" class="sr-only">RUT Usuario</label>
        <input type="rut" id="rutUsuario" class="form-control" placeholder="Ingresar RUT Usuario" required autofocus>
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
        <input type="hidden" name="ip" value="Interno/Home">

        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Recordarme en este equipo
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
    </form>

</div>