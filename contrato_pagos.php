<?php include'header.php';?>
	
	<section class="bg_white message_block">
		<ul class="tags">
			<li class="current" onclick="location.href='contrato_pagos.php'"><p>1. PAGOS</p></li>
			<li onclick="location.href='contrato_entregas.php'"><p>2. ENTREGAS</p></li>
			<li onclick="location.href='crear_contrato.php'"><p>3. CONTRATOS</p></li>
		</ul>
	</section>

	<section class="contract_payments">
		<div class="title">
			<h1>¿Cuánto se cobrará por el servicio?</h1>
		</div>
		<div class="total">
			<input type="text" placeholder="$20,000.00 MXN">
		</div>
		<div class="plan">
			<div class="title">
				<h1>Selecciona en cuántos pagos:</h1>
			</div>
			<ul class="plan-menu">
				<li class="current">
					<a href="#plan1">
						<span>2</span>pagos del 50%
					</a>
				</li>
				<li>
					<a href="#plan2">
						<span>4</span>pagos del 25%
					</a>
				</li>
			</ul>
			<div class="plan-content">
				<div id="plan1">
					<div class="title">
						<h1>Elige las fechas de pago:</h1>
					</div>
					<ul>
						<li class="gray-title">Fechas de pagos:</li>
						<li>
							<span>1.</span>
							<input class="datepicker" type="text" placeholder="10 de Agosto 2015"></p>							
						</li>
						<li>
							<span>2.</span>
							<input class="datepicker" type="text" placeholder="10 de Agosto 2015"></p>
						</li>
					</ul>
				</div>
				<div id="plan2">
					<div class="title">
						<h1>Elige las fechas de pago:</h1>
					</div>
					<ul>
						<li class="gray-title">Fechas de pagos:</li>
						<li>
							<span>1.</span>
							<input class="datepicker" type="text" placeholder="10 de Agosto 2015"></p>
						</li>
						<li>
							<span>2.</span>
							<input class="datepicker" type="text" placeholder="10 de Agosto 2015"></p>
						</li>
						<li>
							<span>3.</span>
							<input class="datepicker" type="text" placeholder="10 de Agosto 2015"></p>
						</li>
						<li>
							<span>4.</span>
							<input class="datepicker" type="text" placeholder="10 de Agosto 2015"></p>
						</li>
					</ul>
				</div>
			</div>
			<div class="txt">Recuerda que para facilitar la dinámica se realiza pago contra entrega.</div>
			<button class="blue_btn" onclick="location.href='contrato_entregas.php'">Guardar y aceptar</button>
		</div>
	</section>

<?php include'footer.php';?>