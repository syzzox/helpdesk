<?php 

/**
* 
*/
class Status extends AppModel
{
	public $name = 'uni_status';
	public $useTable = 'uni_status';
	public $primaryKey = 'status_id';

	public $validate  = array(
		'descricao_status' => array(
		'rule' =>'notEmpty',
		'message'=>'Por favor,insira um status.')
		);
}