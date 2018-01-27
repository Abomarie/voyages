<?php include('connexion.php');
  $msg="";
  include('menu.php');
  ?>
  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-compatible" content="IE=edge">
      <meta name="viewport" content="width=devise-width,initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="#">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
      <title>voyages-restaurants</title>
    </head>
    <body style="background-color: chocolate ;"><br><br>
          <div class="banner" style="color: white; text-align: center; height: 100vh; background-size: cover; background-position: 50%; display: flex; align-items: center; justify-content: center; background-image: url('img/restau.jpg'); width:100%; height: 350px; ">
       <div class="banner-content">
          <h1 style="font-size: 50px; font-weight: bold; text-shadow: 0px 1px rgba(0,0,0,0.2);"></h1>
          <!-- <p style="font-size: 25px; font-weight: lighter; color: rgb(255,255,255); opacity: 0.6; margin-bottom: 30px;">Motif, fait Exprès pour Vous</p>
          <a class="btn btn-primary btn-lg">Entrer le modele de votre appareil</a> -->
        </div>
    </div><br><br>
    
          <div class="body" style="background-color:#FFF; width: 960px; margin: 10px auto; height: auto; position: relative;">
            <div class="article" style="text-align: justify; margin: 100px;">
           <div style="margin: 100px;"><br><br>

              <h1 style="color: salmon;"><center><i></i>Restaurants en Côte d'Ivoire</center></h1><br><br><br>
                <?php
                  $n=1;
                  $v2="SELECT 
                    titre,
                    description,
                    image,
                    libelle
                  FROM restaurant
                  INNER JOIN ville
                  ON ville.id = restaurant.id_ville"; 
                  $repsite=mysqli_query($link,$v2);
                  while($info_site=mysqli_fetch_array($repsite)){ 
                ?>
                  
                  <div style="text-align:justify;">
                   <center> <p style="color:blue;"><?php echo nl2br(htmlspecialchars($info_site['titre'])); ?> situé dans la ville de <?php echo nl2br(htmlspecialchars($info_site['libelle'])); ?></p></center><br><br>
                    <center><img src="upload/<?php echo htmlspecialchars($info_site['image']);?>" width="80%" height="300px"></center><br><br>
          
                    <?php echo nl2br(htmlspecialchars($info_site['description'])); ?><br><br><br>
                  </div>
                  <?php 
                  $n++;
                  } ?>
                  
            </div> 
       </div>
       <center><a href="restaurant.php"><button name="btnValider" type="submit" class="btn btn-danger submit" >Ajouter votre Restaurant</button></a></center><br><br>
    </div>

    
    <?php include('inscription.php');?>
    </body>
  </html>
