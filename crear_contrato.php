<?php include'header.php';?>
	<section class="bg_white message_block">
		<ul class="tags">
			<li class="success" onclick="location.href='contrato_pagos.php'"><p>1. PAGOS</p></li>
			<li class="success" onclick="location.href='contrato_entregas.php'"><p>2. ENTREGAS</p></li>
			<li class="current" onclick="location.href='crear_contrato.php'"><p>3. CONTRATOS</p></li>
		</ul>
	</section>

	<section class="contract_deliveries">
		<div class="description">
			<div class="title">
				<h1>Nuestro contrato:</h1>
			</div>
		</div>
	</section>

	<section>
		<div class="create_contract bg_white">
			<div class="fixed_btn">
				<div><a href="#"><img src="img/descargar.svg"></a>
					<div class="helper">Descargar Archivo</div>
				</div>
				<div><a href="contratos.php"><img src="img/guardar.svg"></a>
					<div class="helper">Salvar Archivo</div>
				</div>
			</div>
			<div class="wrapper">
				<div>
					<div class="info">
						<ul>
							<li>
								<div class="perfil_frame">
									<div class="target"></div>
									<div class="perfil" style="background-image: url('img/elena.jpg');"></div>
								</div>
								<h2>Elena</h2>
								<p>Freelancer<span>Compositora</span></p>
							</li>
							<li>
								<div class="perfil_frame">
									<div class="target"></div>
									<div class="perfil" style="background-image: url('img/paadin.jpg');"></div>
								</div>
								<h2>Manuel Paadin</h2>
								<p>Cliente<span>Lamosca</span></p>
							</li>
						</ul>
						<div class="txt">
							<p>Mi nombre es <b>Elena Garza</b> y me comprometo con <b>Manuel Paadin</b> a desarrollar un proyecto de <b>Diseño de copywriting creativo.</b></p>
						</div>
					</div>
				</div>

				<div>
					<div class="right-buttons">
						<button class="edit edit-button"></button>
						<button class="comments" id="comments"><span class="counter">1</span></button>
					</div>
					<div class="small_title">
						<h2>Entregas:</h2>
					</div>
					<div class="timeline-y">
						<ul>
							<li>
								<input type="text" placeholder="Investigación" class="big" id="edita">
								<span class="hide_span" style="display:none"></span>
								<input type="text" placeholder="15 Oct. 2015" class="small open-datepicker">
								<div class="line">
									<div class="dot"></div>
								</div>
							</li>
							<li>
								<input type="text" placeholder="Plan de trabajo" class="big" id="edita">
								<span class="hide_span" style="display:none"></span>
								<input type="text" placeholder="16 Oct. 2015" class="small open-datepicker">
								<div class="line">
									<div class="dot"></div>
								</div>
							</li>
							<li>
								<input type="text" placeholder="Propuesta" class="big" id="edita">
								<span class="hide_span"  style="display:none"></span>
								<input type="text" placeholder="17 Oct. 2015" class="small open-datepicker">
								<div class="line">
									<div class="dot"></div>
								</div>
							</li>
							<li>
								<input type="text" placeholder="Entrega de contenido" class="big" id="edita">
								<span class="hide_span"  style="display:none"></span>
								<input type="text" placeholder="15 Oct. 2015" class="small open-datepicker">
								<div class="line">
									<div class="dot"></div>
								</div>
							</li>
						</ul>

						<div class="comentarios">
							<div>
								<div class="perfil-comentarios" style="background-image: url('http://lorempixel.com/400/200');"></div>
								<h2>Elena Garza</h2>
								<p><span>Hace 2 días.</span></p>
								<p>¿Cómo se acopla a tu calendario con tu gantt?.</p>
							</div>
							<div>
								<div class="perfil-comentarios" style="background-image: url('http://lorempixel.com/400/200');"></div>
								<h2>Manuel Paadin</h2>
								<p><span>Hace 2 días.</span></p>
								<p>¿Cómo se acopla a tu calendario con tu gantt?.</p>
							</div>
							<a href="#" id="entregas">Escribe tu comentario</a>
						</div>						
					</div>

					<div class="add-form comentarios_entregas">
						<form>
							<input type="text" placeholder="Nombre de la cláusula">
							<textarea placeholder="Describe la cláusula"></textarea>
							<input type="submit" value="Guardar">
						</form>
					</div>
				</div>

				<div>
					<div class="info">
						<div class="txt">
							<p>Para mantener una relación laboral saludable, 
							<b>Paadin</b> & <b>Yo</b> acordamos respetar y comprometernos a cumplir con las siguientes condiciones:</p>
						</div>
					</div>
				</div>

				<div>
					<div class="right-buttons">
						<button class="edit edit-button"></button>
					</div>

					<div class="small_title">
						<h2>Pagos & Fechas de entrega:</h2>
					</div>

					<div class="txt">
						<p>Mis servicios tienen un valor de $75,000.00 mxn + I.V.A. 
							y serán cubiertos en 4 pagos de 25% — Lauro va a pagar 
							de acuerdo a este calendario:</p>
					</div>

					<div class="timeline-y">
						<ul class="tags">
							<li>
								<p><time>15 Oct. 2015</time></p>
								<p><b>$18,750.00 </b>+ I.V.A.</p>
								<input type="text" class="tags tags_1" value="investigación, plan de trabajo" />
								<div class="line">
									<div class="dot"></div>
								</div>
							</li>
							<li>
								<p><time>15 Oct. 2015</time></p>
								<p><b>$18,750.00 </b>+ I.V.A.</p>
								<input type="text" class="tags tags_1" value="investigación, plan de trabajo" />
								<div class="line">
									<div class="dot"></div>
								</div>
							</li>
							<li>
								<p><time>15 Oct. 2015</time></p>
								<p><b>$18,750.00 </b>+ I.V.A.</p>
								<input type="text" class="tags tags_1" value="investigación, plan de trabajo" />
								<div class="line">
									<div class="dot"></div>
								</div>
							</li>
							<li>
								<p><time>15 Oct. 2015</time></p>
								<p><b>$18,750.00 </b>+ I.V.A.</p>
								<input type="text" class="tags tags_1" value="investigación, plan de trabajo" />
								<div class="line">
									<div class="dot"></div>
								</div>
							</li>
						</ul>
					</div>
				</div>

				<div>
					<div class="right-buttons">
						<button class="edit edit-button"></button>
					</div>

					<div class="txt">
						<p><b>Paadin</b> & <b>Yo</b> acordamos que para el desarrollo de este proyecto es importante tener en claro y respetar las siguientes <b>clausulas.</b></p>
					</div>

					<div class="list">
						<div class="small_title">
							<h2>Cláusulas Personalizadas:</h2>
						</div>
						<ul>
							<li>
								<h1>Viáticos</h1>
								<p>Quedan excluidos gastos de viajes dentro del costo 
									de esta propuesta, en caso de requerir traslados 
									fuera de la ciudad; el cliente se hara cargo de cubrir los mismo al presentar comprobantes y/o facturas.</p>
							</li>
							<li>
								<h1>Costo de Dominios y Hosting</h1>
								<p>Quedan excluidos los costos por la adquisición de dominios y hosting para el desarrollo de este proyecto. 
									Se presentarán los comprobantes y/o factura al cliente para realizar los pagos correspondientes.</p>
							</li>
						</ul>
					</div>

					<div class="buttons add-new" id="viaticos">
						<button class="blue_circle"></button></br></br>
						<p>Agregar Cláusula</p>
					</div>

					<div class="add-form agregar_viaticos">
						<form>
							<input type="text" name="" placeholder="Nombre de la cláusula">
							<textarea placeholder="Describe la cláusula"></textarea>
							<input type="submit" value="Guardar">
						</form>
					</div>
				</div>
				<div>
					<div class="buttons">
						<p><span>Si cuentas con una cotización, puedes agregarla a tu contrato.</br>
						(Archivos PDF)</span></p></br>
						<button class="blue_btn">Importar</button>
					</div>
				</div>
				<div>
					<div class="info">
						<ul>
							<li>
								<div class="perfil_frame">
									<div class="target" id="persona1"></div>
									<div class="perfil" style="background-image: url('img/elena.jpg');"></div>
								</div>
								<h2>Elena</h2>
								Afirma que está de acuerdo con estas condiciones.
								<span></span>
							</li>
							<li>
								<div class="perfil_frame">
									<div class="perfil" id="persona2" style="background-image: url('img/paadin.jpg');"></div>
								</div>
								<h2>Manuel Paadin</h2>
								No ha recibido el contrato.
								<span>-</span>
							</li>
						</ul>

						<div class="buttons">
							<button class="blue_btn" id="signing">Firmar</button>
						</div>

						<div class="bold_txt">
							<p>El estatus de este contrato es de borrador, si deseas activarlo, completa los campos.</p>
						</div>

						<div class="buttons">
							<button class="blue_btn" onclick="location.href='contratos.php'">Guardar</button></br></br></br>
							<p><span>Todos los contratos generados por <b>Almirant®</b> son legalmente validos. 
							Acepto por este medio mi participación en este contrato.</span></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include'inc/signing_form.php';?>

<?php include'footer.php';?>