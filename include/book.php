<?php 
	/**
	* 
	*/
	require_once('products.php');
	class Book extends Product
	{
		protected $_pageCount;
		
		public function __construct($type,$title,$pageCount)
		{   
			parent::__construct($type,$title);
			$this->_pageCount=$pageCount;
		}
		public function getPageCount()
		{
			return $this->_pageCount;
		}
	}
 ?>