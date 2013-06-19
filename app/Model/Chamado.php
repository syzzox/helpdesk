<?php

class Chamado extends AppModel{
	
	public $useTable = 'uni_chamado';

	public $validate = array(
		'descricao'=> array(
			'rule'=>'notEmpty',
			'message'=>'Campo obrigatório.'),
		'tipo_problema'=> array(
			'rule'=>'notEmpty',
			'message'=>'Escolha uma das opções.')
		);

}