<?php

$email_check = '';
$return_arr = array();

$email = $_POST['email'];

$client = new soapclient('http://mailerlite.com/soapserver.php?wsdl');
$return_arr = $client->addSubscriber('XXX', 9107, $email,'');

echo json_encode($return_arr);
