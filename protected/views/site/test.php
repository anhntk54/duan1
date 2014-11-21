
  <script src="<?php echo Yii::app()->theme->baseUrl ?>/js/jquery-ui.js"></script>
   <link href="<?php echo Yii::app()->theme->baseUrl ?>/js/jquery-ui.css" type="text/css" rel="stylesheet">
<script src="<?php echo Yii::app()->theme->baseUrl ?>/js/bootstrap-tokenfield/bootstrap-tokenfield.js"></script>
   <link href="<?php echo Yii::app()->theme->baseUrl ?>/js/bootstrap-tokenfield/css/tokenfield-typeahead.css" type="text/css" rel="stylesheet">
    <!-- Tokenfield CSS -->
    <link href="<?php echo Yii::app()->theme->baseUrl ?>/js/bootstrap-tokenfield/css/bootstrap-tokenfield.css" type="text/css" rel="stylesheet">
<div class="panel panel-default" id="form-post">
	<div class="panel-body padding-bottom-0">
		<div class="border-bottom">
			<span class="small">
				<b><i class="fa fa-pencil-square-o"></i> Thách đố mới</b>
			</span>
		</div>
		<textarea class="textarea" placeholder="Thách đố nào..."></textarea>
		<input type="text" class="input-control div_tag_ban_be" id="tag_banbe" placeholder="Bạn thách đố ai?" />
		<div class="row">
			<div class="col-sm-6">
				<input type="text" class="input-control" placeholder="Thời hạn dừng?" />
			</div>
			<div class="col-sm-6">
				<input type="text" class="input-control" placeholder="Số tiền cược" />
			</div>
		</div>
	</div>
	<div class="panel-footer">
		<a href="#" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class="fa fa-user"></i></a>
		<a href="#" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class="fa fa-clock-o"></i></a>
		<a href="#" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class="fa fa-usd"></i></a>
		<a href="#" data-toggle="tooltip" data-placement="top" title="Tooltip on top"><i class="fa fa-camera"></i></a>
		<div class="pull-right">
			<button class="btn btn-primary btn-sm">Đăng</button>
		</div>
	</div>
</div>
<script type="text/javascript">
	function getTen () {
			var i = 0;
			var str = '';
			if ($('.token').length == 0) {
				return '("0")';
			};
			$.each($('.token'), function(index, val) {
				val = $(this);
				if (index == 0) {
					str += '('+val.attr('data-id')+',';
				}else{
					str += ''+val.attr('data-id')+',';
				}
				if (index == $('.token').length - 1){
					str += val.attr('data-id')+')';
				}
				i++;
			});
			return str;
		}
	$('#tag_banbe').tokenfield({
				autocomplete: {
			     source: function(request, response) {
			    	$.ajax({
			    		url: '<?php echo Yii::app()->createUrl("/site/load"); ?>',
			    		type: 'POST',
			    		dataType: 'json',
			    		data: {p:$('#tag_banbe-tokenfield').val(),str:getTen()},
			    		success: function(data) {
			              	response($.map(data,function (items) {
			              		return{
			              			value: items.name,
			              			id :items.id,
			              			image:items.image,
			              		}
			              	}));
			    		}
			    	});
			    },
			    renderItem: function(ul, item){
			    	console.log(item,"vap day k ");
	                return $( "<li>" )
	                    .append( $( "<a>" ).html( '<img src="'+ item.image +'" alt="" width="32" height="32" /> <span>' + item.label + '</span>' ) )
	                    .appendTo( ul );
	            },
			    select: function( event, ui ) {
			    	count = 1;
			    	
			    	$('#tag_banbe-tokenfield').val('');
					console.log(ui.item);
					return false;
				},
			    delay: 100,
			    
			  },
			  allowEnter: false,
			  showAutocompleteOnFocus: true,
			  template:{
			      token:'<div class="token" data-id={{id}}  data-value="{{value}}"><span class="token-label">{{label}}</span><a href="#" data-bind="close" class="close" tabindex="-1">×</a></div>'
			  }
		})
</script>
<style type="text/css">
	.tokenfield{
		box-shadow: none;
		border: none;
		border-top: 1px dashed #ccc;
		padding: 3px 1px;
		min-height: 24px;
		height: 24px;
	}
	.tokenfield.focus{
		border-color: #fff;
		box-shadow: none;
		border-top: 1px dashed #ccc;
	}
	#tag_banbe-tokenfield{
		font-size: 12px;
	}
</style>