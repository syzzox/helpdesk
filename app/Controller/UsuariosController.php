<?php 



class UsuariosController extends AppController{


	public $name = 'Usuarios';




	public function index(){
		$this->set('usuarios', $this->Usuario->find('all'));
		$paginador = array('limit' => 5);
		$this->paginate = $paginador;

		$usuario = $this->paginate('Usuario');

		$this->set('usuarios', $usuario);
	}

	public function add(){

		$setores = $this->Usuario->Setor->find('list',array(
        			'fields' => array('setor_id','nome_setor')
        			));
  	       // print_r($setores); exit();

			$this->set('setores', $setores);


		if ($this->request->isPost()) {

			$this->Usuario->create();

			if ($this->Usuario->save($this->request->data)){
				# code...

				$this->Session->setFlash('Salvo com sucesso.');
				$this->redirect(array('controller' => 'pages', 'action' =>'index'));

			} else {
				# code...
				$this->Session->setFlash('Não foi possível realizar o cadastro!');
			}

		}

	}
		public function new_password($usuario_id = null){
		 
		

      $user = $this->Usuario->find('first', array(
		'conditions' => array(
		'Usuario.usuario_id' => $this->Auth->user('usuario_id'))
		));

		if ($this->request->is('post') || $this->request->is('put')) {

			$this->Usuario->usuario_id = $usuario_id;

		if ($this->Usuario->save($this->request->data))
		{
		// $this->Usuario->saveField('senha_usuario', AuthComponent::password($this->request->data['Usuario']['senha_usuario']));

		$this->Session->setFlash(__('Sua senha foi alterado com sucesso!'));

		// $this->redirect(array('controller' => 'pages', 'action' => 'index'));

		}
		else
		{
		$this->Session->setFlash(__('Tente novamente!'));
		}

		}

       
		
		
		}
	


		public function edit($usuario_id = null) {

		$setores = $this->Usuario->Setor->find('list',array(
		'fields' => array('setor_id','nome_setor')
		));

		// print_r($setores); exit();

		$this->set('setores', $setores);


       if (!$usuario_id) {
           throw new NotFoundException(__('Invalid usuario'));
       }

       $usuario = $this->Usuario->read(null, $usuario_id);
       if (!$usuario) {
           throw new NotFoundException(__('Invalid usuario'));


       }
       if ($this->request->is('post') || $this->request->is('put')) {

           $this->Usuario->id_usuario = $usuario_id;

           if ($this->Usuario->save($this->request->data)) {
               $this->Session->setFlash('O usuario com id:'. $usuario_id . ' foi atualizado.');
               $this->redirect(array('action' => 'index'));
           } else {
               $this->Session->setFlash('Não foi possivel atualizar o usuario.');
           }
       }
       if (!$this->request->data) {
           $this->request->data = $usuario;
       }

   }


	public function delete($usuario_id){
		if($this->Usuario->delete($usuario_id)){
			$this->Session->setFlash('O usuario com id: ' . $usuario_id . ' foi deletado.');
        	$this->redirect(array('action' => 'index'));
		}
	}

		public function login(){
		if($this->Auth->login()){
			$this->redirect($this->Auth->redirect());
		}else{
			$this->Session->setFlash('Dados incorretos!');
		}


	}

	public function logout(){
	$this->redirect($this->Auth->logout());
	}

}
