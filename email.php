<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $to = "sunnyskies1674@gmail.com";  // Yaha apna email daalo
    $subject = "New Enquiry from Website";

    $parent_name = $_POST['parent_name'];
    $child_name = $_POST['child_name'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $body = "Parent Name: $parent_name\n";
    $body .= "Child Name: $child_name\n";
    $body .= "Mobile Number: $phone\n";
    $body .= "Message: $message\n";

    $headers = "From: no-reply@sunnyskies.in";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Thank you! We will contact you soon.'); window.location.href='index.html';</script>";
    } else {
        echo "Something went wrong. Please try again.";
    }
}
?>