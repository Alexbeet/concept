<div class="subContractorContacts index">
	<h2><?php echo __('Sub Contractor Contacts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('sub_contractor_id'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('office_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('mobile_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('position'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($subContractorContacts as $subContractorContact): ?>
	<tr>
		<td><?php echo h($subContractorContact['SubContractorContact']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($subContractorContact['SubContractor']['id'], array('controller' => 'sub_contractors', 'action' => 'view', $subContractorContact['SubContractor']['id'])); ?>
		</td>
		<td><?php echo h($subContractorContact['SubContractorContact']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($subContractorContact['SubContractorContact']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($subContractorContact['SubContractorContact']['title']); ?>&nbsp;</td>
		<td><?php echo h($subContractorContact['SubContractorContact']['office_phone']); ?>&nbsp;</td>
		<td><?php echo h($subContractorContact['SubContractorContact']['mobile_phone']); ?>&nbsp;</td>
		<td><?php echo h($subContractorContact['SubContractorContact']['email']); ?>&nbsp;</td>
		<td><?php echo h($subContractorContact['SubContractorContact']['position']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $subContractorContact['SubContractorContact']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $subContractorContact['SubContractorContact']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $subContractorContact['SubContractorContact']['id']), null, __('Are you sure you want to delete # %s?', $subContractorContact['SubContractorContact']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Sub Contractor Contact'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sub Contractors'), array('controller' => 'sub_contractors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub Contractor'), array('controller' => 'sub_contractors', 'action' => 'add')); ?> </li>
	</ul>
</div>
