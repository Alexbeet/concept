<div class="subContractors form">
<?php echo $this->Form->create('SubContractor'); ?>
	<fieldset>
		<legend><?php echo __('Edit Sub Contractor'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('company_name');
		echo $this->Form->input('sub_contractor_category_id');
		echo $this->Form->input('office_phone');
		echo $this->Form->input('address_1');
		echo $this->Form->input('address_2');
		echo $this->Form->input('address_3');
		echo $this->Form->input('town');
		echo $this->Form->input('county');
		echo $this->Form->input('postcode');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SubContractor.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('SubContractor.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Sub Contractors'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sub Contractor Categories'), array('controller' => 'sub_contractor_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Contractor Category'), array('controller' => 'sub_contractor_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sub Contractor Contacts'), array('controller' => 'sub_contractor_contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Contractor Contact'), array('controller' => 'sub_contractor_contacts', 'action' => 'add')); ?> </li>
	</ul>
</div>
