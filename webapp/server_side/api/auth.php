<?php
// auth.php
// accept POST method
// data format:
// m (method) = {'fb', 'qq', 'email'}, default email
// u = user name
// p = password
require('initial_connection.php');
$conn = mysql_init();
$method = $_POST['m'];
$username = $_POST['u'];
$password = $_POST['p'];
if (!isset($method)) {
    $method = 'email';
}
if (!isset($username)) {

}
// email auth
if ($method == 'email' && isset($password)) {
    $sql = 'SELECT `Alias`, `Password` FROM `User` WHERE `Email` = ?';
    $query = $conn -> prepare($sql);
    $query -> bind_param('s', $username);
    $query->execute();
    $query->bind_result($alias, $enpass);
    while ($query->fetch()) {
        if ($enpass == md5(md5($password)) {
            // log in successfully
            // assign session variables
            echo $alias;
        }
    }
} 
?>