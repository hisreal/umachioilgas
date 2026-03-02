<?php
header('Content-Type: application/json');

$apiKey = '91fd7e9beed6d3111b4b68476e3f822f-us12';
$listId = 'f91f51a357';
$dataCenter = substr($apiKey,strpos($apiKey,'-')+1);

$email = trim($_POST['email'] ?? '');

if(!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo json_encode(['status'=>'error','message'=>'Please enter a valid email address.']);
    exit;
}

$url = "https://$dataCenter.api.mailchimp.com/3.0/lists/$listId/members/";

$data = [
    'email_address' => $email,
    'status'        => 'subscribed'
];

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

$result = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($httpCode == 200) {
    echo json_encode(['status'=>'success','message'=>'Successfully subscribed!']);
} else {
    echo json_encode(['status'=>'error','message'=>'You are already subscribed or an error occurred.']);
}
?>