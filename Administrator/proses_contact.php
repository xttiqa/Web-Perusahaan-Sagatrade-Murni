<?php
require_once("../connection.php");
if (isset($_POST["name"])) {
    $id = $_GET["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $telephone = $_POST["telephone"];
    $message = $_POST["message"];
    $qry = $mysqli->query("update tb_contact set contact_name='$name', contact_email='$email', contact_sub='$subject', contact_telp='$telephone', contact_mess='$message' where contact_id='$id';");
    if ($qry) {
        header("location:list_contact.php");
    }
} else {
    echo "access denied";
}
?>