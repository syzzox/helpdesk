<?php 

class ChamadosController extends AppController{

	//public $scaffold;
	public $name = 'Chamados';
	public $primaryKey = 'chamado_id';


	public function index(){

		if ($this->Auth->user('tipo_usuario') == 'admin') {
			
			$chamado = $this->Chamado->find('all');
			$this->set('chamados', $chamado);

		}else{

			$setor_id = $this->Auth->user('setor_id');
			// print $setor_id;

			$lista = array(
				'conditions' => array('Chamado.chamado_setor_id' => $setor_id));

			$chamado = $this->Chamado->find('all', $lista);

			 $this->set('chamados', $chamado);
		}
	
	}

	public function add(){

		if ($this->request->isPost()) {
			# code...

			$this->request->data['Chamado']['usuario_id'] = $this->Auth->user('usuario_id');
			$this->request->data['Chamado']['chamado_setor_id'] = $this->Auth->user('setor_id');

			if($this->Chamado->save($this->request->data)){				
				$this->redirect(array('controller'=>'chamados','action'=>'index'));
				$this->Session->setFlash('Novo chamado cadastrado com sucesso.');
			}else{
				$this->Session->setFlash('Erro em algum dos campos.');
			}
		}
	}

	public function edit($chamado_id = null) {		
		$this->Chamado->id = $chamado_id;
		//salvando o usuario que modificou o chamado
		$this->request->data['Chamado']['usuario_id'] = $this->Auth->user('usuario_id');
		$this->request->data['Chamado']['status_id'];
		if($this->request->is('get')){
			$this->request->data = $this->Chamado->read();
		}
		else{
			if($this->Chamado->save($this->request->data)){
				$this->Session->setFlash('Chamado: ' . $chamado_id . ' foi atualizado!');
				$this->redirect(array('action'=>'index'));
			}

		}

	}	
	
	public function delete($chamado_id){
		if($this->Chamado->delete($chamado_id)){
			$this->Session->setFlash('O chamado com id: ' . $chamado_id . ' foi deletado.');
        	$this->redirect(array('action' => 'index'));
		}
	}
}