<div class="panel panel-default one_cau_hoi">
	<input type="hidden" class="cauhoi_id" value="<?php echo $value->id; ?>">
	<div class="panel-body">
		<div class="media form-group">
			<?php 
				if ($value->user != null) {
					echo User::model()->getAvatar($value->user,'pull-left media-object img-40');
				}
			?>
			<div class="media-body">
				<?php echo User::model()->getTenDayDu($value->user); ?>
				<small>
					<span><i class="fa fa-clock-o"></i>
                        <!--Thoi gian hen gio-->
                        <span class="countdown<?php echo $value->id;?>">
                            <span class="days">00</span>
                            <span class="hours">00</span>
                            <span class="minutes">00</span>
                            <span class="seconds">00</span>     
                            
                            <?php 
                            //$hengio = 48;
                            //$nowdate = date("Y-m-d H:i:s");
                            //echo  date('Y-m-d H:i:s', strtotime($nowdate . ' + '.$hengio.' hours'));?>                       
                        </span>
                    </span>
				</small>
			</div>
			<a href="#" class="pull-right media-object text-color-666 angle-down">
				<i class="fa fa-angle-down"></i>
			</a>
		</div>
		<p><?php echo $value->noi_dung;?></p>
        <p><?php echo Cauhoi::model()->getHinhAnhMinhHoa($value); ?></p>
		<small>
			<a class="margin-right cau_hoi_like"><?php echo Cauhoi::model()->KiemTraLikeCuaNguoiDung($value); ?></a>
			<a href="#" class="margin-right">Trả lời</a>
			<a href="#">Chia sẻ</a>
		</small>
	</div>
	<div class="panel-footer">
		<div class="form-group border-bottom">
			<small class="text-color-666">
				<a href="#">
					<span class="margin-right"><i class="fa fa-comments"></i><span class="so-luot-tra-loi"><?php echo Cauhoi::model()->TongSoLuotTraLoi($value); ?></span></span>
					<span class="margin-right"><i class="fa fa-thumbs-o-up"></i> <span class="so-luot-like"><?php echo Cauhoi::model()->TongSoLuotLike($value); ?></span></span>
					<span class="margin-right"><i class="fa fa-share"></i> 3</span>
				</a>
			</small>
		</div>
		<?php $this->widget("CauHoi.components.List_Cau_Tra_Loi",array('model'=>$value)); ?>
	</div>
</div>

<script>
 $('.countdown<?php echo $value->id;?>').downCount({
            date: '<?php echo date("m/d/Y H:i:s", strtotime($value->hen_gio));?>',
            offset: +7
        }, function () {
            $(".countdown<?php echo $value->id;?>").html("Đã hết giờ")
        });
</script>