<?php

require_once('loginManager.php');


if(isset($_POST['login'])){
    authUser();
} else {
    destroySession();
}
    

