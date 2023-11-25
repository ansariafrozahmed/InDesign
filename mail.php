<?php
// Only process POST reqeusts.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields and remove whitespace.
    $name = strip_tags(trim($_POST["name"]));
    $cname = strip_tags(trim($_POST["cname"]));
    $pdfurl = strip_tags(trim($_POST["pdfurl"]));
    $name = str_replace(array("\r", "\n"), array(" ", " "), $name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = filter_var(trim($_POST["phone"]), FILTER_SANITIZE_NUMBER_INT);
  // Check that data was sent to the mailer.
    if (empty($name) or !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Set a 400 (bad request) response code and exit.
        http_response_code(400);
        echo "Please complete the form and try again.";
        exit;
    }

    // Set the recipient email address.
    // Note: Update this to your desired email address.
    $recipient = "indesign023@gmail.com";

    // Set the email subject.
    $subjectname = "Downloaded $cname";

    // Build the email headers.
    $email_headers = "From: $name <$email>\r\n";
    $email_headers .= "MIME-Version: 1.0\r\n";
    $email_headers .= "Content-Type: multipart/mixed; boundary=\"mixedboundary\"\r\n";

    // Build the email content.
    $email_content = "--mixedboundary\r\n";
    $email_content .= "Content-Type: text/plain; charset=\"utf-8\"\r\n";
    $email_content .= "Name: $name\r\n";
    $email_content .= "Email: $email\r\n";
    $email_content .= "Phone: $phone\r\n\r\n";
    $email_content .= "--mixedboundary\r\n";
    $email_content .= "Content-Type: application/pdf; name=\"$cname.pdf\"\r\n";
    $email_content .= "Content-Disposition: attachment; filename=\"$cname.pdf\"\r\n";
    $email_content .= "Content-Transfer-Encoding: base64\r\n\r\n";

    // Fetch PDF content from the URL and encode it as base64
    $pdf_content = file_get_contents($pdfurl);
    $pdf_base64 = base64_encode($pdf_content);
    $email_content .= chunk_split($pdf_base64) . "\r\n";
    $email_content .= "--mixedboundary--";

    // Send the email with the PDF attachment.
    if (mail($recipient, $subjectname, $email_content, $email_headers)) {
        echo "1"; // Success
    } else {
        echo "0"; // Error
    }
}
?>