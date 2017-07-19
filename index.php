<!DOCTYPE html><html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<div>
			<script type="text/javascript">
				$('documnet').ready(function() {

					var $animation_elements = $('.col-sm-4');
			        var $window = $(window);

			function check_if_in_view() {
					var window_height = $window.height();
					var window_top_position = $window.scrollTop();
					var window_bottom_position = (window_top_position + window_height);
					
					$.each($animation_elements, function() {
					var $element = $(this);
					var $timeout = $(this).attr('data-time');
					var $effect = $(this).attr('data-effect');
					var element_height = $element.outerHeight();
					var element_top_position = $element.offset().top;
					var element_bottom_position = (element_top_position + element_height);
					
					//check to see if this current container is within viewport
					if ((element_bottom_position >= window_top_position) &&
					(element_top_position <= window_bottom_position) && 
					($element.hasClass($effect)==false)) {
			          
			          setTimeout(function() {
						$element.addClass($effect);
								}, $timeout);
					
					
					} else {
					 //$element.removeClass($effect);
					}
					});
				}

				$window.on('scroll resize', check_if_in_view);
			    $window.trigger('scroll');

				});
			</script>
		</div>
	</head>
	<body>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<div>
			<div class="container">
				<div class="row">
					<div class="col-sm-4" data-time='300' data-effect='bounceIn animated'>sample text 1</div>
					<div class="col-sm-4" data-time='1200' data-effect='bounceIn animated'>sample text 2</div>
					<div class="col-sm-4" data-time='1800' data-effect='bounceIn animated'>sample text 3</div>
				</div>
			</div>
		</div>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
	</body>
</html>