

<div class="span10">
	<h1>Steyning Grammar School</h1>
	<h2>Client: West Sussex County Council</h2>
	<h3>Project Manager : Joe Blogs</h3>

</div>

<div class="span2 pull-right">

<img src="img/icons/steyning.png" alt="Steyning" class="tile-image">

</div>

</div>


<div class="row-fluid">

<div class="span8">
<div class="well">
	<h3><?php echo __('Instruments'); ?></h3>
<div class="table table-striped">

	<table cellpadding="0" cellspacing="0">
	<tr>
			
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('instrument_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($instruments as $instrument): ?>
	<tr>
		
		
		<td>
		
		<?php 
		//Start of if statements to decide what controller to link to
		
		//Directs to Documents schedules
		if($instrument['InstrumentType']['id'] == 1)
		{?>
		
		
		<?php echo $this->Html->link($instrument['Instrument']['name'], array('controller' => 'document_schedules', 'action' => 'view', $instrument['Instrument']['id'])); ?>&nbsp;
		
		<?php }
		//Directs to tracker
		elseif($instrument['InstrumentType']['id'] == 2)
		{?>
		
		<?php echo $this->Html->link($instrument['Instrument']['name'], array('controller' => 'trackers', 'action' => 'view', $instrument['Instrument']['id'])); ?>&nbsp;
				<?php } ?>
		
		</td>
		
			<td>
			<?php echo $instrument['InstrumentType']['name']; ?>
		</td>
		
		
	
		
		<td><?php echo h($instrument['Instrument']['description']); ?>&nbsp;</td>

		
		<td class="actions">
		
		<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $instrument['Instrument']['id']), null, __('Are you sure you want to delete %s?', $instrument['Instrument']['name'])); ?>
		</td>
		
		

		
	</tr>
<?php endforeach; ?>
	</table>
	
	<div class="pagination pull-left">
            <ul>
              <li class="previous"><a href="#fakelink" class="fui-arrow-left"></a></li>
              <li class="active"><a href="#fakelink">1</a></li>
              <li><a href="#fakelink">2</a></li>
              <li><a href="#fakelink">3</a></li>
              <li><a href="#fakelink">4</a></li>
              <li><a href="#fakelink">5</a></li>
              <li><a href="#fakelink">6</a></li>
              <li><a href="#fakelink">7</a></li>
              <li><a href="#fakelink">8</a></li>
              <li class="next"><a href="#fakelink" class="fui-arrow-right"></a></li>
            </ul>
          </div> <!-- /pagination -->

</div>

<div class="actions pull-right">
<?php echo $this->Html->link(__('+ Add New Instrument'), array('action' => 'add'), array('class' => 'btn btn-block btn-primary')); ?>

</div>

</div>
</div>

<div class="span4">


<div class="well">
<h3>Upcoming Key Events</h3>
<table class="table table-striped">
<tr>
<td>MEP Schedule Due</td><td><span class="label label-important">11/06/13</span></td>
</tr>
<tr>
<td>Key Meeting with Client</td><td><span class="label label-warning">14/06/13</span></td>
</tr>
<tr>
<td>Method Statement Due</td><td><span class="label">09/07/13</span></td>	
</tr>
</table>
<sub><a href="#">Edit</a></sub>

<h3>Recent Activity</h3>


<table class="table table-striped">
<tr>
<td>Ducting Drawings Rev3 Submitted</td><td><a href="#">View</a></td>
</tr>
<tr>
<td>M&E contractor selected</td><td><a href="#">View</a></td>
</tr>
<tr>
<td>Joe Blogs added as project manager</td><td><a href="#">View</a></td>
</tr>
</table>

</div>

</div>

</div><!-- Row Ends-->

<div class="row">
<div class="span12">

</div>





