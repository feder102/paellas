<div class="orders index">
	<h2><?php echo __('Pedidos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('table_id'); ?></th>
			<th><?php echo $this->Paginator->sort('waiter_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('deleted'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($orders as $order): ?>
	<tr>
		<td><?php echo h($order['Order']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($order['Table']['description'], array('controller' => 'tables', 'action' => 'view', $order['Table']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($order['Waiter']['name'], array('controller' => 'waiters', 'action' => 'view', $order['Waiter']['id'])); ?>
		</td>
		<td><?php echo h($order['Order']['created']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['modified']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['deleted']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $order['Order']['id'])); ?>
			<?php //echo $this->Html->link(__('Edit'), array('action' => 'edit', $order['Order']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $order['Order']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $order['Order']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Antes'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Despues') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo pedido'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listado de mesas'), array('controller' => 'tables', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Mesa'), array('controller' => 'tables', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado de mozos'), array('controller' => 'waiters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo mozo'), array('controller' => 'waiters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado de comidas/bebidas'), array('controller' => 'foods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva comida/bebida'), array('controller' => 'foods', 'action' => 'add')); ?> </li>
	</ul>
</div>
