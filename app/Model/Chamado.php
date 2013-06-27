<?php

class Chamado extends AppModel{





	public $name = 'Chamado';
	public $useTable = 'uni_chamado';
	public $belongsTo = array(
		'Usuario' => array(
			'className' =>'Usuario',
			'foreignKey' => 'usuario_id'),
		'Status' => array(
			'className' =>'Status',
			'foreignKey' => 'status_id')
		);


	public $validate = array(
		'descricao'=> array(
			'rule'=>'notEmpty',
			'message'=>'Campo obrigatório.'),
		'tipo_problema'=> array(
			'rule'=>'notEmpty',
			'message'=>'Escolha uma das opções.')
		);

}