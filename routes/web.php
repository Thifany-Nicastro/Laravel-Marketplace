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
})->name('home');

Route::get('/model', function () {
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
    ]);*///true ou false

    //Como eu faria para pegar a loja de um usuário
    /*$user = \App\User::find(4);
    return $user->store;
    dd($user->store());
    dd($user->store()->count());*///O objeto único (Store) se for Collection de Dados(Objetos)

    //Pegar os produtos de uma loja?
    /*$loja = \App\Store::find(1);
    return $loja->products;
    dd($loja->products());
    return $loja->products->count();
    return $loja->products()->where('id', 6)->get();*/

    //Pegar as lojas de uma categoria de uma loja?
    //$categoria = \App\Category::find(1);
    //$categoria->products;

    //Criar uma loja para um usuário
    /*$user = \App\User::find(10);
    $store = $user->store()->create([
    'name' => 'Loja Teste',
    'description' => 'Loja Teste de produtos de informática',
    'mobile_phone' => 'XX-XXXXX-XXXX',
    'phone' => 'XX-XXXXX-XXXX',
    'slug'  => 'loja-teste'
    ]);
    dd($store);*/

    //Criar um produto para uma loja
    /*$store = \App\Store::find(41);
    $product = $store->products()->create([
    'name' => 'Notebook Dell',
    'description' => 'CORE I5 10GB',
    'body' => 'Qualquer coisa...',
    'price' => 2999.90,
    'slug' => 'notebook-dell',
    ]);
    dd($product);*/

    //Criar uma categoria
    /*\App\Category::create([
    'name' => 'Games',
    'slug' => 'games'
    ]);
    \App\Category::create([
    'name' => 'Notebooks',
    'slug' => 'notebooks'
    ]);
    return \App\Category::all();*/

    //Adicionar um produto para uma categoria ou vice-versa
    /*$product = \App\Product::find(46);
    dd($product->categories()->attach([1]));
    dd($product->categories()->detach([1]));
    dd($product->categories()->sync([2]));*/

    $product = \App\Product::find(46);
    return $product->categories;

    //return \App\User::all();
});

Route::group(['middleware' => ['auth']], function () {

    Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function () {

        /*Route::prefix('stores')->name('stores.')->group(function () {

        Route::get('/', 'StoreController@index')->name('index');
        Route::get('/create', 'StoreController@create')->name('create');
        Route::post('/store', 'StoreController@store')->name('store');
        Route::get('/{store}/edit', 'StoreController@edit')->name('edit');
        Route::post('/update/{store}', 'StoreController@update')->name('update');
        Route::get('/destroy/{store}', 'StoreController@destroy')->name('destroy');

        });*/

        Route::resource('stores', 'StoreController');
        Route::resource('products', 'ProductController');

    });

});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
