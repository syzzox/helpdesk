<div class="container-fluid">
	<div class="hero-unit">
	<div class="offset2 span7">
		<h4>Cadastrar Chamado</h4>
		
		<?php
		echo $this->Form->create('Chamado', array('action'=>'add'));
		//echo $this->Form->input('Usuario');
		echo $this->Form->radio('tipo_problema',array(
			'computador'=>'Computador','impressora'=>'Impressora','scanner'=>'Scanner','outros'=>'Outros'),
		array('class'=>'radio'));
		echo $this->Form->input('descricao', array('type'=>'textarea', 'label' =>'Descrição do Problema','class'=>'textarea'));
		echo $this->Form->button('Cadastrar', array('class'=>'btn btn-primary'));
		echo $this->Form->end();
		?>
	</div>
	</div>
</div>
