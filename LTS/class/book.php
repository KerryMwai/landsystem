<?php
class Book extends Database{
    private $c_name,$phone,$date;

    function __construct($c_name,$phone,$date)
    {
        $this->c_name=$c_name;
        $this->phone=$phone;
        $this->date=$date;
    }


    public function BookNow()
    {
        $sql="INSERT INTO booking(customer_name,phone_no,date) VALUES(?,?,?)";
        $stmt=$this->Connect()->prepare($sql);
        if($stmt->execute([$this->c_name,$this->phone,$this->date])){
            session_start();
            $_SESSION['book']="Booked Successfully";
        }

    }
}
?>