<div class="subContractorContacts view">
<h2><?php  echo __('Sub Contractor Contact'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($subContractorContact['SubContractorContact']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sub Contractor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($subContractorContact['SubContractor']['id'], array('controller' => 'sub_contractors', 'action' => 'view', $subContractorContact['SubContractor']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($subContractorContact['SubContractorContact']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($subContractorContact['SubContractorContact']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($subContractorContact['SubContractorContact']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Office Phone'); ?></dt>
		<dd>
			<?php echo h($subContractorContact['SubContractorContact']['office_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mobile Phone'); ?></dt>
		<dd>
			<?php echo h($subContractorContact['SubContractorContact']['mobile_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($subContractorContact['SubContractorContact']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position'); ?></dt>
		<dd>
			<?php echo h($subContractorContact['SubContractorContact']['position']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sub Contractor Contact'), array('action' => 'edit', $subContractorContact['SubContractorContact']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sub Contractor Contact'), array('action' => 'delete', $subContractorContact['SubContractorContact']['id']), null, __('Are you sure you want to delete # %s?', $subContractorContact['SubContractorContact']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sub Contractor Contacts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Contractor Contact'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sub Contractors'), array('controller' => 'sub_contractors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Contractor'), array('controller' => 'sub_contractors', 'action' => 'add')); ?> </li>
	</ul>
</div>
