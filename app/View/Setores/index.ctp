<div class="container-fluid">
	<div class="hero-unit">
	<h4>Setores</h4>
	<?php echo $this->Html->link('Novo Setor', array('controller'=>'setores', 'action'=>'add')); ?>
	<table class="table">
		<thead>
			<tr>
				<th>Id</th>
				<th>Setor</th>
				<th>Criado</th>
				<th>Deletar</th>
			</tr>
		</thead>
		<?php echo $this->Session->flash(); ?>
		<?php if (!empty($setores)){?>
		<?php foreach($setores as $setor){ ?>
			<tr>
				<td><?php echo $setor['Setor']['setor_id']; ?></td>
				<td><?php echo $setor['Setor']['nome_setor']; ?></td>
				<td><?php echo $setor['Setor']['created'];?></td>
				<td><?php echo $this->Form->postLink(
            'Delete',
            array('action' => 'delete', $setor['Setor']['setor_id']),
            array('confirm' => 'Tem certeza?'));
        ?></td>
			</tr>
		<?php }
		}
		?>
	</table>
	</div>
</div>
