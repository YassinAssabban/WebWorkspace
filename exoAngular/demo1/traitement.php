<?php

if (isset($_GET['name'])) {
    sleep(5);
    echo 'Hello' . $_GET['name'] . '!';
}



?>