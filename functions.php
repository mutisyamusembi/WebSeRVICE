<?php
 function get_price($find){
  $books=array(
  "c++"=>100,
  "php"=>350,
  "python"=>700,
  );
  
  
  foreach($books as $book=>$price)
  {
		if($book==$find)
		{
		return $price;
		break;
		}
  
  }
}

?>
