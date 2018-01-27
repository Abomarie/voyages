<?php include('menu.php');
$host="localhost";
$user="root";
$mdp="";
$db="db_voyages";
$link=mysqli_connect($host,$user,$mdp);
mysqli_select_db($link,$db);

$msg="";
    if(isset($_POST['btnValider'])) {
        $sql= "INSERT INTO commentaires (nom,commentaire) VALUES('".mysqli_real_escape_string($link,$_POST['nom'])."','".mysqli_real_escape_string($link,$_POST['commentaire'])."')";
        $result=mysqli_query($link,$sql);
        if($result) {
            $msg='Insertion reussie';
        }else{
            $msg=mysqli_error($link);
        } 
      }
    ?>
<?php 
  session_start();
  include('connexion.php');
   include('menu.php'); 
   $_SESSION['session1']='je suis salimata';
?>
<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!--navigateur internet Exploreur-->
    <meta name="Viewport" content="witdth=device-width, initial-scale=1">
    <meta neme="description" content="c'est une boutique en ligne">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  
    

    <title>Voyages</title>

  </head>

  <body style="background-color: beige;"><br><br><br>

  <div align="center">
    <!-- <img src="img/banner.jpg" width="900" height="250"> -->
     <div class="banner" style="color: white; text-align: center; height: 100vh; background-size: cover; background-position: 50%; display: flex; align-items: center; justify-content: center; background-image: url('img/ele.png'); width:100%; height: 350px; ">
    </div>




    <div class="banner-content">
         <center><h1 style="font-size: 50px; font-weight: bold; text-shadow: 0px 1px rgba(0,0,0,0.2);">QUELS SITES ALLEZ-VOUS VISITER?</h1></center>
          <center><a href="sites.php"><button name="btnValider" type="submit" class="btn btn-danger submit" >Ajouter votre Site</button></a></center><br><br>
         </div>
  </div>

    <div class="container" style="opacity: 0.85; padding:10px; ">
      <div class="row-padding">

        <?php
        // Connexion à la base de données
        // une autre manière de se connecter à la base de données
          try
          {
            $bdd = new PDO('mysql:host=localhost;dbname=db_voyages;charset=utf8', 'root', '');
          }
          catch(Exception $e)
          {
                  die('Erreur : '.$e->getMessage());
          }

          // On récupère les 5 derniers articles
          $req = $bdd->query('SELECT id,nom,image, description FROM sites ORDER BY id,nom DESC LIMIT 0, 3');
          while ($donnees = $req->fetch())
          {?>


        <div class="col-md-4">
          <div class="card jumbotron">
            <div class="card-body">
              <img src="upload/<?php echo $donnees['image'];?>" width="150px" height="150px" alt="Mon Image"/><br>
              
                <!-- htmlspecialchars : permet de proteger les textes -->
              <h3 style="color: blue;">
              <?php echo htmlspecialchars($donnees['nom']); ?>
            </h3>
              <p style="font-size:15px">  <?php
              // On affiche le contenu de l'article
              // nl2br Elle permet  de convertir les  retours  à la ligne en balises  HTML  <br />
              echo nl2br(htmlspecialchars($donnees['description']));
              ?>
            </p>
              <p class="text-right" style="font-size:15px">
                <a href="site.php?site=<?php echo $donnees['id']; ?>">Voir Tout</a></p>
              
            </div>
          </div>
        </div>
        <?php
        } // Fin de la boucle des articles
          $req->closeCursor();
        ?>

      </div>
    </div><br><br><br> 
    <div style="margin: 100px; font-size: 18px; text-align: justify;">
      <marquee><center><h2 style="color: red;">TOP 5 DES VILLES LES PLUS SOLLICITEES</h2></center></marquee>
      <p>Choisir la destination Côte d'Ivoire est motivé par plusieurs raisons qui du pays la plateforme tournante du tourisme Ouest-Africain. Voici le top 5 des villes les plus sollicitées.</p>
    </div>

      <div class="container" style="padding: 25px 20px 30px;"">
        <div class="row">
          <div class="col-xs-12 col-sm-4">
        <!-- insert <div class="card"> -->
          <div class="card" style="background-image: url('img/abidjan.jpg'); height: 200px; width: 350px; background-size: cover; text-align: center;">
            <div class="card-category"></div>
          </div>
          </div>
        <!-- insert <div class="card"> -->
              <div class="card">
                <div class="card" style="background-size: cover;">
                  <div class="row warranty" style="margin-left: 50px;">
                  <h4 class="title" style="font-weight: bold; text-shadow: 0px 1px rgba(0,0,0,0.2); color: blue; text-align: center;">Abidjan, la capitale économique</h4>
                  <p class="desc" style=" text-align: justify;">
                    La ville d'Abidjan compte 4 millions d'habitants soit 20% de la population Ivoirienne, elle totalise le plus grand nombre d'hôtels de haute standing dont plusieurs grandes enseignes de l'hôtellerie mondiale.Cette attraction est motivée par le fait que la troisième plus grande agglomération de l'Afrique Francophone soit un carrefour où sont organisés de nombreux évènements culturels, artistiques et politiques. Aussi, les bons plans qu'offrent la ville jouent un rôle préponderant dans le choix de destination des touristes.
                  </p>       
              </div>        
            </div>
        
          </div>
       </div>
       <hr>


         <div class="row">
          <div class="col-xs-12 col-sm-4">
        <!-- insert <div class="card"> -->
          <div class="card" style="background-image: url('upload/plage.jpg'); height: 200px; width: 350px; background-size: cover; text-align: center;">
            <div class="card-category"></div>
          </div>
          </div>
        <!-- insert <div class="card"> -->
              <div class="card">
                <div class="card" style="background-size: cover;">
                  <div class="row warranty" style="margin-left: 50px;">
                  <h4 class="title" style="font-weight: bold; text-shadow: 0px 1px rgba(0,0,0,0.2); color: blue; text-align: center;">Grand-Bassam, la ville balnéaire</h4>
                  <p class="desc" style="text-align: justify;">
                    Grâce à son littoral de 500 km et ses belles plages, Grand-Bassam et ses environs arrivent en deuxième position de ce classement avec 27% des recherches des touristes. La ville historique de Grand-Bassam est inscrite au patrimoine mondiale de l'UNESCO, cette distinction lui donne une notoriété légendaire.
                  </p>       
              </div>        
            </div>
         </div>
       </div>

<hr>

         <div class="row">
          <div class="col-xs-12 col-sm-4">
        <!-- insert <div class="card"> -->
          <div class="card" style="background-image: url('upload/images(2).jpg'); height: 200px; width: 350px; background-size: cover; text-align: center;">
            <div class="card-category"></div>
          </div>
          </div>
        <!-- insert <div class="card"> -->
              <div class="card">
                <div class="card" style="background-size: cover;">
                  <div class="row warranty" style="margin-left: 50px;">
                  <h4 class="title" style="font-weight: bold; text-shadow: 0px 1px rgba(0,0,0,0.2); color: blue; text-align: center;">Yamoussoukro, La ville au Crocodiles</h4>
                  <p class="desc" style="text-align: justify;">
                    Située à 240 km au nord d'Abidjan, Yamoussoukro est la capitale politique de la Côte d'Ivoire. C'est une des villes de l'interieur les plus visitées par les touristes de l'extérieur grâce à la Basilique Notre Dame de la Paix, la plus grande au monde.
                  </p>       
              </div>        
            </div>
         </div>
       </div>
<hr>

         <div class="row">
          <div class="col-xs-12 col-sm-4">
        <!-- insert <div class="card"> -->
          <div class="card" style="background-image: url('img/monogaga.jpg'); height: 200px; width: 350px; background-size: cover; text-align: center;">
            <div class="card-category"></div>
          </div>
          </div>

        <!-- insert <div class="card"> -->
              
                <div class="card">
                <div class="card" style="background-size: cover;">
                  <div class="row warranty" style="margin-left: 50px;">
                  <h4 class="title" style="font-weight: bold; text-shadow: 0px 1px rgba(0,0,0,0.2); color: blue; text-align: center;">San-Pedro, le deuxième pôle économique</h4>
                  <p class="desc" style="text-align: justify;">
                    Deuxième ville portuaire et de puissance économique Ivoirienne après Abidjan, la ville touristique de San-Pedro se trouve à l'avant dernière marge de ce top 5. Désormais accessible par voie aérienne grâce à la compagnie Nationale Air Côte d'Ivoire, elle compte de nombreuses usines de l'industrie cacaoyère Ivoirienne.
                  </p>       
              </div>        
            </div>
         </div>
       </div>
       <hr>

         <div class="row">
          <div class="col-xs-12 col-sm-4">
        <!-- insert <div class="card"> -->
          <div class="card" style="background-image: url('img/bouake.jpg'); height: 200px; width: 350px; background-size: cover; text-align: center;">
            <div class="card-category"></div>
          </div>
          </div>
        <!-- insert <div class="card"> -->
              <div class="card">
                <div class="card" style="background-size: cover;">
                  <div class="row warranty" style="margin-left: 50px;">
                  <h4 class="title" style="font-weight: bold; text-shadow: 0px 1px rgba(0,0,0,0.2); color: blue; text-align: center;">Bouaké</h4>
                  <p class="desc" style="text-align: justify;">
                   Elle occupe la dernière marge du top 5. Elle est située entre la savane et la fôrêt, dans le V Baoulé, au centre de la Côte d'Ivoire
                  </p>       
              </div>        
            </div>
         </div>
       </div>
       </div>

<hr>

    
       <div class="banner-content">
          <center><h1 style="font-size: 50px; font-weight: bold; text-shadow: 0px 1px rgba(0,0,0,0.2);">Où Manger?</h1></center>
          <center><a href="restaurant.php"><button name="btnValider" type="submit" class="btn btn-danger submit" >Ajouter votre Restaurant</button></a></center><br><br>
         </div>
  </div>

    <div class="container" style="opacity: 0.85; padding:10px; ">
      <div class="row-padding">

        <?php
        // Connexion à la base de données
        // une autre manière de se connecter à la base de données
          try
          {
            $bdd = new PDO('mysql:host=localhost;dbname=db_voyages;charset=utf8', 'root', '');
          }
          catch(Exception $e)
          {
                  die('Erreur : '.$e->getMessage());
          }

          // On récupère les 5 derniers articles
          $req = $bdd->query('SELECT id,titre, description, image FROM restaurant ORDER BY id,titre DESC LIMIT 0, 3');
          while ($donnees = $req->fetch())
          {?>


        <div class="col-md-4">
          <div class="card jumbotron">
            <div class="card-body">
              <img src="upload/<?php echo $donnees['image'];?>" width="150px" height="150px" alt="Mon Image"/><br>
              
                <!-- htmlspecialchars : permet de proteger les textes -->
              <h3 style="color: blue;">
              <?php echo htmlspecialchars($donnees['titre']); ?>
            </h3>
              <p style="font-size:15px">  <?php
              // On affiche le contenu de l'article
              // nl2br Elle permet  de convertir les  retours  à la ligne en balises  HTML  <br />
              echo nl2br(htmlspecialchars($donnees['description']));
              ?>
            </p>
              <p class="text-right" style="font-size:15px">
                <a href="restaurants.php?restaurants=<?php echo $donnees['id']; ?>">lire la suite</a></p>
              
            </div>
          </div>
        </div>
        <?php
        } // Fin de la boucle des articles
          $req->closeCursor();
        ?>

      </div>
    </div>




    <div class="banner-content" style="text-align: center;">
          <h1 style="font-size: 50px; font-weight: bold; text-shadow: 0px 1px rgba(0,0,0,0.2);">Où Dormir?</h1>
          <center><a href="hotel.php"><button name="btnValider" type="submit" class="btn btn-danger submit" >Ajouter Votre Hotel</button></a></center><br><br>
         </div>
  </div>
</div>

    <div class="container" style="opacity: 0.85; padding:10px; ">
      <div class="row-padding">
        

        <?php
        // Connexion à la base de données
        // une autre manière de se connecter à la base de données
          try
          {
            $bdd = new PDO('mysql:host=localhost;dbname=db_voyages;charset=utf8', 'root', '');
          }
          catch(Exception $e)
          {
                  die('Erreur : '.$e->getMessage());
          }

          // On récupère les 5 derniers articles
          $req = $bdd->query('SELECT id, nom, description, image FROM hotel ORDER BY id,nom DESC LIMIT 0, 3');
          while ($donnees = $req->fetch())
          {?>


        <div class="col-md-4">
          <div class="card jumbotron">
            <div class="card-body">
              <img src="upload/<?php echo $donnees['image'];?>" width="150px" height="150px" alt="Mon Image"/><br>
              
                <!-- htmlspecialchars : permet de proteger les textes -->
              <h3 style="color: blue;">
              <?php echo htmlspecialchars($donnees['nom']); ?>
            </h3>
              <p style="font-size:15px">  <?php
              // On affiche le contenu de l'article
              // nl2br Elle permet  de convertir les  retours  à la ligne en balises  HTML  <br />
              echo nl2br(htmlspecialchars($donnees['description']));
              
              ?>
            </p>
              <p class="text-right" style="font-size:15px">
                <a href="hotels.php?hotels=<?php echo $donnees['id']; ?>">lire la suite</a></p>
              
            </div>
          </div>
        </div>
        <?php
        } // Fin de la boucle des articles
          $req->closeCursor();
        ?>

      </div>
    </div>




    <div class="container">
        <div class="row" style="margin-left: 200px;">
          <h2 style="margin-left: 150px;">Laissez Nous Un Commentaire</h2>
            <div class="col-md-3"></div>
            <div class="col-md-3">
                <form action="" method="POST" role="form">
                    
                    <div class="form-group">
                        <label for="">NOM</label>
                        <input type="text" class="form-control" name="nom" id="" placeholder="Entrer le nom">
                    </div>
                    
                    <div>
                        <label for="">Votre commentaire</label>
                        <textarea name="commentaire" class="form-control" placeholder="Entrer le commentaire ici"></textarea><br>
                    </div>
            
                    <div class=""><input type="submit" name="btnValider" value="Ajouter" class="subp" id="subc" /></div>
            
                </form>
            </div>
        </div>
       <div class="row" style="margin-left: 450px;"> 
        <h4>Commentaires</h4>
          <?php
            $n=1;
            $v1="SELECT * FROM commentaires ORDER BY id DESC LIMIT 0,3"; 
            $repcom=mysqli_query($link,$v1);
            while($info_com=mysqli_fetch_array($repcom)){ 
          ?>
            
            <div style="text-align:justify;">
              N°:<?php echo nl2br(htmlspecialchars($info_com['id'])); ?><br>
              <a href=""><?php echo nl2br(htmlspecialchars($info_com['nom'])); ?>:</a>
              <?php echo nl2br(htmlspecialchars($info_com['commentaire'])); ?><br>
            </div>
            <?php 
            $n++;
            } ?>
            <!-- <table class="table">
              <thead>
                <tr>
                  <th>numero</th>
                  <th>nom</th>
                  <th>commentaire</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $n=1;
                $list="SELECT * FROM commentaires";
                $res=mysqli_query($link, $list);
                while ($data=mysqli_fetch_array($res)) {
                 ?>
                 <tr>
                   <td><?php echo $n; ?></td>
                   <td><?php echo $data['nom']; ?></td>
                   <td><?php echo $data['commentaire']; ?></td>

                 </tr>
                 <?php 
                 $n++;
                 } ?>
                 <tr>
                   <td></td>
                   <td></td>
                   <td></td>
                 </tr>
              </tbody>
              
            </table> -->
          
       </div>
    </div>
    <script type="text/javascript" src="js/bootstrap.js"></script>
  </body>
</html>

   
    