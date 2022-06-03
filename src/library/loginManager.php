<?php

$data = json_decode(file_get_contents("../../resources/users.json"));
$users = $data->users;
$userpassword = $users[0]->password;
$useremail = $users[0]->email;






