<?php 
    use \mysqli;

    class Mysql extends \mysqli {
        protected $data = [
            'host' => '127.0.0.1',
            'user' => 'root',
            'password' => '',
            'dbname' => 'uadeo',
            'port' => 3306
        ];
    }
?>