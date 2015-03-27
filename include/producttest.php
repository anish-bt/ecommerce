<?php
	require_once('book.php');
	require_once('dvd.php');
	require_once('mobile.php');
/* $product=new product();
echo $product->setProductType('bla bla hahahah');
echo $product->getProductType();*/
 ?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php
	
		$book1=new Book('Book','Learning Python',1150);
		echo '<p>"'.$book1->getTitle().'"has'.$book1->getPageCount().'pages</p>';
		$book=new Book('Book','Object Oriented Solutions',300);
		echo '<p>"'.$book->getTitle().'"has'.$book->getPageCount().'pages</p>';
		$dvd=new Dvd('DVD','Atonment',1);
		echo'<p>"'.$dvd->getTitle().'"has'.$dvd->getDuration().'Hour Duration</p>';
		$mobile=new Mobile('3G','Lumia','Black','microsoft','1000');
		echo 'Mobile Description';
		echo'<p>" '.$mobile->getProductType().'</br>'.$mobile->getTitle().'"</br>'.$mobile->getColor().' &nbsp Cost '.$mobile->getPrice().'</br>Company:&nbsp;'.$mobile->getCompany().'</p>';
		/*$product1=new Product('Book','PHP Object Oriented Solutions');
		$product2=new Product('DVD','Atonment');
		echo '<p>$product1 is a'.$product1->getProductType();
		echo 'called"'.$product1->getTitle().'"</p>';
		echo'<p>$product2 is a'.$product2->getProductType();
		echo 'called"'.$product2->getTitle().'"</p>';*/
	 ?> 
</body>
</html>