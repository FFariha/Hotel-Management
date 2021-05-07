<?php

require_once 'models/database.php';
$uname = "";
$err_uname = "";
$email = "";
$err_email = "";
$checkin = "";
$err_checkin = "";
$checkout = "";
$err_checkout = "";
$pnum = "";
$err_pnum = "";
$padd = "";
$err_add = "";
$id = "";
$err_id = "";
$pay = "";
$err_pay = "";
$room = "";
$err_room = "";
$hasError = false;

if (isset($_POST["book"])) {
    if (empty($_POST["uname"])) {
        $err_uname = "Username is required";
        $hasError = true;
    } else {
        $uname = $_POST["uname"];
    }
    if (empty($_POST["email"])) {
        $err_email = "Email is required";
        $hasError = true;
    } else {
        $email = $_POST["email"];
    }
    if (empty($_POST["pnumber"])) {
        $err_pnum = "Phone number is required";

        $hasError = true;
    } else {
        $pnum = $_POST["pnumber"];
    }
    if (empty($_POST["add"])) {
        $err_add = "Address is required";
        $hasError = true;
    } else {
        $padd = $_POST["add"];
    }
    if (empty($_POST["room"])) {
        $err_room = "Room type is required";
        $hasError = true;
    } else {
        $room = $_POST["room"];
        $room_no=$_POST["room_no"];
    }
    if (empty($_POST["pay"])) {
        $err_pay = "Payment method is required";
        $hasError = true;
    } else {
        $pay = $_POST["pay"];
    }
    if (empty($_POST["id_type"])) {
        $err_id = "Must provide an id";
        $hasError = true;
    } else {
        $id = $_POST["id_no"];
    }
    if (empty($_POST["indate"])) {

        $err_checkin = "Check in date is required";
        $hasError = true;
    } else {

        $checkin = $_POST["indate"];
    }
    if (empty($_POST["outdate"])) {
        $err_checkout = "Check out date is required";
        $hasError = true;
    } else {
        $checkout = $_POST["outdate"];
    }

    if (!$hasError) {

        insertbooking($uname, $pnum, $padd, $id, $pay, $room, $checkin, $checkout,$room_no);
        header("Location: index.php?st=1");
    }
}

function insertbooking($uname, $pnum, $padd, $id, $pay, $room, $checkin, $checkout,$room_no) {

    $database = new Database();
    
    $table = "bookings";
    $column = "Username,Phone_no,Address,ID_NO,Payment,Check_in,Check_out,Room_no";
    $values = "'$uname', '$pnum', '$padd', '$id','$pay','$checkin','$checkout',$room_no";
    $database->insert($table, $column, $values);
    $table="room";
    $set="Status='Booked'";
    $where="where Room_no='$room_no'";
    $database->update($table, $set, $where);
}
?>

