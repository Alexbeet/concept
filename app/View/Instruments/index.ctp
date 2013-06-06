<div class="table table-striped">
	<h2><?php echo __('Instruments'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('instrument_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
	</tr>
	<?php foreach ($instruments as $instrument): ?>
	<tr>
		<td><?php echo h($instrument['Instrument']['id']); ?>&nbsp;</td>
		
		
		<td>
			<?php echo $instrument['InstrumentType']['name']; ?>
		</td>
		
		

		<td>
		
		<?php 
		//Start of if statements to decide what controller to link to
		
		//Directs to Documents schedules
		if($instrument['InstrumentType']['id'] == 1)
		{?>
		
		
		<?php echo $this->Html->link($instrument['Instrument']['name'], array('controller' => 'document_schedules', 'action' => 'index', $instrument['Instrument']['id'])); ?>&nbsp;
		
		<?php }
		//Directs to tracker
		elseif($instrument['InstrumentType']['id'] == 2)
		{?>
		
		<?php echo $this->Html->link($instrument['Instrument']['name'], array('controller' => 'trackers', 'action' => 'view', $instrument['Instrument']['id'])); ?>&nbsp;
				<?php } ?>
		
		</td>
		<td><?php echo h($instrument['Instrument']['description']); ?>&nbsp;</td>

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
	</ul>
</div>
