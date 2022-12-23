<?php 
    require "controller/controller.php";
    
    if(!empty($_GET['create'])){
        addPersonne();
    }else if(!empty($_GET['idedit'])){
        modifPersonne();
    }else if (!empty($_GET['iddel'])){
        deletePersonne();
    }else accueil();
