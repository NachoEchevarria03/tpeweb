<?php
/* Smarty version 4.2.1, created on 2022-10-13 21:58:54
  from 'C:\xampp\htdocs\tpeweb\templates\form-alta-category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63486dfe6cab18_68172693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1b4496b11e6b3fb4d633f30214c8262d99ae748' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeweb\\templates\\form-alta-category.tpl',
      1 => 1665690925,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63486dfe6cab18_68172693 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Agregar Categoria:</h2>
<form action="addCategory" method="POST" class="my-4">
    <div class="col-3">
        <div class="form-group">
            <label>Nombre de la Categoria</label>
            <input name="categoria" type="text" class="form-control">
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
    
</form><?php }
}
