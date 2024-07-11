<?php

require_once ("includes/db_connect.php");
include_once ("templates/heading.php");
include_once ("templates/nav.php");

if(isset($_POST["send_message"])){
    $fn = $_POST["fullname"];
    $mail = mysqli_real_escape_string($conn, $_POST["email_address"]);//sanitize
    $subject = $_POST["subject_line"];
    $message = $_POST["client_message"];

    $insert_message = "INSERT INTO messages (sender_name, sender_email, subject_line, text_message) VALUES ('$fn', '$mail', '$subject', '$message')";

    if ($conn->query($insert_message) === TRUE) {
        header("Location: view_messages.php");
        exit();
    } else {
        echo "Error: " . $insert_message . "<br>" . $conn->error;
    }
}
?>

<div class="banner">
    <h1>Science Meets Soul</h1> 
</div>

<div class="row">

    <div class="content">
    <h1>Forms</h1>
    <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="contacts_form">

    <label for="fn">Fullname:</label><br>
    <input type="text" id="fn" placeholder="Fullname" name="fullname" required><br><br>

        <label for="em">Email Address:</label><br>
        <input type="email" id="em" placeholder="Email Address" name="email_address" required><br><br>
        

<br>

<!-- <br><br>
<select name="" id="">
    <option value="">--Select Gender--</option>
    <option value="">Female</option>
    <option value="">Male</option>
    <option value="">Rather not say</option>
</select> -->



<label for="sb">Subject:</label><br>
        <select name="subject_line" id="sb"  required>
            <option value="">---Select Subject-</option>
            <option value="Email Support">Email Support</option>
            <option value="intake">intake</option>
            <option value="AMS Support">AMS Support</option>

            </select><br><br>

            <label for="sb">Message:</label><br>  

<textarea name="client_message" id="" cols="30" rows="5" required></textarea><br><br>

        <input type="submit" name="send_message" value="Send Message">
    </form>

</div>

<?php include_once("templates/side_bar.php"); ?>

<?php include_once("templates/footer.php"); ?>