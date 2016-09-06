<?php

/**
 * Created by PhpStorm.
 * User: Руслан
 * Date: 04.09.2016
 * Time: 2:19
 */
class db_config
{
    protected $db_link;

    public function connect()
    {
       $db_link = @new mysqli("localhost", "host1506758", "fb4859ae", "host1506758");
       if($db_link)
           echo "<h1 style=\"color:green\">Подключено!</h1>";
        else
            echo "<h1 style=\"color:red\">Ошибка!</h1>";

    }
}