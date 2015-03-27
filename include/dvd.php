<?php 
	require_once('products.php');
	/**
	* 
	*/
	class Dvd extends Product
	{
		protected $duration;
		public function __construct($type,$title,$duration)
		{	
			parent::__construct($type,$title);
			$this->_duration=$duration;
		}
		public function getDuration()
		{
			return $this->_duration;
		}
	}
 ?>