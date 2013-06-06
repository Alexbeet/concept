<div class="table table-striped">
	<h2><?php echo __('Trackers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>

			<th><?php echo $this->Paginator->sort('instrument_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('start_date'); ?></th>
			<th><?php echo $this->Paginator->sort('end_date'); ?></th>
			<th><?php echo $this->Paginator->sort('comments'); ?></th>
			<th><?php echo $this->Paginator->sort('progress'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($trackers as $tracker): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($tracker['Instrument']['name'], array('controller' => 'instruments', 'action' => 'view', $tracker['Instrument']['id'])); ?>
		</td>
		<td><?php echo h($tracker['Tracker']['name']); ?>&nbsp;</td>
		<td><?php echo h($tracker['Tracker']['description']); ?>&nbsp;</td>
		<td><?php echo h($tracker['Tracker']['start_date']); ?>&nbsp;</td>
		<td><?php echo h($tracker['Tracker']['end_date']); ?>&nbsp;</td>
		<td><?php echo h($tracker['Tracker']['comments']); ?>&nbsp;</td>
		<td><?php echo h($tracker['Tracker']['progress']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tracker['Instrument']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tracker['Instrument']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tracker['Instrument']['id']), null, __('Are you sure you want to delete # %s?', $tracker['Tracker']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Tracker'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Instruments'), array('controller' => 'instruments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instrument'), array('controller' => 'instruments', 'action' => 'add')); ?> </li>
	</ul>
</div>
