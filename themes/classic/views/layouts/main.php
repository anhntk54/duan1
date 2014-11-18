<html>
<?php $this->widget('application.components.Head',array(
      'pageTitle'=>$this->pageTitle,
      'keywords' =>$this->keywords,
       'robotsIndex' => $this->robotsIndex
    ));
?>
<body class="fixed" onload="setHeightSidebar()">
	<div id="header-gluck">
		<?php $this->widget('application.components.Header');?>
	</div>
	<div id="wrapper-gluck" class="clearfix">
		<?php $this->widget('application.components.Sidebar_Left');?>
		<div id="main-gluck">
			<div class="content">
				<div class="row">
					<div class="col-sm-6">
						<?php echo $content;?>
					</div>
					<div class="col-sm-3">
						<?php $this->widget('application.components.Content_Right');?>
					</div>
					<div class="col-sm-3" id="sidebar-right-gluck">
						<div id="sidebar-right-inner-gluck" class="fixed">
							<?php $this->widget('application.components.Sidebar_Right');?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>