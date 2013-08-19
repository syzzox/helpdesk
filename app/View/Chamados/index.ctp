<div class="container-fluid">
	<div class="hero-unit">
<h4>Chamados:</h4>
<?php echo $this->Session->flash(); ?>
<?php 
if (AuthComponent::user('tipo_usuario') == 'admin'){
echo $this->Html->link('Novo Chamado', array(
'controller'=>'chamados','action'=>'add')); 
}?>
<table class="table">
	<thead>
	<tr>
		<th>Usuario</th>
		<th>Setor</th>
		<th>Tipo Problema</th>
		<th>Descrição Problema</th>
		<th>Data Inicio</th>
		<th>Atualizado</th>
		<th>Status</th>
		<th>Data Fim</th>
		<?php 
		$tipo_usuario = AuthComponent::user("tipo_usuario");
		if($tipo_usuario == 'admin'){ ?>		
		<th>Editar</th>
		<th>Deletar</th>
		<?php }else{
			// não aparece nada
			} ?>
	</tr>
	</thead>

	<!-- Inicio do Loop  -->
	<?php foreach ($chamados as $chamado){ ?>

	<?php 
// echo $chamado['Status']['descricao_status'] == 'Aberto' ? '<tr class=warning>' : '<tr>';
	if ($chamado['Status']['descricao_status'] == 'Aberto') {
		echo '<tr class=info>';
	}elseif ($chamado['Status']['descricao_status'] == 'Em Andamento') {
		echo '<tr class=warning>';
	}elseif ($chamado['Status']['descricao_status'] == 'Fechado'){
		echo '<tr class=error>';
	}else{
		echo '<tr>';
	}
	?>
	
	
		<td><?php echo $chamado['Usuario']['nome_usuario']; ?></td>
		<td><?php echo $chamado['Setor']['nome_setor'];	 ?></td>
		<td><?php echo $chamado['Chamado']['tipo_problema']; ?></td>
		<td><?php echo $chamado['Chamado']['descricao']; ?></td>
		<td><?php echo $chamado['Chamado']['created']; ?></td>
		<td><?php echo $chamado['Chamado']['updated']; ?></td>
		<td><?php echo $chamado['Status']['descricao_status']; ?></td>
		<td><?php echo $chamado['Chamado']['data_fim']; ?></td>
		<?php 
		$tipo_usuario = AuthComponent::user("tipo_usuario");
		if($tipo_usuario == 'admin'){ ?>	
		<td><?php echo $this->Html->link('Editar', array('action'=>'edit', $chamado['Chamado']['chamado_id']));?></td>
		<td><?php echo $this->Html->link('Deletar',
		array('action'=>'delete', $chamado['Chamado']['chamado_id']),
		array('confirm'=>'Deseja Deletar?'))?></td>
	</tr>
		<?php 
		//fecha os menus editar e deletar
		 }else{
			//não faz nada
			}
		?>
	<?php 
	// Fim do Loop
	} ?>
</table>
</div>
</div>