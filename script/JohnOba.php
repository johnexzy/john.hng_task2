<?php
$name = 'Oba John';
$ID = 'HNG-04363';
$email = 'obajohn75@gmail.com';
$language = 'PHP';
$output =  sprintf('Hello world, this is %s with HNGi7 ID %s using %s for stage 2 task', $name, $ID, $email, $language);
$res = [
    "output" => $output,
    "name" => $name,
    "id" => $ID,
    "email" => $email,
    "language" => $language
];
echo json_encode($res);
