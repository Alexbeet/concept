<div class="documentSchedules form">
<?php echo $this->Form->create('DocumentSchedule'); ?>
	<fieldset>
		<legend><?php echo __('Add Document Schedule'); ?></legend>
	<?php
		echo $this->Form->hidden('instrument_id', array('value' => $instrumentId));
		echo $this->Form->input('document_name');
		echo $this->Form->input('description');
		echo $this->Form->input('required_date', array('id' => 'datepicker','type' => 'text'));
		
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

  <script>
  $(function() {
    $( "#datepicker" ).datepicker({dateFormat: "yy-mm-dd" });
  });
  </script>