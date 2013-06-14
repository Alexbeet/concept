     <h2><?php echo $instrumentTitle; ?></h2>            


	<?php $i = 1;?>
	<?php foreach ($trackers as $tracker): ?>	
	
	<?php $percentage = $tracker['Tracker']['progress'] * 100; ?>


<div class="row-fluid">         
	
		<div class="background<?php echo $i;?> spanTable">
				
				<div class="row-fluid">
		
					<div class="span2">
					<?php echo $this->Paginator->sort('name'); ?>
					<br /> <?php echo h($tracker['Tracker']['name']); ?>&nbsp;
					</div>
					
					<div class="span4">
					<?php echo $this->Paginator->sort('description'); ?>
					<br /><?php echo h($tracker['Tracker']['description']); ?>&nbsp;
					</div>
					
					<div class="span2">
					<?php echo $this->Paginator->sort('start_date'); ?>
					<br /><?php echo h($tracker['Tracker']['start_date']); ?>
					</div>
					
					<div class="span2">
					<?php echo $this->Paginator->sort('end_date'); ?>
					<br /><?php echo h($tracker['Tracker']['end_date']); ?>&nbsp;
					</div>
					
					<div class="span2 actions">
					<?php echo __('Actions'); ?>
					</div>
				
				</div>
				
				<!--Second Row-->
				<div class="row-fluid">
			
					<div class="span6">
					<a class="expandComment btn btn-primary btn-mini">View Comments</a>

					</div>
					
					<div class="span6">
					
						<div class="centreText">
						<?php echo $percentage; ?>%
						</div>
						
						<div class="progress">
							<div class="bar bar-success" style="width:<?php echo $percentage?>%;"></div>
						</div>
		
					</div>
					
				</div>
				
				
				<!--Third Row-->
				<div class="row-fluid comment">
			
					<div class="span12">
					<?php echo h($tracker['Tracker']['comments']); ?>
					</div>
					
										
				</div>

		
	</div>

</div><!-- Row fluid Close-->

<?php $i = 2; ?>
		
	<?php endforeach; ?>

<script type="text/javascript">

$('.expandComment').click(function() {
  $('.comment').toggle('slow', function() {
    // Animation complete.
  });
});

</script>
                 
          
