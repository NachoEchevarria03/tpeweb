<?php
/* Smarty version 4.2.1, created on 2022-10-06 18:52:27
  from 'C:\xampp\htdocs\web2\tpe-boceto\templates\productsDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633f07cb432ba2_08825099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '657a5cca479a1313e3adea6e5ca8f3a287d13220' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpe-boceto\\templates\\productsDetail.tpl',
      1 => 1665075145,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_633f07cb432ba2_08825099 (Smarty_Internal_Template $_smarty_tpl) {
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
