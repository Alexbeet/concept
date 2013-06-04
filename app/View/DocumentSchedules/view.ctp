<div class="documentSchedules view">
<h2><?php  echo __('Document Schedule'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($documentSchedule['DocumentSchedule']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Instrument'); ?></dt>
		<dd>
			<?php echo $this->Html->link($documentSchedule['Instrument']['name'], array('controller' => 'instruments', 'action' => 'view', $documentSchedule['Instrument']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Document Name'); ?></dt>
		<dd>
			<?php echo h($documentSchedule['DocumentSchedule']['document_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($documentSchedule['DocumentSchedule']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Required Date'); ?></dt>
		<dd>
			<?php echo h($documentSchedule['DocumentSchedule']['required_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($documentSchedule['DocumentSchedule']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($documentSchedule['DocumentSchedule']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Document Schedule'), array('action' => 'edit', $documentSchedule['DocumentSchedule']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Document Schedule'), array('action' => 'delete', $documentSchedule['DocumentSchedule']['id']), null, __('Are you sure you want to delete # %s?', $documentSchedule['DocumentSchedule']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Document Schedules'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document Schedule'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Instruments'), array('controller' => 'instruments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instrument'), array('controller' => 'instruments', 'action' => 'add')); ?> </li>
	</ul>
</div>
