<?php include'header.php';?>

	<section class="profile">
		<div class="titulo">
			<h1>Perfil</h1>
		</div>

		<div class="wrapper bg_white">
			<div>
				<div class="right-buttons">
					<button class="edit edit-profile"></button>
				</div>

				<div class="perfil">
					<div class="foto"  style="background-image: url('img/elena.jpg');">
					</div>
					<p>Cambia tu perfil</p>
				</div>

				<div class="info">
					<h2>Elena Daniela Garza Rodríguez</h2>
					<div class="profesion">
						<p>Copywriter Creativo, Traducción<p>
						<p><span>elenagr@gmail.com.mx</span></p>
					</div>

					<div class="descripcion">
						<div>
							<p><span>Persona Moral:</span></p>
							<p>Raidho Design S.C.</p>
						</div>
						<div>
							<p><span>RFC</span></p>
							<p>RDE1503473467W8</p>
						</div>
						<div>
							<p><span>Dirección Fiscal:</span></p>
							<p>Maurice Ravel #270, Colinas de San Jeronimo.
							66430, Monterrey. Nuevo León, México.</p>
						</div>
					</div>

					<button>Guardar Cambios</button>
				</div>
			</div>

			<div>
				<div class="info">
					<div class="descripcion">
						<div>
							<p><span>Contraseña</span></p>
							<p>•••••••••</p>
							<button class="edit-password">Editar</button>
						</div>
					</div>

					<div class="descripcion">
						<div>
							<p><span>Información tarjeta de crédito</span></p>
							<p>•••• •••• •••• 6568</p>
							<button>Editar</button>
						</div>
					</div>

					<button>Guardar Cambios</button>
				</div>
			</div>
		</div>
	</section>

<?php include'inc/credit_card.php';?>
<?php include'inc/password_form.php';?>

<?php include'footer.php';?>