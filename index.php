<?php defined('_JEXEC') or die; ?>
<!Doctype html>
<html>
	<head>
		<jdoc:include type="head" />
		<link rel="stylesheet" href="templates/system/css/system.css" type="text/css" />
		<link rel="stylesheet" href="templates/system/css/general.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->template; ?>/style.css" type="text/css"/>
	</head>
	
	<?php
	
	if (($this->countModules('left-column') == 0) && ($this->countModules('right-column') == 0)) {
		$column = 'all-hidden';
	} elseif ($this->countModules('left-column') == 0) {
		$column = 'left-hidden';
	} elseif ($this->countModules('right-column') == 0) {
		$column = 'right-column';
	}
	
	?>
	
	<body class="<?php if (isset($column)) echo $column; ?>">
		<div id="wrapper">
			<div id="header">
				<jdoc:include type="modules" name="top-menu" />
			</div>
			
			<div id="left">
				<jdoc:include type="modules" name="left-column" style="xhtml" />
			</div>
			
			<div id="content">
				<jdoc:include type="message" />
				<jdoc:include type="component" />
			</div>
			
			<div id="right">
				<jdoc:include type="modules" name="right-column" style="xhtml" />
			</div>
			
			<div class="clear"></div>
			
			<div id="footer">
				<jdoc:include type="modules" name="footer" style="xhtml" />
			</div>
		</div>
	</body>
</html>