<?php 



class UsuariosController extends AppController{


	public $name = 'Usuarios';
	
	public function index(){
		$this->set('usuarios', $this->Usuario->find('all'));
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
				
				$this->Session->setFlash('Usuário cadastrado com sucesso.');
				$this->redirect(array('controller'=>'usuarios','action'=>'index'));

			} else {
				# code...
				$this->Session->setFlash('Não foi possível realizar o cadastro!');
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
