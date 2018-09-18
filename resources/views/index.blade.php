<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro de Vuelos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,100,700,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/bootstrap.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/index.js"></script>

</head>
<body>
	<div class="section_general_galeria">
	<div class="contacto-sect1 col-xs-12">
		<!-- background-image -->
	</div>
	<div class="contacto-sect2 col-xs-12">
		<div class="contacto-tit col-xs-12 animated fadeInDown">
			Registro de Vuelos
		</div>
		<!-- <div class="contacto-tit2 col-xs-12 animated fadeInDown">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br class="hidden-xs"> Vero, nemo! Totam rerum asperiores quo, iure nam voluptatem <br class="hidden-xs">blanditiis magni earum necessitatibus eligendi sed itaque, <br class="hidden-xs">voluptates, harum. Ducimus, asperiores. Perspiciatis, temporibus.
		</div> -->
		<div class="contacto-div col-xs-12">
			<div class="container">
				<div class="contacto-cuadro col-xs-12 col-md-offset-1 col-md-10">
					<div class="contacto-izq col-xs-12 col-sm-12">
					<form method="post" id="frmcontactenos" action="{{ route('savefly') }}">
						{{ csrf_field() }}	
						<div class="contacto-tit2 col-xs-12">
								Vuelo nº1
							</div>
							<div class="contacto-sect-izq col-xs-12 col-md-6">
								<div class="contacto-sect-padding col-xs-12">
									<div class="contacto-sect-subtitulo col-xs-12">
									  Aeropuerto de Origen:
									</div>	
									<div class="form-group">
										<select name="origen" id="aeropuerto_origen" class="form-control" onchange="getValueOrigen(this)" required>
											<option value="" selected disabled>---</option>
											@foreach ($aeropuertos as $aeropuerto)
												<option value='{"id":"{{$aeropuerto->idaeropuerto}}","nombre" :"{{$aeropuerto->aeropuerto_nombre}}","pais": "{{$aeropuerto->aeropuerto_pais}}","ciudad": "{{$aeropuerto->aeropuerto_ciudad}}"}'>{{$aeropuerto->aeropuerto_nombre}}</option>	
											@endforeach
										</select>
									</div>
									<div class="row form-content">
										<div class="col-xs-12">
											 <div class="form-group">
											 	<label for="">Nombre:</label>
											    <input type="text" class="form-control" name="nombre_origen" id="nombre_origen">
											 </div>
										</div>
										<div class="col-xs-12">
										      <div class="form-group">
										      	<label for="">País:</label>
										        <input type="text" class="form-control" name="pais_origen" id="pais_origen">
										      </div>
									    </div>
									    <div class="col-xs-12" style="margin-bottom: 0">
										      <div class="form-group">
										      	<label for="">Ciudad:</label>
										        <input type="text" class="form-control" name="ciudad_origen" id="ciudad_origen">
										      </div>
									    </div>
									</div>
								</div>
							
								
								
							</div>
							
							
							<div class="contacto-sect-der col-xs-12 col-md-6">
								<div class="contacto-sect-padding col-xs-12">
									<div class="contacto-sect-subtitulo col-xs-12">
									  Aeropuerto de Destino:
									</div>	
									<div class="form-group">
										<select name="destino" id="aeropuerto_destino" class="form-control" onchange="getValueDestino(this)" required>
											<option value="" selected disabled>---</option>
											@foreach ($aeropuertos as $aeropuerto)
											<option value='{"id":"{{$aeropuerto->idaeropuerto}}","nombre" :"{{$aeropuerto->aeropuerto_nombre}}","pais": "{{$aeropuerto->aeropuerto_pais}}","ciudad": "{{$aeropuerto->aeropuerto_ciudad}}"}'>{{$aeropuerto->aeropuerto_nombre}}</option>	
											@endforeach
										</select>
									</div>
									<div class="row form-content">
										<div class="col-xs-12">
											 <div class="form-group">
											 	<label for="">Nombre:</label>
											    <input type="text" class="form-control" name="nombre_destino" id="nombre_destino">
											 </div>
										</div>
										<div class="col-xs-12">
										      <div class="form-group">
										      	<label for="">País:</label>
										        <input type="text" class="form-control" name="pais_destino" id="pais_destino">
										      </div>
									    </div>
									    <div class="col-xs-12" style="margin-bottom: 0">
										      <div class="form-group">
										      	<label for="">Ciudad:</label>
										        <input type="text" class="form-control" name="ciudad_destino" id="ciudad_destino">
										      </div>
									    </div>
									</div>
								</div>
							
								
								
							</div>

							<div class="contacto-sect-avion contacto-sect-padding col-xs-12">
							
								<div class="contacto-sect-subtitulo col-xs-12">
									  Avión:
								</div>	
								<div class="form-group">
										<select name="" id="avion" class="form-control" onchange="getValueAvion(this)" required>
											<option value="" selected disabled>---</option>
											@foreach ($aviones as $avion)
										<option value='{ "id":"{{$avion->idavion}}","matricula":"{{$avion->avion_matricula}}","fabricante":"{{ $avion->avion_fabricante}}","modelo":"{{ $avion->avion_modelo}}","capacidad":"{{$avion->avion_capacidad}}","autonomia":"{{$avion->avion_autonomia}}"}'>placa:{{$avion->avion_matricula}} modelo:{{$avion->avion_modelo}}</option>
											@endforeach
										</select>
									</div>
								<div class="row form-content">
									<div class="col-xs-12 col-sm-6">
										 <div class="form-group">
										 	<label for="">Matrícula:</label>
										    <input type="text" class="form-control" name="avion_matricula" id="avion_matricula">
										 </div>
									</div>
									<div class="col-xs-12 col-sm-6">
									      <div class="form-group">
									      	<label for="">Fabricante:</label>
									        <input type="text" class="form-control" name="avion_fabricante" id="avion_fabricante">
									      </div>
								    </div>
								    <div class="col-xs-12 col-sm-6">
									      <div class="form-group">
									      	<label for="">Modelo:</label>
									        <input type="text" class="form-control" name="avion_modelo" id="avion_modelo">
									      </div>
								    </div>
								    <div class="col-xs-12 col-sm-6">
										 <div class="form-group">
										 	<label for="">Capacidad:</label>
										    <input type="text" class="form-control" name="avion_capacidad" id="avion_capacidad">
										 </div>
									</div>
									<div class="contacto-autonomia col-xs-12 col-sm-6">
									      <div class="form-group">
									      	<label for="">Autonomía (horas):</label>
									        <input type="text" class="form-control" name="avion_autonomia" id="avion_autonomia">
									      </div>
								    </div>
								    <div class="col-xs-12 col-sm-6" style="margin-bottom: 0">
									      <div class="col-xs-12 col-sm-6 form-group">
									      	<label for="">Fecha de Vuelo:</label>
									        <input type="date" class="form-control" name="avion_fecha" id="avion_fecha" required>
												</div>
												<div class="col-xs-12 col-sm-6  form-group">
														<label for="">Hora de Vuelo:</label>
														<input type="time" class="form-control" name="avion_hora" id="avion_hora" required>
												</div>
								    </div>
								</div>
								
							</div>
							
						  	
							<div class="contacto-button col-xs-12">
								<input id="id_origen" type="hidden" name="idorigen" value="">
								<input id="id_destino" type="hidden" name="iddestino" value="">
								<input id="id_avion" type="hidden" name="idavion" value="">
									 {{-- <input type="submit" class="btn-send" id="EnviarForm"></input> --}}
									 <button type="submit" class="btn-send" id="EnviarForm">Enviar</button>
							</div>
							 
							<div id="dialog" title="Mensaje Contáctenos" style="display:none;">
							    <p id="rpta"></p>
						  	</div>
						</form>
					</div>
					<!-- <div class="contacto-der col-xs-12 col-sm-3">
						
					</div> -->
				</div>
		</div>
	</div>
</div>

</body>
</html>

