<?php
$pdo = new PDO('mysql:host=localhost;dbname=espace_admin','root','');
    
$sql="SELECT * FROM `articles` WHERE categorie = 'homme'  ORDER BY `id` DESC ";
 $sqlState = $pdo->query($sql); 
 $articles = $sqlState->fetchAll();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homme</title>
    <link rel="stylesheet" href="css/homme.css">
</head>
<body>
    <!--tete-->
    <nav class="navbar">
<div class="nav">
<a href="index.php"><img src="photo2/logo3.png" class="brand-logo" alt=""></a>
<div class="nav-items">
        <div class="search">
            <input type="text" class="search-box" placeholder="chercher des produits" name="nom">
            <button class="search-btn" type="submit" value="Soumettre">Rechercher</button>
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
    <header class="hero-section">
        <div class="content">
            <img src="img/" class="logo" alt=""> 
        </div>
    </header>
    <section class="product">
        <h2 class="product-category">Meilleure vente:</h2>
    </section>
<br> <br> <br>
<div class="product-container">
<?php foreach($articles as $article): ?>
<div class="product-card"> 
        <div class="product-image">
            <img src="<?php echo $article["image"] ?>" class="product-thumb" alt="">
          <a href="view_details.php?id=<?php echo $article["id"]; ?>">  <button class="card-btn">Detail du Produit</button></a>
        </div>
        <div class="product-info">
            <h2 class="product-brand"><?php echo $article["titre"] ?></h2>
            <p class="product-short-des">Chateau des athlètes</p>
            <span class="price"><?php echo $article["prix"] ?> mad</span>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<br> <br> <br>
<div class="product-container">
    <div class="product-card">
        <div class="product-image">  
            <img src="img/r.png " class="product-thumb" alt="">
            <button class="card-btn">Detail du produit </button>
        </div>
        <div class="product-info">
            <h2 class="product-brand">Ghana</h2>
            <p class="product-short-des">Chateau des athlètes</p>
            <span class="price">20 mad</span>
        </div>
    </div>
    <div class="product-card">
        <div class="product-image">  
            <img src="img/a.png  " class="product-thumb" alt="">
            <button class="card-btn">Detail du produit </button>
        </div>
        <div class="product-info">
            <h2 class="product-brand">Senegal</h2>
            <p class="product-short-des">Chateau des athlètes</p>
            <span class="price">20 mad</span>
        </div>
    </div>
    <div class="product-card">
        <div class="product-image">  
            <img src="img/b.png  " class="product-thumb" alt="">
            <button class="card-btn">Detail du produit </button>
        </div>
        <div class="product-info">
            <h2 class="product-brand">Man United</h2>
            <p class="product-short-des">Chateau des athlètes</p>
            <span class="price">20 mad</span>
        </div>
    </div>
    <div class="product-card">
        <div class="product-image">  
            <img src="img/m.png  " class="product-thumb" alt="">
            <button class="card-btn">Detail du produit </button>
        </div>
        <div class="product-info">
            <h2 class="product-brand">schalke 04</h2>
            <p class="product-short-des">Chateau des athlètes</p>
            <span class="price">20 mad</span>
        </div>
    </div>
   
    </div>
</div>
<br><br><br>
<div class="product-container">
<div class="product-card">
        <div class="product-image">  
            <img src="img/psg.png  " class="product-thumb" alt="">
            <button class="card-btn">Detail du produit </button>
        </div>
        <div class="product-info">
            <h2 class="product-brand">psg</h2>
            <p class="product-short-des">Chateau des athlètes</p>
            <span class="price">20 mad</span>
        </div>
    </div>
    <div class="product-card">
        <div class="product-image">  
            <img src="img/f.png  " class="product-thumb" alt="">
            <button class="card-btn">Detail du produit </button>
        </div>
        <div class="product-info">
            <h2 class="product-brand">Maroc</h2>
            <p class="product-short-des">Chateau des athlètes</p>
            <span class="price">20 mad</span>
        </div>
    </div>
    <div class="product-card">
        <div class="product-image">  
            <img src="img/n.png  " class="product-thumb" alt="">
            <button class="card-btn">Detail du produit </button>
        </div>
        <div class="product-info">
            <h2 class="product-brand">Man city</h2>
            <p class="product-short-des">Chateau des athlètes</p>
            <span class="price">20 mad</span>
        </div>
    </div>
    <div class="product-card">
        <div class="product-image">  
            <img src="img/t.png  " class="product-thumb" alt="">
            <button class="card-btn">Detail du produit </button>
        </div>
        <div class="product-info">
            <h2 class="product-brand">As roma</h2>
            <p class="product-short-des">Chateau des athlètes</p>
            <span class="price">20 mad</span>
        </div>
    </div>
    </div>
</div>
    <!--collection-->
    <br> <br> <br>
    <section class="collection-container">
        <a href="#" class="collection">
            <img src="img/collection6.jpg" alt="">
            <p class="collection-title">Style <br> d'entrénement</p>
        </a>
        <a href="#" class="collection">
            <img src="img/collection5.jpg" alt="">
            <p class="collection-title">Style <br> de Match</p>
        </a>
        <a href="#" class="collection"> 
        </a>
    </section>
    <footer>
        <div class="footer-content">
            <div class="footer-top">
                <div class="footer-col">
                    <div class="footer-logo">
                    <img src="photo2/logo3.png" alt="footer logo">
                        
                    </div>
                    <div class="footer-sm">
                    <a href="#">
                            <img src="img/fb.png" alt="facebook link">
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