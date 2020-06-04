<?php
$name = 'zachy iga';
$ID = 'HNG-01363';
$email = 'oigazackii@gmail.com';
$language = 'PHP';
$output =  sprintf('Hello world, this is %s with HNGi7 ID %s using %s for stage 2 task', $name, $ID, $language);
$res = [
    "output" => $output,
    "name" => $name,
    "id" => $ID,
    "email" => $email,
    "language" => $language
];
echo json_encode($res);
