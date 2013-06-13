<div class="well">
<div class="table table-striped">
<div class="row">
<div class="span12">
	<div class="pull-left">
		<h2><?php echo $instrumentTitle; ?></h2>
	</div>
	 <div class="pull-right">
              <div class="btn-toolbar">
                <div class="btn-group">
                  <a class="btn btn-primary" href="#fakelink"><i class="fui-list"></i></a>
                  <a class="btn btn-primary" href="#fakelink"><i class="fui-arrow-right"></i></a>
                  <a class="btn btn-primary" href="#fakelink"><i class="fui-calendar-solid"></i></a>
                </div>
              </div> <!-- /toolbar -->
            </div>

</div>

<div class="span12">

	<?php foreach ($trackers as $tracker): ?>
	
		<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('start_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	
	
	<tr>
		<td><?php echo h($tracker['Tracker']['name']); ?>&nbsp;</td>
		<td><?php echo h($tracker['Tracker']['description']); ?>&nbsp;</td>
		<td><table><tr><td><?php echo h($tracker['Tracker']['start_date']); ?></td></tr>
		<tr><td><?php echo h($tracker['Tracker']['end_date']); ?>&nbsp;</td></tr></table></td>
		
		
		<td class="actions">
		
		 <div class="pull-right">
              <div class="btn-toolbar">
                <div class="btn-group">
                  <a class="btn btn-primary" href="#fakelink"><i class="fui-plus"></i></a>
                  <a class="btn btn-primary" href="#fakelink"><i class="fui-cross"></i></a>
                  <a class="btn btn-primary" href="#fakelink"><i class="fui-list"></i></a>
                </div>
              </div> <!-- /toolbar -->


				</td>
	</tr>
	
	
	<?php $percentage = $tracker['Tracker']['progress'] * 100; ?>
	
	<tr>
	<td colspan="2"><?php echo h($tracker['Tracker']['comments']); ?></td>
	<td colspan="2"><div class="centreText"><?php echo $percentage; ?>%</div>&nbsp;<div class="progress"><div class="bar bar-info" style="width:<?php echo $percentage?>%;"></div></div></td>
	</tr>
	

</table>

<div class="paddingTop10">
</div>
	
<?php endforeach; ?>

</div><!--Span 12 closes-->
</div>

<div class="row">
<div class="span12">
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
          

          
          <div class="pull-right actions paddingTop20">
<?php echo $this->Html->link(__('New Tracker Item'), array('action' => 'add'), array('class' => 'btn btn-block btn-primary')); ?>
</div>

          </div>
          
                    </div>
          
