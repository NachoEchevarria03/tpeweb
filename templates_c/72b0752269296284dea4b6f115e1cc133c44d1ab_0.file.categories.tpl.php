<?php
/* Smarty version 4.2.1, created on 2022-10-13 22:27:15
  from 'C:\xampp\htdocs\web2\tpeweb\templates\categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634874a3e95223_45123677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72b0752269296284dea4b6f115e1cc133c44d1ab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpeweb\\templates\\categories.tpl',
      1 => 1665692150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:form-alta-category.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634874a3e95223_45123677 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h1>Categorias</h1>

    <ul>
        
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
        <li><a href="category/<?php echo $_smarty_tpl->tpl_vars['category']->value->categoria;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value->categoria;?>
</a>
        
        <a href='delete/<?php echo $_smarty_tpl->tpl_vars['category']->value->id_categoria_fk;?>
' type='button' class='btn btn-danger'>Borrar</a>
        <a href='edit/<?php echo $_smarty_tpl->tpl_vars['category']->value->id_categoria_fk;?>
'  type='button' class='btn btn-warning'>Editar</a>  
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </ul>
    <?php $_smarty_tpl->_subTemplateRender("file:form-alta-category.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
