<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| 
Aqui é onde você pode registrar rotas da web para seu aplicativo. Estes
| rotas são carregadas pelo RouteServiceProvider dentro de um grupo que
| contém o grupo de middleware "web". Agora crie algo ótimo!
|
*/

Route::get('/', function () {
    return view('welcome');
   // return view('teste');
});
// rota para chamar controller que poderá abrir diversas paginas de acordo com a função delas
Route::resource('product','ProdutoController');

Route::resource('meucontrole','MeuController');

/*    rota para minha pagina diretamente para a view       */
/*Route::get('/minha/nossa', function () {
    return view('teste');
});*/