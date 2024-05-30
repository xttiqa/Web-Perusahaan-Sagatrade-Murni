<?php
require_once ("connection.php");
include ("header.php");
if (isset($_POST["name"])) {
    // echo "Name : " . $_POST["name"] . "<br/>";
    // echo "Email : " . $_POST["email"] . "<br/>";
    // echo "Subject : " . $_POST["subject"] . "<br/>";
    // echo "Telephone : " . $_POST["telephone"] . "<br/>";
    // echo "Message : " . $_POST["message"] . "<br/>";
    // $id = $_GET["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $telephone = $_POST["telephone"];
    $message = $_POST["message"];
    $qry = $mysqli->query("insert into tb_contact(contact_date, contact_name, contact_email, contact_sub, contact_telp, contact_mess) values (now(), '$name', '$email', '$subject', '$telephone', '$message');");
}
?>
<title>Contact Us - Sagatrade</title>

<!--CONTACT-->
<div class="contact">
    <div class="cntr-cn">
        <div class="judul-contact">Contact Us</div>
    </div>

    <div class="about-contact">
        <div class="sub-contact">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d126916.13562511196!2d106.792334!3d-6.246695!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f324565947e9%3A0x420d8f1dfd4d9452!2sKuningan%20City!5e0!3m2!1sid!2sid!4v1711346259308!5m2!1sid!2sid"
                width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" class="maps-1"></iframe>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d126916.13562511196!2d106.792334!3d-6.246695!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f324565947e9%3A0x420d8f1dfd4d9452!2sKuningan%20City!5e0!3m2!1sid!2sid!4v1711346259308!5m2!1sid!2sid"
                width="250" height="150" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" class="maps-2"></iframe>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d126916.13562511196!2d106.792334!3d-6.246695!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f324565947e9%3A0x420d8f1dfd4d9452!2sKuningan%20City!5e0!3m2!1sid!2sid!4v1711346259308!5m2!1sid!2sid"
                width="200" height="100" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" class="maps-3"></iframe>
        </div>
        <div class="sub-contact">
            <div class="v1"></div>
        </div>
        <div class="sub-contact tmpt-cn">
            <i class="fa fa-home icon-c" style="color: #ce1212; font-size: 30px;"></i>
            <span class="alamat">Jl. Gandaria Tengah III, No.25, <br> Kebayoran Baru, Jakarta 12130 - Indonesia.
            </span><br>
            <i class="fa fa-phone icon-c" style="color: #ce1212; font-size: 30px;"></i>
            <span class="no-hp">+6221-72797009
            </span>
        </div>
    </div>

    <table class="table-contact">
        <?php
        if (isset($qry)) {
            ?>
        <tr class="tr-contact">
            <th class="th-contact">
                <div class="contact-notice">Thank you for submit</div>
            </th>
        </tr>
        <?php
        }
        ?>

        <tr class="tr-contact">
            <th class="th-contact">
                <div class="judul-contact">Contact Form</div>
            </th>
        </tr>
        <tr class="tr-contact">
            <td class="td-contact">
                <form action="" method="post" name="form_contact" id="form_contact">
                    <table class="isi-form">
                        <tr class="tr-isi-form">
                            <td class="td-isi-form">
                                <label for="">Your Name</label>
                                <br>
                                <input type="text" name="name" id="" placeholder="Name">
                            </td>
                            <td class="td-isi-form">
                                <label for="">Your Email</label>
                                <br>
                                <input type="text" name="email" id="" placeholder="Email">
                            </td>
                            <td class="td-isi-form"></td>
                        </tr>
                        <tr class="tr-isi-form">
                            <td class="td-isi-form">
                                <label for="">Your Subject</label>
                                <br>
                                <input type="text" name="subject" id="" placeholder="Subject">
                            </td>
                            <td class="td-isi-form">
                                <label for="">Telephone</label>
                                <br>
                                <input type="text" name="telephone" id="" placeholder="Telephone">
                            </td>
                        </tr>
                        <tr class="tr-isi-form">
                            <td class="td-isi-form" colspan="2">
                                <label for="">Message</label>
                                <br>
                                <textarea name="message" id="" cols="128" rows="6" placeholder="Message"></textarea>
                            </td>
                        </tr>
                        <tr class="tr-isi-form">
                            <td class="td-isi-form">
                                <button type="submit" class="send">Send</button>
                            </td>
                            <td class="td-isi-form">
                                <button type="reset" class="reset">Reset</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>
</div>

<?php include ("footer.php"); ?>