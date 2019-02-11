<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Strike R4</title>
		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Quicksand:400,700%7CCabin:400%7CDancing+Script" rel="stylesheet">
		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
		<!-- Owl Carousel -->
		<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
		<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />
		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- Header -->
		<header id="header">
			<!-- Top nav -->
			<div id="top-nav">
				<div class="container">
				<!-- logo -->
				<div class="logo">
					<a href="#"><img src="{{ url("storage/img/logo.png") }}" alt="logo"></a>
				</div>
				<!-- logo -->
				<!-- Mobile toggle -->
				<button class="navbar-toggle">
					<span></span>
				</button>
				<!-- Mobile toggle -->
				<!-- social links -->
				<ul class="social-nav">
					<li><a href="https://www.facebook.com/pg/striker4bolichebar"><i class="fa fa-facebook"></i></a></li>
				</ul>
				<!-- /social links -->
				</div>
			</div>
			<!-- /Top nav -->
			<!-- Bottom nav -->
			<div id="bottom-nav">
				<div class="container">
				<nav id="nav">
					<!-- nav -->
					<ul class="main-nav nav navbar-nav">
						<li><a href="#">Home</a></li>
						<li><a href="#">Sobre</a></li>
						<li><a href="#">Cardápio</a></li>
						<li><a href="#">Reservas</a></li>
						<li><a href="#">Galeria</a></li>
						<li><a href="#">Eventos</a></li>
						<li><a href="#">Contato</a></li>
					</ul>
					<!-- /nav -->
					<!-- button nav -->
					<ul class="cta-nav">
			@guest
			<li><a class="main-button" data-toggle="modal" data-target="#ModalLogin">Minha Conta</a></li>
			@else
						<li><a href="login" class="main-button">{{ Auth::user()->name }}</a></li>
			@endguest
					</ul>
					<!-- button nav -->
					<!-- contact nav -->
					<ul class="contact-nav nav navbar-nav">
						<li><a href="#"><i class="fa fa-phone"></i>(47) 9 9288-7878</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> Rio Negro - PR</a></li>
					</ul>
					<!-- contact nav -->
				</nav>
				</div>
			</div>
			<!-- /Bottom nav -->
		</header>
		<!-- /Header -->
		<!-- Home -->
		<div id="home" class="banner-area">
			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(storage/img/background02.jpg)"></div>
			<!-- /Backgound Image -->
			<div class="home-wrapper">
				<div class="col-md-10 col-md-offset-1 text-center">
					<div class="home-content">
						<h1 class="white-text">Strike R4 Boliche Bar</h1>
						<h4 class="white-text lead">Entretenimento, Lazer e Diversão. Boliche, Sinuca, Espaço Kids</h4>
					@guest
						<button class="main-button" data-toggle="modal" data-target="#ModalCreate"><a class="main-button">Faça seu cadastro</a></button>
					@else
					<button class="main-button"><a href="register" class="main-button">Verificar promoções</a></button>
					@endguest
					</div>
				</div>
			</div>
		</div>
		<!-- /Home -->
		<!-- About -->
		<div id="about" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- section header -->
					<div class="section-header text-center">
						<h4 class="sub-title">Sobre nós</h4>
						<h2 class="title">Strike R4 Boliche Bar</h2>
					</div>
					<!-- /section header -->
					<!-- about content -->
					<div class="col-md-5">
						<h4 class="lead">Bem vindo ao Strike R4.</h4>
					</div>
					<!-- /about content -->
					<!-- about content -->
					<div class="col-md-7">
						<p>Localizado em Rio Negro - PR, o espaço é garantia de diversão! Possui 4 pistas de boliche de última geração.
Além de sinuca, comidas, bebidas e um ambiente lindo e amplo!</p>
					</div>
					<!-- /about content -->
					<!-- Galery Slider -->
					<div class="col-md-12">
						<div id="galery" class="owl-carousel owl-theme">
							<!-- single column -->
							<div class="galery-item">
								<!-- single image -->
								<div class="galery-img" style="background-image:url(storage/img/image01.jpg)"></div>
								<!-- /single image -->
							</div>
							<!-- single column -->
							<!-- single column -->
							<div class="galery-item">
								<!-- single image -->
								<div class="galery-img" style="background-image:url(storage/img/image02.jpg)"></div>
								<!-- /single image -->
								<!-- single image -->
								<div class="galery-img" style="background-image:url(storage/img/image03.jpg)"></div>
								<!-- /single image -->
							</div>
							<!-- single column -->
							<!-- single column -->
							<div class="galery-item">
								<div class="item-column">
									<!-- single image -->
									<div class="galery-img" style="background-image:url(storage/img/image04.jpg)"></div>
									<!-- /single image -->
									<!-- single image -->
									<div class="galery-img" style="background-image:url(storage/img/image05.jpg)"></div>
									<!-- /single image -->
								</div>
								<div class="item-column">
									<!-- single image -->
									<div class="galery-img" style="background-image:url(storage/img/image06.jpg)"></div>
									<!-- /single image -->
									<!-- single image -->
									<div class="galery-img" style="background-image:url(storage/img/image07.jpg)"></div>
									<!-- /single image -->
								</div>
							</div>
							<!-- /single column -->
						</div>
					</div>
					<!-- /Galery Slider -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /About -->
		<!-- Menu -->
				<div id="menu" class="section">
					<!-- Backgound Image -->
					<div class="bg-image bg-parallax overlay" style="background-image:url(storage/img/background01.jpg)"></div>
					<!-- /Backgound Image -->
					<!-- container -->
					<div class="container">
						<!-- row -->
						<div class="row">
							<div class="section-header text-center">
								<h4 class="sub-title">Descubra</h4>
								<h2 class="title white-text">Nosso Cardápio</h2>
							</div>
							<!-- menu nav -->
							<ul class="menu-nav">
							  <li><a data-toggle="tab" href="#menu1">Porções</a></li>
							  <li><a data-toggle="tab" href="#menu2">Bebidas</a></li>
							</ul>
							<!-- /menu nav -->
							<!-- menu content -->
							<!-- menu content -->
							<div id="menu-content" class="tab-content">
									<div id="welcome" class="tab-pane fade active in">
											<center>Clique em alguma categoria para exibir o cardápio</center>
										</div>
								<!-- menu1 -->
								<div id="menu1" class="tab-pane fade">
									<div class="col-md-6">
									@foreach($foods as $p)
											<!-- single dish -->
											<div class="single-dish">
												<div class="single-dish-heading">
													<h4 class="name">{{$p->name}}</h4>
													<h4 class="price">R${{number_format($p->price, 2) }}</h4>
												</div>
												<p>{{$p->description}}</p>
											</div>
									@if ($loop->iteration % 18 == 0)
									</div>
									<div class="col-md-6">
									@endif
									@endforeach
								</div>
								<!-- /menu1 -->
								</div>
								<div id="menu2" class="tab-pane">
									<div class="col-md-6">
									@foreach($drinks as $d)
											<!-- single dish -->
											<div class="single-dish">
												<div class="single-dish-heading">
													<h4 class="name">{{$d->name}}</h4>
													<h4 class="price">R${{number_format($d->price, 2) }}</h4>
												</div>
												<p>{{$p->description}}</p>
											</div>
									@if ($loop->iteration % 36 == 0)
									</div>
									<div class="col-md-6">
									@endif
									@endforeach
								</div>
							<!-- /menu content -->
						</div>
						<!-- /row -->
					</div>
					<!-- /container -->
				</div>
				<!-- /Menu -->
			</div>
		</div>
		<!-- Events -->
		<div id="events" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- section header -->
					<div class="section-header text-center">
						<h4 class="sub-title">Eventos Especiais</h4>
						<h2 class="title">Próximos Eventos</h2>
					</div>
					<!-- /section header -->
					<!-- single event -->
					@foreach($celebrations as $c)
					<div class="col-md-6">
						<div class="event">
							<div class="event-img">
								<img src="{{ url("storage/celebrations/{$c->photo}") }}" alt="{{ $c->name}}">
							</div>
							<div class="event-content">
								<h3><a href="#">{{$c->name}}</a></h3>
								<p>{{$c->description}}</p>
							</div>
						</div>
					</div>
					@endforeach
					<!-- /single event -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /Events -->
		<!-- Contact -->
		<div id="contact" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-5 col-md-offset-7">
						<div class="section-header">
							<h4 class="sub-title">Entre em contato conosco</h4>
							<h2 class="title">Strike R4</h2>
						</div>
						<div class="contact-content">
							<p>Entre em contato para dúvidas, sugestões, etc...</p>
							<h3>Tel: <a href="#">(47) 9 9288-7878</a></h3>
							<p>Endereço: Dr. Vicente Machado, 321 Rio Negro, Parana, Brasil</p>
							<p>Email: <a href="#">striker4boliche@gmail.com</a></p>
							<ul class="list-inline">
								<li><p>Siga-nos:</p></li>
								<li><a href="https://www.facebook.com/pg/striker4bolichebar"><i class="fa fa-facebook"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
			<!-- map -->
			<div id="map"></div>
			<!-- /map -->
		</div>
		<!-- Contact -->
		<!-- Footer -->
		<footer id="footer">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- footer nav -->
					Desenvolvido por <a href="https://www.linkedin.com/in/carlos-xavier-322557135/" style="color:coral">Carlos H. Xavier</a> e <a href="https://www.linkedin.com/in/solano-matheus-martins/" style="color:coral">Solano M. Martins</a>
					<!-- /footer nav -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</footer>
		<!-- /Footer -->
		<!-- Preloader -->
		<div id="preloader">
			<div class="preloader">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
		<!-- /Preloader -->
<!-- Modal Login -->
<div id="ModalLogin" class="modal fade" role="dialog">
		<div class="modal-dialog">
		  <!-- Modal Login-->
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Acesse sua conta</h4>
			</div>
			<div class="modal-body">
					<div class="card-body">
							<form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
							@csrf
							@if ($errors->has('email'))
							<div class="alert alert-danger" role="alert">
								<strong>{{ $errors->first('email') }}</strong>
							</div>
							@endif
							<div class="form-group row">
								<label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-mail') }}</label>
									<div class="col-md-6">
									<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
									</div>
								</div>
								<div class="form-group row">
								<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>
								<div class="col-md-6">
								<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
								@if ($errors->has('password'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('password') }}</strong>
								</span>
								@endif
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="confirm-button">{{ __('Entrar') }}</button>
			</form>
				<a data-toggle="modal" data-target="#ModalReset" class="confirm-button">Recuperar</a>
				<button type="button" class="cancel-button" data-dismiss="modal">Cancelar</button>
			</div>
		  </div>
		</div>
	  </div>
<!-- Modal Create -->
<div id="ModalCreate" class="modal fade" role="dialog">
	<div class="modal-dialog">
	  <!-- Modal Login-->
	  <div class="modal-content">
		<div class="modal-header">
		  <button type="button" class="close" data-dismiss="modal">&times;</button>
		  <h4 class="modal-title">Faça seu cadastro para acessar nosso site :)</h4>
		</div>
		<div class="modal-body">
			<div class="card-body">
				<form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
					@csrf
					<div class="form-group row">
						<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>
						<div class="col-md-6">
							<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
							@if ($errors->has('name'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('name') }}</strong>
								</span>
							@endif
						</div>
					</div>
					<div class="form-group row">
						<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>
						<div class="col-md-6">
							<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
							@if ($errors->has('email'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
							@endif
						</div>
					</div>
					<div class="form-group row">
						<label for="CPF" class="col-md-4 col-form-label text-md-right">{{ __('CPF') }}</label>
						<div class="col-md-6">
							<input id="CPF" type="text" class="form-control{{ $errors->has('CPF') ? ' is-invalid' : '' }}" name="CPF" value="{{ old('CPF') }}" required autofocus>
							@if ($errors->has('CPF'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('CPF') }}</strong>
								</span>
							@endif
						</div>
					</div>
					<div class="form-group row">
						<label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Telefone') }}</label>
						<div class="col-md-6">
							<input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus>
							@if ($errors->has('phone'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('phone') }}</strong>
								</span>
							@endif
						</div>
					</div>
					<div class="form-group row">
						<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>
						<div class="col-md-6">
							<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
							@if ($errors->has('password'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('password') }}</strong>
								</span>
							@endif
						</div>
					</div>
					<div class="form-group row">
						<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirme a Senha') }}</label>
						<div class="col-md-6">
							<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
						</div>
					</div>
			</div>
		</div>
		<div class="modal-footer">
					<button type="submit" class="confirm-button">
						{{ __('Registrar') }}
					</button>
		</form>
			<button type="button" class="cancel-button" data-dismiss="modal">Cancelar</button>
		</div>
	  </div>
	</div>
  </div>
<!-- Modal Recuperar -->
<div id="ModalReset" class="modal fade" role="dialog">
			<div class="modal-dialog">
			<!-- Modal Login-->
			<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Recupere sua conta</h4>
				Insira seu e-mail e enviaremos um link para recuperação de seu cadastro.
				</div>
				<div class="modal-body">
					<div class="card-body">
			@if (session('status'))
			<div class="alert alert-success" role="alert">
				{{ session('status') }}
			</div>
		@endif
		<form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
			@csrf
			<div class="form-group row">
				<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>
				<div class="col-md-6">
					<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
					@if ($errors->has('email'))
						<span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('email') }}</strong>
						</span>
					@endif
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button type="submit" class="confirm-button">Enviar e-mail</button>
		</form>
				<button type="button" class="cancel-button" data-dismiss="modal">Cancelar</button>
			</div>
		  </div>
		</div>
	  </div>
	<!-- Modal -->
<!-- Scripts -->
@if ($errors->has('email'))
<script>
		window.addEventListener("load", function(event) {
		$('#ModalLogin').modal('show');
	});
</script>
@endif
@if ($errors->has('name') or $errors->has('CPF') or $errors->has('phone') or $errors->has('password'))
<script>
		window.addEventListener("load", function(event) {
		$('#ModalCreate').modal('show');
	});
</script>
@endif
<script>
		window.addEventListener("load", function(event) {
  $('#phone').mask('(00) 00000-0000');
  $('#CPF').mask('000.000.000-00', {reverse: true});
	});
</script>
<!-- Scripts -->
		<!-- jQuery Plugins -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/owl.carousel.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
		<script type="text/javascript" src="js/google-map.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src="js/jquery.mask.js"></script>
	</body>
</html>