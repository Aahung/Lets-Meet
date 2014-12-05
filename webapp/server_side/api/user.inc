<?php
require('initial_connection.php');
class User {
    private $user_id;
    private $alias;
    private $login = false;

    public function __construct() {
        if (isset($_SESSION['userid']) && isset($_SESSION['alias'])) {
            $this->user_id = $_SESSION['userid'];
            $this->alias = $_SESSION['alias'];
            $this->login = true;
        } 
    }

    public function is_login() {
        return $this->login;
    }

    public function get_alias() {
        return $this->alias;
    }

    public function get_user_id() {
        return $this->user_id;
    }

    public function authenticate($email, $password) {
        $conn = mysql_init();
        $sql = 'SELECT `User_Id`, `Alias`, `Password` FROM `User` WHERE `Email` = ?';
        $query = $conn -> prepare($sql);
        $query -> bind_param('s', $email);
        $query->execute();
        $query->bind_result($this->user_id, $this->alias, $enpass);
        while ($query->fetch()) {
            if ($enpass == md5(md5($password))) {
                $_SESSION['userid'] = $this->user_id;
                $_SESSION['alias'] = $this->alias;
                $this->login = true;
                return true;
            } else {
            }
        }
    }

    public function get_all_meets() {
        // return array of all meet id under this user
        
    }
}
?>