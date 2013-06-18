 <?php echo $this->element('trackerHeader')?>
	<?php $i = 1;?>
	<?php foreach ($trackers as $tracker): ?>	
	
	<?php $percentage = $tracker['Tracker']['progress'] * 100; ?>


<div class="row-fluid">         
	
		<div class="background<?php echo $i;?> spanTable">
				
				<div class="row-fluid">
		
					<div class="span2">
					<div class="spanTableTitle">Name</div>
					<div><?php echo h($tracker['Tracker']['name']); ?></div>
					</div>
					
					<div class="span4">
					<div class="spanTableTitle">Description</div>
					<div><?php echo h($tracker['Tracker']['description']); ?></div>
					</div>
					
					<div class="span1">
					<div class="spanTableTitle">Start Date</div>
					<div><?php echo $this->Time->format('d-m-Y', $tracker['Tracker']['start_date']); ?></div>
					
					
					
					
					</div>
					
					<div class="span1">
					<div class="spanTableTitle">End Date</div>
					<div><?php echo $this->Time->format('d-m-Y', $tracker['Tracker']['end_date']); ?></div>
					</div>
					
					<div class="span2 actions">
					<a class="expandComment marginTop10 btn btn-primary btn-mini">View Comments</a>
					<a class="marginTop10 btn btn-primary btn-mini" href="/Trackers/edit/<?php echo $tracker['Tracker']['id']; ?>">Edit</a>
					</div>
				
				</div>
				
				<!--Second Row-->
				<div class="row-fluid">
			
					<div class="span6">
					

					</div>
					
					<div class="span3">
					</div>
					
					<div class="span3">
					
					
						<div class="centreText percentageText">
						<?php echo $percentage; ?>% Complete
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

<?php

if($i == 2)
{
$i = $i -1;
}
elseif($i ==1)
{
$i = $i + 1;
}?>
		
	<?php endforeach; ?>

<script type="text/javascript">

$('.expandComment').click(function() {
  $('.comment').toggle('slow', function() {
    // Animation complete.
  });
});

</script>
                 
          
