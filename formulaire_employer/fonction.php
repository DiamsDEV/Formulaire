<?php
  require_once 'datasource.php';

function getService()
    {
        global $db;
        $sql = "SELECT * FROM service ORDER BY nomService";
        $resultat = $db->query($sql)->fetchAll();//query execute une requete sql en appelant une seule fonction
        return $resultat;
    }
    function getEmploye()
    {
        global $db;
        $sql = "SELECT * FROM employe,service WHERE service.idService=employe.idService";
        $resultat = $db->query($sql)->fetchAll();//query execute une requete sql en appelant une seule fonction
        return $resultat;
    }

    function deleteEmploye($idEmploye)
    {
        global $db; 
        $sql = "DELETE FROM employe WHERE idEmploye=$idEmploye";
        return $db->exec($sql);
    }


    function save($nomEmp,$prenomEmp,$idService)
    {      
        global $db;
        $sql = "INSERT INTO employe(idEmploye,nomEmp,prenomEmp,numero,idService) VALUES(null,'$nomEmp','$prenomEmp',7,$idService)";
        return $db->exec($sql); 
    }       

    
   /* function ($nbEMP){ 
        $nbEMP=intval($nbEMP);
         $mat="Emp-".date('Ymd')."-#".($nbEtu+1);
        return $mat;
    }

    

    function nbEmploye(){
        global $db;
        $sql = "SELECT COUNT(*) as nbEmp FROM employet";
        return $db->query($sql)->fetch();
    }*/
 ?>









