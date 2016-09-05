<?php

/**
 * Created by PhpStorm.
 * User: Руслан
 * Date: 04.09.2016
 * Time: 2:19
 */
class db_config
{
    protected $connection;

    public function con2serv($host, $login, $password)
    {
        $connection = mysql_connect($host, $login, $password);
        if($connection)
            echo "<h1>Подключено!</h1>";
        else
            echo "<h1>Ошибка подключения!</h1>";
    }
}