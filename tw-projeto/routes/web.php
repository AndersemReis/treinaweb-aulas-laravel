<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/servico/{id}', function (int $id) {
    $servico = [
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
    echo $servico[$id]['nome'];
    echo "<br>";
    echo $servico[$id]['descricao'];

});

route::get('/saudacao/{nome?}', function( string $nome = 'Treinaweb'){
    echo "ola $nome";
});
