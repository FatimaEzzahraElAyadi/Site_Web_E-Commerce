<?php
class Panier{
	public $name;
	public static $nbPaniers=0;
	
	public function set($key,$value){
		$_SESSION['paniers'][$this->name][$key]=$value;
	}
	
	public function getPanier(){
	if(isset($_SESSION['paniers'][$this->name]))
	return $_SESSION['paniers'][$this->name];
	return array();
	}
	
	public function delete($key){
	if(isset($_SESSION['paniers'][$this->name][$key]))
	unset($_SESSION['paniers'][$this->name][$key]);
	
	}
	
	
	
}
?>