<div class="gantts form">
<?php echo $this->Form->create('Gantt'); ?>
	<fieldset>
		<legend><?php echo __('Add Gantt'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('start_date');
		echo $this->Form->input('end_date');
		echo $this->Form->input('instrument_id');
		echo $this->Form->input('active');
		echo $this->Form->input('before');
		echo $this->Form->input('critial');
		echo $this->Form->input('progress');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Gantts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Instruments'), array('controller' => 'instruments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instrument'), array('controller' => 'instruments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Document Schedules'), array('controller' => 'document_schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document Schedule'), array('controller' => 'document_schedules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trackers'), array('controller' => 'trackers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tracker'), array('controller' => 'trackers', 'action' => 'add')); ?> </li>
	</ul>
</div>
