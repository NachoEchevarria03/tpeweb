{include file="header.tpl"}

<h2>Editar producto:</h2>
<form action="update" method="POST" class="my-4">
    <div class="col-3">
        <div class="form-group">
            <input hidden name="id" value="{$product->id}">
            <label>Nombre del producto</label>
            <input name="nombre" value="{$product->nombre}" type="text" class="form-control">
            <label>Talle</label>
            <input name="talle" value="{$product->talle}" type="text" class="form-control">
            <label>Precio</label>
            <input name="precio" value="{$product->precio}" type="number" class="form-control">
            <label>Url Imagen</label>
            <input name="url" value="{$product->url_imagen}" type="text" class="form-control">
            <label>Categoria</label>
            <select name="categoria" class="form-control">
                {foreach from=$categories item=$category}
                    <option value="{$category->id_categoria_fk}">{$category->categoria}</option>
                {/foreach}
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Editar</button>
    <p>{$error}</p>
</form>

{include file="footer.tpl"}