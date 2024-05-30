<?php
require_once ("../connection.php");
include ("header.php");
$id = $_GET["id"];
$qry = $mysqli->query("select * from tb_contact where contact_id='$id'");
if ($qry->num_rows >= 1) {
    $row = $qry->fetch_assoc();
    $pesan = "";
    echo "<style> .notice-tdk-ditemukan {display: none} </style>";
} else {
    $pesan = "Data tidak ditemukan";
}
?>
<title>Edit Contact - Sagatrade</title>

<div class="edit-contact">
    <div class="notice-tdk-ditemukan">
        <?= $pesan ?>
    </div>
    <div class="judul-edit">Edit Contact</div>
    <form class="form-edit" method="post" action="proses_contact.php?id=<?php echo $_GET["id"]; ?>">
        <table class="edit-form">
            <tr class=" tr-edit">
                <td class="td-edit">
                    <label for="">Your Name</label>
                    <br>
                    <input type="text" name="name" value="<?= isset($row) ? $row["contact_name"] : "" ?>"
                        placeholder="Name">
                </td>
                <td class="td-edit">
                    <label for="">Your Email</label>
                    <br>
                    <input type="text" name="email" value="<?= isset($row) ? $row["contact_email"] : "" ?>"
                        placeholder="Email">
                </td>
                <td class="td-isi-form"></td>
            </tr>
            <tr class="tr-edit">
                <td class="td-edit">
                    <label for="">Your Subject</label>
                    <br>
                    <input type="text" name="subject" value="<?= isset($row) ? $row["contact_sub"] : "" ?>"
                        placeholder="Subject">
                </td>
                <td class="td-edit">
                    <label for="">Telephone</label>
                    <br>
                    <input type="text" name="telephone" value="<?= isset($row) ? $row["contact_telp"] : "" ?>"
                        placeholder="Telephone">
                </td>
            </tr>
            <tr class="tr-edit">
                <td class="td-edit" colspan="2">
                    <label for="">Message</label>
                    <br>
                    <textarea name="message" cols=" 128" rows="6"
                        placeholder="Message"><?= isset($row) ? $row["contact_mess"] : "" ?></textarea>
                </td>
            </tr>
            <tr class="tr-edit">
                <td class="td-edit">
                    <button type="submit" class="send" value="send">Send</button>
                </td>
            </tr>
        </table>
    </form>
</div>

<?php include ("footer.php"); ?>