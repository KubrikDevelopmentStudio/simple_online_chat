<?
    require_once("classes/db_config.php");
    //$conenct = new db_config();
    //$conenct->con2serv("mysql64.hostland.ru", "localhost", "fb4859ae");
    $connect = @new mysqli("localhost", "host1506758", "fb4859ae", "host1506758");
    if (mysqli_connect_errno()) {
        echo "Подключение невозможно: ".mysqli_connect_error();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Онлайн чат!</title>
    <meta http-equiv = "content-type" content = "text/html; charset=utf-8">
    <link rel        = "stylesheet"      type = "text/css" href="style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>
        $(document).ready(function()
        {

        });
    </script>
</head>
<body>
    <div id="mainForm" name="">
        <div id="loginForm" name="">
            <table>
                <tr id="tableLog" name="">
                    <td id="imgLog" name=""><img src="images/1.jpg" width="37" height="37" align="center" alt=""/></td>
                    <td id="nickLog" name="">Руслан</td>
                    <td id="btn_1" name=""><input type="submit" id="btnOut" name="" value="Выйти"></td>
                </tr>
            </table>
        </div>

        <div id="messageBox" name="">
            <div id="messageUsers" name="">
                <table>
                    <tr id="tableMessage" name="">
                        <td id="imgUsers" name=""><img src="images/2.jpg" width="25" height="25" align="center" alt=""></td>
                        <td id="Users" name="">Руслан</td>
                        <td id="message" name=""><div width="400">Приветик!</div></td>
                    </tr>
                </table>
                <span id="time" name="">21.00</span>
            </div>
        </div>
    </div>
</body>
</html>