<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class JogarController extends Controller
{
    public function index(Request $request){

        if($request->has('_token')){

            $emailSession = session('email');

            $saldo = DB::table('appconfig')
            ->where('email',$emailSession)
            ->value('saldo');
    
            $multiplicador = DB::table('app')
            ->value('multiplicador');
            
            $token = $request->_token ?  $request->_token : 0;
            $aposta = $request->bet ? $request->bet : 0; 
            $jogo = "Real";
            $email = $emailSession || 0;

            return view("jogar.index", compact('aposta', 'token', 'saldo', 'multiplicador', 'jogo', 'email', 'emailSession'));
        }

        $emailSession = session('email');
        $saldo = 10;
        $email = $emailSession || 0;
        $multiplicador = DB::table('app')
            ->value('multiplicador');

        $token = $request->_token ?  $request->_token : 0;
        $aposta = $request->bet ? $request->bet : 0; 
        $jogo = "Demo";

        return view("jogar.index", compact('aposta', 'token', 'saldo', 'multiplicador', 'jogo', 'email', 'emailSession'));
        
    }
}
