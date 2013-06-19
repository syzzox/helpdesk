<div class="container-fluid">
	<div class="hero-unit">
			<?php echo $this->Session->flash(); ?>
	<div class="span6">
		<h1>Cadastro de Status</h1>
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa.</p>
	</div>
		<div class="span4">
			
			<?php
			echo $this->Form->create('Status', array('action'=>'add'));
			echo $this->Form->input('descricao_status');
			echo $this->Form->button('Enviar', array('class'=>'btn btn-primary'));
			echo $this->Form->end();

			 ?>
		</div>
	</div>
</div>