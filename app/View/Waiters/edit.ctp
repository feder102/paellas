<div class="waiters form">
<?php echo $this->Form->create('Waiter'); ?>
	<fieldset>
		<legend><?php echo __('Edit Waiter'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('dni');
		echo $this->Form->input('deleted');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Waiter.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Waiter.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Waiters'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
