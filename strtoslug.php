<?php 

class strtoslug
{ 

	private $_result;

	public function strtoslug($string)
	{

		mb_internal_encoding('UTF-8');	
		$string = mb_strtolower($string);
		$string = preg_replace('/ /', '-', $string);
		$string = preg_replace('[á|à|â|ã|ª|ä]','a',$string);
		$string = preg_replace("[í|ì|ï]","i",$string);	
		$string = preg_replace("[é|è|ê|ë]","e",$string);	
		$string = preg_replace("[ó|ò|ô|õ|º|ö]","o",$string);	
		$string = preg_replace("[ú|ù|û|ü]","u",$string);
		$string = preg_replace("[\+|\:|\!|\@|\#|\\$|\%|\&|\*|\(|\)|\§|\¬|\¢|\£|\³|\²|\¹|\.|\,|\;|\?|\°|\<|\>|\|\\|\/|\'\"]","",$string);
		$string = str_replace('ç', 'c', $string);
		$string = str_replace('ñ', 'n', $string);
		$result = $string;
		
		$this->setResult($result);

		return $this->getResult();

	}

	public function setResult($result)
	{

		$this->_result = $result;
		return $this->_result;
	
	}
	
	public function getResult()
	{

		return $this->_result;

	} 

}

?>