<?php

function authUser()
{
    //GET FORM INPUT VALUES
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    //GET users.json USER VALUE
    $data = json_decode(file_get_contents("../../resources/users.json"));
    $users = $data->users;
    $userpassword = $users[0]->password;
    $useremail = $users[0]->email;

    //VERIFICATION
    if ($email == $useremail && password_verify($pass, $userpassword)) {
        header("Location: ../dashboard.php");
    } else {
        header("Location: ../../index.php");
    }
}

function destroySession()
{
    destroySessionCookie();

    session_destroy();
    header("Location: ../../index.php");
}

function destroySessionCookie()
{
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"],
            $params["httponly"]
        );
    }
}
