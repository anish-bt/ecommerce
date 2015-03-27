<html>
<head>
	<meta charset="UTF-8">
	<title>Mobiles</title>
</head>
<body>
<?php 
	require_once("products.php");
	class Mobile extends product
	{
		protected $_color;
		protected $_company;
		protected $_price;
		public function __construct($type,$title,$color,$company,$price)
		{
			parent::__construct($type,$title);
			$this->_color=$color;
			$this->_company=$company;
			$this->_price=$price;
		}
		public function getColor()
		{
			return $this->_color;
		}
		public function getCompany()
		{
			return $this->_company;
		}
		public function getPrice()
		{
			return $this->_price;
		}
	}
 ?>
</body>
</html>