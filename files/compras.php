<?php 
function hacerCompra($usuario){
	verificarRecursos();

}
function verificarRecursos($nombre){
	loadJugadores();
	buscarJugadores($nombre);
	//switch;


}
function buscarJugadores($nombre){
	$jugadores=loadJugadores();
	foreach($jugadores as $jugador){
		if($jugador['nombre']==$nombre){
			echo "jugador encontrado";
			$jugadorSelect=$jugador;
		}			
	}
return $jugadorSelect;

}


function loadJugadores(){
	$jugadores = [];
	$jsonData = file_get_contents(__DIR__ . '/../jugadores.json');
	$data = json_decode($jsonData, true);
	
	foreach($data['jugadores'] as $jugador) {
		$jugadores[$jugador['nombre']] = [
            'madera'   => $jugador['madera'],
            'lana' => $jugador['lana'],
			'cereales' => $jugador['cereales'],
			'arcilla' => $jugador['arcilla'],
			'metal' => $jugador['metal'],
			'compras' => $jugador['compras']

        ];}
	return $jugadores;
}

?>