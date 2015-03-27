<html>
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<?php
	/**
	*
	*/
	class Product
	{
		protected $_type;
		protected $_title;
		// protected $_type;
		// protected $_title;

		// public function __construct($type,$title)
		// {
		// 	$this->_type=$type;
		// 	$this->_title=$title;
		// }
		// public function getProductType()
		// {
		// 	return $this->_type;
		// }
		// public function getTitle()
		// {
		// 	return $this->_title;
		// }
		public function getProductType()
		{
			return $this->_type;
		}
		public function getTitle()
		{
			return $this->_title;
		}
		public function __construct($type,$title)
		{
			$this->_type=$type;
			$this->_title=$title;
		}
		
		/*public function setProductType($type)
		{
			$this->_type=$type;
		}*/
	}
 ?>
</body>
</html>