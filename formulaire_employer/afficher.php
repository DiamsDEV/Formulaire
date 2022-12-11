<?php 
       include_once "fonction.php";
       require_once 'datasource.php';

       $service= getEmploye();
	

       ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Ajout</title>
    <link rel="stylesheet" href="/mesprojetsl2/formulaire_employer/public/css/bootstrap.min.css">

</head>
<body class="bg-light">
<div class="container">
    <div class="row bg-dark text-white">
       
        <div class="offset-4">
            <h3>Page d'Affichage Des Employes</h3>
        </div>

 <table class=" table mt-2">
        <thead>
          <tr class="bg-white text-dark h-10">
            <th>Nom</th>
            <th>Prenom</th>
            <th>Service</th>
            <th>Numero</th>
            <th>Actions</th>
          </tr>
        </thead>
    
      <?php foreach ($service as $ser){ ?>        
            <tr>
              <td><?= $ser['nomEmp'] ?></td>
              <td><?= $ser['prenomEmp'] ?></td>
              <td><?= $ser['nomService']?></td>
              <td><?= $ser['numero']?></td>
              <td><a href="modifier.php?id=<?=$ser['idEmploye']?>" class="btn btn-sm btn-outline-warning bg-white">Modifier</a></td>                    
              <td><a href="supprimer.php?id=<?=$ser['idEmploye']?>" class="btn btn-sm btn-outline-warning bg-danger">Supprimer</a></td>                    
            </tr> 
         <?php } ?> 
     
 
 </table>

         <a href="index.php"><button class="btn btn-danger btn-lg mr-6 mt-2 mb-2 offset-10" name="valider">Retour</button></a>     
</div>

</body>
</html>

