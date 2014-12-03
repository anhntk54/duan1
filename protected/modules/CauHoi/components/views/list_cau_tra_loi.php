<ul class="media-list small">
	<div class="list-cau-traloi">
		<?php 
			foreach ($model->tralois as $value) {
				$this->widget("CauHoi.components.One_Cau_Tra_Loi",array('value'=>$value));
			}
		?>
	</div>
	<?php $this->widget("CauHoi.components.Post_Cau_Tra_Loi",array('model'=>$model)); ?>
</ul>