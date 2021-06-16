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
			<form>
				<div class="form-group">
					<label for="">NOMBRE:</label>
					<input type="text" class="form-control" placeholder="Nombre" id="nombre"><br /><br />
					<label for="">APELLIDO:</label>
					<input type="text" class="form-control" placeholder="Apellido" id="apellido"><br /><br />
					<label for="">EDAD:</label>
					<input type="text" class="form-control" placeholder="Edad" id="edad"><br /><br />
				</div>
				<button type="button"  class="btn btn-primary btm-sm" onclick="cambiar()">Cotizar</button>
			</form>
			<p id="demo"></p>
		</div>
	</div>

	<!--||------AJAX------|| -->


	<div class="container pt-0">

		<div class="row mb-0">

			<div class="col">
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
								<div class="plan-price" id="respuesta_precio">
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
						<td>Asus Prime A520M-K</td>
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