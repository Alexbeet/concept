<div class="instrumentTypes view">
<h2><?php  echo __('Instrument Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($instrumentType['InstrumentType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($instrumentType['InstrumentType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($instrumentType['InstrumentType']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Instrument Type'), array('action' => 'edit', $instrumentType['InstrumentType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Instrument Type'), array('action' => 'delete', $instrumentType['InstrumentType']['id']), null, __('Are you sure you want to delete # %s?', $instrumentType['InstrumentType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Instrument Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instrument Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Instruments'), array('controller' => 'instruments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instrument'), array('controller' => 'instruments', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Instruments'); ?></h3>
	<?php if (!empty($instrumentType['Instrument'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Instrument Type Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($instrumentType['Instrument'] as $instrument): ?>
		<tr>
			<td><?php echo $instrument['id']; ?></td>
			<td><?php echo $instrument['instrument_type_id']; ?></td>
			<td><?php echo $instrument['name']; ?></td>
			<td><?php echo $instrument['description']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'instruments', 'action' => 'view', $instrument['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'instruments', 'action' => 'edit', $instrument['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'instruments', 'action' => 'delete', $instrument['id']), null, __('Are you sure you want to delete # %s?', $instrument['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Instrument'), array('controller' => 'instruments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
