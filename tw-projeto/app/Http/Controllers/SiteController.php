<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('home');
    }

    public function sobre(){
        echo 'mostrando sobre';
    }

    public function servicos(){
        echo 'mostrando serviços';
    }

    public function servico(int $id) {
        $servicos = [
            1=> [
                'nome' => 'Lavagem de urso',
                'descricao' => 'Descriçao muito longa'
            ],
            2=> [
                'nome' => 'Lavagem de Cobertor',
                'descricao' => 'Descriçao muito longa'
            ],
            3=> [
                'nome' => 'Lavagem de Lençol',
                'descricao' => 'Descriçao curta'
            ],
        ];
        return view('servico', [
            'servico'=> $servicos[$id]
        ]);
    }

   
}
