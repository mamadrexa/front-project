<?php
echo "
				<tr class = ''>
				<td>
				<input type='checkbox' name = 'row[]'>
				</td>

				<td>
					{$product['id']}
				</td>
				<td>
					{$product['name']}
				</td>
				<td>
					{$product['email']}
				</td>
				<td>
					{$product['title']}
				</td>
				<td>
					{$product['text']}
				</td>

				<td>

				<a href='../../phps/DeleteMessages.php?id={$product['id']}'><button type='submit' class='btn btn-filled'><span> حذف</span>
				<i class=' icon fas fa-trash-alt'></i></button></a>

				</td>
				</tr>	
    "
                
?>
    	
				