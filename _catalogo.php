<script type="text/javascript" src="js/controller/controllerProduto.js"></script>

<div ng-controller="produtoController">

	<aside class="menu-lateral col-md-3">

		<div class="lista-menu exame">
			<p>Equipamento</p>

			<ul>
				<li>Exame 01</li>
				<li>Exame 02</li>
				<li>Exame 03</li>
			</ul>
			
		</div>
		<!-- exame -->

		<div class="lista-menu produto">
		
			<p>Equipamento</p>
			<p>
				<input type="text" ng-model="equip.nome" placeholder="Nome equipamento">
			</p>
			<ul>
				<li>Eletroencefalografia</li>
				<li>Eletroencefalografia</li>
				<li>Eletroencefalografia</li>
			</ul>
		
		
			<p>Acessório</p>
			<p>
				<input type="text" ng-model="acess.nome" placeholder="Nome acessório">
			</p>
			<ul>
				<li>Eletroencefalografia</li>
				<li>Eletroencefalografia</li>
				<li>Eletroencefalografia</li>
			</ul>
		</div>
		<!-- produto -->


		<div class="lista-menu categoria">
			<p>Categoria</p>
			<ul>
				<li>Eletroencefalografia</li>
				<li>Eletroencefalografia</li>
				<li>Eletroencefalografia</li>
			</ul>
		</div>
		<!-- categoria -->


	</aside>
	<!-- menu-lateral -->

	<div class="separador col-md-1"></div>
	<!-- separador -->
	<div class="catalogo col-md-8">

		<div class="lista-equip">

			<h3 class="titulo-lista">Equipamentos</h3>

			<div ng-repeat="(key, produto) in produtos | filter:equip">

				<div ng-if="produto.tipo== 'equipamento' ">
				
					<div class="item-equip row">
						<div class="foto-equip col-sm-12 col-md-3 ">
							<img alt="{{produto.nome}}" ng-src="{{produto.foto}}"
								width="100%">
						</div>
						<!-- foto-equip -->
						<div class="info-equip col-sm-12 col-md-9">
							<h4>{{produto.nome}}</h4>
							<p>{{produto.resumo}}</p>
							<a class="btn-saiba-mais" href="equipamento.php"> Saiba mais </a>
						</div>
						<!-- info-equip -->
					</div>
					<!-- item-equip -->
				</div>
			</div>



		</div>
		<!-- lista-equip -->


		<div class="vitrine-acess">
			<h3 class="titulo-lista">Acessórios</h3>
			<div class="linha-acess row">
				<div ng-repeat="(key, produto) in produtos | filter:acess">
					<div ng-if="produto.tipo== 'acessorio' ">
						<div class="item-acess col-md-4">
							<a href="acessorio.php"> <img alt="{{produto.nome}}"
								ng-src="{{produto.foto}}" width="200" height="150">
								<h5>{{produto.nome}}</h5>
							</a>
						</div>
						<!-- item-acess -->
					</div>
				</div>
			</div>
			<!-- linha-acess -->
		</div>
		<!-- vitrine-acess -->

	</div>
	<!-- catalogo -->

</div>

