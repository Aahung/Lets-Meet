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
        header('Content-Type: application/json');
        $obj = array();
        $obj['success'] = 1;
        $obj['alias'] = $user->get_alias();
        $obj['id'] = $user->get_user_id();
        echo json_encode($obj);
    } else {
        header('Content-Type: application/json');
        $obj = array();
        $obj['success'] = 0;
        echo json_encode($obj);
    }
} 
?>