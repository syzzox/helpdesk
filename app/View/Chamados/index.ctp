<div class="container-fluid">
	<div class="hero-unit">
<h4>Chamados:</h4>

<?php echo $this->Html->link('Novo Chamado', array(
'controller'=>'chamados','action'=>'add')); ?>
<table class="table">
	<thead>
	<tr>
		
		<th>Usuario</th>
		<th>Descrição Problema</th>
		<th>Data Inicio</th>
		<th>Atualizado</th>
		<th>Status</th>
		<th>Data Fim</th>
		<th>Editar</th>
		<th>Deletar</th>
		
	</tr>
	</thead>
	<?php foreach ($chamados as $chamado){ ?>
	<tr>
		<td><?php echo $chamado['Chamados']['id_usuario']; ?></td>
		<td><?php echo $chamado['Chamados']['desc_problema']; ?></td>
		<td><?php echo $chamado['Chamados']['created']; ?></td>
		<td><?php echo $chamado['Chamados']['updated']; ?></td>
		<td><?php echo $chamado['Chamados']['status_chamado']; ?></td>
		<td><?php echo $chamado['Chamados']['tipo_problema']; ?></td>
		<td></td>
		<td></td>
	</tr>
	<?php }?>
</table>
</div>
</div>