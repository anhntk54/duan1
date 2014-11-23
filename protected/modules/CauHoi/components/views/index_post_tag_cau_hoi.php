  <script src="<?php echo Yii::app()->theme->baseUrl ?>/js/jquery-ui.js"></script>
<link href="<?php echo Yii::app()->theme->baseUrl ?>/js/jquery-ui.css" type="text/css" rel="stylesheet">
<script src="<?php echo Yii::app()->theme->baseUrl ?>/js/bootstrap-tokenfield/bootstrap-tokenfield.js"></script>
<link href="<?php echo Yii::app()->theme->baseUrl ?>/js/bootstrap-tokenfield/css/tokenfield-typeahead.css" type="text/css" rel="stylesheet">
    <!-- Tokenfield CSS -->
<link href="<?php echo Yii::app()->theme->baseUrl ?>/js/bootstrap-tokenfield/css/bootstrap-tokenfield.css" type="text/css" rel="stylesheet">

<div id="div_tag_ban_be">
	<input type="text" class="input-control" id="tag_banbe" placeholder="Bạn thách đố ai?" />
</div>
<script type="text/javascript">
	var arr_user = [];
	function getTen () {
			var i = 0;
			var str = '';
			if ($('#div_tag_ban_be .token').length == 0) {
				return '("0")';
			};
			$.each($('#div_tag_ban_be .token'), function(index, val) {
				val = $(this);
				if (index == 0) {
					str += '('+val.attr('data-id')+',';
				}else{
					str += ''+val.attr('data-id')+',';
				}
				if (index == $('#div_tag_ban_be .token').length - 1){
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
			    		url: '<?php echo Yii::app()->createUrl("/CauHoi/TagUser"); ?>',
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
	                return $( "<li>" )
	                    .append( $( "<a>" ).html( '<img src="'+ item.image +'" alt="" width="32" height="32" /> <span>' + item.label + '</span>' ) )
	                    .appendTo( ul );
	            },
			    select: function( event, ui ) {
			    	var str = '<input type="hidden" name="user[]" value="'+ui.item.id+'">';
			    	$('#div_tag_ban_be').append(str);
			    	arr_user.push(ui.item.id);
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
