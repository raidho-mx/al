<?php include'header.php';?>
	
	<section class="addclient_block">
		<div class="titulo">
			<h1>Selecciona tu cliente:</h1>
		</div>
		<ul>
			<li>
				<div class="perfil" style="background-image: url('img/cecilia.jpg');"></div>
				<h2>Cecilia Nottebaert<span>Traductora</span></h2>
				<button onclick="location.href='contrato_pagos.php'" class="blue_btn">Seleccionar</button>
			</li>
			<li>
				<div class="perfil" style="background-image: url('img/bermellon.jpg');"></div>
				<h2>Bermellón<span>Chocolatería</span></h2>
				<button onclick="location.href='contrato_pagos.php'" class="blue_btn">Seleccionar</button>
			</li>
			<li>
				<div class="perfil" style="background-image: url('img/claudia.jpg');"></div>
				<h2>Claudia Melgoza<span>DaWearhouse</span></h2>
				<button onclick="location.href='contrato_pagos.php'" class="blue_btn">Seleccionar</button>
			</li>
			<li>
				<div class="perfil" style="background-image: url('img/pepe.jpg');"></div>
				<h2>José Mora<span>GrupoLite</span></h2>
				<button onclick="location.href='contrato_pagos.php'" class="blue_btn">Seleccionar</button>
			</li>
			<li>
				<div class="perfil" style="background-image: url('img/paadin.jpg');"></div>
				<h2>Manuel Paadin<span>La Mosca</span></h2>
				<button onclick="location.href='contrato_pagos.php'" class="blue_btn">Seleccionar</button>
			</li>
			<li>
				<div class="perfil" style="background-image: url('img/linda.jpg');"></div>
				<h2>Linda Castillo<span>Raidho Aesthetics</span></h2>
				<button onclick="location.href='contrato_pagos.php'" class="blue_btn">Seleccionar</button>
			</li>
			<li>
				<div class="perfil" style="background-image: url('img/daniel.jpg');"></div>
				<h2>Daniel Ortiz<span>Ternium</span></h2>
				<button onclick="location.href='contrato_pagos.php'" class="blue_btn">Seleccionar</button>
			</li>
			<li>
				<div class="perfil" style="background-image: url('img/andrea.jpg');"></div>
				<h2>Andrea Morales<span>Emblem Capital</span></h2>
				<button onclick="location.href='contrato_pagos.php'" class="blue_btn">Seleccionar</button>
			</li>
		</ul>

		<div class="buttons">
			<button class="green_btn" id="client-form"><img src="img/plus.svg"></button>
			<p>Agregar nuevo</p>
		</div>
	</section>

	<?php include'inc/new_client_form.php';?>

<?php include'footer.php';?>
