<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de camisetas</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div id="container">

        <!-- Cabecera -->
        <header id="header">
            <div id="logo">
                <img src="assets/img/camiseta.png" alt="Camiseta Logo" />
                <a href="index.php">
                    Tienda de camisetas
                </a>
            </div>
        </header>

        <!-- Menu -->
        <nav id="menu">
            <ul>
                <li>
                    <a href="#">
                        Inicio
                    </a>
                </li>
                <li>
                    <a href="#">
                        Categoria 1
                    </a>
                </li>
                <li>
                    <a href="#">
                        Categoria 2
                    </a>
                </li>
                <li>
                    <a href="#">
                        Categoria 3
                    </a>
                </li>
                <li>
                    <a href="#">
                        Categoria 4
                    </a>
                </li>
                <li>
                    <a href="#">
                        Categoria 5
                    </a>
                </li>
            </ul>
        </nav>

        <div id="content">

        <!-- Barra Lateral -->
            <aside id="lateral">
                <div id="login" class="block_aside">      
                    <h3>Entrar a la web</h3>          
                    <form action="#" method="post">
                        
                        <label for="email">Email</label>
                        <input type="email" name="email">
                        
                        <label for="password">Password</label>
                        <input type="password" name="password">

                        <input type="submit" value="Enviar">
                    </form>
                    
                    <a href="#">Mis pedidos</a>
                    <a href="#">Gestionar pedidos</a>
                    <a href="#">Gestionar categorias</a>   
                </div>
            </aside>

        <!-- Contenido Central -->
            <div id="central">
                <h1>Productos destacados</h1>
                <div class="product">
                    <img src="assets/img/camiseta.png">
                    <h2>Camiseta Azul Ancha</h2>
                    <p>30 Euros</p>
                    <a href="#" class="button">Comprar</a>
                </div>

                <div class="product">
                    <img src="assets/img/camiseta.png">
                    <h2>Camiseta Azul Ancha</h2>
                    <p>30 Euros</p>
                    <a href="#" class="button">Comprar</a>
                </div>

                <div class="product">
                    <img src="assets/img/camiseta.png">
                    <h2>Camiseta Azul Ancha</h2>
                    <p>30 Euros</p>
                    <a href="#" class="button">Comprar</a>
                </div>
            </div>

        </div>

        <!-- Footer -->
        <footer id="footer">
            <p>Desarrollado por BKT Pixels</p>
        </footer>
    </div>

</body>
</html>