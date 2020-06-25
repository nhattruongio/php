<?php
    require_once("config/db.class.php");

    class User{
        
        public $user_id;
        public $user_name;
        public $email;
        public $password;

        public function __construct($u_name,$u_email,$u_password){
            $this->user_name=$name;
            $this->email=$u_email;
            $this->password=$u_password;
        }

        //Lưu 
        public function save(){
            $db=new Db();
            $sql="INSERT INTO users (UserName, Email, Password) VALUES('".mysqli_real_escape_string($db->connect(),$this->user_name)."','".mysqli_real_escape_string($db->connect(),$this->email)."','".md5(mysqli_real_escape_string($db->connect(),$this->password))."') ";
            $result=$db->query_execute($sql);
            return $result;
        }
        //kiểm tra đăng nhập
        public static function check_login($user_name,$password){
            $password = md5($password);
            $db = new Db();
            $sql = "SELECT * FROM users WHERE UserName='$user_name' AND Password ='$password'";
            $result = $db->query_execute($sql);
            return $result;
        }
    }
?>