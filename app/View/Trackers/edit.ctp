<div class="trackers form">
<?php echo $this->Form->create('Tracker'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tracker'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->hidden('instrument_id', array('conditions' => array('value' => $tracker['Tracker']['instrument_id'])));
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Tracker.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Tracker.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Trackers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Instruments'), array('controller' => 'instruments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instrument'), array('controller' => 'instruments', 'action' => 'add')); ?> </li>
	</ul>
</div>

<pre>

<?php print_r($tracker)?>
</pre>