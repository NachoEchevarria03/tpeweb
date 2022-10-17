<?php
/* Smarty version 4.2.1, created on 2022-10-17 19:14:49
  from 'C:\xampp\htdocs\web2\tpeweb\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d8d8912b815_63715676',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b1f71d293693cbd70b12e4215364bf01de2e355' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\tpeweb\\templates\\header.tpl',
      1 => 1666026843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634d8d8912b815_63715676 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <title>ÑAGUCHI</title>
</head>
<body>
    <header>
        <nav class="navbar bg-light">
            <div class="container-fluid">
                <a class="navbar-brand"href="">ÑAGUCHI</a>
                <a class="navbar-brand" href="categories">Categorias</a>
                <?php if (!(isset($_SESSION['USER_ID']))) {?>
                <a class="navbar-brand" href="login">Login</a>
                <?php } else { ?> 
                <a class="navbar-brand" href="logout">Logout - <?php echo $_SESSION['USER_EMAIL'];?>
</a>
                <?php }?>
            </div>
        </nav>
    </header>

    
    

    






    <!-- inicio main container -->
    <main class="container"><?php }
}
