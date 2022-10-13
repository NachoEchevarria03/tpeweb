{include file="header.tpl"}

<h2>Editar categoria:</h2>
<form action="updateCategory" method="POST" class="my-4">
    <div class="col-3">
        <div class="form-group">
            <input hidden name="id" value="{$category->id_categoria_fk}">
            <label>Nombre de la categoria</label>
            <input name="categoria" value="{$category->categoria}" type="text" class="form-control">
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Editar</button>
    <p>{$error}</p>
</form>



{include file="footer.tpl"}