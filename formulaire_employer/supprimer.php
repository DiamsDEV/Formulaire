<?php 
  require_once 'datasource.php';
  require_once 'fonction.php';
  
  if(isset($_GET["supprimer"]))
  {
      $id = $_GET["id"];
      deleteEmploye($id);
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="/mesprojetsl2/formulaire_employer/public/css/bootstrap.min.css">
</head>
<body>
    <div class=" bg-dark text-white col-md-4 offset-4 mt-5">
        <center>
            <form method="post">	
                        <label>Voulez-vous supprimer cet enregistrement</label><br><br>
                        <button class="btn btn-white btn-lg mr-6 mt-2 mb-2 offset-13" name="valider">Oui</button>
                        <button class="btn btn-white btn-lg mr-6 mt-2 mb-2 offset-13" name="valider">Non</button>
                        <p> <a href="afficher.php"><input class="btn btn-white btn-lg mr-6 mt-2 mb-2 offset-3" value="Retour"></a>     
</p>
            </form>
        </center>
    </div>
</body>
</html>            

<?php
    if(isset($_GET["id"]))
    {
        $id = $_GET["id"];
        deleteEmploye($id);
    }
?>