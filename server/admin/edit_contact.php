<?php
include_once '../../config/connect.php';
include_once '../../mvc/models/admin_m.php';
$admin = new Admin_m();

$id = $_POST['id'];
$hotline = $_POST['hotline'];
$content = $_POST['content'];
$email = $_POST['email'];
$address = $_POST['address'];
$admin->editContact($hotline, $email, $address, $content, $id);
echo "<script> alert('Sửa thành công!');</script>";

?>