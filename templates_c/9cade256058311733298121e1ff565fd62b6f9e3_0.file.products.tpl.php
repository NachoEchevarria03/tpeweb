<?php
/* Smarty version 4.2.1, created on 2022-10-13 22:25:30
  from 'C:\xampp\htdocs\web2\tpeweb\templates\products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6348743a734301_26539268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cade256058311733298121e1ff565fd62b6f9e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpeweb\\templates\\products.tpl',
      1 => 1665687949,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:form-alta.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6348743a734301_26539268 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:form-alta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Productos</h1>


<div class="container-productos">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <div class="card" style="width: 18rem;">
            <img src="img/<?php echo $_smarty_tpl->tpl_vars['product']->value->url_imagen;?>
" class="card-img-top" alt="...">
            <div class="card-body">
                <h5><a href="detailproduct/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" class="card-title"><?php echo $_smarty_tpl->tpl_vars['product']->value->nombre;?>
</a></h5>               
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
