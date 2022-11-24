<?php
class Admin extends Database{
    private $email, $pass;

    function __construct($email, $pass)
    {
        $this->email=$email;
        $this->pass=$pass;
    }

    public function SignIn()
    {
        $sql="SELECT * FROM admin WHERE admin_email=?";
        $stmt=$this->Connect()->prepare($sql);
        $stmt->execute([$this->email]);
        $row=$stmt->fetch();
        if($row){
            $pass_verified=password_verify($this->pass, $row["admin_pass"]);
            if($pass_verified){
                session_start();
                $_SESSION['permission']=$row['admin_email'];
                header("location:../pages/admin.php");
            }
        }
    }


    public function CreateAdmin()
    {
        $sql1="SELECT * FROM admin WHERE admin_email=?";
        $stmt1=$this->Connect()->prepare($sql1);
        $stmt1->execute([$this->email]);
        $row=$stmt1->fetch();
        if($row){
            return;
        }else{
            $password=password_hash($this->pass, PASSWORD_DEFAULT);
            $sql="INSERT INTO admin(admin_email, admin_pass) VALUES(?,?)";
            $stmt=$this->Connect()->prepare($sql);
            $stmt->execute([$this->email,$password]);
            header("location:../pages/login.php");
        }
    }
}