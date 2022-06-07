<?php

require_once('loginManager.php');


$sessionTime = $_SESSION['startTime'] + (10);

    if (time() >= $sessionTime) {
        destroySession();
    }


