<?php
include('password.php');
class User extends Password{

    private $_db;

    function __construct($db){
        parent::__construct();

        $this->_db = $db;
    }

    private function get_user_hash($username){

        try {
            $stmt = $this->_db->prepare('SELECT password, username, memberID FROM members WHERE username = :username AND active="No" ');
            $stmt->execute(array('username' => $username));

            return $stmt->fetch();

        } catch(PDOException $e) {
            echo '<p class="bg-danger">'.$e->getMessage().'</p>';
        }
    }

    public function login($username,$password){

        $row = $this->get_user_hash($username);

        if($this->password_verify($password,$row['password']) == 1){

            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $row['username'];
            $_SESSION['memberID'] = $row['memberID'];
            return true;
        }
    }

    public function logout(){
        session_destroy();
    }

    public function is_logged_in(){
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
            return true;
        }
    }

}


?>
<?php
/**
 * Created by PhpStorm.
 * User: Zain Baloch
 * Date: 10/10/2017
 * Time: 4:25 PM
 */