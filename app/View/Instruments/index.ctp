<div class="instruments index">
	<h2><?php echo __('Instruments'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('instrument_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($instruments as $instrument): ?>
	<tr>
		<td><?php echo h($instrument['Instrument']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($instrument['InstrumentType']['name'], array('controller' => 'instrument_types', 'action' => 'view', $instrument['InstrumentType']['id'])); ?>
		</td>
		<td><?php echo h($instrument['Instrument']['name']); ?>&nbsp;</td>
		<td><?php echo h($instrument['Instrument']['description']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $instrument['Instrument']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $instrument['Instrument']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $instrument['Instrument']['id']), null, __('Are you sure you want to delete # %s?', $instrument['Instrument']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Instrument'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Instrument Types'), array('controller' => 'instrument_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instrument Type'), array('controller' => 'instrument_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Document Schedules'), array('controller' => 'document_schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document Schedule'), array('controller' => 'document_schedules', 'action' => 'add')); ?> </li>
	</ul>
</div>
