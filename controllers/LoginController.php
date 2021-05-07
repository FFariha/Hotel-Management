<?php

$fname = "";
$err_fname = "";
$lname = "";
$err_lname = "";
$email = "";
$err_email = "";
$password = "";
$err_password = "";
$cpassword = "";
$err_cpassword = "";
$username = "";
$err_username = "";
$hasError = false;

if (isset($_POST["sign_up"])) {
    require_once 'models/database.php';

    if (empty($_POST["fname"])) {
        $err_fname = "First Name required";
        $hasError = true;
    } else {
        $fname = $_POST["fname"];
    }
    if (empty($_POST["lname"])) {
        $err_lname = "Last Name required";
        $hasError = true;
    } else {
        $lname = $_POST["lname"];
    }
    if (empty($_POST["username"])) {
        $err_username = "Username required";

        $hasError = true;
    } else {
        $username = $_POST["username"];
        $database = new Database();
        $select = "*";
        $table = "user";
        $where = "where Username='$username'";
        $extention = "";
        $result = $database->select($select, $table, $where, $extention);
        $row = mysqli_fetch_assoc($result);

        if (!empty($row)) {
            $hasError = true;
            $err_username = "Username has already used";
        } else {
            $username = $_POST["username"];
        }
    }
    if (empty($_POST["email"])) {
        $err_email = "Email required";
        $hasError = true;
    } else {
        $email = $_POST["email"];
    }
    if (empty($_POST["password"])) {
        $err_password = "Password required";
        $hasError = true;
    } else {
        $password = $_POST["password"];
    }
    if (empty($_POST["cpassword"])) {
        $err_cpassword = "Password required";
        $hasError = true;
    } else {
        $cpassword = $_POST["cpassword"];
    }
    if (($password != $cpassword) && !$hasError) {
        $hasError = true;
        $err_cpassword = "Password doesnot match";
    }
    if (!$hasError) {
        insertUser($fname, $lname, $username, $email, $password);
        header("Location: login.php");
    }
}
if (isset($_POST["login"])) {
    require_once 'models/database.php';


   
    $username = $_POST["username"];
    $password = $_POST["password"];
    $password = md5($password);
    $select = "*";
    $table = "user";
    $where = " where Password='$password' AND Username='$username'";
    $database = new Database();
    $result = $database->select($select, $table, $where);
    $row = mysqli_fetch_assoc($result);
    if (!empty($row)) {
        
        session_start();
        $_SESSION["username"] = $username;
        $_SESSION["status"] = $row["Status"];
        setcookie("msg", "Logged in", time() + 5, "/");
        header("Location: index.php");
    } else {
        $select = "*";
        $table = "user";
        $where = " where Username='$username'";
        $extention = "";
        $database = new Database();
        $result = $database->select($select, $table, $where);
        $row = mysqli_fetch_assoc($result);
        if (empty($row)) {
            
            $err_username = "Username doesnot match";
        } else {
            $err_password = "Password doesnot match";
        }
        
        
    }
}

function insertUser($fname, $lname, $uname, $email, $password) {
    $password = md5($password);
    $database = new Database();
    $table = "user";
    $column = "First_name,Last_name,Username,Email,Password,Status";
    $values = "'$fname','$lname','$uname','$email','$password','user'";
    $database->insert($table, $column, $values);
}

//	function authenticate($username,$password){
//		$password = md5($password);
//		$query = "SELECT username from users WHERE username='$username' and password='$password'";
//		$user=getArray($query);
//		return $user;
//		
//		
//		
//		
//	}


if (isset($_GET['st'])) {
    if ($_GET['st'] == 1) {
        session_start();
        if (isset($_SESSION["username"])) {
            session_destroy();
            
            header("Location: ../index.php");
        }
    }
}
?>