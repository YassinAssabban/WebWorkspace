<?php

require '../exo1MVC/model/model.php';

try {
    $connectBDD = Personne->connectBdd();
    require 'viewHome.php';
} catch (Exception $e) {
    $errorBDD = $e->getMessage();
    require 'viewError.php';
}




?>