<?php
require_once 'connection.php';

    class dbFunction extends db{

        // function __construct() {
        //
        //     // connecting to database
        //     $db = new db();
        //
        //
        // }
        // // destructor
        // function __destruct() {
        //
        // }
        public function UserRegister($emailid, $password){
                $password = md5($password);
                $qr = mysqli_query("INSERT INTO tb_reg(email, password) values('".$emailid."','".$password."')") or die(mysql_error());
                return $qr;

        }
        public function isUserExist($emailid){
          // echo "string";
            $qr = mysqli_query(,"SELECT * FROM tb_reg WHERE email = '".$emailid."'");
            // $qr=mysqli_query($db,"INSERT INTO tb_reg(email,password) VALUES('$email','$pass')");
            $row = mysqli_num_rows($qr);
            echo $row;
            if($row > 0){
                return true;
            } else {
                return false;
            }
        }
    }
    $obj=new dbFunction();
    $em='litty4ever@gmail.com';
    $obj->isUserExist($em);
?>
