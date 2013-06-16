<div class="table table-striped">
	<h2><?php echo __('Sub Contractors'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('company_name'); ?></th>
			<th><?php echo $this->Paginator->sort('sub_contractor_category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('office_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('address_1'); ?></th>
			<th><?php echo $this->Paginator->sort('address_2'); ?></th>
			<th><?php echo $this->Paginator->sort('address_3'); ?></th>
			<th><?php echo $this->Paginator->sort('town'); ?></th>
			<th><?php echo $this->Paginator->sort('county'); ?></th>
			<th><?php echo $this->Paginator->sort('postcode'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($subContractors as $subContractor): ?>
	<tr>
		<td><?php echo h($subContractor['SubContractor']['id']); ?>&nbsp;</td>
		<td><?php echo h($subContractor['SubContractor']['company_name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($subContractor['SubContractorCategory']['category'], array('controller' => 'sub_contractor_categories', 'action' => 'view', $subContractor['SubContractorCategory']['id'])); ?>
		</td>
		<td><?php echo h($subContractor['SubContractor']['office_phone']); ?>&nbsp;</td>
		<td><?php echo h($subContractor['SubContractor']['address_1']); ?>&nbsp;</td>
		<td><?php echo h($subContractor['SubContractor']['address_2']); ?>&nbsp;</td>
		<td><?php echo h($subContractor['SubContractor']['address_3']); ?>&nbsp;</td>
		<td><?php echo h($subContractor['SubContractor']['town']); ?>&nbsp;</td>
		<td><?php echo h($subContractor['SubContractor']['county']); ?>&nbsp;</td>
		<td><?php echo h($subContractor['SubContractor']['postcode']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $subContractor['SubContractor']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $subContractor['SubContractor']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $subContractor['SubContractor']['id']), null, __('Are you sure you want to delete # %s?', $subContractor['SubContractor']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Sub Contractor'), array('action' => 'add')); ?></li>
	</ul>
</div>
