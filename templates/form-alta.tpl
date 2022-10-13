<h2>Agregar producto:</h2>
<form action="add" method="POST" class="my-4">
    <div class="col-3">
        <div class="form-group">
            <label>Nombre del producto</label>
            <input name="nombre" type="text" class="form-control">
            <label>Talle</label>
            <input name="talle" type="text" class="form-control">
            <label>Precio</label>
            <input name="precio" type="number" class="form-control">
            <label>Url Imagen</label>
            <input name="url" type="text" class="form-control">
            <label>Categoria</label>
            <select name="categoria" class="form-control">
                {foreach from=$categories item=$category}
                    <option value="{$category->id_categoria_fk}">{$category->categoria}</option>
                {/foreach}
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
    <p>{$error}</p>
</form>