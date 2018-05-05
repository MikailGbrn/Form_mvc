<?php 

/**
* 
*/
class ModelForm
{
	public $a=array("Google","Pertamina","Net TV","Unilever","Go-Jek","WWF");
	function pekerjaan()
	{
		$random_keys=array_rand($this->a);
		return $this->a[$random_keys];
	}
}