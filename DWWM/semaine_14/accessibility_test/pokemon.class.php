<?php
class pokemon
{
	protected $_name;
	protected $_type;
	protected $_num;
	
	public function showPokemon($pName,$pType,$pNum){
		$this->_name = $pName;
		$this->_type = $pType;
		$this->_num = $pNum;
	}
	
}
?>

