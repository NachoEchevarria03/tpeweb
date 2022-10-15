<?php
/* Smarty version 4.2.1, created on 2022-10-15 21:04:12
  from 'C:\xampp\htdocs\web2\tpeweb\templates\form-login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b042ca24684_25846733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c447270256da29fa64f12ed0753d80fc54a3f269' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpeweb\\templates\\form-login.tpl',
      1 => 1665860644,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634b042ca24684_25846733 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="mt-5 w-25 mx-auto">
    <form method="POST" action="validate">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input name="email" type="email" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <input name="contraseña" type="password" required class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?> 
            <div class="alert alert-danger mt-3">
                <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            </div>
        <?php }?>
    </form>
</div>







<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
