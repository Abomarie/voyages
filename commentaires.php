
<?php
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
            $msg=mysqli_error($link); die();
        }   
}
    ?>
<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">
        <title>COMMENTAIRES</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
       <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-3">
                <form action="" method="POST" role="form">
                    <legend style="text-align: center;">COMMENTAIRES</legend>
                    <div class="form-group">
                        <label for="">NOM</label>
                        <input type="text" class="form-control" name="nom" id="" placeholder="Entrer le nom">
                    </div>
                    
                    <div>
                        <label for="">VOTRE COMMENTAIRE</label>
                        <textarea name="commentaire" class="form-control" placeholder="Entrer le commentaire ici"></textarea><br>
                    </div>
            
                    <button class="btn btn-primary btn-lg btn-block" type="submit" name="btnValider">Envoyer</button>
            
        </form>
    </div>
</div>
</div>
    <br>

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>