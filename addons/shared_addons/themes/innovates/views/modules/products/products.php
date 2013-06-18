<!DOCTYPE html>
<html>
<head>
	{{ theme:partial name="metadata" }}
</head>
<body id="top" class="page-product">

	<!-- Begin pageWrapper -->
	<div id="pageWrapper">
		{{ integration:analytics }}
		
		<!-- Begin Header Content -->
		<div class="partialWrapper">				
				{{ theme:partial name="header" }}
			</div>
		<!-- End Header Content -->

		<!-- Begin contentWrapper -->
		<div class="contentWrapper">
			<?php echo $data; ?>
			
			<div>{{ asset:image file="theme::tes-content.jpg" alt="Tes content" }}</div>
			<div>
				<h1>Lorem ipsum</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
			</div>
			<div>{{ asset:image file="theme::tes-content-2.jpg" alt="Tes content 2" }}</div>
			<div>
				<h1>Lorem ipsum 2</h1>
				<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
			</div>
		</div>
		<!-- End contentWrapper -->
		
		<!-- Begin Footer Content -->
		<div class="partialWrapper">				
			{{ theme:partial name="footer" }}
		</div>
		<!-- End Footer Content -->
	</div>
	<!-- End pageWrapper -->

</body>
</html>