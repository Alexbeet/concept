<div class="gantts view">
<h2><?php  echo __('Gantt'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($gantt['Gantt']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($gantt['Gantt']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($gantt['Gantt']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Date'); ?></dt>
		<dd>
			<?php echo h($gantt['Gantt']['start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Date'); ?></dt>
		<dd>
			<?php echo h($gantt['Gantt']['end_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Instrument'); ?></dt>
		<dd>
			<?php echo $this->Html->link($gantt['Instrument']['name'], array('controller' => 'instruments', 'action' => 'view', $gantt['Instrument']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($gantt['Gantt']['active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Before'); ?></dt>
		<dd>
			<?php echo h($gantt['Gantt']['before']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Critial'); ?></dt>
		<dd>
			<?php echo h($gantt['Gantt']['critial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Progress'); ?></dt>
		<dd>
			<?php echo h($gantt['Gantt']['progress']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($gantt['Gantt']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($gantt['Gantt']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Gantt'), array('action' => 'edit', $gantt['Gantt']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Gantt'), array('action' => 'delete', $gantt['Gantt']['id']), null, __('Are you sure you want to delete # %s?', $gantt['Gantt']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Gantts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gantt'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Instruments'), array('controller' => 'instruments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instrument'), array('controller' => 'instruments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Document Schedules'), array('controller' => 'document_schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document Schedule'), array('controller' => 'document_schedules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trackers'), array('controller' => 'trackers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tracker'), array('controller' => 'trackers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Document Schedules'); ?></h3>
	<?php if (!empty($gantt['DocumentSchedule'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Instrument Id'); ?></th>
		<th><?php echo __('Gantt Id'); ?></th>
		<th><?php echo __('Document Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Required Date'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($gantt['DocumentSchedule'] as $documentSchedule): ?>
		<tr>
			<td><?php echo $documentSchedule['id']; ?></td>
			<td><?php echo $documentSchedule['instrument_id']; ?></td>
			<td><?php echo $documentSchedule['gantt_id']; ?></td>
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
<div class="related">
	<h3><?php echo __('Related Trackers'); ?></h3>
	<?php if (!empty($gantt['Tracker'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Instrument Id'); ?></th>
		<th><?php echo __('Gantt Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Start Date'); ?></th>
		<th><?php echo __('End Date'); ?></th>
		<th><?php echo __('Comments'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Progress'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($gantt['Tracker'] as $tracker): ?>
		<tr>
			<td><?php echo $tracker['id']; ?></td>
			<td><?php echo $tracker['instrument_id']; ?></td>
			<td><?php echo $tracker['gantt_id']; ?></td>
			<td><?php echo $tracker['name']; ?></td>
			<td><?php echo $tracker['description']; ?></td>
			<td><?php echo $tracker['start_date']; ?></td>
			<td><?php echo $tracker['end_date']; ?></td>
			<td><?php echo $tracker['comments']; ?></td>
			<td><?php echo $tracker['created']; ?></td>
			<td><?php echo $tracker['modified']; ?></td>
			<td><?php echo $tracker['progress']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'trackers', 'action' => 'view', $tracker['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'trackers', 'action' => 'edit', $tracker['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'trackers', 'action' => 'delete', $tracker['id']), null, __('Are you sure you want to delete # %s?', $tracker['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tracker'), array('controller' => 'trackers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
