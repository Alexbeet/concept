<div class="gantts index">
	<h2><?php echo __('Gantts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('start_date'); ?></th>
			<th><?php echo $this->Paginator->sort('end_date'); ?></th>
			<th><?php echo $this->Paginator->sort('instrument_id'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
			<th><?php echo $this->Paginator->sort('before'); ?></th>
			<th><?php echo $this->Paginator->sort('critial'); ?></th>
			<th><?php echo $this->Paginator->sort('progress'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($gantts as $gantt): ?>
	<tr>
		<td><?php echo h($gantt['Gantt']['id']); ?>&nbsp;</td>
		<td><?php echo h($gantt['Gantt']['name']); ?>&nbsp;</td>
		<td><?php echo h($gantt['Gantt']['description']); ?>&nbsp;</td>
		<td><?php echo h($gantt['Gantt']['start_date']); ?>&nbsp;</td>
		<td><?php echo h($gantt['Gantt']['end_date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($gantt['Instrument']['name'], array('controller' => 'instruments', 'action' => 'view', $gantt['Instrument']['id'])); ?>
		</td>
		<td><?php echo h($gantt['Gantt']['active']); ?>&nbsp;</td>
		<td><?php echo h($gantt['Gantt']['before']); ?>&nbsp;</td>
		<td><?php echo h($gantt['Gantt']['critial']); ?>&nbsp;</td>
		<td><?php echo h($gantt['Gantt']['progress']); ?>&nbsp;</td>
		<td><?php echo h($gantt['Gantt']['created']); ?>&nbsp;</td>
		<td><?php echo h($gantt['Gantt']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $gantt['Gantt']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $gantt['Gantt']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $gantt['Gantt']['id']), null, __('Are you sure you want to delete # %s?', $gantt['Gantt']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Gantt'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Instruments'), array('controller' => 'instruments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instrument'), array('controller' => 'instruments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Document Schedules'), array('controller' => 'document_schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document Schedule'), array('controller' => 'document_schedules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trackers'), array('controller' => 'trackers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tracker'), array('controller' => 'trackers', 'action' => 'add')); ?> </li>
	</ul>
</div>
