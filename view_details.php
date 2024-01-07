<?php 
	include "config.php";
	session_start();
	
	include "cart.class.php";
	$cart=new Cart();
	
	if(isset($_POST["submit"])){
		$item=[
			"id"=>$_POST["id"],
			"titre"=>$_POST["titre"],
			"prix"=>$_POST["prix"],
			"qty"=>$_POST["qty"],
			"total"=>($_POST["qty"]*$_POST["prix"]),
			"image"=>$_POST["image"],
		];
		$cart->add_to_cart($item);
		header("location:view_cart.php");
	}
	
	$data=[];
	$sql="select * from articles where id={$_GET["id"]}";
	$res=$con->query($sql);
	if($res->num_rows>0){
		$data=$row=$res->fetch_assoc();
	}
?>
<html>
	<head>
        <title>Detail du Produit </title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <body>
	<?php include "navbar.php"; ?>
        <div class='container mt-5'>
			<div class='row'>
				<div class='col-md-9 mx-auto'>
					<h2 class='text-muted mb-4'>Detail du Produit </h2><hr>
					<div class='row mt-5'>
						<div class='col-md-4'>
							  <img src="<?php echo $data["image"]; ?>" class='img-thumbnail'>
						</div>	
						<div class='col-md-8'>
							<h2 class='text-muted'><?php echo $data["titre"]; ?></h2>
							<p class="font-weight-bold">Prix  <?php echo $data["prix"]; ?>  MAD</p>
							<p><?php echo $data["description"]; ?></p>
							
							<form method='post' action='<?php echo $_SERVER["REQUEST_URI"];?>'>
								<input type='hidden' name='id' value='<?php echo $data["id"]; ?>'>
								<input type='hidden' name='titre' value='<?php echo $data["titre"]; ?>'>
								<input type='hidden' name='prix' value='<?php echo $data["prix"]; ?>'>
								<input type='hidden' name='image' value='<?php echo $data["image"]; ?>'>
									<p><input type='number' min='1' value='1' name='qty' required class='form-control col-md-5'></p>
								<input type='submit' name='submit' value='Ajouter au panier' class='btn btn-primary'>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
    </body>
</html> 