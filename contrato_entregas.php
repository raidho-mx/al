<?php include'header.php';?>
	
	<section class="bg_white message_block">
		<ul class="tags">
			<li class="success" onclick="location.href='contrato_pagos.php'"><p>1. PAGOS</p></li>
			<li class="current" onclick="location.href='contrato_entregas.php'"><p>2. ENTREGAS</p></li>
			<li onclick="location.href='crear_contrato.php'"><p>3. CONTRATOS</p></li>
		</ul>
	</section>

	<section class="contract_deliveries">
		<div class="description">
			<div class="title">
				<h1>Describe tus entregas:</h1>
			</div>
			<form>
				<label>Nombre del Contrato.</label>
				<input type="text" placeholder="Ej, Diseño editorial, Traducción">
			</form>
			<div class="txt">Recuerda utilizar una descripción general del proyecto, para su mejor entendimiento.</div>
		</div>

		<div class="deliveries">
			<ul>
				<li class="gray-title">
					<div class="delivery-title">Título de entregas</div>
					<div class="date">Fecha de entregas</div>
				</li>
				<li>
					<input type="text" class="tags tags_1" value="investigación, plan de trabajo" />
					<div class="date"><p><span>24 sep. 2015</span></p></div>
					<button class="close_red_btn"></button>
				</li>
				<li>
					<input type="text" class="tags tags_1" value="investigación, plan de trabajo" />
					<div class="date"><p><span>24 sep. 2015</span></p></div>
					<button class="close_red_btn"></button>
				</li>
				<li>
					<input type="text" class="tags tags_1" value="investigación, plan de trabajo" />
					<div class="date"><p><span>24 sep. 2015</span></p></div>
					<button class="close_red_btn"></button>
				</li>
				<li>
					<input type="text" class="tags tags_1" value="investigación, plan de trabajo" />
					<div class="date"><p><span>24 sep. 2015</span></p></div>
					<button class="close_red_btn"></button>
				</li>
			</ul>
		</div>

		<div class="save">
			<div class="txt">Recuerda que para facilitar la dinámica se realiza pago contra entrega.</div>
			<button class="blue_btn" onclick="location.href='crear_contrato.php'">Guardar y aceptar</button>
		</div>
	</section>

<?php include'footer.php';?>