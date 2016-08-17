<div class="orders view">
<h2><?php echo __('Pedido'); ?></h2>
	<dl>
		<dt><?php echo __('Numero de pedido'); ?></dt>
		<dd>
			<?php echo h($order['Order']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mesa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($order['Table']['description'], array('controller' => 'tables', 'action' => 'view', $order['Table']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mozo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($order['Waiter']['name'], array('controller' => 'waiters', 'action' => 'view', $order['Waiter']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creado'); ?></dt>
		<dd>
			<?php echo h($order['Order']['created']); ?>
			&nbsp;
		</dd>
		
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php //echo $this->Html->link(__('Edit Order'), array('action' => 'edit', $order['Order']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Order'), array('action' => 'delete', $order['Order']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $order['Order']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tables'), array('controller' => 'tables', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Table'), array('controller' => 'tables', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Waiters'), array('controller' => 'waiters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Waiter'), array('controller' => 'waiters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Foods'), array('controller' => 'foods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Food'), array('controller' => 'foods', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('El cliente solicitó los siguientes articulos al pedido'); ?></h3>
	<?php if (!empty($order['Food'])): 
	//pr($order);
	?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Cantidad'); ?></th>
		<!-- <th class="actions"><?php //echo __('Actions'); ?></th> -->
	</tr>
	<?php foreach ($order['Food'] as $food): ?>
		<tr>
			<td><?php echo $food['id']; ?></td>
			<td><?php echo $food['name']; ?></td>
			<td><?php echo $food['FoodsOrder']['amount']; ?></td>
			<!-- <td class="actions">
				<?php //echo $this->Html->link(__('View'), array('controller' => 'foods', 'action' => 'view', $food['id'])); ?>
				<?php //echo $this->Html->link(__('Edit'), array('controller' => 'foods', 'action' => 'edit', $food['id'])); ?>
				<?php //echo $this->Form->postLink(__('Delete'), array('controller' => 'foods', 'action' => 'delete', $food['id']), array('confirm' => __('Are you sure you want to delete # %s?', $food['id']))); ?>
			</td> -->
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php //echo $this->Html->link(__('New Food'), array('controller' => 'foods', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
