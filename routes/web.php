<?php

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
    $helloWorld = 'Hello World';

    return view('welcome', compact('helloWorld'));
});

Route::get('/model', function() {
    //$products = \App\Product::all(); //select * from products

    //$user = new \App\User();
    //$user = \App\User::find(1);
    //$user->name = 'Usuário Teste Editado...';

    //$user->save();
    //return

	//\App\User::all() - retorna todos os usuários
	//\App\User::find(3) - retorna o usuário com base no id
	//\App\User::where('name', 'Christelle Stiedemann')->get()// select * from users where name = 'Christelle Stiedemann'
    //\App\User::paginate(10); - paginar dados com laravel
    
    //Mass Assignment - Atribuição em Massa
    /*$user = \App\User::create([
        'name' => 'Nanderson Castro',
        'email' => 'email100@email.com',
        'password' => bcrypt('123345566')
    ]);
    dd($user);*/

    //Mass Update
    /*$user = \App\User::find(42);
    $user->update([
        'name' => 'Atualizando com Mass Update'
    ]);*/ //true ou false

    return \App\User::all();
});