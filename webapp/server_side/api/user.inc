require('initial_connection.php');
class User {
    protected $user_id;
    protected $alias;
    protected $login = false;

    public function __construct() {
        if (isset($_SESSION['userid']) && isset($_SESSION['alias'])) {
            $user_id = $_SESSION['userid'];
            $alias = $_SESSION['alias'];
            $login = true;
        } 
    }

    public function is_login() {
        return $login;
    }

    public function get_alias() {
        return $alias;
    }

    public function get_user_id() {
        return $user_id;
    }

    public function authenticate($email, $password) {
        $conn = mysql_init();
        $sql = 'SELECT `User_Id`, `Alias`, `Password` FROM `User` WHERE `Email` = ?';
        $query = $conn -> prepare($sql);
        $query -> bind_param('s', $email);
        $query->execute();
        $query->bind_result($user_id, $alias, $enpass);
        while ($query->fetch()) {
            if ($enpass == md5(md5($password)) {
                $_SESSION['userid'] = $user_id;
                $_SESSION['alias'] = $alias;
                $login = true;
                return true;
            }
        }
    }

    public function get_all_meets() {
        // return array of all meet id under this user
        
    }
}