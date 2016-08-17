<div class="categories view">
<h2><?php echo __('Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($category['Category']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($category['Category']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($category['Category']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($category['Category']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deleted'); ?></dt>
		<dd>
			<?php echo h($category['Category']['deleted']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Category'), array('action' => 'edit', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Category'), array('action' => 'delete', $category['Category']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $category['Category']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Foods'), array('controller' => 'foods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Food'), array('controller' => 'foods', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Foods'); ?></h3>
	<?php if (!empty($category['Food'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Stock'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Deleted'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($category['Food'] as $food): ?>
		<tr>
			<td><?php echo $food['id']; ?></td>
			<td><?php echo $food['name']; ?></td>
			<td><?php echo $food['stock']; ?></td>
			<td><?php echo $food['price']; ?></td>
			<td><?php echo $food['deleted']; ?></td>
			<td><?php echo $food['created']; ?></td>
			<td><?php echo $food['modified']; ?></td>
			<td><?php echo $food['category_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'foods', 'action' => 'view', $food['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'foods', 'action' => 'edit', $food['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'foods', 'action' => 'delete', $food['id']), array('confirm' => __('Are you sure you want to delete # %s?', $food['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Food'), array('controller' => 'foods', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
