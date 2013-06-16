<div class="subContractorContacts form">
<?php echo $this->Form->create('SubContractorContact'); ?>
	<fieldset>
		<legend><?php echo __('Add Sub Contractor Contact'); ?></legend>
	<?php
	
		if(isset($subContractorId))
	{
		echo $this->Form->hidden('sub_contractor_id', array('value' => $subContractorId));
	}
	else
	{
		echo $this->Form->input('sub_contractor_id');
	}
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('title');
		echo $this->Form->input('office_phone');
		echo $this->Form->input('mobile_phone');
		echo $this->Form->input('email');
		echo $this->Form->input('position');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sub Contractor Contacts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sub Contractors'), array('controller' => 'sub_contractors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Contractor'), array('controller' => 'sub_contractors', 'action' => 'add')); ?> </li>
	</ul>
</div>
