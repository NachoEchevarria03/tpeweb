<?php
/* Smarty version 4.2.1, created on 2022-10-13 22:27:15
  from 'C:\xampp\htdocs\web2\tpeweb\templates\form-alta-category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634874a3f05856_72522118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b8ea3bb58a9fd0a51c46a0587fb0079927f9423' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpeweb\\templates\\form-alta-category.tpl',
      1 => 1665690925,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634874a3f05856_72522118 (Smarty_Internal_Template $_smarty_tpl) {
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
