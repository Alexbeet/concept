 <div class="span4">
     <h2><?php echo $instrumentTitle; ?></h2>            
  </div>
  
  <div class="span3">
  
  <div class="btn-toolbar">
                <div class="btn-group">
                  <a class="btn btn-primary" href="/trackers/view/<?php echo $instrumentId?>"><i class="fui-time"></i></a>
                  <a class="btn btn-primary" href="/trackers/view/<?php echo $instrumentId?>"><i class="fui-list"></i></a>
                  <a class="btn btn-primary" href="/trackers/gantt/<?php echo $instrumentId?>"><i class="fui-calendar-solid"></i></a>

                </div>
              </div> <!-- /toolbar -->
  </div>
  <div class="span3">
  
	  <div class="btn"><?php echo $this->Paginator->sort('name')?></div>
	  <div class="btn"><?php echo $this->Paginator->sort('start_date'); ?></div>
	  <div class="btn"><?php echo $this->Paginator->sort('end_date'); ?></div>
  </div>

  <div class="span2">
	  <?php echo $this->Html->link('Add new', array('controller' => 'trackers', 'action' => 'add', $instrumentId), array('class' => 'btn pull-right')); ?>
  </div>
  
  <div class="row-fluid">
  
  <div class="span12">