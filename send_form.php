<?php

$ch = curl_init();

$destination = 'http://webservice.crandi.com/contacts/enquiry/';

$formdata = array(
  'salesman' => $_POST['_salesman'],
  'campaign' => $_POST['_campaign'],
  'channel' => $_POST['_channel'],
  'office' => $_POST['_office'],
  'type' => $_POST['_type'],
  'source' => $_POST['_source'],
  'first_name' => $_POST['name'],
  'last_name' => $_POST['apellido'],
  'phone' => $_POST['telefono'],
  'email' => $_POST['email'],
  'servicio' => $_POST['servicio'],
  'text' => $_POST['consulta'],
  'successurl' => $_POST['_urlredirectsuccess'],
  'url' => $_POST['_url']
);
$content = http_build_query($formdata);

$source = strtolower($formdata['source']);

$allowed_authorizations = array(
  "pdesda"=>"Authorization: Token d72ea0619aa9352c7eb84d42ae7b1e5d59329039",
  "pdesgs"=>"Authorization: Token 8da33b0e0efadcd69adf73bf2b2d70d4f4199cee",
  "pdesfb"=>"Authorization: Token e98b18fc7f11e1e8342009494e7e24bf5b10ad30",
  "pdesig"=>"Authorization: Token da59af2e8dcc26e73ea1759c024293a496c6dcd7",
  "pdesis"=>"Authorization: Token 7319cc7c96bd60fe620a64e74f6689fd54e2a185",
  
);

$authorization = $allowed_authorizations[$source];

$headers = array(
  $authorization
);
curl_setopt($ch, CURLOPT_URL, $destination);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $content);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

// receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_exec ($ch);

curl_close ($ch);

?>