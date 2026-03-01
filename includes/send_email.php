<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

header('Content-Type: application/json');

// Only process POST requests
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Get form values and sanitize
    $full_name        = trim($_POST['full_name'] ?? '');
    $company_name     = trim($_POST['company_name'] ?? '');
    $phone            = trim($_POST['phone'] ?? '');
    $email            = trim($_POST['email'] ?? '');
    $product          = trim($_POST['product'] ?? '');
    $quantity         = trim($_POST['quantity'] ?? '');
    $delivery_location= trim($_POST['delivery_location'] ?? '');
    $message          = trim($_POST['message'] ?? '');

    // Validate required fields
    if (!$full_name || !$phone || !$email || !$product || !$quantity || !$delivery_location) {
        echo json_encode(['status' => 'error', 'message' => 'Please fill in all required fields.']);
        exit;
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid email address.']);
        exit;
    }

    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = "2.qservers.net";
        $mail->Port = 465;
        $mail->SMTPSecure = 'ssl';
        $mail->Username = "quotes@umachioilgas.com";
        $mail->Password = "9v6w=i^]7^4hIyLp";

        // IMPORTANT: setFrom should be your domain email (not user's email)
        $mail->setFrom("info@umachioilgas.com", "Website Quote Request");
        $mail->addAddress("info@umachioilgas.com");
        $mail->addReplyTo($email, $full_name);

        $mail->isHTML(true);
        $mail->Subject = "New Fuel Quote Request from $full_name";

        $mail->Body = "
            <h3>New Quote Request</h3>
            <p><strong>Full Name:</strong> {$full_name}</p>
            <p><strong>Company Name:</strong> {$company_name}</p>
            <p><strong>Phone:</strong> {$phone}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Product:</strong> {$product}</p>
            <p><strong>Quantity:</strong> {$quantity}</p>
            <p><strong>Delivery Location:</strong> {$delivery_location}</p>
            <p><strong>Message:</strong><br>{$message}</p>
        ";

        $mail->AltBody = "
            New Quote Request
            
            Full Name: {$full_name}
            Company Name: {$company_name}
            Phone: {$phone}
            Email: {$email}
            Product: {$product}
            Quantity: {$quantity}
            Delivery Location: {$delivery_location}
            Message: {$message}
        ";

        $mail->send();

        echo json_encode(['status' => 'success', 'message' => 'Your quote request has been sent successfully!']);

    } catch (Exception $e) {
        echo json_encode(['status' => 'error', 'message' => 'Mailer Error: ' . $mail->ErrorInfo]);
    }

} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request.']);
}
?>