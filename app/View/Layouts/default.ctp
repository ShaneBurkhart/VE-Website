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
		<?php echo $title_for_layout; ?> | VE Design Group
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->script('jquery.min');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('bootstrap-responsive.min');
		echo $this->Html->script('bootstrap');
		echo $this->Html->css('site');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">

		<header class="container">
			<a href="/"><?php echo $this->HTML->image('logo.png', array('id' => 'logo')) ?></a>
			<div id="header-nav" class="pull-right">
			    <a href="/"<?php if($this->name == "Home") echo 'class="active"' ?> >Home</a>
			    <a href="/contact"<?php if($this->name == "Contact") echo 'class="active"' ?>>Contact Us</a>
			    <a href="/developer/login"<?php if($this->name == "Developer") echo 'class="active"' ?>>Developer Login</a>
			</div>
		</header>

		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
			
		</div>
		<footer>
			<div class="container">
				<p>Created by Shane Burkhart</p>
			</div>
		</footer>
	</div>
</body>
</html>
