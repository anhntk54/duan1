<html>
<?php include("head.php");?>
<body class="fixed" onload="setHeightSidebar()">
	<div id="header-gluck">
		<?php include("header.php") ?>
	</div>
	<div id="wrapper-gluck" class="clearfix">
		<?php include("sidebar-left.php");?>
		<div id="main-gluck">
			<div class="content">
				<div class="row">
					<div class="col-sm-6">
						<?php include("content-main.php") ?>
					</div>
					<div class="col-sm-3">
						<?php include("content-right.php") ?>
					</div>
					<div class="col-sm-3" id="sidebar-right-gluck">
						<div id="sidebar-right-inner-gluck" class="fixed">
							<?php include("sidebar-right.php") ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>