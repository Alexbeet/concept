<div class="trackers form">
<?php echo $this->Form->create('Tracker'); ?>
	<fieldset>
		<legend><?php echo __('Add Tracker'); ?></legend>
	<?php
		echo $this->Form->input('instrument_id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('start_date');
		echo $this->Form->input('end_date');
		echo $this->Form->input('comments');
		echo $this->Form->input('progress');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Trackers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Instruments'), array('controller' => 'instruments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instrument'), array('controller' => 'instruments', 'action' => 'add')); ?> </li>
	</ul>
</div>
