<div class="container-fluid">

	<div class="hero-unit">
		<?php echo $this->Session->flash(); ?>
	<div class="span6">
		<h1>Nova Senha</h1>
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa.</p>
	</div>
		<div class="span4">
		<?php
		echo $this->Form->create('Usuario',array('controller'=>'usuarios', 'action' => 'new_password'));		
		echo $this->Form->input('senha_usuario', array('type' => 'password'));
		echo $this->Form->input('usuario_id', array('type' => 'hidden'));
		echo $this->Form->button('Enviar', array('class'=>'btn btn-primary'));
		echo $this->Form->end();

		
		?>
		</div>
	</div>
</div>