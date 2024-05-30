<?php
session_start();
if(!isset($_SESSION["fullname"])) header("location:./"); 
require_once ("../connection.php");
include ("header.php");
$qry = $mysqli->query("select * from tb_contact order by contact_id asc;");
?>
<title>List Contact - Sagatrade</title>

<!--LIST CONTACT-->
<div class="list-contact">
    <?php if (isset($_GET["error"])) { ?>
    <div class="judul-list-contact">
        <?= $_GET["error"] ?>
    </div>
    <?php
    }
    ?>
    <div class="judul-list-contact">Contact List</div>
    <div style="overflow-x:auto; margin-bottom: 35px">
        <table class=" table-list">
            <thead>
                <tr class="tr-list">
                    <th class="th-list">No</th>
                    <th class="th-list">Datetime</th>
                    <th class="th-list">Nama</th>
                    <th class="th-list">Email</th>
                    <th class="th-list">Subject</th>
                    <th class="th-list">Telephone</th>
                    <th class="th-list" style="width:300px;">Message</th>
                    <th class="th-list">Edit</th>
                    <th class="th-list">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;

                while ($row = $qry->fetch_assoc()) {
                    $no++;
                    echo "<tr class='tr-list'>
                        <td class='td-list' id='no'>" . $no . "</td>
                        <td class='td-list'>" . $row["contact_date"] . "</td>
                        <td class='td-list'>" . $row["contact_name"] . "</td>
                        <td class='td-list'>" . $row["contact_email"] . "</td>
                        <td class='td-list'>" . $row["contact_sub"] . "</td>
                        <td class='td-list'>" . $row["contact_telp"] . "</td>
                        <td class='td-list'>" . $row["contact_mess"] . "</td>
                        <td class='td-list' id='edit'>
                            <a href='edit_contact.php?id=" . $row["contact_id"] . "'>Edit</a>
                        </td>
                         <td class='td-list' id='delete'>
                            <a href='delete_contact.php?id=" . $row["contact_id"] . "'>Delete</a>
                        </td> 

                        </tr>";
                }

                /* Jika menggunakan fetch_object() :
                echo '<tr class="tr-list">
                    <td class="td-list">' . $no . '</td>
                    <td class="td-list">' . $row->contact_date . '</td>
                    <td class="td-list">' . $row->contact_name . '</td>
                    <td class="td-list">' . $row->contact_email . '</td>
                    <td class="td-list">' . $row->contact_sub . '</td>
                    <td class="td-list">' . $row->contact_telp . '</td>
                    <td class="td-list">' . $row->contact_mess . '</td>
                </tr>';

                */
                ?>
            </tbody>
        </table>
    </div>

    <?php include ("footer.php"); ?>