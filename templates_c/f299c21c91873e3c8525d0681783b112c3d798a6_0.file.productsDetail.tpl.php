<?php
/* Smarty version 4.2.1, created on 2022-10-13 21:07:37
  from 'C:\xampp\htdocs\tpeweb\templates\productsDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634861f992ee79_27452254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f299c21c91873e3c8525d0681783b112c3d798a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeweb\\templates\\productsDetail.tpl',
      1 => 1665686759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634861f992ee79_27452254 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-productos">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <div class="card" style="width: 18rem;">
            <a href="category/<?php echo $_smarty_tpl->tpl_vars['product']->value->categoria;?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value->categoria;?>
</a>
            <img src="img/<?php echo $_smarty_tpl->tpl_vars['product']->value->url_imagen;?>
" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['product']->value->nombre;?>
</h5>
                <p class="card-text">$<?php echo $_smarty_tpl->tpl_vars['product']->value->precio;?>
 - <?php echo $_smarty_tpl->tpl_vars['product']->value->talle;?>
</p>
                <a href='delete/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
' type='button' class='btn btn-danger'>Borrar</a>
                <a href='edit/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
'  type='button' class='btn btn-warning'>Editar</a>     
            </div>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
