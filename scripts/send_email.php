<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $studentName = $_POST['student-name'];
    $studentAge = $_POST['student-age'];
    $studentEmail = $_POST['student-email'];
    $parentName = $_POST['parent-name'];
    $parentEmail = $_POST['parent-email'];
    $comments = $_POST['comments'];

    $to = "drey.owen@gmail.com";
    $subject = "New Contact Form Submission";
    $headers = "From: " . $studentEmail . "\r\n";
    $headers .= "Reply-To: " . $studentEmail . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $message = "<html><body>";
    $message .= "<h2>New Contact Form Submission</h2>";
    $message .= "<p><strong>Student Name:</strong> $studentName</p>";
    $message .= "<p><strong>Student Age:</strong> $studentAge</p>";
    $message .= "<p><strong>Student Email:</strong> $studentEmail</p>";
    $message .= "<p><strong>Parent Name:</strong> $parentName</p>";
    $message .= "<p><strong>Parent Email:</strong> $parentEmail</p>";
    $message .= "<p><strong>Comments:</strong> $comments</p>";
    $message .= "</body></html>";

    if (mail($to, $subject, $message, $headers)) {
        echo "<h1>Thank you! Your message has been sent.</h1>";
    } else {
        echo "<h1>Sorry, there was an error sending your message. Please try again later.</h1>";
    }
}
?>
