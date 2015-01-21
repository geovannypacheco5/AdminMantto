<?php
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_SPECIAL_CHARS);
?>
<!DOCTYPE HTML>

<html>
    <?php require_once 'web/layout/head.php';?>
    <body>
        <?php require_once 'web/layout/header.php';?>
        <article>
            <?php
                switch($action)
                {
                    case "inicio":
                        require_once 'web/layout/inicio.php';
                        echo "<script>"
                        . "document.getElementsByClassName('menu')[0]"
                        . ".style.backgroundColor='#CCC';"
                        . "document.getElementsByClassName('menu')[1]"
                        . ".style.backgroundColor='#CCC';</script>";
                        break;
                    case "entrada":
                        require_once 'web/layout/entrada.php';
                        echo "<script>"
                        . "document.getElementsByClassName('menu')[0]"
                        . ".style.backgroundColor='#CCC';"
                        . "document.getElementsByClassName('menu')[2]"
                        . ".style.backgroundColor='#CCC';</script>";
                        break;
                    case "salida":
                        require_once 'web/layout/salida.php';
                        echo "<script>"
                        . "document.getElementsByClassName('menu')[1]"
                        . ".style.backgroundColor='#CCC';"
                        . "document.getElementsByClassName('menu')[2]"
                        . ".style.backgroundColor='#CCC';</script>";
                        break;
                    default:
                        require_once 'web/layout/inicio.php';
                        echo "<script>"
                        . "document.getElementsByClassName('menu')[0]"
                        . ".style.backgroundColor='#CCC';"
                        . "document.getElementsByClassName('menu')[1]"
                        . ".style.backgroundColor='#CCC';</script>";
                        break;
                }
            ?>
        </article>
    </body>
</html>
