 <!-- Barra Lateral -->
 <aside id="lateral">
                <div id="login" class="block_aside">      
                    <!-- Si no esta logeado, muestro el login -->
                    <?php if(!isset($_SESSION['identity'])): ?>
                    
                        <h3>Entrar a la web</h3>          
                    <!-- mando la accion a la base_url/nombrecontrolador/nombreaccion -->
                    <form action="<?=base_url?>usuario/login" method="post">
                        
                        <label for="email">Email</label>
                        <input type="email" name="email">
                        
                        <label for="password">Password</label>
                        <input type="password" name="password">

                        <input type="submit" value="Enviar">
                   </form>                   
                     

                    <!-- Si esta logeado, muestro la bienvenida y opciones-->
                    <?php else: ?>
                        <h3>Bienvenido <?=$_SESSION['identity']->nombre?></h3>              
                    <?php endif; ?>
                    
                    <ul>                  
                        <!-- Mostrar solo si el user es admin -->
                        <?php if(isset($_SESSION['admin'])): ?>                            
                            <li><a href="<?=base_url?>categoria/index">Gestionar categorias</a></li>
                            <li><a href="<?=base_url?>producto/gestion">Gestionar productos</a></li>
                            <li><a href="#">Gestionar pedidos</a></li>
                        <?php endif; ?>

                        <?php if(isset($_SESSION['identity'])): ?>
                            <li><a href="#">Mis pedidos</a></li>
                            <li><a href="<?=base_url ?>usuario/logout">Cerrar sesión</a></li>
                        <?php else: ?>
                            <!-- Registrarse -->
                            <li><a href="<?=base_url?>usuario/registro">Registrate aqui</a></li> 
                        <?php endif; ?>
                    </ul>                
                </div>
            </aside>
                  <!-- Contenido Central -->
                  <div id="central">