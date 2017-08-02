<?php namespace NisarAkbar\Calculator;

/**
*  A sample class
*
*  Use this section to define what this class is doing, the PHPDocumentator will use this
*  to automatically generate an API documentation using this information.
*
*  @author yourname
*/
class Math{
	private $a;
	private $b;
   __construct($a,$b){
	   $this->a=$a;
	   $this->b=$b;
   }
   
   public function add(){
	   return $this->a+$this->b;
   }
}