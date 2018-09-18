<?php
namespace App\Http\Repositories;

use DB;
class FlyRepository
{
    public function sendView(){
        $flyes = DB::table('asignado')
        ->join('avion','asignado.avion_idavion','=','avion.idavion')
        ->join('vuelo','asignado.vuelo_idvuelo','=','vuelo.idvuelo')
        ->join('aeropuerto AS aero_origen','vuelo.aeropuerto_idaeropuerto_origen','=','aero_origen.idaeropuerto')
        ->join('aeropuerto AS aero_destino','vuelo.aeropuerto_idaeropuerto_destino','=','aero_destino.idaeropuerto')
        ->select(
            'asignado.asignado_fecha',
            'aero_origen.aeropuerto_nombre as origen_nombre',
            'aero_origen.aeropuerto_pais as origen_pais',
            'aero_origen.aeropuerto_ciudad as origen_ciudad',
            'aero_destino.aeropuerto_nombre as destino_nombre',
            'aero_destino.aeropuerto_pais as destino_pais',
            'aero_destino.aeropuerto_ciudad as destino_ciudad',
            'avion.avion_matricula',
            'avion.avion_fabricante',
            'avion.avion_modelo',
            'avion.avion_capacidad'
        )
        ->get();
        
        return view('listfly',['flyes'=>$flyes]);
    }
}