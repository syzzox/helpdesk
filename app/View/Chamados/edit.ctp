<div class="container-fluid">
	<div class="hero-unit">
	<div class="offset2 span7">
		<h4>Editar Chamado</h4>
		<?php
		echo $this->Form->create('Chamado', array('controller'=>'chamado','action'=>'edit'));
		echo $this->Form->input('data_fim');
		echo $this->Form->radio('status_id', array('2' =>'Em andamento', '3' => 'Fechado'));
		echo $this->Form->radio('tipo_problema',array(
			'computador'=>'Computador','impressora'=>'Impressora','scanner'=>'Scanner','outros'=>'Outros'),
		array('class'=>'radio'));
		echo $this->Form->input('descricao', array('type'=>'textarea', 'label' =>'Descrição do Problema','class'=>'textarea'));
		echo $this->Form->button('Alterar', array('class'=>'btn btn-primary'));
		echo $this->Form->end();
		?>
	</div>
	</div>
</div>
