<div class="foods form">
<?php echo $this->Form->create('Food'); ?>
	<fieldset>
		<legend><?php echo __('Add Food'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('stock');
		echo $this->Form->input('price');
		echo $this->Form->input('deleted');
		echo $this->Form->input('category_id');
		//echo $this->Form->input('Order');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Foods'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
