<?php 

class ChamadosController extends AppController{

	//public $scaffold;
	public $name = 'Chamados';

	public function index(){
		$this->set('chamados', $this->Chamado->find('all'));
	}
	public function add(){
		if ($this->request->isPost()) {
			# code...
			$this->request->data['Chamado']['usuario_chamado'] = $this->Auth->user('nome_usuario');
			if($this->Chamado->save($this->request->data)){
				$this->redirect(array('controller'=>'chamados','action'=>'index'));
				$this->Session->setFlash('Novo chamado cadastrado com sucesso.');
			}else{
				$this->Session->setFlash('Erro em algum dos campos.');
			}
		}
	}

	public function delete($id_chamado){
		if ($this->Chamado->delete($id_chamado)) {
			# code...
			$this->Session->setFlash('O status'. $id_Chamado .'foi deletado');
			$this->redirect(array('controller'=>'chamados','action'=>'index'));
		}else{
			$this->Session->setFlash('Não foi possivel deletar o status');
		}

	}
}