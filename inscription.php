
<?php
$host="localhost";
$user="root";
$mdp="";
$db="db_voyages";
$link=mysqli_connect($host,$user,$mdp);
mysqli_select_db($link,$db);

$msg="";
    if(isset($_POST['btnValider'])) {
        $sql= "INSERT INTO inscription (nom,prenom,email,telephone,interet) VALUES('".$_POST['nom']."','".$_POST['prenom']."','".$_POST['email']."','".$_POST['telephone']."','".$_POST['interet']."')";
        $result=mysqli_query($link,$sql);
        if($result) {
            $msg='Insertion reussie';
        }else{
            $msg=mysqli_error($link); die();
        }   
}
    ?>
<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">
        <title>INSCRIPTION</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body style="background-color: olive;">
       <center><div class="container">
        <div class="row" style="margin-left: 200px;">
            <div class="col-md-3"></div>
            <div class="col-md-3">
                <form action="" method="POST" role="form">
                    <legend style="text-align: center;">Vous pouvez vous inscrire sur notre page pour plus d'informations</legend>
                    <div class="form-group">
                        <label for="">NOM</label>
                        <input type="text" class="form-control" name="nom" id="" placeholder="Entrer le nom">
                    </div>
                    <div class="form-group">
                        <label for="">PRENOM</label>
                        <input type="text" class="form-control" name="prenom" id="" placeholder="Entrer le prenom">
                    </div>
                    <div class="form-group">
                        <label for="">EMAIL*</label>
                        <input type="text" class="form-control" name="email" id="" placeholder="Exemple@email.com" required>
                    </div>
                    <div class="form-group">
                        <label for="">TELEPHONE</label>
                        <input type="text" class="form-control" name="telephone" id="" placeholder="Entrer le numero" required>
                    </div>
                    <div>
                        <label for="">QUELS SITES SOUHAITERIEZ-VOUS VISITER?</label>
                        <textarea name="interet" class="form-control" placeholder="Entrer les sites"></textarea><br>
                    </div>
            
                    <button class="btn btn-primary btn-lg btn-block" type="submit" name="btnValider">Envoyer</button>
            
        </form>
    </div>
</div>
</div></center>
    <br>

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>