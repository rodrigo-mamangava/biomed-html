<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="language" content="pt-br" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="css/style.css">

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src=></script>

<script type="text/javascript">
$(function() {
	  // Handler for .ready() called.

	  
	$('.carousel').carousel({
	  interval: 0
	})
	  
	});
</script>

<title>BIOMED HTML</title>
</head>
<body>

	<header class="container">
		<nav class="navbar navbar-default " role="navigation">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">Biomed</a>
		    </div>
		
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      	      
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#">Empresa</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
		          	Produtos
		          	<span class="caret"></span>
		          </a>
		          <ul class="dropdown-menu dropdown-menu-left" role="menu">
		            <li><a href="#">Produto 01</a></li>
		            <li><a href="#">Produto 02</a></li>
		            <li><a href="#">Produto 03</a></li>
		            <li><a href="#">Produto 04</a></li>
		          </ul>
		        </li>
		        <li><a href="#">Suporte</a></li>
		        <li><a href="#">Eventos</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
		          	Contato
		          	<span class="caret"></span>
		          </a>
		          <ul class="dropdown-menu dropdown-menu-left" role="menu">
		            <li><a href="#">Fale conosco</a></li>
		            <li><a href="#">Trabalhe conosco</a></li>
		          </ul>
		        </li>
		        <li>
			        <form class="navbar-form navbar-right" role="search">
				        <div class="input-group">
					      <input type="text" class="form-control">
					      <span class="input-group-btn">
					        <button class="btn btn-default" type="button">Go!</button>
					      </span>
					    </div><!-- /input-group -->
				   </form>
		        </li>
		      </ul>	      
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav><!-- /nav -->
		
	</header> <!-- /header -->



	<div class="img-destaque-home container-fluid">
		<div class="jumbotron">
		  
		</div>
	</div><!-- /img-destaque-home -->


	<div class="box-col-03 container">
		<div class="row">
			<div class="col-sm-4">
				<h2>Aqui vai um titulo H2</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
					quis massa tincidunt, pulvinar arcu eget, euismod arcu. Nulla massa
					quam, gravida in arcu at, mattis mollis tellus.</p>
			</div> <!-- col-sm-4 -->
			<div class="col-sm-4">
				<h2>Aqui vai um titulo H2</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
					quis massa tincidunt, pulvinar arcu eget, euismod arcu. Nulla massa
					quam, gravida in arcu at, mattis mollis tellus.</p>
			</div> <!-- col-sm-4 -->
			<div class="col-sm-4">
				<h2>Aqui vai um titulo H2</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
					quis massa tincidunt, pulvinar arcu eget, euismod arcu. Nulla massa
					quam, gravida in arcu at, mattis mollis tellus.</p>
			</div> <!-- col-sm-4 -->
		</div>
		<!-- row -->
	</div>
	<!-- /box-col-03 -->

	<div class="divisoria-tipo-01 container-fluid">
		<div class="row">
		
			<div class="col-xs-4 col-md-5 col-esq">
				<p><hr></p>
			</div>
			<div class="col-xs-4 col-md-2">
				<p> Produtos em destaque</p>
			</div>
			<div class="col-xs-4 col-md-5 col-dir">
				<p><hr></p>
			</div>
		
		</div>
	</div>
	<!-- /divisoria-tipo-01 -->
	
		<div class="vitrine-tipo-home container">
			<div class="row">
				<div class="col-sm-6 col-md-3">
					<div class="thumbnail">
				      <img src="img/equip/item-01.jpg"  alt="...">
				      <div class="caption">
				        <h3>Equipamento 01</h3>
				        <p>
				        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				        Integer ac dui ultricies, ultrices diam a, facilisis risus. 
				        Cras sit amet augue sed diam convallis finibus. 
				        </p>
				      </div>
				    </div>	
				</div> <!-- col-sm-3 -->
				
				<div class="col-sm-6 col-md-3">
					<div class="thumbnail">
				      <img src="img/equip/item-02.jpg" data-src="holder.js/100x180" alt="...">
				      <div class="caption">
				        <h3>Equipamento 02</h3>
				        <p>
				        	Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				        	Integer ac dui ultricies, ultrices diam a, facilisis risus. 
				        	Cras sit amet augue sed diam convallis finibus. 
				        </p>
				      </div>
				    </div>	
				</div> <!-- col-sm-3 -->
				
				
				<div class="col-sm-6 col-md-3">
					<div class="thumbnail">
				      <img src="img/equip/item-03.jpg" data-src="holder.js/100x180" alt="...">
				      <div class="caption">
				        <h3>Equipamento 03</h3>
				        <p>
					        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
					        Integer ac dui ultricies, ultrices diam a, facilisis risus. 
					        Cras sit amet augue sed diam convallis finibus. 
					        Pellentesque tincidunt risus libero, nec dapibus erat pharetra sed. 
					        Nunc elit ex, tristique pulvinar tristique non, maximus eu sapien. 
					        Proin pharetra pulvinar dui, congue ultrices ligula. 
				        </p>
				      </div>
				    </div>	
				</div> <!-- col-sm-3 -->
				
				
				<div class="col-sm-6 col-md-3">
					<div class="thumbnail">
				      <img src="img/equip/item-04.jpg" data-src="holder.js/100x180" alt="...">
				      <div class="caption">
				        <h3>Equipamento 04</h3>
				        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac dui ultricies, ultrices diam a, facilisis risus. Cras sit amet augue sed diam convallis finibus. </p>
				      </div>
				    </div>	
				</div> <!-- col-sm-3 -->
				
			</div>
			<!-- row -->
	
	</div><!-- /vitrine-tipo-home -->
	
	<div class="container-fluid">
		<div class="row">
		<div class="col-xm-12 titulo-form-simples">
				<p>Gostaria de receber informações e oportunidade?</p>
				<p>Assine nossa newsletter</p>
			</div>
		</div>
	</div>

	<div class="form-simples container-fluid">
		<div class="row">
		
			
		
			<div class="col-sm-4 col-md-5 campo">
				<input type="text" placeholder="Coloque aqui o seu e-mail">
			</div>
			<div class="col-sm-4 col-md-2"></div>
			<div class="col-sm-4 col-md-5 btn-enivar">
				<a href="#" >Inscrevas-se agora</a>
			</div>
		</div>
	</div>
	<!-- /form-simples -->

	<div class="divisoria-tipo-01 container-fluid">
		<div class="row">
		
			<div class="col-xs-4 col-md-5 col-esq">
				<p><hr></p>
			</div>
			<div class="col-xs-4 col-md-2">
				<p> Parceiros</p>
			</div>
			<div class="col-xs-4 col-md-5 col-dir">
				<p><hr></p>
			</div>
		
		</div>
	</div>
	<!-- /divisoria-tipo-01 -->

	<div class="vitrine-parceiros container">
			<div class="row">
				<div class="col-sm-3">
					<img src="img/logo/primeiro.jpg" class="logo-parceiros">
				</div> <!-- col-sm-3 -->
				<div class="col-sm-3">
					<img src="img/logo/primeiro.jpg" class="logo-parceiros">
				</div> <!-- col-sm-3 -->
				<div class="col-sm-3">
					<img src="img/logo/primeiro.jpg" class="logo-parceiros">				
				</div> <!-- col-sm-3 -->
				<div class="col-sm-3">
					<img src="img/logo/primeiro.jpg" class="logo-parceiros">			
				</div> <!-- col-sm-3 -->
			</div>
			<!-- row -->
	
	</div>
	<!-- /vitrine-parceiros -->

	<footer class="container-fluid">
	<div class="container sessao-footer">
		<div class="row">
			<div class="col-sm-3">
				<p class="titulo-footer">Onde nos encotrar</p>
				<p>Av. das Américas, n°500</p>
				<p>Mauris pretium massa augue, quis dapibus erat interdum ac. 
				Fusce blandit, metus eget hendrerit venenatis, dui lectus porta lorem, 
				tempor malesuada ex massa sed erat.</p>
				<p class="titulo-footer">Onde nos encotrar</p>
				<p>Av. das Américas, n°500</p>
				<p>Mauris pretium massa augue, quis dapibus erat interdum ac. 
				Fusce blandit, metus eget hendrerit venenatis, dui lectus porta lorem, 
				tempor malesuada ex massa sed erat.</p>
			</div>
			<div class="col-sm-3">
				<p class="titulo-footer">Onde nos encotrar</p>
				<p>Av. das Américas, n°500</p>
				<p>Mauris pretium massa augue, quis dapibus erat interdum ac. 
				Fusce blandit, metus eget hendrerit venenatis, dui lectus porta lorem, 
				tempor malesuada ex massa sed erat.</p>
			</div>
			<div class="col-sm-3">
				<p class="titulo-footer">Onde nos encotrar</p>
				<p>Av. das Américas, n°500</p>
				<p>Mauris pretium massa augue, quis dapibus erat interdum ac. 
				Fusce blandit, metus eget hendrerit venenatis, dui lectus porta lorem, 
				tempor malesuada ex massa sed erat.</p>
				<p class="titulo-footer">Onde nos encotrar</p>
				<p>Av. das Américas, n°500</p>
				<p>Mauris pretium massa augue, quis dapibus erat interdum ac. 
				Fusce blandit, metus eget hendrerit venenatis, dui lectus porta lorem, 
				tempor malesuada ex massa sed erat.</p>
			</div>
			<div class="col-sm-3">
				<p class="titulo-footer">Onde nos encotrar</p>
				<p>Av. das Américas, n°500</p>
				<p>Mauris pretium massa augue, quis dapibus erat interdum ac. 
				Fusce blandit, metus eget hendrerit venenatis, dui lectus porta lorem, 
				tempor malesuada ex massa sed erat.</p>
			</div>
		
		
		</div>
	
	</div>
		
	</footer>
	<!-- /footer -->


</body>
</html>