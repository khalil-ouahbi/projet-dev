<?php
$pdo = new PDO('mysql:host=localhost;dbname=espace_admin','root','');
    

$sql="SELECT * FROM `articles` WHERE categorie = 'solde' ORDER BY `id` DESC ";
 $sqlState = $pdo->query($sql); 
 $articles = $sqlState->fetchAll();


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Chateau des athlètes</title>
    <link rel="stylesheet" href="http://cdnjs.cloudflarecom/ajax/
    libs/font-awesome/5.15.3/css/all/min.css">
    <link rel="stylesheet" href="pro_web1.css">
  </head>
  <body>

  <nav class="navbar">
<div class="nav">
    
<a href="index.php"><img src="photo2/logo3.png" class="brand-logo" alt=""></a>
<div class="nav-items">
        <div class="search">
            <input type="text" class="search-box" placeholder="chercher des produits" name="nom">
            <button class="search-btn" type="submit" value="Soumettre">recherche</button>
        </div>

        <a href="view_cart.php"><img src="photo2/cart.png" alt=""></a>

        <div class="cc">
        <style type="text/CSS">
#menu {
height:50px;
}
#menu ul {
margin:0;
padding:0;
list-style-type:none;
text-align:center;
}
#menu li {
float:left;
margin:auto;
padding:0;
}
#menu li a {
display:block;
width: fit-content;
color:black;
text-decoration:none;
padding:5px;
}
#menu li a:hover {
color:#FFD700;
}
#menu ul li ul {
display:none;
}
#menu ul li:hover ul {
display:block;
}
#menu li:hover ul li {
float:none;
}
</style>
<style type="text/CSS">
#menu li ul {
position:absolute;
}
</style>
<style type="text/CSS">
#menu li ul {
position:absolute;
}
</style>
<div id="menu">
<ul>
<li><img style="padding-left: 20px;
    padding-top: 10px;" src="photo2/user.png" alt=""><ul>
<li><a href="form1.php">Connexion</a></li>
<li><a href="form2.php">Inscription</a></li>
<li><a href="admin1/connexion.php">Administrateur</a></li>

</ul>
</div>
</div>
    </div>
</div>
</nav>
<ul class="links-container">
    <li class="link-item"><a href="index.php" class="link">acceuil </a></li>
    <li class="link-item"><a href="women.php" class="link">femme </a></li>
    <li class="link-item"><a href="men.php" class="link">homme </a></li>
</ul>
    <section class="home" id="home">
      <div class="content">
        <h3>Tenu de foot</h3>
        <span>original 100%</span>
         <p>Le chateau des athlètes est un site spétialisé de vente des maillots de foot pour des differents clubs dans tous les événements ,d'une meilleure qualité pour tous les genres et tous les tailles. </p>
              <a href="#" class="btn">Nouveau boutique</a> <br>
              <img src="photo2/nn.png">       
      </div><img class="solde" src="photo2/s.png" alt="" >
    </section>
<section class="icons-container">
    <div class="icons">
        <img src="photo2/livraison.png" alt="">
        <div class="info">
            <h3>Livraison gratuite</h3>
            <span>sur toutes les commandes</span>
        </div>
</div>
    <div class="icons">
        <img src="photo2/retour.png" alt="">
        <div class="info">
            <h3>Retours sous 10 jours</h3>
            <span>garantie de remboursement</span>
        </div>
    </div>

    <div class="icons">
        <img src="photo2/cadeau.png" alt="">
        <div class="info">
            <h3>offre & cadeaux</h3>
            <span>sur toutes les commandes</span>
        </div>
    </div>

    <div class="icons">
        <img src="photo2/securisé.png" alt="">
        <div class="info">
            <h3>paiements sécurisés</h3>
            <span>protégé par paypal</span>
        </div>
    </div>
   
</section>




<section class="products" id="products">

    <h1 class="heading"> derniers produits </h1>

    <div class="box-container">
    <?php foreach($articles as $article): ?>
        <div class="box">
            <span class="discount">-50%</span> 
            <div class="image">
                <img src="<?php echo $article["image"] ?>" alt="" height="200">
                <div class="icons">
                    <a  class="fas fa-heart"></a>
                    <a href="view_details.php?id=<?php echo $article["id"]; ?>" class='cart-btn' >Detail du Produit </a>
                    <a  class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3> <?php echo $article["titre"] ?></h3>
                <div class="price"><?php echo $article["prix"] ?> MAD</div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>


<section class="review" id="review">

<h1 class="heading"> Avis du client:</h1>

<div class="box-container">

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>Bonjour, j'ai commandé un ensemble maillot de foot du psg (que j'ai floqué IBAHIMOVIC)+ son short. Je les ai contacté et mon dit que les produits venez de France mais pas du tout: ils viennent de Hong Kong.
            En inscrivant le nom du joueur je me suis rendu compte que je m'étais trompé dans l'écriture:
            j'ai écrit IBRAHIMIVIC à la place de HIBRAHIMOVIC)
            Je leur ai envoyé pleins de mails pour la rectification et ils m'ont répondu ok pas de problème on transmet.</p> 
        <div class="user">
            <img src="photo2/avie1.png" alt="">
            <div class="user-info">
                <h3>john deo</h3>
                <span>client satisfait</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>Suite à la perte de mon colis en livraison le service client a été à l'écoute et très réactif afin de trouver une solution de secours
            J'ai reçu une paire de maillots convenu entre le service client et moi dans un délai tout à fait satisfaisant
            Merci Chateau des athlètes.</p> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
        <div class="user">
            <img src="photo2/avie2.jfif" alt="">
            <div class="user-info">
                <h3>john deo</h3>
                <span>client satisfait</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>Super site 👍 prix imbattables! Je recommande ce site à tous. Et il mérite pas les commentaires négatifs. Car c’est vrai que ça a pris plus de temps que prévu (j’ai acheté une paire de Nike huarache liverpool) pour arrive, mais pour des Nike huarache à 60% de remise et livraison offerte je pense qu’on va pas chipoter non plus. Même d’occasion sur Vinted elles sont plus chères 🙈 ! Acheté les yeux fermé ici ! 🤝</p>
        <br> <br> <br> 
        <div class="user">
            <img src="photo2/avie3.jpg" alt="">
            <div class="user-info">
                <h3>john deo</h3>
                <span>client satisfait</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

 </div>
    
</section>



<section class="contact" id="contact">

    <h1 class="heading"> <span>Nous </span> contacter </h1>
    <div class="image">
        
    </div>

    <div class="row">

        <form action="">
            <input type="text" placeholder="Nom" class="box">
            <input type="email" placeholder="Email" class="box">
            <input type="number" placeholder="Numero" class="box">
            <textarea name="" class="box" placeholder="Message" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="Envoyé message" class="btn">
        </form>

       
    </div>

</section>

<!--mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm-->
<footer>
	<div class="footer-content">
		<div class="footer-top">
			<div class="footer-col">
				<div class="footer-logo">
					<img src="photo2/logo3.png" alt="footer logo">
					
				</div>
				<div class="footer-sm">
					<a href="#">
						<img src="photo2/fb.png" alt="facebook link">
					</a>
					<a href="#">
                    <img src="photo2/in.png" alt="instagram link">
					</a>
					
				</div>
			</div>

			<div class="footer-links">
				<h3>Liens rapides</h3>
				<ul>
					<li><a href="">contacter nous </a></li>
				</ul>
			</div>

			<div class="footer-links">
				<h3>Liens d'aide rapide</h3>
				<ul>
					<li><a href="">À propos de nous</a></li>
					<li><a href=""> À propos de l'expédition</a></li>
					<li><a href="">À propos du paiement</a></li>
					<li><a href="">Aide</a></li>
				</ul>
			</div>

			<div class="footer-news-lester">
				<h3>Abonnez-vous pour des offres spéciales</h3>
				<input type="email" name="email" placeholder="Email">
				<button type="submit" class="styled-btn" name="email_subscribe">
					Envoyé
				</button>
			</div>
		</div>
	</div>
	<div class="footer-bottom">

	</div>
</footer>
  </body>
</html>