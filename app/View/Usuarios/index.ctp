<div class="container-fluid">
	<div class="hero-unit">
<h4>Usuarios:</h4>
<?php 
echo $this->Html->link('Novo Usuario',array('controller'=>'usuarios', 'action' =>'add')); 
?>
<table class="table">
	<thead>
	<tr>
		<th>ID</th>
		<th>NOME</th>		
		<th>LOGIN</th>
		<th>TIPO</th>
		<th>EDITAR</th>
		<th>DELETAR</th>
		<th>SETOR</th>
	</tr>
	</thead>
	<?php echo $this->Session->flash(); ?>
	<?php foreach ($usuarios as $usuario){ ?>
	<tr>
		<td><?php echo $usuario['Usuario']['usuario_id']; ?></td>
		<td><?php echo $usuario['Usuario']['nome_usuario']; ?></td>		
		<td><?php echo $usuario['Usuario']['login_usuario']; ?></td>
		<td><?php echo $usuario['Usuario']['tipo_usuario']; ?></td>
		<td><?php echo $this->Html->link('Editar', array('action'=>'edit', $usuario['Usuario']['usuario_id']));?></td>
		<td><?php echo $this->Html->link('Deletar',
		array('action'=>'delete', $usuario['Usuario']['usuario_id']),
		array('confirm'=>'Deseja Deletar?'))?></td>
		<td><?php echo $usuario['Setor']['nome_setor']; ?></td>
	</tr>
	<?php } ?>
	



</table>

</div>

<div id="paginator" class="pagination">

	<?php echo $this->Paginator->numbers(); ?>


</div>
</div>

