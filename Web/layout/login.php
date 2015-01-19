<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="web/css/style.css"/>
        
    </head>
    <body>
        <div id="login">
            <div id="loginTitulo">AdminMantto</div>
            <form action="Core/Session/session.php" method="post" id="form_login" name="login">
                <table>
                    <tr>
                        <td><label>usuario: </label></td>
                        <td><input type="text" name="user" placeholder="introduzca su usuario"></td>
                    </tr>
                    <tr>
                        <td><label>password:  </label></td>
                        <td><input  type="password" name="password" placeholder="**********"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input id="login_enviar" type="submit" value="enviar"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
