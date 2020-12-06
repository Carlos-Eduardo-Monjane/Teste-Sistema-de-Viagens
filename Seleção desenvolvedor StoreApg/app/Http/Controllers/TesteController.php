<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function distancia(Request $request)
    {
		$partida = $request['partida'];
		$chegada = $request['chegada'];
		$valor_padrao = 120; // valor por km
		$distancia_dos_pontos = rand(10,1000);
		$custo = $valor_padrao * $distancia_dos_pontos;
		
		
        return view('index')->with(['msg' => 'resultado', 'partida' => $partida, 'chegada' => $chegada, 'custo' => $custo, 'distancia' => $distancia_dos_pontos]);
    }
	


}
