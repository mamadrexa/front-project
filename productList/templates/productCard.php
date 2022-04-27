<?php
echo "
				<article class = 'card-filled'>
				<img src = '{$product['imagesrc']}'class='card-img'><br>
					<div class = 'card-body'>
						<h2> <a class = 'card-component-fill' href = 'productDetails_controller.php?id={$product['id']}'> {$product['title']} </a></h2>
						<p>مدت : {$product['duration']}</p>
						<p>{$product['discription']}</p>	
						<p>قیمت: {$product['price']}</p>			
					</div>
				</article>	
    "
                
?>
    	
				