<html>
<body>
<?php
  if(isset($_POST['email'])) {
    $email_to = "b17072@students.iitmandi.ac.in,scri@students.iitmandi.ac.in";
    $email_subject = "SCRI_Website Response";
    $first_name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['subject']; // not required
    $lastname = $_POST['message']; // required
    // $address = $_POST['comments']; // required

    function clean_string($string) {
    $bad = array("content-type","bcc:","to:","cc:","href");
    return str_replace($bad,"",$string);
    }

    $email_message = "Form details below.\n\n";
    $email_message .= "Name: ".clean_string($first_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Subject: ".clean_string($telephone)."\n";
    $email_message .= "Message: ".clean_string($lastname)."\n";
    // $email_message .= "Comments: ".clean_string($address)."\n";

// create email headers
$headers = 'From: '.$email_from."\r\n".'Reply-To: '.$email_from."\r\n".'X-Mailer: PHP/'.phpversion();
mail($email_to, $email_subject, $email_message, $headers);
echo "Thanks, Your details have reached us successfully!<br>";
}
?>

</body>
</html>
