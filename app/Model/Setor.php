<?php 

/**
* 
*/
class Setor extends AppModel
{
	
	public $name = 'Setor';
	public $useTable = 'uni_setor';
	public $primaryKey = 'setor_id';
	

	public $validate = array(
		'nome_setor'=>array(
			'rule'=>'notEmpty',
			'message'=>'Campo obrigatorio.')
		);
}