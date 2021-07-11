<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Vereador;
use App\Diretor;
use App\Leis;

class HomeController extends Controller
{
    
    public function index(){

        

        return view ('site.home');
    }
    public function contato(){
        
        return view ('site.contato');
    }

    public function vereadores(){
        $vereadores = Vereador::paginate(10);

        return view('site.vereadores', [
            'vereadores' =>$vereadores

        ]);
    }

    public function mesa(){
        $diretores = Diretor::paginate(10);

        return view('site.mesa', [
            'diretores' =>$diretores

        ]);
    }

    public function leis(){
        $leis = Leis::paginate(10);

        return view('site.leis',[
            'leis' =>$leis
        ]);
    }
    
}
