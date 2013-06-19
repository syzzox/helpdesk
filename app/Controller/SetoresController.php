<?php 

/**
* 
*/
class SetoresController extends AppController
{
	//$uses manda usar o model Setor
	public $uses = array('Setor');	

	public function index(){
	$this->set('setores', $this->Setor->find('all'));

	}

	public function add(){
		if ($this->request->isPost()) {
			# code...
			$this->Setor->create();
			if ($this->Setor->save($this->request->data)) {
				# code...
				$this->Session->setFlash('Setor cadastrado com sucesso.');
				$this->redirect(array('controller'=>'setores','action'=>'index'));

			} else {
				# code...
				$this->Session->setFlash('Não foi possível realizar o cadastro!');
			}

		}
	}

	public function delete($setor_id){
		if($this->Setor->delete($setor_id)){
			$this->Session->setFlash('O Setor com id: ' . $setor_id . ' foi deletado.');
        	$this->redirect(array('action' => 'index'));
		}
	}

	
}