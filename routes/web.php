<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //return Post::find(2);

    return view('index',[
        'nome'=>'Artigo',
        'posts'=>Post::all()
    ]);
    
});

Route::get('/{post}', function ($slug) {

    return view('show',[
        'numero' => $slug,
        'nome' => 'Artigo',
        'post' => Post::find($slug)
    ]);


    /*
    $caminho=__DIR__ . "/../resources/posts/{$slug}.html";

    if(! file_exists($caminho))
    {
        dd('Não Existe!!!');
    }

    $post = cache()->remember("posts.{$slug}", now()->addMinutes(5), function () use ($caminho){
        
        return file_get_contents($caminho);

    });
        
    return view('show',[
        'numero' => $slug,
        'nome' => 'Artigo',
        'post' => $post
    ]);
    */

})->where('slug', '[0-9]');