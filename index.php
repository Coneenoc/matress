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
		$('documnet').ready(function() {
			$('.bxslider').bxSlider({
				adaptiveHeight: true,
				});
		});
	</script>
	<script type="text/javascript">
		$('documnet').ready(function() {
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
					<div class="navbar-header"><a class="navbar-brand" href="#">
						<img src="img/logo.png">
					</a>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse navbar-menubuilder">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#products">О нас</a></li>
						<li><a href="#about-us">Зависимые матрасы </a></li>
						<li><a href="#about-us">Назависимые матрасы </a></li>
						<li><a href="#about-us">Беспружинные матрасы </a></li>
						<li><a href="#about-us">Детские матрасы </a></li>
						<li><a href="#contact">Отзывы</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-sm-push-3">
				<h1 class="attracter ">Лучшие Мтрасы для Сладких Снов</h1>
				<h4 class="attracter-add text-center">
				У нас вы можете преобрести отличную продкуцию на 30% ниже рыночной стоимости.
				Мы работаем на прямую спроизводителем матрасов.
				</h4>
			</div>
		</div>
		<div class="row">
			<ul class="bxslider">
				<li>
					<h1 class="attracter ">Лучшие Мтрасы для Сладких Снов</h1>
					<h4 class="attracter-add text-center">
					30% ниже рыночной стоимости.
					Мы работаем на прямую спроизводителем матрасов.
					</h4>
					
				</li>
				<li>
					<h1 class="attracter ">Мтрасы для Сладких Снов</h1>
					<h4 class="attracter-add text-center">
					У нас вы можете преобрести отличную продкуцию на 30% ниже рыночной стоимости.
					Мы работаем на прямую спроизводителем матрасов.
					</h4>
					
				</li>
				<li>
					<h1 class="attracter ">Лучшие Мтрасы </h1>
					<h4 class="attracter-add text-center">
					У нас вы можете преобрести отличную продкуцию .
					Мы работаем на прямую спроизводителем матрасов.
					</h4>
					
				</li>
			</ul>
		</div>
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
						<div class="form-group">
							<span class="btn btn-success order-now" data-izimodal-transitionin="fadeInDown" data-izimodal-open="#matress1">Заказать</span>
							<div id="matress1" class="iziModal" data-izimodal-group="alerts" data-izimodal-title="Матрасс 'Aura'"  data-izimodal-width="1200px">
								<div class="container-fluid modal-window">
									<div class="row">
										<div class="col-sm-4">
											<img src="img/matress1.jpg" class="img-responsive center-block">
											<div class="prices">
												<del>17 500 тг</del>
												<div class="price">13 420 тг. <small>за м<sup>2</sup></small></div>
											</div>
											<div class="matress-advantages">
												<div class="row">
													<div class="col-xs-4 col-sm-12">
														<i class="fa fa-bug"></i>
														<div class="ma-description">
															Антибактериальная обработка
														</div>
													</div>
													<div class="col-xs-4 col-sm-12">
														<i class="fa fa-cloud-upload"></i>
														<div class="ma-description">
															Дышащие матриалы
														</div>
													</div>
													<div class="col-xs-4 col-sm-12">
														<i class="fa fa-leaf"></i>
														<div class="ma-description">
															Антиаллергенное покрытие
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-8">
											<h6>Описание</h6>
											<p class="modal-description"> Бюджетный вариант из данной серии матрасов. Основой матраса является пружинный блок Bonnel – бесшумный, прочный, обеспечивающий оптимальную поддержку позвоночника. Пружинный блок защищен с обеих сторон современным материалом – термовойлоком (нетканый материал, прочный, упругий, плотный, устойчив к влаге, чрезвычайно легкий ). Покрытие матраса выполнено из высококачественного синтетического материала , простеганного на ППУ 1см, которое придает мягкость и комфорт матрасу.
											</p>
											<hr>
											<div class="row">
												<div class="col-md-4 col-sm-6">
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
												<div class="col-md-8 col-sm-6">
													<hr class="visible-xs">
													<div class="clearfix"></div>
													
													<h6>Оформление заказа</h6>
													<form class="form-horizontal">


														<div class="form-group">
															<label for="inputPassword3" class="col-sm-2 control-label">Номер</label>
															<div class="col-sm-4">
																<input type="text" class="input-sm form-control" id="inputPassword3" placeholder="7 (ХХХ) ХХХ ХХ ХХ">
															</div>

															<label for="inputPassword3" class="col-sm-2 control-label">Номер</label>
															<div class="col-sm-4">
																<input type="text" class="input-sm form-control" id="inputPassword3" placeholder="7 (ХХХ) ХХХ ХХ ХХ">
															</div>
														


															<label for="inputPassword3" class="col-md-2 control-label">Размер</label>
															<div class="col-md-4">
																<select class="form-control input-sm">
																	<option>80х190</option>
																	<option>80х190</option>
																	<option>80х190</option>
																	<option>80х190</option>
																	<option>80х190</option>
																	<option>80х190</option>
																	<option>80х190</option>
																	<option>80х190</option>
																	<option>80х190</option>
																	<option>80х190</option>
																	<option>80х190</option>
																	<option>80х190</option>
																	<option>80х190</option>
																	<option>80х190</option>
																	<option>80х190</option>
																	<option>80х190</option>
																	<option>80х190</option>
																	<option>80х190</option>
																	<option>80х190</option>
																	<option>80х190</option>
																	<option>80х190</option>
																</select>
															</div>
														
															<label for="inputPassword3" class="col-md-2 control-label">Шт</label>
															<div class="col-md-4 ">
																<input type="number" class="input-sm form-control" id="inputPassword3" placeholder="1" min='1' max='10' value="1">
															</div>
                                  
                                                            <div class="col-xs-12">
                                                             <label class="radio-inline">
																<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked="checked"> Доставка
															</label>
															<label class="radio-inline">
																<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Самовывоз
															</label>
															</div>

														</div>

										                     <div class="text-center  modal-price">13 420 KZT</div>
														
														<div class="form-group col-sm-12">
																<button class="btn btn-primary center-block">Заказать</button>
														</div>
														
													</form>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<small>
											Обращаем ваше внимание что эта модель может быть изготовленна 
											нестандартного размера, для просчет стоимости вы звоните по телефонам <br>
											  <b> +7 747 130 82 89</b> | <b> +7 702 130 82 89</b>

											</small>
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