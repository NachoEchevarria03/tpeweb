<?php
/* Smarty version 4.2.1, created on 2022-10-14 00:37:08
  from 'C:\xampp\htdocs\web2\tpeweb\templates\form-edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634893140a8bb3_89128695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18d0c7dd575e507722384d1f7c55cd50d33a9e3a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpeweb\\templates\\form-edit.tpl',
      1 => 1665700623,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634893140a8bb3_89128695 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2>Editar producto:</h2>
<form action="update" method="POST" class="my-4">
    <div class="col-3">
        <div class="form-group">
            <input hidden name="id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
">
            <label>Nombre del producto</label>
            <input name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->nombre;?>
" type="text" class="form-control">
            <label>Talle</label>
            <input name="talle" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->talle;?>
" type="text" class="form-control">
            <label>Precio</label>
            <input name="precio" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->precio;?>
" type="number" class="form-control">
            <label>Url Imagen</label>
            <input name="url" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->url_imagen;?>
" type="text" class="form-control">
            <label>Categoria</label>
            <select name="categoria" class="form-control">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id_categoria_fk;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value->categoria;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Editar</button>
    <p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
</form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
