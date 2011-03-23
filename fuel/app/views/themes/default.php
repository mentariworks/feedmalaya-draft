<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<?php \Asset::add_path('public/assets'); ?>
		<?php echo $head; ?>
	</head>
	<body>
		<div id="wrapper">
			<div id="navigation">

				<?php echo $navigation; ?>
			</div>

			<div id="header">
				<?php echo $header; ?>
			</div>

			<div id="content">
				<?php echo $content; ?>
			</div>

			<div id="sidebar">
				<?php echo $sidebar; ?>
			</div>

			<div class="clear"></div>

		</div><!-- End Wrapper -->

		<div id="footer"><!-- Begin footer -->
			<div id="footer-content">
				<p>Created <em>by</em> Malaysian, <em>for</em> Malaysian.
			</div>
		</div>

		<?php echo $facebook_script; ?>
	</body>
</html>
