<?php

namespace App\Http\Repositories;

use Illuminate\View\View;
use DB;

class FormRepository{
    public function sendView(){
        $aeropuertos = DB::table('aeropuerto')->select('*')->get();
        $aviones = DB::table('avion')->select('*')->get();
        return view('index')->with(['aeropuertos'=>$aeropuertos, 'aviones'=>$aviones]);
    }

    public function saveFly($request){
        $id_plane = $request->input('idavion');
        $id_origin = $request->input('idorigen');
        $id_destiny = $request->input('iddestino');
        $date_fly = $request->input('avion_fecha');
        $time_fly = $request->input('avion_hora');
        // dd($date_fly);
        // $date_fly = gmdate("Y-m-d\TH:i:s\Z",$request->input('avion_fecha'));
        $date_time = date('Y-m-d H:i:s',strtotime("$date_fly $time_fly"));
        // dd($date_time);
        $fly = DB::table('vuelo')->insertGetId([
            'aeropuerto_idaeropuerto_origen' => $id_origin,
            'aeropuerto_idaeropuerto_destino' => $id_destiny
        ]);

        if($fly){
            $asignado = DB::table('asignado')->insertGetId([
                'asignado_fecha' => $date_time,
                'avion_idavion' => $id_plane,
                'vuelo_idvuelo' => $fly
            ]);

            $message = 'Vuelo registrado correctamente';
        }else{
            $message = 'No se pudo registrar el vuelo';
        }

        return view('welcome')->with(['message' => $message]);
    }
}