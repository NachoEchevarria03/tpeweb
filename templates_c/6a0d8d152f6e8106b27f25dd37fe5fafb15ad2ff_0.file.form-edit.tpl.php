<?php
/* Smarty version 4.2.1, created on 2022-10-13 19:32:40
  from 'C:\xampp\htdocs\web2\tpe-boceto\templates\form-edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63484bb819eb41_16490088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a0d8d152f6e8106b27f25dd37fe5fafb15ad2ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe-boceto\\templates\\form-edit.tpl',
      1 => 1665682282,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63484bb819eb41_16490088 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2>Editar producto:</h2>
<form action="update" method="POST" class="my-4">
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
</form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
