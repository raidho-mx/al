<div class="popup_mask"></div>
	<div class="popup">
		<div class="wrapper-box">
			<button class="close_btn"></button>
			<form>
				<div>
					<h1>Invita a tu cliente a completar su información:</h1>
					<div class="email">
						<input type="email" placeholder="Correo" id="correo">
					</div>
					<div class="toggle_btn">
						<input type="radio" class="switch-input" name="view" value="persona-fisica" id="persona-fisica">
						<label for="persona-fisica" class="switch-label switch-label-off">Persona Física</label>
						<input type="radio" class="switch-input" name="view" value="persona-moral" id="persona-moral" checked>
						<label for="persona-moral" class="switch-label switch-label-on">Persona Moral</label>
						<span class="switch-selection"></span>
					</div>
				</div>
				
				<div>
					<label>Información Legal</label>
					<input type="text" placeholder="Razón Social">				
					<input type="text" placeholder="RFC">
				</div>
				
				<div>
					<label>Dirección</label>
					<input class="big_input" type="text" placeholder="Calle y Número">
					<input type="text" placeholder="Ciudad">
					<input type="text" placeholder="Código Postal">
					<input type="text" placeholder="Estado">
					<input type="text" placeholder="País">
				</div>

				<div>
					<label>Contacto</label>
					<input type="text" placeholder="Correo">
					<input type="text" placeholder="Teléfono">
				</div>
				<input type="submit" value="Aceptar" class="blue_btn">
				<button class="gray_btn">Regresar</button>
			</form>
		</div>
	</div>