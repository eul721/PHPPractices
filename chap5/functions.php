<?php
class tempClass{
	private $attribute;
	private $prival;
	public $pub;
	
	function __construct($param){
		echo "<p>Constructor called with parameter: ". $param . "</p>";
		$this->pub = 5;
	}
	function __set($name,$param){
		echo "<p>setting attribute to $param </p>";
		$this->$name = $param;
	}
	function __get($name){
		return $this->$name;
	}
	function __isset($name){
		return isset($this->$name);
	}
	function __unset($name){
		unset($this->$name);
	}
	function setPrival($param){
		echo "<p>Setting prival</p>";
		$this->prival = $param;
	}
	function getPrival(){
		echo "<p>Getting prival</p>";
		return $this->prival;
	}
}
?>
<?php
	$myClass = new tempClass("Hello World!");
	$myClass->setPrival(5);
	echo $myClass->getPrival();
	echo $myClass->pub;
?>
