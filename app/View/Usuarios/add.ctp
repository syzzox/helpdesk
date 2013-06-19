<div class="container-fluid">

	<div class="hero-unit">
		<?php echo $this->Session->flash(); ?>
	<div class="span6">
		<h1>Cadastrar os Usuarios</h1>
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa.</p>
	</div>
		<div class="span4">
		<?php
		echo $this->Form->create('Usuario');
		echo $this->Form->input('nome_usuario');
		echo $this->Form->input('login_usuario');
		echo $this->Form->input('senha_usuario', array('type' => 'password'));
		echo $this->Form->radio('tipo_usuario', array('admin' => 'Admin', 'cooperado' => 'Cooperado'),
		array('class'=>'radio'));
	 	echo $this->Form->input('id_setor', array('type' =>'select'));
		echo $this->Form->button('Enviar', array('class'=>'btn btn-primary'));
		echo $this->Form->end();
		
		?>
		</div>
	</div>
</div>