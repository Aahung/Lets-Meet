<?php
// auth.php
// accept POST method
// data format:
// m (method) = {'fb', 'qq', 'email'}, default email
// u = user name
// p = password
session_start();
require('user.inc');
$method = $_POST['m'];
$username = $_POST['u'];
$password = $_POST['p'];
$user;
if (!isset($method)) {
    $method = 'email';
}
if (!isset($username)) {

}
// email auth
if ($method == 'email' && isset($password)) {
    $user = new User();
    if ($user->authenticate($username, $password)) {
        echo $user->get_alias();
    }
} 
?>