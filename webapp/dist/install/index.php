<?php 
// install database
require('initial_database.php');
// read database configs
$database_config = json_decode(file_get_contents('../configs/database.conf'));
initial_database($database_config['host'],
    $database_config['database'], $database_config['user'],
    $database_config['pass']);
?>