<?php
    $lol = $_GET['action'];
?>
<!DOCTYPE HTML>

<html>
    <?php require_once 'web/layout/head.php';?>
    <body>
        <?php require_once 'web/layout/header.php';?>
        <article>
            <?php
                switch($lol)
                {
                    case "inicio":
                        require_once 'web/layout/inicio.php';
                        break;
                    case "entrada":
                        require_once 'web/layout/entrada.php';                        
                        break;
                    case "salida":
                        require_once 'web/layout/salida.php';                        
                        break;
                    default:
                        
                        break;
                }
            ?>
        </article>
    </body>
</html>
