<?php 
include ("includes/head.php");
include ("includes/header.php");
?>
<div role="main" class="main">

	<section class="page-header">
		<div class="container">

			<div class="row">
				<div class="col-md-2">
					<div class="header-column justify-content-start">
						<div class="header-logo">
							<a href="index.html">
								<img alt="Surftware" width="127" height="49" src="assets/img/creacion-paginas-web.png">
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="header-column justify-content-start">
						<h1>COTIZACIÓN</h1>
						<p class="lead">Equipo de Cómputo Escritorio</p>
					</div>
				</div>

				<div class="col-md-2">
					<div class="header-column justify-content-start">
						<div class="header-logo">

						</div>
					</div>
				</div>

			</div>
		</div>
	</section>


	<!--||------AJAX ------||-->

	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<h3 class="text-center">Cotizador</h>
					<hr class="mb-4">
			</div>
		</div>
	</div>

	<div class="container mb-4">
		<div class="row">
			<div class="col-sm-12 col-md-6">
				<form class="form-outline">
					<div class="form-row">
						<div class="col-md-12 mb-3">
							<h4>Motherboard:</h>
						</div>
						<div class="col-md-6">
						   <select class="form-select w-100" id="tarjetaMadre">
						      <option selected></option>
							  <option value="asus">asus</option>
						   </select>
							<!--<input type="text" class="border" class="form-control" size="25" placeholder="Seleccionar"
								id="tarjetaMadre">-->
						</div>
						<div class="form-group col-md-6">
							<input type="text" class="border" class="form-control" size="10" placeholder="Precio">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-12 mb-3">
							<h4>Procesador:</h4>
						</div>
						<div class="col-md-6">
							<select class="form-select w-100" id="procesador">
								<option selected>Seleccionar</option>
								<option value="1">AMD Athlon 3000G 2CPU/3GPU 3.5Ghz</option>
							</select>
						</div>
						<div class="form-group col-md-6">
							<input type="text" class="border" class="form-control" size="10" placeholder="Precio">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-12 mb-3">
							<h4>Almacenamiento:</h4>
						</div>
						<div class="col-md-6">
							<select class="form-select w-100" id="almac">
								<option selected>Seleccionar</option>
								<option value="1">WD 500Gb SATA</option>
							</select>
						</div>
						<div class="form-group col-md-6">
							<input type="text" class="border" class="form-control" size="10" placeholder="Precio">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-12 mb-3">
							<h4>Memoria RAM:</h4>
						</div>
						<div class="col-md-6">
							<select class="form-select w-100" id="RAM">
								<option selected>Seleccionar</option>
								<option value="1">ADATA DDR4 8Gb</option>
							</select>
						</div>
						<div class="form-group col-md-6">
							<input type="text" class="border" class="form-control" size="10" placeholder="Precio">
						</div>
					</div>
				</form>
			</div>
			<div class="col-sm-12 col-md-6">
				<form class="form-outline">
					<div class="form-row">
						<div class="col-md-12 mb-3">
							<h4>Gabinete:</h>
						</div>
						<div class="col-md-6">
							<select class="form-select w-100" id="Gabinete">
								<option selected>Seleccionar</option>
								<option value="1">Yeyian Gaming PC Case Blade 2100</option>
							</select>
						</div>
						<div class="form-group col-md-6">
							<input type="text" class="border" class="form-control" size="10" placeholder="Precio">
						</div>
					</div>
					<form class="form-outline">
						<div class="form-row">
							<div class="col-md-12 mb-3">
								<h4>Mouse y Teclado:</h>
							</div>
							<div class="form-group col-md-6">
								<select class="form-select w-100" id="Kit">
									<option selected>Seleccionar</option>
									<option value="1">Kit Logitech mk120</option>
								</select>
							</div>
							<div class="form-group col-md-6">
								<input type="text" class="border" class="form-control" size="10" placeholder="Precio">
							</div>
						</div>
						<form class="form-outline">
							<div class="form-row">
								<div class="col-md-12 mb-3">
									<h4>Monitor:</h>
								</div>
								<div class="form-group col-md-6">
									<select class="form-select w-100" id="pantalla">
										<option selected>Seleccionar</option>
										<option value="1">Monitor AOC 19.5"</option>
									</select>
								</div>
								<div class="form-group col-md-6">
									<input type="text" class="border" class="form-control" size="10"
										placeholder="Precio">
								</div>
								<div class="col-md-12 mb-3">
									<h4>Armado e Instalación:</h>
								</div>
								<div class="form-group col-md-6">
									<select class="form-select w-100" id="manoObra">
										<option selected>Seleccionar</option>
										<option value="1">W10 c/Antivirus lista para usarse</option>
									</select>
								</div>
								<div class="form-group col-md-6">
									<input type="text" class="border" class="form-control" size="10"
										placeholder="Precio">
								</div>

							</div>
						</form>
					</form>
				</form>
			</div>
		</div>
	</div>

	<button type="button" class="btn btn-primary btm-sm d-block mx-auto" onclick="cambiar()">Cotizar</button>

	<!--||------AJAX------|| -->


	<div class="container pt-0">

		<div class="row mb-0">

			<div class="col">
				<hr class="mt-4">
				<h4>Computadoras armadas (PC)</h4>
				<hr class="mb-4">

			</div>
		</div>

		<div class="pricing-table pricing-table-style-2 mb-5">

			<table class="table table-striped">
				<col class="w-25">
				<col class="w-25">
				<col class="w-25">
				<col class="w-25">
				<thead>
					<tr>
						<th class="p-0"></th>
						<th class="p-0">
							<div class="plan">
								<div class="plan-title">
									<span class="font-weight-light text-uppercase text-3">Computadora
										Básica</span>
								</div>
								<div class="plan-price" id="respuestaPrecio">
									<strong><em>$</em>8900</strong>
									<p>MXN</p>
								</div>
							</div>
						</th>
						<th class="p-0">
							<div class="plan plan-most-popular bg-primary">
								<div class="plan-title">
									<span
										class="d-block font-weight-light text-uppercase text-light text-3">Advanced</span>
									<em class="text-light font-weight-light">Most Popular</em>
								</div>
								<div class="plan-price">
									<strong class="text-light"><em>$</em>39</strong>
									<p class="text-light">1 month</p>
								</div>
							</div>
						</th>
						<th class="p-0">
							<div class="plan">
								<div class="plan-title">
									<span class="font-weight-light text-uppercase text-3">Enterprise</span>
								</div>
								<div class="plan-price">
									<strong><em>$</em>39</strong>
									<p>1 month</p>
								</div>
							</div>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Mother Board</td>
						<td id="respuestaMother"></td>
						<td><i class="fas fa-check text-4"></i></td>
						<td></td>
					</tr>
					<tr>
						<td>Procesador</td>
						<td>AMD Athlon 3000G 2CPU/3GPU 3.5Ghz</td>
						<td></td>
						<td><i class="fas fa-check text-4"></i></td>
					</tr>
					<tr>
						<td>Almacenamiento</td>
						<td>Disco 500 Gb SATA Western Digital</td>
						<td></td>
						<td><i class="fas fa-check text-4"></i></td>
					</tr>
					<tr>
						<td>Memoria RAM</td>
						<td>DDR4 ADATA 8Gb</td>
						<td></td>
						<td><i class="fas fa-check text-4"></i></td>
					</tr>
					<tr>
					<tr>
						<td>Gabinete</td>
						<td>Yeyian Gaming PC Case Blade 2100</td>
						<td></td>
						<td><i class="fas fa-check text-4"></i></td>
					</tr>
					<tr>
						<td>Kit Mouse/Teclado</td>
						<td>Logitech mk120</td>
						<td></td>
						<td><i class="fas fa-check text-4"></i></td>
					</tr>
					<tr>
						<td>Monitor</td>
						<td>AOC 19.5"</td>
						<td></td>
						<td><i class="fas fa-check text-4"></i></td>
					</tr>
					<tr>
						<td>Armado e instalación Software</td>
						<td>Windows 10 con Antivirus y Lista para usarse</td>
						<td></td>
						<td><i class="fas fa-check text-4"></i></td>
					</tr>
					<tr>
						<td></td>
						<td class="plan-action"><a href="#"
								class="btn btn-outline btn-rounded btn-3 btn-v-3 btn-primary font-weight-bold mt-2 mb-2">Más
								Información<nav></nav></a></td>
						<td class="plan-action"><a href=""
								class="btn btn-rounded btn-3 btn-v-4 btn-primary font-weight-bold mt-2 mb-2">BUY
								NOW</a></td>
						<td class="plan-action"><a href="#"
								class="btn btn-outline btn-rounded btn-3 btn-v-3 btn-primary font-weight-bold mt-2 mb-2">BUY
								NOW</a></td>
					</tr>
				</tbody>
			</table>

		</div>

	</div>

</div>


<?php  
		include ("includes/footer.php");			
		?>

</div>
<?php 
	include ("includes/js.php");	
	?>



</body>

</html>