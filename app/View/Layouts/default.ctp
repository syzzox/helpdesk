<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		// echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap');

		echo $this->fetch('meta');
		echo $this->fetch('css');

		
		echo $this->fetch('script');
		echo $this->Html->script('jquery-1.8.1.js');
		echo $this->Html->script('main.js');
		echo $this->Html->script('bootstrap.js');


	?>
</head>
<body>
<!-- Menu de navegação -->
<?php echo $this->element('menu'); ?>
<!-- Fim Menu de navegação -->
<?php echo $this->Session->flash(); ?>
<!-- Container -->
<?php echo $this->fetch('content'); ?>
<!-- Fim do Container -->
<!-- Rodapé -->
<?php echo $this->element('footer'); ?>
<!-- Fim do Rodapé -->
<div class="rodape">
<?php echo $this->element('sql_dump'); ?>
</div>
</body>
</html>
