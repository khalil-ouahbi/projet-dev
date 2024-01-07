<?php 
	include "config.php";
	session_start();
	
	include "cart.class.php";
	$cart=new Cart();
?>
<html>
	<head>
        <title>Panier</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
		<?php include "navbar.php"; ?>
        <div class='container mt-3'>
			<div class='row'>
				<div class='col-md-12'>
					<h2 class='text-muted mb-4'>VOTRE PANIER</h2>
					<?php if($cart->get_cart_total()>0): ?>
					<table class='table table-striped table-bordered'>
						<thead>
							<tr>
								<th colspan='2' class='text-center'>Produit</th>
								<th>Prix</th>
								<th>Quantité</th>
								<th>Total</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php $items=$cart->get_all_items(); ?>
						<?php foreach($items as $item): ?>
							<tr>
								<td><img src='<?php echo $item["image"];?>' style='height:80px;' ></td>
								<td><?php echo $item["titre"];?></td>
								<td><?php echo $item["prix"];?>DH   </td>
								<td><input type='number' value='<?php echo $item["qty"];?>' class='qty' pid='<?php echo $item["id"]; ?>' min='1'></td>
								<td><span class='row_total'><?php echo $item["total"];?>DH </span></td>
								<td><a href='remove.php?id=<?php echo $item["id"]; ?>' onclick="return confirm('Vous etes sur?')">Suprimé</a></td>
							</tr>
						<?php endforeach; ?>
						</tbody>
						<tfoot>
							<tr>
								<td colspan='3'><a href='index.php' class="btn btn-success">Revenir à l'acceuil</a></td>
								<th>Total</th>
								<th><span id='total'><?php echo $cart->get_cart_total();?>DH  </span></th>
								<td><a href='valider.php' class='btn btn-info'>Valider</a></td>
							</tr>
						</tfoot>
					</table>
					<?php else: ?>
						<div class='alert alert-warning'>Panier est vide...</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<script>
			$(document).ready(function(){
				$(".qty").change(function(){
					update_cart($(this));
				});
				$(".qty").keyup(function(){
					update_cart($(this));
				});
				
				function update_cart(cls){
					var pid=$(cls).attr("pid");
					var q=$(cls).val();
					
					$.ajax({
						url:"ajax_update_cart.php",
						type:"post",
						data:{id:pid,qty:q},
						success:function(res){
							console.log(res);
							
							var a=JSON.parse(res);
							$("#total").text(a.total);
							$(cls).closest("tr").find(".row_total").text(a.row_total);
						}
					});
				}
			});
		</script>
    </body>
</html> 