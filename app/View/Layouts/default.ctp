<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	
	    <script src="/js/jquery-1.8.3.min.js"></script>
	    <script src="/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="/js/bootstrap.js"></script>
	
	    <!-- Loading Bootstrap -->
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="/css/flat-ui.css" rel="stylesheet">
    <link href="/css/template.css" rel="stylesheet">
     <link href="/css/jqui.css" rel="stylesheet">
     
      <link href="/css/gantti.css" rel="stylesheet">


<body>

  <div class="navbar navbar-inverse">
            <div class="navbar-inner">
              <div class="container">
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target="#nav-collapse-01"></button>
                <div class="nav-collapse collapse" id="nav-collapse-01">
                  <ul class="nav">
                    <li class="active">
                      <a href="/projects">
                        Dashboard
                        <span class="navbar-unread">1</span>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        Projects
                        <span class="navbar-unread">1</span>
                      </a>
                      <ul>
                        <li><a href="/instruments">Tendering</a></li>
                        <li>
                          <a href="#">In Progress</a>
                          <ul>
                            <li><a href="#">View</a></li>
                            <li><a href="#">Create New</a></li>
                          </ul> <!-- /Sub menu -->
                        </li>
                        <li><a href="#">Completed</a></li>
                      </ul> <!-- /Sub menu -->
                    </li>
                    <li>
                      <a href="/subcontractors">
                        Sub Contractors
                      </a>
                    </li>
                  </ul>
                </div><!--/.nav -->
              </div>
            </div>
          </div>


		<div class="container-fluid">
	<div class="row-fluid">


			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
</body>
</html>
