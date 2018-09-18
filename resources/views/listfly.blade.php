<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro de Vuelos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,100,700,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/bootstrap.css"/>
	<link rel="stylesheet" href="css/style-list.css"/>
	<script src="js/bootstrap.js"></script>
</head>
<body>
	<div class="section_general_galeria">
	<div class="lista-sect1 col-xs-12">
		<!-- background-image -->
	</div>
	<div class="lista-sect2 col-xs-12">
		<div class="lista-tit col-xs-12 animated fadeInDown">
			Registro de Vuelos
		</div>
	
		<div class="lista-div col-xs-12">
			<div class="container">
				<div class="lista-cuadro col-xs-12 col-md-offset-1 col-md-10">
					<div class="lista-izq col-xs-12 col-sm-12">
						
						<table class="listavuelos">
							<thead>
								<tr>
									<th>Horario</th>
									<th>Origen</th>
									<th>Destino</th>
									<th>Info Avión</th>
								</tr>
							</thead>
							<tbody>
                                @foreach ($flyes as $fly)
                                    <tr>
                                        
                                        <td>{{ $fly->asignado_fecha }}</td>
                                        <td>
                                            <p>{{ $fly->origen_nombre }}</p>
                                            <p >País: {{ $fly->origen_pais }}</p> 
                                            <p >Ciudad: {{ $fly->origen_ciudad }}</p>
                                        </td>
                                        <td>
                                            <p>{{ $fly->destino_nombre }}</p>
                                            <p>País: {{ $fly->destino_pais}}</p>
                                            <p>Ciudad: {{ $fly->destino_ciudad}}</p>   
                                        </td>
        
                                        <td>
                                            <p>Matricula: {{ $fly->avion_matricula}}</p>
                                            <p>Fabricante: {{ $fly->avion_fabricante}}</p>
                                            <p>Modelo: {{ $fly->avion_modelo}}</p>
                                            <p>Capacidad: {{ $fly->avion_capacidad }}</p>
                                        </td>
                                    </tr>
                                @endforeach
							</tbody>
							
						
						</table>
					</div>
					<div class="lista-btn col-xs-12">
						<div class="col-xs-12">
                        <button><a href="{{ url('/formfly')}}" style="text-decoration:none">Agregar</a></button>
						</div>
						
					</div>
				
				</div>
			</div>
			
		</div>
	</div>
</div>	
</body>
</html>

