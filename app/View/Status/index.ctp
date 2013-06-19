<div class="container-fluid">
	<div class="hero-unit">
	<h4>Status do Chamado</h4>
	<?php echo $this->Html->link('Novo Status', array('controller'=>'status', 'action'=>'add')); ?>
	<table class="table">
		<thead>
			<tr>
				<th>Id</th>
				<th>Descrição</th>
				<th>Criado</th>
				<th>Deletar</th>
			</tr>
		</thead>
		<?php echo $this->Session->flash(); ?>
		<?php foreach($Status as $value){ ?>
			<tr>
				<td><?php echo $value['Status']['status_id']; ?></td>
				<td><?php echo $value['Status']['descricao_status']; ?></td>
				<td><?php echo $value['Status']['created'];?></td>
				<td><?php echo $this->Form->postLink(
            'Delete',	
            array('action' => 'delete', $value['Status']['status_id']),
            array('confirm' => 'Tem certeza?'));
        ?></td>
			</tr>
		<?php }	?>
	</table>
	</div>
</div>
