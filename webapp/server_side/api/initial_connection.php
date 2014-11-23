<?php 
function mysql_init() {
    $database_config = 
        json_decode(file_get_contents('../configs/database.conf'), 1);
    return return_connection($database_config['host'],
    $database_config['database'], $database_config['user'],
    $database_config['pass']);
}
function return_connection(
    $host, $database, $user, $pass) {
    // initial database connection
    $conn = new mysqli($host, $user, $pass, $database);
    if(mysqli_connect_errno()) {
        die("MySQL connection failed: ". mysqli_connect_error());
    }
    return $conn;
}
?>