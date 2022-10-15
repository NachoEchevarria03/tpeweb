{include file="header.tpl"}

<div class="mt-5 w-25 mx-auto">
    <form method="POST" action="validate">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input name="email" type="email" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <input name="contraseña" type="password" required class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
        {if $error} 
            <div class="alert alert-danger mt-3">
                {$error}
            </div>
        {/if}
    </form>
</div>







{include file="footer.tpl"}