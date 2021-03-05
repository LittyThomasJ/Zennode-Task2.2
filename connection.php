<?php
session_start();
class DbFunctions{
	public function create_connection(){
    $servername = "localhost";
		$username = "root";
		$password = "root";
		$Db = "Task2";
		$con=new mysqli($servername, $username, $password,$Db);
		//echo "string";
		return $con;
    if(!$con){
      die ("Cannot connect to the database");
    }
    else {
      die("success");
    }
	}
  public function close(){
            mysqli_close();
        }
  public function isUserExist($emailid){
    // echo "string";
    $qr = mysqli_query($this->create_connection(),"SELECT * FROM tb_reg WHERE email = '".$emailid."'");
    // $qr=mysqli_query($db,"INSERT INTO tb_reg(email,password) VALUES('$email','$pass')");
    $row = mysqli_num_rows($qr);
    echo $row;
    if($row > 0){
          return true;
    } else {
          return false;
    }
  }
  public function UserRegister($emailid, $password){
    $this->EmailValidate($emailid);
    $password = md5($password);
    $qr = mysqli_query($this->create_connection(),"INSERT INTO tb_reg(email, password) values('".$emailid."','".$password."')") or die(mysql_error());
    return $qr;

  }
  public function EmailValidate($email){
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				 $message="Email Incorrect";
				 $this->redirect($message);
				 //header("Location: test.php?message=$message");
		 }
	}
	public function redirect($message){
		header("Location: Form.php?message=$message");
	}
  public function Login($emailid, $password){
    echo "string";
    $res = mysqli_query($this->create_connection(),"SELECT * FROM tb_reg WHERE email = '".$emailid."' AND password = '".md5($password)."'");
    $user_data = mysqli_fetch_array($res);
    print_r($user_data);
    $no_rows = mysqli_num_rows($res);
    echo $user_data;
    if ($no_rows == 1){
      $_SESSION['login'] = true;
      $_SESSION['uid'] = $user_data['id'];
      $_SESSION['email'] = $user_data['email'];
      return TRUE;
    }
            else
            {
                return FALSE;
            }
        }
}
$obj = new DbFunctions();
//$obj->create_connection();
$em='litty4ever@gmail.com';
$pas='dfghj';
//$obj->isUserExist($em);
//$obj->UserRegister($em,$pas);
$obj->Login($em,$pas);
 ?>
