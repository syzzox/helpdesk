<?php 

class ChamadosController extends AppController{

	//public $scaffold;
	public $name = 'Chamados';
	public $primaryKey = 'chamado_id';



	public function index(){
		$chamado = $this->Chamado->find('all');	
		$this->set('chamados', $chamado);

		// $user = $this->Chamado->Usuario->find('list', array(
		// 	'fields' => array(
		// 		'usuario_id', 'nome_usuario')));
		// //print_r($user); exit();
		// $this->set('usuarios', $user);
	}

	public function add(){

		if ($this->request->isPost()) {
			# code...
			$this->request->data['Chamado']['usuario_id'] = $this->Auth->user('usuario_id');

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