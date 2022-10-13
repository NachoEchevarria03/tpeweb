{include file="header.tpl"}

    <h1>Categorias</h1>

    <ul>
        
    {foreach from=$categories item=$category}
        <li><a href="category/{$category->categoria}">{$category->categoria}</a>
        
        <a href='deleteCategory/{$category->id_categoria_fk}' type='button' class='btn btn-danger'>Borrar</a>
        <a href='editCategory/{$category->id_categoria_fk}'  type='button' class='btn btn-warning'>Editar</a>  
        </li>
    {/foreach}

    </ul>
    {include file="form-alta-category.tpl"}
    <p>{$error}</p>

{include file="footer.tpl"}