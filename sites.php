<?php include('connexion.php');
	$msg="";
	include('menu.php');
	if (isset($_POST['btnValider'])){
		/*echo '<pre>';
		print_r ($_FILES['image']);die();*/
		if (move_uploaded_file($_FILES['image']['tmp_name'], 'upload/'.$_FILES['image']['name'])) {
			$sql= "INSERT INTO sites
			 (nom,image,description,id_ville)
			 VALUES ('".mysqli_real_escape_string($link,$_POST['nom'])."',
			 		  '".$_FILES['image']['name']."',
			 		  '".mysqli_real_escape_string($link,$_POST['description'])."',
			 		  '".$_POST['id_ville']."')";
			$result=mysqli_query($link	,$sql);
			if ($result) {
				$msg='Insertion reussie';
			}else{
				$msg=mysqli_error($link);
			}
		}

	}
 ?>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Sites Touristiques</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.css" >

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body style="background-color: salmon;">
		<div class="container">

			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">

					<form action="" method="POST" role="form" enctype="multipart/form-data">
						<legend><center><h2>Formulaire Des Sites Touristiques</h2></center></legend>
						<span> <?php echo $msg; ?> </span>
					
						<div class="form-group">
							<label for="">Nom:</label>
							<input name="nom" type="text" class="form-control" id="nom" placeholder="Entrer le nom du site">
						</div>

						<div class="form-group">
							<label for="">image:</label>
							<input name="image" type="file" class="form-control" id="" placeholder="image">
						</div>
						<div class="form-group">
							<label for="">description:</label>
							<input name="description" type="text" class="form-control" id="" placeholder="description">
						</div><div class="form-group">
							<label for="">Villes:</label>
							<select name="id_ville" class="form-control">
					<?php
					//recupere toutes les categories dans la bd
					$sqlville="SELECT * FROM ville";
					//execute la requete et on la stock dans $repcategorie
					$repville=mysqli_query($link,$sqlville);
					//mysqli_fetch_array = permet de tran sformer le resultat $repcategorie en variable de type tableau $datacat
					// la boucle while nous permet de parcourir le tableau $datacat et de recuperer les valeurs de chaques elements du tableau $datacat
					while ($dataville=mysqli_fetch_array($repville)) {
						?>
						<option value="<?php echo $dataville['id'];?>">
						<?php echo $dataville['id'].'-'.$dataville['libelle'];?>
							
						</option>

						<?php
					}
					?>
								
							</select>
						</div>
						<button name="btnValider" type="submit" class="btn btn-primary btn-lg btn-block">Valider</button>
					</form>
				</div>
				<div class="col-md-2"></div>
			</div>
<br>
			<div class="row">
				<table class="table">
					<thead>
						<tr>
							<th>Numero</th>
							<th>Nom</th>
							<th>Image</th>
							<th>Description</th>
							<th>Ville</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$n=1;
							$list=" SELECT 
										nom,
										image,
										description,
										libelle
									FROM sites
									INNER JOIN ville
									ON ville.id = sites.id_ville";
							$res= mysqli_query($link,$list);
							while ($data = mysqli_fetch_array($res)){
								
							
						 ?>
						<tr>
							<td> <?php echo $n; ?> </td>
							<td><?php echo $data['nom']; ?></td>
							<td><img src="upload/<?php echo $data['image'];  ?>" width="60px" height="60px" alt=""></td>
							<td><?php echo $data['description']; ?></td>
							<td><?php echo $data['libelle']; ?></td>
						</tr>
						<?php $n++;
						 }
						?>
					</tbody>
				</table>

			</div>
			

		</div>
		

		<!-- jQuery -->
		<script src=""></script>
		<!-- Bootstrap JavaScript -->
		<script src=""></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>