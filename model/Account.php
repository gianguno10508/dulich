<?PHP
    class Account {
        public $getconect=false;
        function __construct(){
            require_once "ConnectDatabase.php";
            $conectSQL = new connectDatabase();
            $this->getconect = $conectSQL->connect();
        }
        public function login($email, $pass){
            if(!$this->getconect){
                return 0;
            }else{
                $sql = "SELECT * FROM user WHERE email='$email' and password='$pass'";
                $data = mysqli_query($this->getconect, $sql);
                if(mysqli_num_rows($data) == 0) return 0;
                else{
                    return mysqli_fetch_assoc($data)['email'];
                }
            }
            return 0;
        }

        public function Registration($email, $password, $name, $phonenumber, $address)
        {
            if(!$this->getconect){
                return false;
            }else{
                $sql="select * from user where email='$email'";
                $kt=mysqli_query($this->getconect, $sql);
                if(mysqli_num_rows($kt)  > 0) {
                    return false;
                }else{
                    $sql ="INSERT INTO user values(NULL, '$email', '$password', '$name', '$phonenumber', '$address')";
                    mysqli_query($this->getconect, $sql);
                    return true;
             }
            }
            return false;
        }

        
    }
?>

