<div class="instruments form">
<?php echo $this->Form->create('Instrument'); ?>
	<fieldset>
		<legend><?php echo __('Add Instrument'); ?></legend>
	<?php
		echo $this->Form->input('instrument_type_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Instruments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Instrument Types'), array('controller' => 'instrument_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instrument Type'), array('controller' => 'instrument_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Document Schedules'), array('controller' => 'document_schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document Schedule'), array('controller' => 'document_schedules', 'action' => 'add')); ?> </li>
	</ul>
</div>
