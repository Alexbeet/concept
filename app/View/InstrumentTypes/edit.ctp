<div class="instrumentTypes form">
<?php echo $this->Form->create('InstrumentType'); ?>
	<fieldset>
		<legend><?php echo __('Edit Instrument Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('InstrumentType.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('InstrumentType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Instrument Types'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Instruments'), array('controller' => 'instruments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instrument'), array('controller' => 'instruments', 'action' => 'add')); ?> </li>
	</ul>
</div>