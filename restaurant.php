
<?php 
// Lancer la session
    session_start();



 ?> 

<?php include('connexion.php');
    
    $sql="SELECT * FROM hotel WHERE id ='".$_SESSION['variable']."'";
    $req=mysqli_query($link,$sql);
    $data=mysqli_fetch_array($req);


      include('menu.php');
    $msg="";
    if (isset($_POST['btnValider'])){
        
        if (move_uploaded_file($_FILES['image']['tmp_name'], 'upload/'.$_FILES['image']['name'])) {
            $sql= "INSERT INTO restaurant (titre, description, image, id_ville)
                    VALUES ('".mysqli_real_escape_string($link,$_POST['titre'])."','".mysqli_real_escape_string($link,$_POST['description'])."',
                            '".($_FILES['image']['name'])."',
                            '".mysqli_real_escape_string($link,$_POST['ville'])."')"; 
                            //protection des variable
            $result=mysqli_query($link,$sql);
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
        <meta neme="description" content="">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    
        <title>Restaurants</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" >

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body style="background-color: chocolate;"><br><br>

            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">

                    <form action="" method="POST" role="form" enctype="multipart/form-data">
                        <legend>Entrer Votre Restaurant</legend>
                        <span> <?php echo $msg; ?> </span>
                    
                        <div class="form-group">
                            <label for="">TITRE</label>
                            <input name="titre" type="text" class="form-control" id="" placeholder="Entrer le titre" required>
                        </div>

                        <div class="form-group">
                            <label for="">DESCRIPTION</label>
                            <input name="description" type="text" class="form-control" id="" placeholder="Entrer la description">
                        </div>

                        <div class="form-group">
                            <label for="">IMAGE</label>
                            <input name="image" type="file" class="form-control" id="" placeholder="image">
                        </div>
                        <div class="form-group">
                            <label for="">Ville</label>
                            <select name="ville" class="form-control" placeholder="Selectionner la ville">
                    <?php
                    //recupere toutes les categories dans la bd
                    $sqlville="SELECT * FROM ville";
                    //execute la requete et on la stock dans $repcategorie
                    $repville=mysqli_query($link,$sqlville);
                    //mysqli_fetch_array = permet de transformer le resultat $repcategorie en variable de type tableau $datacat
                    // la boucle while nous permet de parcourir le tableau $datacat et de recuperer les valeurs de chaques elements du tableau $datacat
                    while ($datavil=mysqli_fetch_array($repville)) {
                        ?>
                        <option value="<?php echo $datavil['id'];?>">
                        <?php echo $datavil['id'].'-'.$datavil['libelle'];?>
                            
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

            </div><br>


            <div class="row" style="margin: 30px;">
                <table class="table">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Titre</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Ville</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $n=1;
                            $list=" SELECT 
                                        titre,
                                        restaurant.description,
                                        image,
                                        libelle
                                    FROM ville
                                    INNER JOIN restaurant
                                    ON ville.id = restaurant.id_ville";
                            $res= mysqli_query($link,$list);
                            while ($data = mysqli_fetch_array($res)){
                                
                         ?>

                        <tr>
                            <td><?php echo $n;?></td>
                            <td><?php echo $data['titre'];?></td>
                            <td><?php echo $data['description'];?></td>
                            <td><img src="upload/<?php echo $data['image'];?>" width="30px" height="30px" alt=""></td>
                            <td><?php echo $data['libelle'];?></td>
                        </tr>
                        <?php $n++;
                         } ?>
                    </tbody>
                </table>

            </div>
            

        </div>
    </body>
    </html>