<?php echo $this->Html->script('jquery-3-1'); 
	  echo $this->Html->script('jquery.addfield');	
?>
<div class="orders form">
<?php echo $this->Form->create('Order'); ?>
	<fieldset>
		<legend><?php echo __('Nueva orden'); ?></legend>
	<?php
		echo $this->Form->input('table_id',array('label'=>'Mesa'));
		echo $this->Form->input('waiter_id',array('label'=>'Mozo'));
		//echo $this->Form->input('deleted');
		
	?>
	<div class="row">
		<div class="col-md-4" id="div_1" style="background: gainsboro;border-radius: 20px;">
			<!-- <label>AGREGAR 
			<span class="small">Producto a la orden</span>
			</label> -->
			<?php echo $this->Form->input('Food..food_id',array('label'=>'Producto')); ?>
			<?php echo $this->Form->input('Food..amount',array('label'=>'Cantidad','type'=>'number','style'=>'width:40px;heigth:40px','value'=>0)); ?>
		    <!-- <span style="float:left;padding: 8px 0px 8px 8px;">Cantidad:</span> <input type="text"   name="cantidadmateriales[]"  style="width:40px;" /> -->
		    <input class="bt_plus" id="1" type="button" value="+" />
		    <div class="error_form"></div>
		</div>
	</div>
	</fieldset>
	<!-- <a href='javascript:window.print(); void 0;'>Imprimir</a> 
	<input type='button' onclick='window.print();' value='Imprimir' />  -->
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Orders'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tables'), array('controller' => 'tables', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Table'), array('controller' => 'tables', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Waiters'), array('controller' => 'waiters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Waiter'), array('controller' => 'waiters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Foods'), array('controller' => 'foods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Food'), array('controller' => 'foods', 'action' => 'add')); ?> </li>
	</ul>
</div>
