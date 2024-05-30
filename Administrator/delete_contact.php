<?PHP
require_once("../connection.php");
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $qry2 = $mysqli->query("select * from tb_contact where contact_id = $id;");
    if ($qry2->num_rows >= 1) {
        $qry = $mysqli->query("delete from tb_contact where contact_id = $id;");
        if ($qry) {
            header("location:list_contact.php");
        }
    } else {
        header("location:list_contact.php?error=contact_not_found");
    }
} else {
    echo "access denied";
}
?>