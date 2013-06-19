<?php 

/**
* 
*/
class StatusController extends AppController
{

	public $uses = array('Status');


	public function index(){
	$this->set('Status', $this->Status->find('all'));
	}

	public function add(){
	if($this->request->isPost()){
		$this->Status->create();
		if($this->Status->save($this->request->data)){
			$this->Session->setFlash('Status foi cadastrado com sucesso.');
			$this->redirect(array('action'=>'index'));
		}else{
			$this->Session->setFlash('Não foi possivel cadastrar o status.');
		}
	  }
	}

	public function delete($id_status){
		if ($this->Status->delete($id_status)) {
			# code...
			$this->Session->setFlash('O status :'. $id_status .' foi deletado');
			$this->redirect(array('action'=>'index'));
		}else{
			$this->Session->setFlash('Não foi possivel deletar o status');
		}

	}
}