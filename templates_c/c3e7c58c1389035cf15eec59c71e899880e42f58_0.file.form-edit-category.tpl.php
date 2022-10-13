<?php
/* Smarty version 4.2.1, created on 2022-10-14 01:13:51
  from 'C:\xampp\htdocs\web2\tpeweb\templates\form-edit-category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63489baf927199_03112012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3e7c58c1389035cf15eec59c71e899880e42f58' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpeweb\\templates\\form-edit-category.tpl',
      1 => 1665702829,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63489baf927199_03112012 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2>Editar categoria:</h2>
<form action="updateCategory" method="POST" class="my-4">
    <div class="col-3">
        <div class="form-group">
            <input hidden name="id" value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id_categoria_fk;?>
">
            <label>Nombre de la categoria</label>
            <input name="categoria" value="<?php echo $_smarty_tpl->tpl_vars['category']->value->categoria;?>
" type="text" class="form-control">
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Editar</button>
    <p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
</form>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
