<div class="container-fluid">
	<div class="hero-unit">
<h4>Chamados:</h4>

<?php echo $this->Html->link('Novo Chamado', array(
'controller'=>'chamados','action'=>'add')); ?>
<table class="table">
	<thead>
	<tr>
		<th>Usuario</th>
		<th>Tipo Problema</th>
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
		<td><?php echo $chamado['Chamado']['tipo_problema']; ?></td>
		<td><?php echo $chamado['Chamado']['descricao']; ?></td>
		<td><?php echo $chamado['Chamado']['created']; ?></td>
		<td><?php echo $chamado['Chamado']['updated']; ?></td>
		<td><?php echo $chamado['Status']['descricao_status']; ?></td>
		<td><?php echo $chamado['Chamado']['data_fim']; ?></td>
		<td></td>
		<td></td>
	</tr>
	<?php } ?>
</table>
</div>
</div>