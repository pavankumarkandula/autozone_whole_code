<?php

return array(
   'db' => array(
        'driver'         => 'Pdo',
        'dsn'            => 'mysql:dbname=autozone;host=localhost',
        'username' => 'root',
        'password' => '',
        'driver_options' => array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\', time_zone = "'. date('P') .'"'
        ),
    ),
);