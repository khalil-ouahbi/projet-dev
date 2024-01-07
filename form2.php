
<?php 


$servername="localhost";
$username="root";
$password="";
$dbname="espace_admin";
 try{
  $conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
  $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

 }
 catch(PDOException $e){
  echo"la connection a echoué:" . $e->getMessage();
 }

if(isset($_POST['envoyer']))
{
  $pseudo=$_POST['pseudo'];
  $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $numero_tele=$_POST['numero_tele'];
  $email=$_POST['email'];
  $mot_de_passe=$_POST['mot_de_passe'];

  $sql=("INSERT INTO `membres`(`pseudo`,`nom`,`prenom`,`numero_tele`,`email`,`mot_de_passe`) VALUES (:pseudo ,:nom , :prenom ,:numero_tele ,:email ,:mot_de_passe)");
 $stmt=$conn->prepare($sql);
 
 
 $stmt->bindparam(':pseudo',$pseudo);
 $stmt->bindparam(':nom',$nom); 
 $stmt->bindparam(':prenom',$prenom);
 $stmt->bindparam(':numero_tele',$numero_tele);
 $stmt->bindparam(':email',$email);
 $stmt->bindparam(':mot_de_passe',$mot_de_passe);
 $stmt->execute();

}

 

?>














<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="new.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="#" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">nom</span>
            <input type="text" name="nom" placeholder="Entrer votre nom" required >
          </div>
          <div class="input-box">
            <span class="details">prenom</span>
            <input type="text" name="prenom" placeholder="Entrer votre prenom " required >
          </div>
          <div class="input-box">
            <span class="details">pseudo</span>
            <input type="text" name="pseudo" placeholder="entrer pseudo" required >
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" placeholder="entrer l'email" required > </div>
          <div class="input-box">
            <span class="details">numero tele</span>
            <input type="text" name="numero_tele" placeholder="Entrer numero" required >
          </div>
          <div class="input-box">
            <span class="details">mot de passe</span>
            <input type="password" name="mot_de_passe" placeholder="entrer mot de passe" required >
          </div>
        </div>
       
        <div class="button">
          <input type="submit" value="envoyer" name="envoyer">
        </div>
      </form>
    </div>
  </div>
</body>
</html>