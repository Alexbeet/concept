<div class="table table-striped">
	<h2><?php echo $instrumentTitle; ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('document_name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('required_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($documentSchedules as $documentSchedule): ?>
	<tr>
		<td><?php echo h($documentSchedule['DocumentSchedule']['id']); ?>&nbsp;</td>

		<td><?php echo h($documentSchedule['DocumentSchedule']['document_name']); ?>&nbsp;</td>
		<td><?php echo h($documentSchedule['DocumentSchedule']['description']); ?>&nbsp;</td>
		<td>
		
		
		<?php 
		
		$required = $documentSchedule['DocumentSchedule']['required_date'];
		
		if($required < date("Y-m-d"))
		{
		echo "<span class='label label-important'>".$this->Time->format('d M y',$required)."</span>";
		}
		
		else
		echo $this->Time->format('d M y',$required);
		?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'detail', $documentSchedule['DocumentSchedule']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $documentSchedule['DocumentSchedule']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $documentSchedule['DocumentSchedule']['id']), null, __('Are you sure you want to delete # %s?', $documentSchedule['DocumentSchedule']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New '. $instrumentTitle), array('action' => 'add',$instrumentId)); ?></li>
		<li><?php echo $this->Html->link(__('List Instruments'), array('controller' => 'instruments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instrument'), array('controller' => 'instruments', 'action' => 'add')); ?> </li>
	</ul>
</div>
