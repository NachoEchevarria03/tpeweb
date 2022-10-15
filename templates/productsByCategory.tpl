{include file="header.tpl"}

<h1>{$category}</h1>

<div class="container-productos">
    {foreach from=$products item=$product}
        <div class="card" style="width: 18rem;">
            <img src="img/{$product->url_imagen}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5><a href="detailproduct/{$product->id}" class="card-title">{$product->nombre}</a></h5>
                <p class="card-text">${$product->precio} - {$product->talle}</p>
                {if isset($smarty.session.IS_LOGGED)}
                <a href='delete/{$product->id}' type='button' class='btn btn-danger'>Borrar</a>
                <a href='edit/{$product->id}'  type='button' class='btn btn-warning'>Editar</a>     
                {/if} 
            </div>
        </div>
    {/foreach}
</div>


{include file="footer.tpl"}