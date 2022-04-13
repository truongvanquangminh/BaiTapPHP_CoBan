<?php
class DB_con
{
    private $DB_SERVER = 'localhost';
    private $DB_USER = 'root';
    private $DB_PASS = '';
    private $DB_NAME = 'quiz';
    function __construct()
    {
        $con = mysqli_connect($this->DB_SERVER, $this->DB_USER, $this->DB_PASS, $this->DB_NAME);
        $this->dbh = $con;
        // Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
    }

    // for username availblty
    public function usernameavailblty($uname)
    {
        $result = mysqli_query($this->dbh, "SELECT username FROM account WHERE username='$uname'");
        return $result;
    }
    // Function for registration
    public function registration($uname, $uemail, $pasword)
    {
        $ret = mysqli_query($this->dbh, "insert into account(Username,UserEmail,Password) values('$uname','$uemail','$pasword')");
        return $ret;
    }
    // Function for signin
    public function signin($uname, $pasword)
    {
        $sql = "SELECT username, password, role FROM account";
        $res = mysqli_query($this->dbh, $sql);
        if ($res->num_rows > 0) {
            // output data of each row
            while ($row = $res->fetch_assoc()) {
                if ($uname == $row["username"] && $pasword == $row["password"] && $row["role"] == 0) {
                    echo "Tai khoan co ton tai";
                    $_SESSION["User"] = array("uname" => $uname, "password" => $pasword, "role" => 0);
                    header("Location:welcome.php");
                } else if ($uname == $row["username"] && $pasword == $row["password"] && $row["role"] == 1) {
                    $_SESSION["Admin"] = array("uname" => $uname, "password" => $pasword, "role" => 1);
                    header("Location:create-quiz.php");
                }
            }
        }
    }
    // Get Quiz
    public function getQuiz() {
        
    }
}