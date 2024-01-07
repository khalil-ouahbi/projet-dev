<?php
 $bdd= new PDO('mysql:host=localhost;dbname=espace_admin;','root','');
  if(isset($_GET['id']) AND !empty($_GET['id']))
  { $getid=$_GET['id'];
    $recupArticle= $bdd->prepare('SELECT * FROM membres WHERE id=? ');
    $recupArticle->execute(array($getid));
     if($recupArticle->rowCount() >0)
     {  $articleInfos=$recupArticle->fetch();
       $pseudo=$articleInfos['pseudo'];
       $nom=$articleInfos['nom'];
       $email=$articleInfos['email'];
       $Telephone=$articleInfos['Telephone'];
       $Adresse=$articleInfos['Adresse'];
    if(isset($_POST['Valider']))
  {
      $pseudo_saisi=$_POST['pseudo'];
      $nom_saisi=htmlspecialchars($_POST['nom']);
        $email_saisie=htmlspecialchars($_POST['email']);
        $Telephone_saisi=htmlspecialchars($_POST['Telephone']);
        $Adresse_saisi=htmlspecialchars($_POST['Adresse']);
        $updateArticle=$bdd->prepare('UPDATE membres SET pseudo=?, nom=?,email=?, Telephone=?,Adresse=? WHERE id=?');
        $updateArticle->execute(array($pseudo_saisi,$nom_saisi,$email_saisie,$Telephone_saisi,$Adresse_saisi,$getid));
       header('location:membres.php');
}

      }
        else { echo "Aucun membres trouve"; }
  }
  else{ echo "Aucun identifiant trouve";}
 ?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Publier un article</title>
   </head>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

   <body>

     <div class="album py-3 bg-light" >
       <div class="container">

         <div>
    <form class="" action=" " method="POST" style="border-radius: 10px;  border: 3px solid #961BFF ;padding:20px 10px; margin-left:400px;"  >
     <div class="mb-1">
       <label for="exampleInputEmail1" class="form-label">Prenom </label>
       <textarea type="text" class="form-control"  name="pseudo" value="<?= $pseudo;?>" required></textarea>
     </div>


     <div class="mb-1">
       <label for="exampleInputPassword1" class="form-label">nom</label>
       <textarea type="text" class="form-control" name="nom" value="<?= $nom;?>" required></textarea>
     </div>


     <div class="mb-1">
       <label for="exampleInputPassword1" class="form-label">Email</label>
       <textarea type="text" class="form-control" name="email" value="<?=$email;?>" required></textarea>
     </div>
     <div class="mb-1">
         <label for="exampleInputPassword1" class="form-label">Telephone</label>
      <textarea name="Telephone" class="form-control"  value="<?=$Telephone;?>" required > </textarea>
        </div>
        <div class="mb-1">
          <label for="exampleInputPassword1" class="form-label">Adresse</label>
         <textarea name="Adresse" class="form-control"  value="<?=$Adresse;?>" required></textarea>
           </div>

     <button type="submit" class="btn btn-primary" name="Valider" value="Valider"style="margin-left:130px;" >Modifier</button>


   </form>
 </div></div></div>

   </body>
 </html>
