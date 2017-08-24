<?php include'header.php';?>

	<section class="bg_white message_block">
		<div>
			<p>Hola <a href="perfil.php">Elena!</a> Utiliza
			Almirant para <b>crear</b> contratos.</p>
		</div>
	</section>

	<section class="notification_block">
		<div class="title-wrapper">
			<h1>Dashboard</h1>
		</div>
		<div class="content">
			<div class="title-wrapper">
				<h2>notificaciones</h2>
			</div>
			<ul>
				<li>
					<a href="#">
						<p><i class="fa fa-check-circle-o"></i>Tu contrato ha sido validado correctamente.</p>
						<p class="small">Hace 1 minuto.</p>
					</a>
				</li>
				<li>
					<a href="#">
						<p><i class="fa fa-money"></i>Hoy se realiza el primer pago de tu contrato “Diseño Web”.</p>
						<p class="small">Hace 10 horas.</p>
					</a>
				</li>
				<li>
					<a href="#">
						<p><i class="fa fa-edit"></i>José Mora te ha solicitado cambios en tu contrato “Fotografías para evento”.</p>
						<p class="small">Hace 4 días.</p>
					</a>
				</li>
				<li>
					<a href="#">
						<p><i class="fa fa-edit"></i>Recordatorio: Mañana 2do pago “Copy creativo”.</p>
						<p class="small">Hace 1 semana.</p>
					</a>
				</li>
			</ul>
		</div>
		<button class="underlined_btn">Ver todas</button>
	</section>

	<section class="contract_block home">
		<div class="tabs">
			<ul>
				<li><h2>mis contratos</h2></li>
				<li><a href="#contrato1">Borradores</a></li>
				<li><a href="#contrato2">En revisión</a></li>
				<li><a href="#contrato3">Activos</a></li>
				<li><a href="#">Archivados</a></li>
			</ul>
		</div>

		<div class="tabs-content">
			<ul class="title">
				<li>Nombre del contrato</li>
				<li>Estado del contrato</li>
				<li>Colaboración con:</li>
				<li>Última modificación</li>
			</ul>
			<ul class="content" id="contrato1">
				<li>
					<a href="#" class="display_content">
						<div><i class="fa fa-arrow-circle-o-up"></i><p>Fotografías para evento</p></div>
						<div><p class="draft_btn">Borrador</p></div>
						<div><div class="perfil" style="background-image: url('img/pepe.jpg');"></div><p> José Mora</p></div>
						<div><p>12 Sept. <span>Yo</span></p></div>
					</a>
					<div class="hidden_content">
						<p>Fechas de pagos y entregas:</p>
						<div class="timeline-x">
							<div class="half">
								<div>
									<p>10 ago. 2015
									</br>$5,000.00 <span>+ I.V.A.</span></p>
								</div>
								<div class="line">
									<div class="dot"></div>
								</div>
								<div>
									<p>Entrega 1</p>
								</div>
							</div>
							<div class="half">
								<div>
									<p>10 nov. 2015
									</br>$5,000.00 <span>+ I.V.A.</span></p>
								</div>
								<div class="line">
									<div class="dot"></div>
								</div>
								<div>
									<p>Entrega 2</p>
								</div>
							</div>
						</div>
						<a href="crear_contrato.php" class="blue_btn">Ver Contrato</a>
					</div>
				</li>
				<li>
					<a href="#" class="display_content">
						<div><i class="fa fa-arrow-circle-o-up"></i><p>Consulta en sistemas electrónicos</p></div>
						<div><p class="active_btn">Activo</p></div>
						<div><div class="perfil" style="background-image: url('img/paadin.jpg');"></div><p> Manuel Paadin</p></div>
						<div><p>12 Sept. <span>Yo</span></p></div>
					</a>
					<div class="hidden_content">
						<p>Fechas de pagos y entregas:</p>
						<div class="timeline-x">
							<div>
								<div>
									<p>10 ago. 2015
									</br>$5,000.00 <span>+ I.V.A.</span></p>
								</div>
								<div class="line">
									<div class="dot"></div>
								</div>
								<div>
									<p>Entrega 1</p>
								</div>
							</div>
							<div>
								<div>
									<p>10 nov. 2015
									</br>$5,000.00 <span>+ I.V.A.</span></p>
								</div>
								<div class="line">
									<div class="dot"></div>
								</div>
								<div>
									<p>Entrega 2</p>
								</div>
							</div>
							<div>
								<div>
									<p>10 ene. 2016
									</br>$5,000.00 <span>+ I.V.A.</span></p>
								</div>
								<div class="line">
									<div class="dot"></div>
								</div>
								<div>
									<p>Entrega 3</p>
								</div>
							</div>
							<div>
								<div>
									<p>10 mar. 2016
									</br>$5,000.00 <span>+ I.V.A.</span></p>
								</div>
								<div class="line">
									<div class="dot"></div>
								</div>
								<div>
									<p>Entrega 4</p>
								</div>
							</div>
						</div>
						<a href="contrato_creado.php" class="blue_btn">Ver Contrato</a>
					</div>
				</li>
				<li>
					<a href="#" class="display_content">
						<div><i class="fa fa-arrow-circle-o-up"></i><p>Programación de sitio web</p></div>
						<div><p>En Revisión</p></div>
						<div><div class="perfil" style="background-image: url('img/linda.jpg');"></div><p> Linda Castillo</p></div>
						<div><p>12 Sept. <span>Yo</span></p></div>
					</a>
					<div class="hidden_content">
						<p>Fechas de pagos y entregas:</p>
						<div class="timeline-x">
							<div>
								<div>
									<p>10 ago. 2015
									</br>$5,000.00 <span>+ I.V.A.</span></p>
								</div>
								<div class="line">
									<div class="dot"></div>
								</div>
								<div>
									<p>Entrega 1</p>
								</div>
							</div>
							<div>
								<div>
									<p>10 nov. 2015
									</br>$5,000.00 <span>+ I.V.A.</span></p>
								</div>
								<div class="line">
									<div class="dot"></div>
								</div>
								<div>
									<p>Entrega 2</p>
								</div>
							</div>
							<div>
								<div>
									<p>10 dic. 2015
									</br>$5,000.00 <span>+ I.V.A.</span></p>
								</div>
								<div class="line">
									<div class="dot"></div>
								</div>
								<div>
									<p>Entrega 3</p>
								</div>
							</div>
							<div>
								<div>
									<p>10 ene. 2016
									</br>$5,000.00 <span>+ I.V.A.</span></p>
								</div>
								<div class="line">
									<div class="dot"></div>
								</div>
								<div>
									<p>Entrega 4</p>
								</div>
							</div>
						</div>
						<a href="crear_contrato.php" class="blue_btn">Ver Contrato</a>
					</div>
				</li>
				<li>
					<a href="#" class="display_content">
						<div><i class="fa fa-arrow-circle-o-up"></i><p>Traducción inglés a francés</p></div>
						<div><p class="draft_btn">Borrador</p></div>
						<div><div class="perfil" style="background-image: url('img/cecilia.jpg');"></div><p> Cecilia Nottebaert</p></div>
						<div><p>12 Sept. <span>Yo</span></p></div>
					</a>
					<div class="hidden_content">
						<p>Fechas de pagos y entregas:</p>
						<div class="timeline-x">
							<div>
								<div>
									<p>10 ago. 2015
									</br>$5,000.00 <span>+ I.V.A.</span></p>
								</div>
								<div class="line">
									<div class="dot"></div>
								</div>
								<div>
									<p>Entrega 1</p>
								</div>
							</div>
							<div>
								<div>
									<p>10 ago. 2015
									</br>$5,000.00 <span>+ I.V.A.</span></p>
								</div>
								<div class="line">
									<div class="dot"></div>
								</div>
								<div>
									<p>Entrega 2</p>
								</div>
							</div>
							<div>
								<div>
									<p>10 ago. 2015
									</br>$5,000.00 <span>+ I.V.A.</span></p>
								</div>
								<div class="line">
									<div class="dot"></div>
								</div>
								<div>
									<p>Entrega 3</p>
								</div>
							</div>
							<div>
								<div>
									<p>10 ago. 2015
									</br>$5,000.00 <span>+ I.V.A.</span></p>
								</div>
								<div class="line">
									<div class="dot"></div>
								</div>
								<div>
									<p>Entrega 4</p>
								</div>
							</div>
						</div>
						<a href="crear_contrato.php" class="blue_btn">Ver Contrato</a>
					</div>
				</li>
			</ul>

			<!-- tab#2 -->
			<ul class="content" id="contrato2">
				<li>
					<a href="#" class="display_content">
						<div><i class="fa fa-arrow-circle-o-up"></i><p>#2Fotografías para evento</p></div>
						<div><p class="draft_btn">Borrador</p></div>
						<div><div class="perfil" style="background-image: url('img/pepe.jpg');"></div><p> José Mora</p></div>
						<div><p>12 Sept. <span>Yo</span></p></div>
					</a>
					<div class="hidden_content">
						<p>Fechas de pagos y entregas:</p>
						<div class="timeline-x">
							<div class="half">
								<div>
									<p>10 ago. 2015
									</br>$5,000.00 <span>+ I.V.A.</span></p>
								</div>
								<div class="line">
									<div class="dot"></div>
								</div>
								<div>
									<p>Entrega 1</p>
								</div>
							</div>
							<div class="half">
								<div>
									<p>10 ago. 2015
									</br>$5,000.00 <span>+ I.V.A.</span></p>
								</div>
								<div class="line">
									<div class="dot"></div>
								</div>
								<div>
									<p>Entrega 2</p>
								</div>
							</div>
						</div>
						<a href="crear_contrato.php" class="blue_btn">Ver Contrato</a>
					</div>
				</li>
				<li>
					<a href="#" class="display_content">
						<div><i class="fa fa-arrow-circle-o-up"></i><p>Traducción inglés a francés</p></div>
						<div><p class="draft_btn">Borrador</p></div>
						<div><div class="perfil" style="background-image: url('img/cecilia.jpg');"></div><p> Cecilia Nottebaert</p></div>
						<div><p>12 Sept. <span>Yo</span></p></div>
					</a>
					<div class="hidden_content">
						<p>Fechas de pagos y entregas:</p>
						<div class="timeline-x">
							<div>
								<div>
									<p>10 ago. 2015
									</br>$5,000.00 <span>+ I.V.A.</span></p>
								</div>
								<div class="line">
									<div class="dot"></div>
								</div>
								<div>
									<p>Entrega 1</p>
								</div>
							</div>
							<div>
								<div>
									<p>10 ago. 2015
									</br>$5,000.00 <span>+ I.V.A.</span></p>
								</div>
								<div class="line">
									<div class="dot"></div>
								</div>
								<div>
									<p>Entrega 2</p>
								</div>
							</div>
							<div>
								<div>
									<p>10 ago. 2015
									</br>$5,000.00 <span>+ I.V.A.</span></p>
								</div>
								<div class="line">
									<div class="dot"></div>
								</div>
								<div>
									<p>Entrega 3</p>
								</div>
							</div>
							<div>
								<div>
									<p>10 ago. 2015
									</br>$5,000.00 <span>+ I.V.A.</span></p>
								</div>
								<div class="line">
									<div class="dot"></div>
								</div>
								<div>
									<p>Entrega 4</p>
								</div>
							</div>
						</div>
						<a href="crear_contrato.php" class="blue_btn">Ver Contrato</a>
					</div>
				</li>

			</ul>

			<!-- tab#3 -->
			<ul class="content" id="contrato3">
				<li>
					<a href="#" class="display_content">
						<div><i class="fa fa-arrow-circle-o-up"></i><p>Consulta en sistemas electrónicos</p></div>
						<div><p class="active_btn">Activo</p></div>
						<div><div class="perfil" style="background-image: url('img/paadin.jpg');"></div><p> Manuel Paadin</p></div>
						<div><p>12 Sept. <span>Yo</span></p></div>
					</a>
					<div class="hidden_content">
						<p>Fechas de pagos y entregas:</p>
						<div class="timeline-x">
							<div>
								<div>
									<p>10 ago. 2015
									</br>$5,000.00 <span>+ I.V.A.</span></p>
								</div>
								<div class="line">
									<div class="dot"></div>
								</div>
								<div>
									<p>Entrega 1</p>
								</div>
							</div>
							<div>
								<div>
									<p>10 ago. 2015
									</br>$5,000.00 <span>+ I.V.A.</span></p>
								</div>
								<div class="line">
									<div class="dot"></div>
								</div>
								<div>
									<p>Entrega 2</p>
								</div>
							</div>
							<div>
								<div>
									<p>10 ago. 2015
									</br>$5,000.00 <span>+ I.V.A.</span></p>
								</div>
								<div class="line">
									<div class="dot"></div>
								</div>
								<div>
									<p>Entrega 3</p>
								</div>
							</div>
							<div>
								<div>
									<p>10 ago. 2015
									</br>$5,000.00 <span>+ I.V.A.</span></p>
								</div>
								<div class="line">
									<div class="dot"></div>
								</div>
								<div>
									<p>Entrega 4</p>
								</div>
							</div>
						</div>
						<a href="contrato_creado.php" class="blue_btn">Ver Contrato</a>
					</div>
				</li>
			</ul>
		</div>
	</section>

<?php include'footer.php' ;?>
