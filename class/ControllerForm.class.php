<?php 

/**
* 
*/
class ControllerForm
{
	public $ModelForm;
	public $tampilpekerjaan;

	function view ($data)
	{
		$this->ModelForm = new ModelForm();
		$pekerjaan = $this->ModelForm->pekerjaan();

		$v = new ViewForm();
		$v->tampilkan($data, $pekerjaan);
	}

	function form(){
		include "Form.php";
	}
}