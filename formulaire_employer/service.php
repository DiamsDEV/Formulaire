<?php
    require_once 'datasource.php';

    function getService()
    {
        $req = "SELECT * from service ORDER BY nomService";
        global $ds; // accede a l variable defenie dans datasource.php

        //executer la requete
        $exe = $ds->query($req);

        //recuperation de l'execution de la requete
        //fetchall = plusieurs element
        //fetch = un seul element

        $tabService = $exe->fetchAll();
        return $tabService;
        
    }
?>