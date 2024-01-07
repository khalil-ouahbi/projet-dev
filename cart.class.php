<?php 
if(!session_id()){
	session_start();
}


 
	class Cart{
		
		protected $cart_items=array();
		
		public function __construct(){
			
			if(!isset($_SESSION["cart"])){
				$_SESSION["cart"]=[];
			}
			
			$this->cart_items=$_SESSION["cart"];
		}
		
		#get all ids of items
		public function get_ids(){
			$ids=[];
			foreach($this->cart_items as $item){
				$ids[]=$item["id"];
			}
			return $ids;
		}
		
		
		#add item to cart
		public function add_to_cart($item=[]){
			if(isset($item["id"],$item["titre"],$item["prix"],$item["qty"],$item["total"])){
				
				#Check Product already exists
				$ids=$this->get_ids();
				if(in_array($item["id"],$ids)){
					
					#update qty and total
					$this->cart_items[$item["id"]]["qty"]+=$item["qty"];
					$this->cart_items[$item["id"]]["total"]=$this->cart_items[$item["id"]]["qty"]*$item["prix"];
				}else{
					
					#add item to cart
					$this->cart_items[$item["id"]]=$item;
				}
				
				$this->commit();
				return true;
			}else{
				return false;
			}
		}
		
		#update cart qty
		public function update_cart($item=[]){
			$this->cart_items[$item["id"]]["qty"]=$item["qty"];
			$this->cart_items[$item["id"]]["total"]=$this->cart_items[$item["id"]]["qty"]*$this->cart_items[$item["id"]]["prix"];
			$this->commit();
			return true;
		}
		
		#remove item from cart
		public function remove($id){
			unset($this->cart_items[$id]);
			$this->commit();
		}
		
		#get cart total
		public function get_cart_total(){
			#update cart total
			$sum=0;
			foreach($this->cart_items as $item){
				$sum+=$item["total"];
			}
			return $sum;
		}
		
		#get cart item count
		public function get_cart_count(){
			return count($this->cart_items);
		}
		
		#update values to session
		public function commit(){
			$_SESSION["cart"]=$this->cart_items;
		}
		
		#destroy cart
		public function destroy(){
			$this->cart_contents = array('cart_total' => 0, 'cart_items_count' => 0); 
			unset($_SESSION["cart"]);
		}
		
		#get single item from cart
		public function get_item($id){
			return $this->cart_items[$id];
		}
		
		#get all items from cart
		public function get_all_items(){
			return $this->cart_items;
		}
	}


?>