<?php
/* Smarty version 4.2.1, created on 2022-10-13 19:04:36
  from 'C:\xampp\htdocs\web2\tpe-boceto\templates\form-alta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6348452406d7a6_70134992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b8caf42685444b3778afde5c2e9645b473ced9c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe-boceto\\templates\\form-alta.tpl',
      1 => 1665680641,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6348452406d7a6_70134992 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Agregar producto:</h2>
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
    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form><?php }
}
