<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SoftDream Матрасы </title>
	<link href="https://fonts.googleapis.com/css?family=El+Messiri:400,500|Lobster|Pattaya&amp;subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- iziModal css -->
	<link rel="stylesheet" href="iziModal/css/iziModal.css">
	<!-- bxslider css -->
	<link rel="stylesheet" href="bxslider/jquery.bxslider.css">
	<link rel="stylesheet" href="css/style.css?ver=<?=rand(763324,7879872987)?>">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- iziModal JS -->
	<script type="text/javascript" src="iziModal/js/iziModal.js"></script>
	<!-- bxslider JS -->
	<script  src="bxslider/jquery.bxslider-rahisified.js"></script>
		<script type="text/javascript">
				$(document).ready(function() {
				$('.bxslider').bxSlider({
				              adaptiveHeight: true,
				              onSlideAfter: function(currentSlide, totalSlides, currentSlideHtmlObject){
				     
			
					        },
					});
			   });
		</script>
	

	<script type="text/javascript">

	$(document).on('change','.calculate',function(){

           var $thisPrice = $(this).attr('data-price');
           var $thisMultiplier = $('option:selected',this).attr('data-multiplier');
           var $finalPrice = ($thisPrice*$thisMultiplier).toLocaleString('ru');
           $(this).parents('form').find('span.pay_price').text($finalPrice + ' KZT');
           $(this).parents('form').find('input.price').val($finalPrice);
	});
			
	</script>

	<script type="text/javascript">
		$(document).ready(function() {
			var $animation_elements = $('.an');
	var $window = $(window);
	function check_if_in_view() {
			var window_height = $window.height();
			var window_top_position = $window.scrollTop();
			var window_bottom_position = (window_top_position + window_height);
			
			$.each($animation_elements, function() {
			var $element = $(this);
			var $timeout = parseInt($(this).attr('data-time'));
			var $effect = $(this).attr('data-effect');
			var element_height = $element.outerHeight();
			var element_top_position = $element.offset().top;
			var element_bottom_position = (element_top_position + element_height);
			
			//check to see if this current container is within viewport
			if ((element_bottom_position >= window_top_position) &&
			(element_top_position <= window_bottom_position) &&
			($element.hasClass($effect)==false)) {
	
	var $randNUm = parseInt(Math.floor(Math.random()*3000)+200);
	var $randTimeOut = $randNUm+$timeout;
				//console.log('delay now is '+$randTimeOut);
	
	setTimeout(function() {
				$element.addClass($effect).css('opacity',1);
				//console.log($element.prop('nodeName'));
				}, $randTimeOut);
			
			} else {
			//$element.removeClass($effect);
			}
			});
		}
		$window.on('scroll resize', check_if_in_view);
	$window.trigger('scroll');
		});
	</script>
</head>
<body>
	<div class="container-fluid top-div">
		<div class="container">
			<div id="custom-bootstrap-menu" class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
					<a class="navbar-brand" href="/">
						<img src="img/logo.png" class="hidden-xs">
						<img src="img/logo_small.png" class="visible-xs">

					</a>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse navbar-menubuilder">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#products">О нас</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Матрасы <span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">На зависимомо блоке</a></li>
								<li><a href="#">На не зависимомо блоке</a></li>
								<li><a href="#">Беспружинные матрасы</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">Детские матрасы</a></li>
							</ul>
							</li>
						<li><a href="#about-us">Наматрасники </a></li>
						<li><a href="#about-us">Отзывы клиентов </a></li>				
					</ul>
				</div>
			</div>
		</div>


         <div class="row">
         	<div class="col-sm-6">
		    	<h4 class="text-capitalize">
		    	Производство ортопедичесих <br>
		    	и анатомических матрасов в Алматы
		    	</h4>
		    </div>
         	<div class="col-sm-6">
         	   <div class="phones text-right pull-right">
         	   	 <a href="tel:+77471308289">+7 747 130 82 89</a><br>
         	     <a href="tel:+77471308289">+7 747 130 82 89</a><br>
         	     <button class="btn btn-info"> перезвоните мне </button>
         	   </div>
         	</div>
         </div>


		<div class="row">
			<div class="col-sm-push-1 col-sm-10">
				<h1 class="attracter text-center">Лучшие Мтрасы для Сладких Снов</h1>
				<h4 class="attracter-add text-center">
				У нас вы можете преобрести отличную продкуцию на 30% ниже рыночной стоимости.
				Мы работаем на прямую спроизводителем матрасов.
				</h4>
			</div>
		</div>

       <hr>


		<div class="row">
		<div class="col-md-8 col-md-push-2">
			<ul class="bxslider">
				<li>
				<div class="col-sm-4">
				    <div class="advantages-slider center-block">
				    	<i class="fa fa-usd" aria-hidden="true"></i>
				    </div>
				</div>

               <div class="col-sm-8">
                     <h1 class="attracter ">Цены ниже рыночных на <u>28%</u></h1>
					<p>Мы работаем на прямую с заводом изготовителем, 
					по этуму наши цены всегда актуальны и конкуреноспособны
					</p>
				</div>					
				</li>


				<li>
				<div class="col-sm-4">
				 <div class="advantages-slider center-block">
					<i class="fa fa-bug" aria-hidden="true"></i>
					</div>
				</div>

               <div class="col-sm-8">
                     <h1 class="attracter ">Антипаразитарная обработка</h1>
					<p>
					   Вся продукция обрабатывается профессиональными антипаразитарными средствами, 
					   это припятствую появлению и размножени паразитов внутри материалов.
					</p>
				</div>					
				</li>

				<li>
				<div class="col-sm-4">
				 <div class="advantages-slider center-block">
					<i class="fa fa-leaf" aria-hidden="true"></i>
					</div>
				</div>

               <div class="col-sm-8">
                     <h1 class="attracter ">Дышащие материалы</h1>
					<p> Практически все модели которые мы призводим производятся из матераилов которые на 68% пропускают воздух. 
					Благодаря этому матрас хорошо вентилируется и собирает на много меньше пыли.
					</p>
				</div>					
				</li>

			</ul>

			</div>
		</div>

       <!--

		<div class="row">
			<div class="col-sm-4">
				<div class="advantages">
					<i class="fa fa-usd" aria-hidden="true"></i>
					<div class="description">
						<h5>Отличные цены</h5>
						Цены всегда актульны и ниже рыночных 70%
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="advantages">
					<i class="fa fa-bug" aria-hidden="true"></i>
					<div class="description">
						Антибактерилаьная обработка
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="advantages">
					<i class="fa fa-leaf" aria-hidden="true"></i>
					<div class="description">
						Антиаллергенное покрытие
					</div>
				</div>
			</div>
		</div>

		-->
	</div>
</div>
<div class="container-fluid">
	<div class="container">
		<h3 class="an head text-center" data-effect='fadeInUp animated' data-time='10'>
		<span>Пружинный блок <span class="highlight"> Bonell</span></span>
		<h5>160 пружин на 1 м2</h5>
		</h3>
		<div class="row">
			<div class="col-sm-4">
				<div class="product-section">
					<div class="discount-holder-corner"><div> -40 % </div></div>
					<div class="col-sm-12">
						<h4 class="an" data-time='10' data-effect='fadeInLeft animated'>Simplex</h4>
						<img src="img/matress1.jpg" class="img-responsive center-block an" data-time='500' data-effect='flipInX animated'>
						<div class="prices">
							<del>10 500 тг</del>
							<div class="price">9 000 тг. <small>за м<sup>2</sup></small></div>
						</div>
						<div class="an discount-holder" data-time='1000' data-effect='flipInY animated'><div>-10%</div></div>
						<div class="an" data-time='10' data-effect='flipInY animated'>
							<h6>Характеристики</h6>
							<ul class="list-unstyled">
								<li><i class="fa fa-cogs" aria-hidden="true"></i>  Пружинный Блок:  Bonell</li>
								<li><i class="fa fa-align-justify" aria-hidden="true"></i>  Слои: термовойлок с 2-х сторон</li>
								<li><i class="fa fa-cloud-download" aria-hidden="true"></i>  Жесткость : 1 жесткий, 2 жесткий</li>
								<li><i class="fa fa-download" aria-hidden="true"></i>  Нагрузка на 1 место: до 90 кг.</li>
								<li><i class="fa fa-arrows-v" aria-hidden="true"></i>  Высота матраса : 16 см.</li>
							</ul>
						</div>
					</div>
					<div class="col-sm-12">
						<table class="table">
							<tr class="sizes">
								<td>80x190</td>
								<td>180x200</td>
								<td>200x200</td>
							</tr>
							<tr class="prices-for-sizes">
								<td>14 000 тг.</td>
								<td>24 000 тг.</td>
								<td>65 000 тг.</td>
							</tr>
						</table>
						<form class="form">
							<div class="form-group">
								<button type="submit" class="btn btn-success order-now">Заказать</button>
							</div>
							
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="product-section">
					<div class="col-sm-12">
						<h4 class="an" data-time='10' data-effect='fadeInLeft animated'>Simplex Strong</h4>
						<img src="img/matress1.jpg" class="img-responsive center-block an" data-time='500' data-effect='flipInX animated'>
						<div class="prices">
							<del>13 500 тг</del>
							<div class="price">10 200 тг. <small>за м<sup>2</sup></small></div>
						</div>
						<div class="an discount-holder" data-time='1000' data-effect='flipInY animated'><div>-23%</div></div>
						
						
						<div class="an" data-time='10' data-effect='flipInY animated'>
							<h6>Характеристики</h6>
							<ul class="list-unstyled">
								<li><i class="fa fa-cogs" aria-hidden="true"></i>  Пружинный Блок:  Bonell</li>
								<li><i class="fa fa-align-justify" aria-hidden="true"></i>  Слои: термовойлок с 2-х сторон</li>
								<li><i class="fa fa-cloud-download" aria-hidden="true"></i>  Жесткость : 1 жесткий, 2 жесткий</li>
								<li><i class="fa fa-download" aria-hidden="true"></i>  Нагрузка на 1 место: до 90 кг.</li>
								<li><i class="fa fa-arrows-v" aria-hidden="true"></i>  Высота матраса : 16 см.</li>
							</ul>
						</div>
					</div>
					<div class="col-sm-12">
						<table class="table">
							<tr class="sizes">
								<td>80x190</td>
								<td>180x200</td>
								<td>200x200</td>
							</tr>
							<tr class="prices-for-sizes">
								<td>14 000 тг.</td>
								<td>24 000 тг.</td>
								<td>65 000 тг.</td>
							</tr>
						</table>
						<form class="form">
							<div class="form-group">
								<button type="submit" class="btn btn-success order-now">Заказать</button>
							</div>
							
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="product-section">
					<div class="col-sm-12">
						<h4 class="an" data-time='10' data-effect='fadeInLeft animated'>Summer Set</h4>
						<img src="img/matress1.jpg" class="img-responsive center-block an" data-time='500' data-effect='flipInX animated'>
						<div class="prices">
							<del>17 500 тг</del>
							<div class="price">13 420 тг. <small>за м<sup>2</sup></small></div>
						</div>
						<div class="an discount-holder" data-time='1000' data-effect='flipInY animated'><div>-10%</div></div>
						<div class="an" data-time='10' data-effect='flipInY animated'>
							<h6>Характеристики</h6>
							<ul class="list-unstyled">
								<li><i class="fa fa-cogs" aria-hidden="true"></i>  Пружинный Блок:  Bonell</li>
								<li><i class="fa fa-align-justify" aria-hidden="true"></i>  Слои: термовойлок с 2-х сторон</li>
								<li><i class="fa fa-cloud-download" aria-hidden="true"></i>  Жесткость : 1 жесткий, 2 жесткий</li>
								<li><i class="fa fa-download" aria-hidden="true"></i>  Нагрузка на 1 место: до 90 кг.</li>
								<li><i class="fa fa-arrows-v" aria-hidden="true"></i>  Высота матраса : 16 см.</li>
							</ul>
						</div>
					</div>
					<div class="col-sm-12">
						<table class="table">
							<tr class="sizes">
								<td>80x190</td>
								<td>180x200</td>
								<td>200x200</td>
							</tr>
							<tr class="prices-for-sizes">
								<td>14 000 тг.</td>
								<td>24 000 тг.</td>
								<td>65 000 тг.</td>
							</tr>
						</table>
						<form class="form">
							<div class="form-group">
								<button type="submit" class="btn btn-success order-now">Заказать</button>
							</div>
							
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="product-section">
					<div class="col-sm-12">
						<h4 class="an" data-time='10' data-effect='fadeInLeft animated'>Simplex</h4>
						<img src="img/matress1.jpg" class="img-responsive center-block an" data-time='500' data-effect='flipInX animated'>
						<div class="prices">
							<del>10 500 тг</del>
							<div class="price">9 000 тг. <small>за м<sup>2</sup></small></div>
						</div>
						<div class="an discount-holder" data-time='1000' data-effect='flipInY animated'><div>-10%</div></div>
						
						
						<div class="an" data-time='10' data-effect='flipInY animated'>
							<h6>Характеристики</h6>
							<ul class="list-unstyled">
								<li><i class="fa fa-cogs" aria-hidden="true"></i>  Пружинный Блок:  Bonell</li>
								<li><i class="fa fa-align-justify" aria-hidden="true"></i>  Слои: термовойлок с 2-х сторон</li>
								<li><i class="fa fa-cloud-download" aria-hidden="true"></i>  Жесткость : 1 жесткий, 2 жесткий</li>
								<li><i class="fa fa-download" aria-hidden="true"></i>  Нагрузка на 1 место: до 90 кг.</li>
								<li><i class="fa fa-arrows-v" aria-hidden="true"></i>  Высота матраса : 16 см.</li>
							</ul>
						</div>
					</div>
					<div class="col-sm-12">
						<table class="table">
							<tr class="sizes">
								<td>80x190</td>
								<td>180x200</td>
								<td>200x200</td>
							</tr>
							<tr class="prices-for-sizes">
								<td>14 000 тг.</td>
								<td>24 000 тг.</td>
								<td>65 000 тг.</td>
							</tr>
						</table>
						<form class="form">
							<div class="form-group">
								<button type="submit" class="btn btn-success order-now">Заказать</button>
							</div>
							
						</form>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="product-section">
					<div class="col-sm-12">
						<h4 class="an" data-time='10' data-effect='fadeInLeft animated'>Simplex Strong</h4>
						<img src="img/matress1.jpg" class="img-responsive center-block an" data-time='500' data-effect='flipInX animated'>
						<div class="prices">
							<del>13 500 тг</del>
							<div class="price">10 200 тг. <small>за м<sup>2</sup></small></div>
						</div>
						<div class="an discount-holder" data-time='1000' data-effect='flipInY animated'><div>-23%</div></div>
						
						
						<div class="an" data-time='10' data-effect='flipInY animated'>
							<h6>Характеристики</h6>
							<ul class="list-unstyled">
								<li><i class="fa fa-cogs" aria-hidden="true"></i>  Пружинный Блок:  Bonell</li>
								<li><i class="fa fa-align-justify" aria-hidden="true"></i>  Слои: термовойлок с 2-х сторон</li>
								<li><i class="fa fa-cloud-download" aria-hidden="true"></i>  Жесткость : 1 жесткий, 2 жесткий</li>
								<li><i class="fa fa-download" aria-hidden="true"></i>  Нагрузка на 1 место: до 90 кг.</li>
								<li><i class="fa fa-arrows-v" aria-hidden="true"></i>  Высота матраса : 16 см.</li>
							</ul>
						</div>
					</div>
					<div class="col-sm-12">
						<table class="table">
							<tr class="sizes">
								<td>80x190</td>
								<td>180x200</td>
								<td>200x200</td>
							</tr>
							<tr class="prices-for-sizes">
								<td>14 000 тг.</td>
								<td>24 000 тг.</td>
								<td>65 000 тг.</td>
							</tr>
						</table>
						
							<div class="form-group">
								<span class="btn btn-success order-now" data-izimodal-transitionin="fadeInDown" data-izimodal-open="#matress2">Заказать</span>
							<div id="matress2" class="iziModal" data-izimodal-group="alerts" data-izimodal-title="Матрасс 'Aura'"  data-izimodal-width="1140px">
								<div class="container-fluid modal-window">
									<div class="row modal-row">
										<div class="col-sm-4">
											<img src="img/matress1.jpg" class="img-responsive center-block">
											<div class="prices">
												<del>17 500 тг</del>
												<div class="price">13 420 тг. <small>за м<sup>2</sup></small></div>
											</div>
											<div class="matress-advantages">
												<div class="row">
													<div class="col-xs-4">
														<i class="fa fa-bug"></i>
														<div class="ma-description">
															Антибактериальная обработка
														</div>
													</div>
													<div class="col-xs-4">
														<i class="fa fa-cloud-upload"></i>
														<div class="ma-description">
															Дышащие материалы
														</div>
													</div>
													<div class="col-xs-4">
														<i class="fa fa-leaf"></i>
														<div class="ma-description">
															Антиаллергенное покрытие
														</div>
													</div>
												</div>
											</div>
										</div>
										
										
										<div class="col-sm-8">
											<div class="col-sm-5">
												
												<hr class="visible-xs">
												<h6>Характеристики</h6>
												<ul class="list-unstyled">
													<li><i class="fa fa-cogs" aria-hidden="true"></i>  Пружинный Блок:  Bonell</li>
													<li><i class="fa fa-align-justify" aria-hidden="true"></i>  Слои: термовойлок с 2-х сторон</li>
													<li><i class="fa fa-cloud-download" aria-hidden="true"></i>  Жесткость : 1 жесткий, 2 жесткий</li>
													<li><i class="fa fa-download" aria-hidden="true"></i>  Нагрузка на 1 место: до 90 кг.</li>
													<li><i class="fa fa-arrows-v" aria-hidden="true"></i>  Высота матраса : 16 см.</li>
													<li><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>  Срок службы : 6-8 лет</li>
												</ul>
											</div>
											<div class="col-sm-7">
												<hr class="visible-xs">
												<h6>Форма заказа</h6>
												<form class="form-horizontal">
													<!-- Text input-->
													<div class="form-group">
														<label class="col-md-4 control-label" for="textinput">Ваше имя</label>
														<div class="col-md-8">
															<input id="textinput" name="name" type="text" placeholder="Ваше имя*" class="form-control input-sm" required="">
														</div>
													</div>
													<!-- Text input-->
													<div class="form-group">
														<label class="col-md-4 control-label" for="textinput">Номер</label>
														<div class="col-md-8">
															<input id="textinput" name="phone" type="text" placeholder="7хххххххххх*" class="form-control input-sm" required="">
														</div>
													</div>
													<!-- Select Basic -->
													<div class="form-group">
														<label class="col-md-4 control-label" for="selectbasic">Размер</label>
														<div class="col-md-8">
															<select id="selectbasic" data-price="6900" name="size" class="calculate form-control input-sm">
																<option data-multiplier="0" value="0">Размер</option>
																<option data-multiplier="1.55" value="80 х 190 см">80 х 190 см </option>
																<option data-multiplier="1.56" value="80 х 195 см">80 х 195 см </option>
																<option data-multiplier="1.6" value="80 х 200 см">80 х 200 см </option>
																<option data-multiplier="1.71" value="90 х 190 см">90 х 190 см </option>
																<option data-multiplier="1.76" value="90 х 195 см">90 х 195 см </option>
																<option data-multiplier="1.8" value="90 х 200 см">90 х 200 см </option>
																<option data-multiplier="2.28" value="120 х 190 см">120 х 190 см</option>
																<option data-multiplier="2.34" value="120 х 195 см">120 х 195 см</option>
																<option data-multiplier="2.4" value="120 х 200 см">120 х 200 см</option>
																<option data-multiplier="2.66" value="140 х 190 см">140 х 190 см</option>
																<option data-multiplier="2.73" value="140 х 195 см">140 х 195 см</option>
																<option data-multiplier="2.8" value="140 х 200 см">140 х 200 см</option>
																<option data-multiplier="3.04" value="160 х 190 см">160 х 190 см</option>
																<option data-multiplier="3.12" value="160 х 195 см">160 х 195 см</option>
																<option data-multiplier="3.2" value="160 х 200 см">160 х 200 см</option>
																<option data-multiplier="3.42" value="180 х 190 см">180 х 190 см</option>
																<option data-multiplier="3.51" value="180 х 195 см">180 х 195 см</option>
																<option data-multiplier="3.6" value="180 х 200 см">180 х 200 см</option>
																<option data-multiplier="3.8" value="200 х 190 см">200 х 190 см</option>
																<option data-multiplier="3.9" value="200 х 195 см">200 х 195 см</option>
																<option data-multiplier="4" value="200 х 200 см">200 х 200 см</option>
															</select>
														</div>
													</div>
													<!-- Button -->
													
													<div class="form-group">
														<label class="col-md-4 control-label" for="singlebutton">Оформить заказ</label>
														<div class="col-md-8">
														    <input type="hidden" name="price" class="price" value="0">
															<button id="singlebutton" name="" class="btn btn-info btn-sm">Заказать</button>
															<span class="pay_price"> 0 KZ </span>
														</div>
													</div>
												</form>
											</div>
											<div class="col-sm-12">
												<hr>
												
												<h6>Описание</h6>
												<p class="modal-description">Бюджетный вариант из данной серии матрасов. Основой матраса является пружинный блок Bonnel – бесшумный, прочный, обеспечивающий оптимальную поддержку позвоночника. Пружинный блок защищен с обеих сторон современным материалом – термовойлоком (нетканый материал, прочный, упругий, плотный, устойчив к влаге, чрезвычайно легкий ). Покрытие матраса выполнено из высококачественного синтетического материала , простеганного на ППУ 1см, которое придает мягкость и комфорт матрасу.
												</p>
											</div>
										</div>
										<div class="col-sm-12">	
                                            
										</div>
									</div>
								</div>
							</div>
							</div>
							
					
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="product-section">
					<div class="col-sm-12">
						<h4 class="an" data-time='10' data-effect='fadeInLeft animated'>Summer Set</h4>
						<img src="img/matress1.jpg" class="img-responsive center-block an" data-time='500' data-effect='flipInX animated'>
						<div class="prices">
							<del>17 500 тг</del>
							<div class="price">13 420 тг. <small>за м<sup>2</sup></small></div>
						</div>
						<div class="an discount-holder" data-time='1000' data-effect='flipInY animated'><div>-10%</div></div>
						<div class="an" data-time='10' data-effect='flipInY animated'>
							<h6>Характеристики</h6>
							<ul class="list-unstyled">
								<li><i class="fa fa-cogs" aria-hidden="true"></i>  Пружинный Блок:  Bonell</li>
								<li><i class="fa fa-align-justify" aria-hidden="true"></i>  Слои: термовойлок с 2-х сторон</li>
								<li><i class="fa fa-cloud-download" aria-hidden="true"></i>  Жесткость : 1 жесткий, 2 жесткий</li>
								<li><i class="fa fa-download" aria-hidden="true"></i>  Нагрузка на 1 место: до 90 кг.</li>
								<li><i class="fa fa-arrows-v" aria-hidden="true"></i>  Высота матраса : 16 см.</li>
							</ul>
						</div>
					</div>
					<div class="col-sm-12">
						<table class="table">
							<tr class="sizes">
								<td>80x190</td>
								<td>180x200</td>
								<td>200x200</td>
							</tr>
							<tr class="prices-for-sizes">
								<td>14 000 тг.</td>
								<td>24 000 тг.</td>
								<td>65 000 тг.</td>
							</tr>
						</table>
						<div class="form-group">
							<span class="btn btn-success order-now" data-izimodal-transitionin="fadeInDown" data-izimodal-open="#matress1">Заказать</span>
							
							<div id="matress1" class="iziModal" data-izimodal-group="alerts" data-izimodal-title="Матрасс 'Aura'"  data-izimodal-width="1140px">
								<div class="container-fluid modal-window">
									<div class="row modal-row">		                    
										<div class="col-sm-4">
											<img src="img/matress1.jpg" class="img-responsive center-block">
											<div class="prices">
												<del>17 500 тг</del>
												<div class="price">13 420 тг. <small>за м<sup>2</sup></small></div>
											</div>
											<div class="matress-advantages">
												<div class="row">
													<div class="col-xs-4">
														<i class="fa fa-bug"></i>
														<div class="ma-description">
															Антибактериальная обработка
														</div>
													</div>
													<div class="col-xs-4">
														<i class="fa fa-cloud-upload"></i>
														<div class="ma-description">
															Дышащие материалы
														</div>
													</div>
													<div class="col-xs-4">
														<i class="fa fa-leaf"></i>
														<div class="ma-description">
															Антиаллергенное покрытие
														</div>
													</div>
												</div>
											</div>
										</div>
										
										
										<div class="col-sm-8">
											
											<div class="col-sm-5">
												
												<hr class="visible-xs">
												<h6>Характеристики</h6>
												<ul class="list-unstyled">
													<li><i class="fa fa-cogs" aria-hidden="true"></i>  Пружинный Блок:  Bonell</li>
													<li><i class="fa fa-align-justify" aria-hidden="true"></i>  Слои: термовойлок с 2-х сторон</li>
													<li><i class="fa fa-cloud-download" aria-hidden="true"></i>  Жесткость : 1 жесткий, 2 жесткий</li>
													<li><i class="fa fa-download" aria-hidden="true"></i>  Нагрузка на 1 место: до 90 кг.</li>
													<li><i class="fa fa-arrows-v" aria-hidden="true"></i>  Высота матраса : 16 см.</li>
													<li><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>  Срок службы : 6-8 лет</li>
												</ul>

												<hr>

												<h6 class="attention">Внимание</h6>
												<small>
													Этот матрас можеть быть произведен не стандартного размера, при необходимости отметтьте соотвествующий пунки 
													в форме заказа.
												</small>


												
											</div>
											<div class="col-sm-7">
												<hr class="visible-xs">
												<h6>Форма заказа</h6>
												<form class="form-horizontal">
													<!-- Text input-->
													<div class="form-group">
														<label class="col-md-4 control-label" for="textinput">Ваше имя</label>
														<div class="col-md-8">
															<input id="textinput" name="textinput" type="text" placeholder="Ваше имя" class="form-control input-sm" required="">
														</div>
													</div>
													<!-- Text input-->
													<div class="form-group">
														<label class="col-md-4 control-label" for="textinput">Номер</label>
														<div class="col-md-8">
															<input id="textinput" name="textinput" type="text" placeholder="7хххххххххх" class="form-control input-sm" required="">
														</div>
													</div>
													<!-- Select Basic -->
													<div class="form-group">
														<label class="col-md-4 control-label" for="selectbasic">Размер</label>
														<div class="col-md-8">
															<select id="selectbasic" data-price="7800" name="selectbasic" class="calculate form-control input-sm">
																<option data-multiplier="0" value="0">Размер</option>
																<option data-multiplier="1.55" value="80 х 190 см">80 х 190 см </option>
																<option data-multiplier="1.56" value="80 х 195 см">80 х 195 см </option>
																<option data-multiplier="1.6" value="80 х 200 см">80 х 200 см </option>
																<option data-multiplier="1.71" value="90 х 190 см">90 х 190 см </option>
																<option data-multiplier="1.76" value="90 х 195 см">90 х 195 см </option>
																<option data-multiplier="1.8" value="90 х 200 см">90 х 200 см </option>
																<option data-multiplier="2.28" value="120 х 190 см">120 х 190 см</option>
																<option data-multiplier="2.34" value="120 х 195 см">120 х 195 см</option>
																<option data-multiplier="2.4" value="120 х 200 см">120 х 200 см</option>
																<option data-multiplier="2.66" value="140 х 190 см">140 х 190 см</option>
																<option data-multiplier="2.73" value="140 х 195 см">140 х 195 см</option>
																<option data-multiplier="2.8" value="140 х 200 см">140 х 200 см</option>
																<option data-multiplier="3.04" value="160 х 190 см">160 х 190 см</option>
																<option data-multiplier="3.12" value="160 х 195 см">160 х 195 см</option>
																<option data-multiplier="3.2" value="160 х 200 см">160 х 200 см</option>
																<option data-multiplier="3.42" value="180 х 190 см">180 х 190 см</option>
																<option data-multiplier="3.51" value="180 х 195 см">180 х 195 см</option>
																<option data-multiplier="3.6" value="180 х 200 см">180 х 200 см</option>
																<option data-multiplier="3.8" value="200 х 190 см">200 х 190 см</option>
																<option data-multiplier="3.9" value="200 х 195 см">200 х 195 см</option>
																<option data-multiplier="4" value="200 х 200 см">200 х 200 см</option>
															</select>
														</div>
													</div>

													<div class="form-group">
														<label class="col-md-4 control-label" for="checkboxes">Не стандартный размер</label>
														<div class="col-md-8">
																<input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
														</div>
													</div>
													<!-- Button -->
													
													<div class="form-group">
														<label class="col-md-4 control-label" for="singlebutton">Оформить заказ</label>
														<div class="col-md-8">
														    <input type="hidden" name="price" class="price" value="0">
															<button id="singlebutton" name="singlebutton" class="btn btn-sm btn-info">Заказать</button>
															<span class="pay_price"> 0 KZ </span>
														</div>
													</div>
												</form>
											</div>
											<div class="col-sm-12">
												<hr>
				
												<h6>Описание</h6>
												<p class="modal-description">Бюджетный вариант из данной серии матрасов. Основой матраса является пружинный блок Bonnel – бесшумный, прочный, обеспечивающий оптимальную поддержку позвоночника. Пружинный блок защищен с обеих сторон современным материалом – термовойлоком (нетканый материал, прочный, упругий, плотный, устойчив к влаге, чрезвычайно легкий ). Покрытие матраса выполнено из высококачественного синтетического материала , простеганного на ППУ 1см, которое придает мягкость и комфорт матрасу.
												</p>
											</div>
										</div>
                                          

                                          <div class="col-sm-12">
                                          
                                          	<hr>
                                          </div>

										
									</div>
								</div>
							</div>



						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function () {
$(".iziModal").iziModal({
	headerColor: '#489FDF',
});
});
</script>
</body>
</html>