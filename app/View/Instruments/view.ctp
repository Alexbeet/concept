<div class="instruments view">
<h2><?php  echo __('Instrument'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($instrument['Instrument']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Instrument Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($instrument['InstrumentType']['name'], array('controller' => 'instrument_types', 'action' => 'view', $instrument['InstrumentType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($instrument['Instrument']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($instrument['Instrument']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Instrument'), array('action' => 'edit', $instrument['Instrument']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Instrument'), array('action' => 'delete', $instrument['Instrument']['id']), null, __('Are you sure you want to delete # %s?', $instrument['Instrument']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Instruments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instrument'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Instrument Types'), array('controller' => 'instrument_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instrument Type'), array('controller' => 'instrument_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Document Schedules'), array('controller' => 'document_schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document Schedule'), array('controller' => 'document_schedules', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Document Schedules'); ?></h3>
	<?php if (!empty($instrument['DocumentSchedule'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Instrument Id'); ?></th>
		<th><?php echo __('Document Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Required Date'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($instrument['DocumentSchedule'] as $documentSchedule): ?>
		<tr>
			<td><?php echo $documentSchedule['id']; ?></td>
			<td><?php echo $documentSchedule['instrument_id']; ?></td>
			<td><?php echo $documentSchedule['document_name']; ?></td>
			<td><?php echo $documentSchedule['description']; ?></td>
			<td><?php echo $documentSchedule['required_date']; ?></td>
			<td><?php echo $documentSchedule['created']; ?></td>
			<td><?php echo $documentSchedule['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'document_schedules', 'action' => 'view', $documentSchedule['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'document_schedules', 'action' => 'edit', $documentSchedule['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'document_schedules', 'action' => 'delete', $documentSchedule['id']), null, __('Are you sure you want to delete # %s?', $documentSchedule['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Document Schedule'), array('controller' => 'document_schedules', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
