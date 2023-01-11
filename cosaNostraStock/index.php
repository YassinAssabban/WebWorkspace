<?php
require "controller/controller.php";

if(!empty($_GET['createPersonnage'])){
    addPersonnage();
}else if(!empty($_GET['id'])){
    updateVie();
}else if (!empty($_GET['iddel'])){
    deletePersonnage();
}else {
    accueil();
}

?>