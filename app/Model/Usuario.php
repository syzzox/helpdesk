<?php 

App::uses('AuthComponent', 'Controller/Component');

class Usuario extends AppModel{

	public $name = 'Usuario';
	public $primaryKey = 'usuario_id';
	public $useTable = 'uni_usuario';
	public $belongsTo = array(
		'Setor' => array(
			'className' =>'Setor',
			'foreignKey' => 'id_setor')
		);

	public $validate = array(
		'login_usuario'=>array(
			'rule'=>'notEmpty',
			'message'=>'Preencha o campo login.'	
			),
		'senha_usuario'=>array(
			'rule'=>'notEmpty',
			'message'=>'Preencha o campo senha.'
			)
		);


	public function beforeSave($options = array()) {
		if (isset($this->data['Usuario']['senha_usuario'])) {
		$password = &$this->data['Usuario']['senha_usuario'];
		$password = AuthComponent::password($password);
		}
		return parent::beforeSave($options);
		}

}