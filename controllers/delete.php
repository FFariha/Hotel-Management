<?php
require_once '../models/database.php';

if(isset($_GET['q']))
{
    $st=$_GET['q'];
    if($st==2){
        $r=intval($_GET['r']);
        
        $database=new Database();
        $table="bookings";
        $where="where Room_no=$r";
        $database->delete($table, $where);
        $table="room";
        $set="Status='Empty'";
        $where="where Room_no=$r";
        $database->update($table, $set, $where);
        
         header("Location: ../AdminControl.php");
        
    }
     if($st==1){
         
        $uname=$_GET["r"];
        
        $database=new Database();
        $table="user";
        $where="where Username='$uname'";
        $database->delete($table, $where);
        
        header("Location: ../AdminControl.php");
     }
    
 
}
?>

