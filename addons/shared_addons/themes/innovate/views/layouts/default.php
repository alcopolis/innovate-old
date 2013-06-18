<!DOCTYPE html>
<html>
<head>
	<?php if ( ! $this->settings->frontend_enabled && (empty($this->current_user) or $this->current_user->group != 'admin')){ ?>
		{{ theme:partial name="maintenance" }}
	<?php }else{ ?>
		{{ theme:partial name="metadata" }}
	<?php } ?>
</head>
<body id="top">
	<?php if ( ! $this->settings->frontend_enabled && (empty($this->current_user) or $this->current_user->group != 'admin')){ ?>
	 	{{ theme:partial name="site_down" }}
	<?php }else{ ?>
		<!-- Begin pageWrapper -->
		<div id="pageWrapper">
			{{ integration:analytics }}
			
			<!-- Begin Header Content -->
			<div class="contentWrapper">
				{{ theme:partial name="header" }}
			</div>
			<!-- End Header Content -->
			
			<!-- Begin Body Content -->
			<div class="contentWrapper">
				{{ theme:partial name="content_default" }}
				{{ theme:partial name="footer" }}
			</div>
			<!-- End Body Content -->
	
		</div>
		<!-- End pageWrapper -->	
	<?php } ?>
</body>
</html>