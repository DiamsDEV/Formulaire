<?php 
  require_once 'datasource.php';
  require_once 'fonction.php';
   $serv = getService();
   if(isset($_GET["modifier"]))
   {
       $id = $_GET["id"];
      // deleteEmploye($id);
   }
	
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="/mesprojetsl2/formulaire_employer/public/css/bootstrap.min.css">
</head>
<body>
<div class=" bg-dark text-white">
<center>
	<form method="post">
	
	 <h1><u>Information Du Formulaire</u></h1>
			<div class=" col-md-3">
				<label>Nom</label><br><br>
				<input type="text" name="nomEmp" id="nom" required autocomplete="off" placeholder="<? $ser['nomEmp'] ?>"><br><br>
			</div>
			<div class=" col-md-3">
				<label>Prenom</label><br><br>
				<input type="text" name="prenomEmp" id="prenom" required autocomplete="off" placeholder="<? $ser['prenomEmp'] ?>"><br><br>
			</div>
			<div class=" col-md-3">
				<label>Service </label>
				<select name="nomService" id="classe" class="form-control" placeholder="<? $ser['nomService'] ?>">
					<option disabled selected>-- Slectionner un service --</option>
					<?php foreach($serv as $service){ ?>
						<option value="<?=$service["idService"]?>"><?=$service["nomService"] ?></option>                                
					<?php  }?>
					
				</select>
			</div>		  
		<input  type="submit" class="btn btn-danger btn-lg mr-6 mt-2 mb-2" name="valider" value="valider">     
     
	</form>
	
</center>
	
<?php
	if (isset($_POST['valider'])) 
		{
			extract($_POST); 
			$ok=save($nomEmp,$prenomEmp,$nomService);
			echo($ok);
			 header('location:afficher.php');
		}



        if(isset($_GET["id"]))
            {
                $id = $_GET["id"];
               // deleteEmploye($id);

            }
?>

   </div> 
</body>
</html>