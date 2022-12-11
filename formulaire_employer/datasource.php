<?php
         
        define("HOST" , "localhost");
        define("DATABASE" , "formulaire_employer");
        define("USER" , "root");
        define("PASSWORD" , "");
        try {
            $db = new PDO('mysql:host='.HOST.';dbname='.DATABASE,USER,PASSWORD,
                    array(
                        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
                    )
                );
        } catch (PDOException $e) {
            die('Erreur de connexion à la base de données !');
        }
        // die($e->getMessage());
        // //definir le Domaine Serveur Name (DNS)c

        // $dsn = "mysql:host=".SERVEUR.";dbname=".DB_NAME.";charset=utf8";
        // // option de PDO pour la gestion des erreurs
        // $tabOptions = array(
        //     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        // );
        // //creation d'instance PDO
        // try {
        //     $ds = new PDO($dsn,USER,PASSWORD,$tabOptions);
        // } catch (PDOException $ex) {
        //     die($ex->getMessage());
            
        // }

?>        