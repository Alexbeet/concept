<div class="documentSchedules form">
<?php echo $this->Form->create('DocumentSchedule'); ?>
	<fieldset>
		<legend><?php echo __('Add Document Schedule'); ?></legend>
	<?php
		echo $this->Form->input('instrument_id');
		echo $this->Form->input('document_name');
		echo $this->Form->input('description');
		echo $this->Form->input('required_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Document Schedules'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Instruments'), array('controller' => 'instruments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instrument'), array('controller' => 'instruments', 'action' => 'add')); ?> </li>
	</ul>
</div>
