<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de camisetas</title>
    <link rel="stylesheet" href="<?=base_url?>assets/css/styles.css">
</head>
<body>
    <div id="container">

        <!-- Cabecera -->
        <header id="header">
            <div id="logo">
                <img src="<?=base_url?>assets/img/camiseta.png" alt="Camiseta Logo" />
                <a href="index.php">
                    Tienda de camisetas
                </a>
            </div>
        </header>

        <!-- Menu -->
        <?php $categorias = Utils::showCategorias(); ?>
        <nav id="menu">
            <ul>
                <li>
                    <a href="#">
                        Inicio
                    </a>
                </li>
                <?php while($cat = $categorias->fetch_object()): ?>
                    <li>
                        <a href="#"><?=$cat->nombre?></a>
                    </li>                
                <?php endwhile; ?>             
            </ul>
        </nav>

        <div id="content">