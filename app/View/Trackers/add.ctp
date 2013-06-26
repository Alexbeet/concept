<div class="trackers form">
<?php echo $this->Form->create('Tracker'); ?>
	<fieldset>
		<legend><?php echo __('Add Tracker'); ?></legend>
	<?php
		echo $this->Form->hidden('instrument_id', array('value' => $instrumentId));
		echo $this->Form->input('Tracker.name');
		echo $this->Form->input('Tracker.description');
		echo $this->Form->input('Gantt.start_date');
		echo $this->Form->input('Gantt.end_date');
		echo $this->Form->input('Tracker.comments');
		echo $this->Form->input('trackerprogress');
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
