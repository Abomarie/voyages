<?php include('connexion.php');
	  include('menu.php'); 
$msg="";
if (isset($_POST['btnValider'])){
	$sql="INSERT INTO ville (libelle)
		VALUES ('".$_POST['libelle']."')";
	$result=mysqli_query($link,$sql);
	if ($result) {
		$msg='Insertion reussie';

	}else{
		$msg=mysqli_error($link);
	}

}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta neme="description" content="">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	

	<title>Ville</title>
</head>
<body><br><br><br>


	<div class="container" >

		<div class="row"><!--separer (divise) les different blocs du Menu avec bootstrop-->


	<div class="col-md-2"></div>


	<form action="" name="form1" method="POST" >
	<div class="col-md-8" >

		<legend>Entrer La Ville</legend>

		<div class="form-group">
			<label >Libelle</label>
			<input type="texte" name="libelle" class="form-control" placeholder="Entrer le libelle" ><br>
		</div>

		<center><button name="btnValider" type="submit" class="btn btn-danger submit" >Valider </button></center><br><br>

	</div>

	</form>

	<span><?php
		echo $msg;
	 ?></span>


	<div class="col-md-2"></div>

	<div class="row">
	<table class="table">
		<thead>
			<tr>
				<th>N°</th>
				<th>Libelle</th>
			</tr>
		</thead>
	
	
		<tbody>
		<?php
			$n=1;
			$list="SELECT * FROM ville";
			$res=mysqli_query($link,$list);
			while ($data=mysqli_fetch_array($res)) { 
				
			
		?><!--retourne un tableau qui corresspond a une ligne-->
		<tr>
			<td><?php echo $n; ?></td>
			<td><?php echo $data['libelle']; ?></td>
		</tr>

		<?php  $n++;

		}

		?>
	</tbody>
	</table>


	</div>
</div>


