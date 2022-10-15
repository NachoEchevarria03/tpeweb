{include file="header.tpl"}

    <h1>Categorias</h1>

    <ul>
        
    {foreach from=$categories item=$category}
        <li><a href="category/{$category->categoria}">{$category->categoria}</a>
        {if isset($smarty.session.IS_LOGGED)}
        <a href='deleteCategory/{$category->id_categoria_fk}' type='button' class='btn btn-danger'>Borrar</a>
        <a href='editCategory/{$category->id_categoria_fk}'  type='button' class='btn btn-warning'>Editar</a>  
        {/if}
        </li>
    {/foreach}

    </ul>
    {if isset($smarty.session.IS_LOGGED)}
    {include file="form-alta-category.tpl"}
    <p>{$error}</p>
    {/if}
{include file="footer.tpl"}