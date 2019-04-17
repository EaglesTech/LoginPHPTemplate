<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <!-- NavBar -->
            <div class="pull-right logout">
                        <?php if($_SESSION){
                            ?>Bem Vindo: <?php print_r($_SESSION['administrador']->administrador_nome);
                            if(isset($_GET['logout']) && $_GET['logout']==true){
                                session_destroy();
                                header("Location: login.php");
                            }?>
                            <a href="?logout=true" class="btn btn-danger">Sair</a><?php
                        } else {
                            ?>Você está deslogado! <a href="login.php" class="btn btn-warning">Entrar</a><?php
                        }?>
                        
                    </div>
        </div>
        <!-- /NavBar -->
            </div>
        </nav>