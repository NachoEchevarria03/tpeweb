<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>ÑAGUCHI</title>
</head>
<body>
    <header>
        <nav class="navbar bg-light">
            <div class="container-fluid">
                <a class="navbar-brand"href="">ÑAGUCHI</a>
                <a class="navbar-brand" href="categories">Categorias</a>
                {if !isset($smarty.session.USER_ID)}
                <a class="navbar-brand" href="login">Login</a>
                {else} 
                <a class="navbar-brand" href="logout">Logout - {$smarty.session.USER_EMAIL}</a>
                {/if}
            </div>
        </nav>
    </header>

    
    

    






    <!-- inicio main container -->
    <main class="container">